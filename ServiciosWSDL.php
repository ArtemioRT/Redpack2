<?php

namespace App\Service;

use SoapClient;
use App\Service\Guia;
use App\Service\IdDesc;

class ServiciosWSDL
{

    private $cliente;
    private $idusuario;
    private $pin;
    public $error;
    public $merror;


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function __construct() {
        try {

            //$this->cliente = new SoapClient("https://ws.redpack.com.mx/RedpackAPI_WS/services/RedpackWS?wsdl",array('exceptions' => true,'cache_wsdl'=>WSDL_CACHE_NONE,'soap_version' => SOAP_1_2)); //PROD <- cache_wsdl : sin cache...
            $this->cliente = new SoapClient("https://wsqa.redpack.com.mx/RedpackAPI_WS/services/RedpackWS?wsdl",array('exceptions' => true,'cache_wsdl'=>WSDL_CACHE_NONE,'soap_version' => SOAP_1_2 )); //QA

        } catch (\SoapFault $e) {
            $this->error = 1;
            $this->merror = "Error al inicializar los servicios web ( ".$e->getMessage()." )";
            return;                                       
        }        
        $this->idusuario = 0;
        $this->pin = "";
        $this->error = 0;
   }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setidusuario(int $idusuario): self
    {
        $this->idusuario = $idusuario;

        return $this;
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setPin(string $pin): self
    {
        $this->pin = $pin;

        return $this;
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function bcodpostal($codpostal)
{
    $guia= new Guia;
    $guia->setflag(0);

    $dir2 = new Direccion;
    $dir2 -> setcodigoPostal($codpostal);
    $guia -> setremitente($dir2);

    //$param=self::parametros;
    $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
    $param["idUsuario"] = $this->idusuario;        
    $param['guias'] = $guia;

    $response = $this->cliente->busquedaCodigoPostal($param)->return;

    return $response;

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function Documentacion($g,$paqs,$claveclienterp,$tipoetiqueta)
{
    $guia= new Guia;

    $guia->setflag($tipoetiqueta);
    // VALORES PARA FLAG
    //0 - PDF - Formato etiqueta de 4 por 6 pulgadas
    //1 - Sin etiqueta - Documenta datos no devuelve formato
    //2 - Zebra - Formato ZPL para impresión en impresora Zebra en etiqueta 4 por 6 pulgadas
    //3 - PDF - Formato etiqueta imprime texto de contenido código d barras
    //4 - PDF - Formato etiqueta segunda imprime referencia
    //5 - PDF - Formato tamaño carta

    $guia->setmoneda($claveclienterp);
    // AQUI VA LA CLAVE DEL CLIENTE EN LOS SISTEMAS REDPACK (ID CLIENTE RADAR)

    $guia->settipoIdentificacion("CUL");

    $guia->setNumeroDeGuia($g->getnumguia());
    $guia->setObservaciones($g->getobservaciones());
    $guia->setReferencia($g->getreferencia());

    $dir = new Direccion;
    $tel1 = new Telefono;
    $tel2 = new Telefono;
    $dir -> setcalle($g->getRemitente()->getcalle());
    $dir -> setciudad($g->getRemitente()->getciudad());
    $dir -> setcodigoPostal($g->getRemitente()->getcodpostal());
    $dir -> setcolonia_Asentamiento($g->getRemitente()->getcolonia());

    if ($g->getcontactorem()!==null) {
        $dir -> setcontacto($g->getcontactorem()->getcontacto());
        $dir -> setemail($g->getcontactorem()->getemail());
    } else {
        $dir -> setcontacto($g->getotrocontactorem());
        $dir -> setemail($g->getotroemailrem());
    }

    $dir -> setestado($g->getRemitente()->getestado());
    $dir -> setnombre_Compania($g->getRemitente()->getcompania());
    $dir -> setnumeroExterior($g->getRemitente()->getnumexterior());
    $dir -> setnumeroInterior($g->getRemitente()->getnuminterior());
    $dir -> setpais($g->getRemitente()->getpais());
    $dir -> setreferenciaUbicacion($g->getRemitente()->getreferenciaubicacion());
    $tel1 -> settelefono($g->getRemitente()->gettelefono1());
    $tel2 -> settelefono($g->getRemitente()->gettelefono2());
    $dir -> settelefonos(array($tel1,$tel2));
    $guia->setremitente($dir);

    $dir2 = new Direccion;
    $tel12 = new Telefono;
    $tel22 = new Telefono;
    $dir2 -> setcalle($g->getdestinatario()->getcalle());
    $dir2 -> setciudad($g->getdestinatario()->getciudad());
    $dir2 -> setcodigoPostal($g->getdestinatario()->getcodpostal());
    $dir2 -> setcolonia_Asentamiento($g->getdestinatario()->getcolonia());

    if ($g->getcontactod()!==null) {
        $dir2 -> setcontacto($g->getcontactod()->getcontacto());
        $dir2 -> setemail($g->getcontactod()->getemail());
    } else {
        $dir2 -> setcontacto($g->getotrocontactod());
        $dir2 -> setemail($g->getotroemaild());
    }

    $dir2 -> setestado($g->getdestinatario()->getestado());
    $dir2 -> setnombre_Compania($g->getdestinatario()->getcompania());
    $dir2 -> setnumeroExterior($g->getdestinatario()->getnumexterior());
    $dir2 -> setnumeroInterior($g->getdestinatario()->getnuminterior());
    $dir2 -> setpais($g->getdestinatario()->getpais());
    $dir2 -> setreferenciaUbicacion($g->getdestinatario()->getreferenciaubicacion());
    $tel12 -> settelefono($g->getdestinatario()->gettelefono1());
    $tel22 -> settelefono($g->getdestinatario()->gettelefono2());
    $dir2 -> settelefonos(array($tel12,$tel22));
    $guia->setconsignatario($dir2);

    $cons=0;
    $apaq=array();
    foreach ($paqs as $p)
    {
        $cons=$cons+1;
        $paq = new Paquete;
        $paq->setlargo($p->getlargo());
        $paq->setancho($p->getancho());
        $paq->setalto($p->getalto());
        $paq->setpeso($p->getpeso());
        $paq->setconsecutivo($cons);
        $apaq[]=$paq; 
    }
    $guia->setpaquetes($apaq);

    $tipos= new idDesc;
    if ($g->gettipoentrega()==0) {
        $tipos->setid(2); // 1:Ocurre 2:Domicilio       
    } else {
        $tipos->setid(1); // 1:Ocurre 2:Domicilio
    }
    $guia->setTipoEntrega($tipos);

    $tipos= new idDesc;
    $tipos->setid(1); // 1:Paquete 2:Consolidado 5:Documento
    $guia->setTipoEnvio($tipos);

    $tipos= new idDesc;
    $tipos->setid($g->gettiposervicio()->getclaveapi()); //1: Express 2:Ecoexpress 4:Metropolitano 21:Dia siguiente 22:EcoExpress M.Pza 23:Dia Siguiente M.Pza
    $guia->setTipoServicio($tipos);

    $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
    $param["idUsuario"] = $this->idusuario;        
    $param['guias'] = $guia;

    try {
        $response = $this->cliente->Documentacion($param)->return;
    } catch (\SoapFault $e) {
        $this->error = 1;
        $this->merror = $e->getMessage();
        return;                                       
    }        

    return $response;
}  
//Documentacion

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function rastreo($g)
    {
        $guia= new Guia;
        $guia->setNumeroDeGuia($g);

        //$param=self::paramprod;
        //$param["PIN"] = "PROD ".$this->pin;
        $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
        $param["idUsuario"] = $this->idusuario;
        $param['guias'] = $guia;

        try {
            $respuesta = $this->cliente->rastreo($param)->return;
        } catch (\SoapFault $e) {
            $this->error = 1;
            $this->merror = $e->getMessage();
            return;                                       
        }        

        if (gettype($respuesta->resultadoConsumoWS)=="array") {
            $rws=$respuesta->resultadoConsumoWS[0]->estatus;
        } else {
            $rws=$respuesta->resultadoConsumoWS->estatus;
        }
        if ($rws==1) {

            if (!empty($respuesta->situacion->descripcion))
                $response=$respuesta->situacion->descripcion;
            else {

                if (gettype($respuesta->paquetes)=="array") 
                {
                    $paquetes=$respuesta->paquetes;
                } else {
                    $paquetes=array($respuesta->paquetes);
                }
                
                if (gettype($paquetes[0]->detallesRastreo)=="array") {
                    if (!empty($paquetes[0]->detallesRastreo[0]->evento)) {
                        $response=$paquetes[0]->detallesRastreo[0]->evento;
                    } else {
                        $response="";
                    }
                } else {
                    if (!empty($paquetes[0]->detallesRastreo->evento)) {
                        $response=$paquetes[0]->detallesRastreo->evento;
                    } else {
                        $response="";
                    }
                }

            }
        } else {
            $response=$rws;
        }
        return strtoupper($response);
    } // Rastreo

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function rastreocompleto($g)
    {

        $guia= new Guia;
        $guia->setNumeroDeGuia($g);

        $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
        $param["idUsuario"] = $this->idusuario;
        $param['guias'] = $guia;
        
        $response=array();
        try {
            $respuesta = $this->cliente->rastreo($param)->return;
        } catch (\SoapFault $e) {
            $this->error = 1;
            $this->merror = $e->getMessage();
            return "WS no disponibles";                                       
        }        

        if (gettype($respuesta->resultadoConsumoWS)=="array") {
            $rws=$respuesta->resultadoConsumoWS[0]->estatus;
        } else {
                $rws=$respuesta->resultadoConsumoWS->estatus;
        }
        if ($rws==1) {
            $response["fechadocumentacion"]=$respuesta->fechaDocumentacion;
            $response["fechaentregaestimada"]=$respuesta->moneda;
            $response["personaRecibio"]=$respuesta->personaRecibio;
            if ($respuesta->claveDex!=null) {
                $response["incidencias"]=$respuesta->claveDex->descripcion;
            } else {
                $response["incidencias"]="";
            }
            if (gettype($respuesta->paquetes)=="array") 
            {
                $response['paquetes']=$respuesta->paquetes;
            } else {
                $response['paquetes']=array($respuesta->paquetes);
            }
            if (!empty($respuesta->situacion->descripcion))
                $response["estatus"]=strtoupper($respuesta->situacion->descripcion);
            else {
            	if (gettype($response['paquetes'][0]->detallesRastreo)=="array") {
                	if (!empty($response['paquetes'][0]->detallesRastreo[0]->evento)) {
                    		$response["estatus"]=strtoupper($response['paquetes'][0]->detallesRastreo[0]->evento);
                	} else {
                    		$response["estatus"]="";
                	}
                } else {
                	if (!empty($response['paquetes'][0]->detallesRastreo->evento)) {
                    		$response["estatus"]=strtoupper($response['paquetes'][0]->detallesRastreo->evento);
                	} else {
                    		$response["estatus"]="";
                	}                
                }
            }
        } else {
            $response["estatus"]=strtoupper($rws);
        }

        $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
        try {
            $respruebaent = $this->cliente->pruebaEntrega($param)->return;
        } catch (\SoapFault $e) {
            $this->error = 1;
            $this->merror = $e->getMessage();
            return "WS no disponibles";        
        }        

        if (gettype($respruebaent->resultadoConsumoWS)=="array") {
            $rws=$respruebaent->resultadoConsumoWS[0]->estatus;
        } else {
            $rws=$respruebaent->resultadoConsumoWS->estatus;
        }
        if ($rws==1) {
            $response["pruebadeentrega"]=base64_encode($respruebaent->pruebaDeEnterga);
        } else {
            $response["pruebadeentrega"]="";
        }

        return $response;
    } // RastreoCompleto

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

public function CoberturaNacional($cpr,$cpc)
{

    $guia= new Guia;

    $dir1 = new Direccion;
    $dir1 -> setcodigoPostal($cpr);
    $guia -> setremitente($dir1);
    
    $dir2 = new Direccion;
    $dir2 -> setcodigoPostal($cpc);
    $guia -> setconsignatario($dir2);

    $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
    $param["idUsuario"] = $this->idusuario;        
    $param['guias'] = $guia;

    //dump("aqui");
    try {
        $response = $this->cliente->coberturaNacional($param)->return;
    } catch (\SoapFault $e) {
        $resultado[0]="No se puede revisar la cobertura. Llame a su ejecutivo...".$e->getMessage();
        $resultado[1]=false;        
        return $resultado;
    }

    if (gettype($response->resultadoConsumoWS)=="array") {
        $rws=$response->resultadoConsumoWS[sizeOf($response->resultadoConsumoWS)-1]->estatus;
    } else {
            $rws=$response->resultadoConsumoWS->estatus;
    }

    if ($rws!==1) {
        $resultado[0]=$rws;
        $resultado[1]=false;
    } else {
        if (gettype($response->cotizaciones)=="array")
        {
            foreach ($response->cotizaciones as $cobertura)
            {
                if ($cobertura->tipoServicio->descripcion=="EXPRESS" or $cobertura->tipoServicio->descripcion=="ECOEXPRESS") {
                    $resultado[0]=$cobertura->descripcion;
                    $resultado[1]=true;
                    break;
                }
            }
        } else {
            $resultado[0]="No se puede revisar la cobertura. Llame a su ejecutivo...";
            $resultado[1]=false;
        }

    }

    return $resultado;

} // cobertura

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function RecuperaEtiqueta($g)
    {
        $guia= new Guia;
        $guia->setNumeroDeGuia($g);

        $param["PIN"] = $_ENV['PREFIJOWS']." ".$this->pin;
        $param["idUsuario"] = $this->idusuario;
        $param['guias'] = $guia;

        try {
            $respuesta = $this->cliente->generaEtiquetaLogistica($param)->return;
        } catch (\SoapFault $e) {
            $this->error = 1;
            $this->merror = $e->getMessage();
            return;                                       
        }        

        if (gettype($respuesta->resultadoConsumoWS)=="array") {
            $rws=$respuesta->resultadoConsumoWS[0]->estatus;
        } else {
                $rws=$respuesta->resultadoConsumoWS->estatus;
        }
        if ($rws==1) {

        }
        var_dump($respuesta);
    
        return $respuesta;

    } //RecuperaEtiqueta
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
echo "Hello World!";