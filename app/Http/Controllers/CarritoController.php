<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Detalle_Producto;
use App\Datos;
use App\Pedido;
use Redirect;
use Paypal;
use Openpay;
use Exception;
use OpenpayApiError;
use OpenpayApiAuthError;
use OpenpayApiRequestError;
use OpenpayApiConnectionError;
use OpenpayApiTransactionError;


class CarritoController extends Controller
{

    private $_apiContext;


    public function __construct(){
      if(!\Session::has('carrito')) \Session::put('carrito', array());

      $this->_apiContext = PayPal::ApiContext(
        config('services.paypal.client_id'),
        config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode' => 'sandbox',
            'service.EndPoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'
        ));
    }

    public function show(){
      $carrito = \Session::get('carrito');
      return view('carrito.canasta', compact('carrito'));
    }

    public function add(Producto $product){
      $carrito = \Session::get('carrito');
      $product->quantity = 1;
      $carrito[$product->id] = $product;
      \Session::put('carrito', $carrito);

      return redirect()->route('carrito-show');
    }

    public function delete(Producto $product){

      $carrito = \Session::get('carrito');
      unset($carrito[$product->id]);
      \Session::put('carrito', $carrito);

      return redirect()->route('carrito-show');
    }

    public function perfil(){
      $carrito = \Session::get('carrito');
      $id_auth = Auth::user()->id;
      $dato = Datos::where('id_usuario', $id_auth)->first();
      $total = $this->total();

      return view('carrito.perfil', compact('dato', 'carrito', 'total'));
    }

    public function updateCantidad(Producto $product, $quantity){
        $carrito = \Session::get('carrito');
        $carrito[$product->id]->quantity = $quantity;
        \Session::put('carrito', $carrito);

        return redirect()->route('carrito-show');
    }

    public function addDatos(Request $request){

      $carrito = \Session::get('carrito');

      $datos = new Datos();
      $datos->nombre = $request->nombre;
      $datos->ape_Paterno = $request->ape_Paterno;
      $datos->ape_Materno = $request->ape_Materno;
      $datos->telefono = $request->telefono;
      $datos->edad = $request->edad;
      $datos->calle = $request->calle;
      $datos->ciudad =  $request->ciudad;
      $datos->colonia = $request->colonia;
      $datos->alcaldia = $request->alcaldia;
      $datos->codigoPostal = $request->codigoPostal;
      $datos->id_usuario = Auth::user()->id;
      $datos->save();

      return redirect()->route('perfil');
    }

    public function pagoTarjeta(Request $request){
      try {
        $carrito = \Session::get('carrito');

        $openpay = Openpay::getInstance('m5hpvqspwexkntjy2ozl', 'sk_9d92755efa6043028528bd9d12119141');

        $id_auth = Auth::user()->id;
        $dato = Datos::where('id_usuario', $id_auth)->first();


        $customer = array(
          'name' => $dato->nombre,
          'last_name' => $dato->ape_Paterno,
          'phone_number' => $dato->telefono,
          'email' => Auth::user()->email,
        );

        $chargeData = array(
          'method' => 'card',
          'source_id' => $request->token_id,
          'amount' => $this->total(),
          'description' => 'Pago de celulares',
          'device_session_id' => $request->deviceIdHiddenFieldName,
          'customer' => $customer,
        );

        $charge = $openpay->charges->create($chargeData);

        if ($charge->status == 'completed') {
          $pedido = new Pedido();
          $pedido->id_usuario = $dato->id;
          $pedido->status = $charge->status;
          $pedido->total = $this->total();
          $pedido->save();

          $ped = Pedido::where('id_usuario', $dato->id)->get()->last();

          foreach ($carrito as $item) {
            $detProd = new Detalle_Producto();
            $detProd->id_pedido = $ped->id;
            $detProd->id_producto = $item->id;
            $detProd->cantidad = $item->quantity;
            $detProd->total = $item->precio * $item->quantity;
            $detProd->save();
          }

          \Session::forget('carrito');

          return redirect()->route('perfil')
                           ->with('success', 'El pago de tu producto se realizo exitosamente.');
        }

      } catch (OpenpayApiTransactionError  $e) {
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      } catch (OpenpayApiRequestError $e){
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      } catch (OpenpayApiConnectionError $e){
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      } catch (OpenpayApiAuthError $e){
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      } catch (OpenpayApiError $e){
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      } catch (Exception $e){
        return redirect()->route('perfil')
                          ->with('error', $e->getMessage());
      }
    }

    public function getCheckout(Request $request){

      $carrito = \Session::get('carrito');

      $payer = PayPal::Payer();
      $payer->setPaymentMethod('paypal');

      foreach ($carrito as $itemC) {
        $item = PayPal::item();
        $item->setName($itemC->nombre.$itemC->modelo)
             ->setDescription($itemC->descripcion)
             ->setCurrency('MXN')
             ->setQuantity($itemC->quantity)
             ->setPrice($itemC->precio * $itemC->quantity);
      }

      $itemList = PayPal::itemList();
      $itemList->setItems(array($item));

      $amount = PayPal::Amount();
      $amount->setCurrency('MXN')
             ->setTotal($this->total());

      $transaction = PayPal::Transaction();
      $transaction->setAmount($amount);
      $transaction->setItemList($itemList);
      $transaction->setDescription("Procotel");


      $redirectUrls = PayPal::RedirectUrls();
      $redirectUrls->setReturnUrl(route('getDone'));
      $redirectUrls->setCancelUrl(route('getCancel'));

      $payment = PayPal::Payment();
      $payment->setIntent('sale');
      $payment->setPayer($payer);
      $payment->setRedirectUrls($redirectUrls);
      $payment->setTransactions(array($transaction));

      try {
        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;
        return Redirect::to($redirectUrl);
      } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode(); // Prints the Error Code
        echo $ex->getData(); // Prints the detailed error message
        die($ex);
      }




    }

    public function getDone(Request $request){

      $carrito = \Session::get('carrito');


      $id = $request->get('paymentId');
      $token = $request->get('token');
      $payer_id = $request->get('PayerID');

      if (empty($token) || empty($payer_id)) {
        return redirect('perfil')->with('error','No se pudo realizar el pago.');
      }

      $payment = PayPal::getById($id, $this->_apiContext);
      $paymentExecution = PayPal::PaymentExecution();

      $paymentExecution->setPayerId($payer_id);
      $executePayment = $payment->execute($paymentExecution, $this->_apiContext);
      $status = $executePayment->getState();



      $id_auth = Auth::user()->id;
      $dato = Datos::where('id_usuario', $id_auth)->first();

      if ($status == 'approved') {
        $pedido = new Pedido();
        $pedido->id_usuario = $dato->id;
        $pedido->status = $status;
        $pedido->total = $this->total();
        $pedido->save();

        $ped = Pedido::where('id_usuario', $dato->id)->get()->last();

        foreach ($carrito as $item) {
          $detProd = new Detalle_Producto();
          $detProd->id_pedido = $ped->id;
          $detProd->id_producto = $item->id;
          $detProd->cantidad = $item->quantity;
          $detProd->total = $item->precio * $item->quantity;
          $detProd->save();
        }

        \Session::forget('carrito');

        return redirect()->route('perfil')
                         ->with('success', 'El pago de tu producto se realizo exitosamente.');
      }
    }

    public function getCancel(){
        return redirect()->route('perfil')
                         ->with('error','No se pudo realizar el pago.');

    }



    private function total(){
        $carrito = \Session::get('carrito');
        $total = 0;

        if (empty($carrito)) {
          return $total;
        }else {
          foreach ($carrito as $item) {
            $total += $item->precio * $item->quantity;
          }
          return $total;
        }
    }
}
