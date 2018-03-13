<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soap_Model extends CI_Model{

		function __construct(){
			parent::__construct();
			/*codes here*/
		}

		public function convert($a,$b){
			$client = new SoapClient('http://www.webservicex.com/CurrencyConvertor.asmx?wsdl');
			$data = $client->ConversionRate(array('FromCurrency'=>$a,'ToCurrency'=>$b))->ConversionRateResult;
			return $data;
		}

		public function convert2($a,$b,$c){
			$client = new SoapClient('http://globalcurrencies.xignite.com/xGlobalCurrencies.asmx?WSDL');
			
			$param = array(
				"From" => $a,
				"To" => $b,
				"Amount" => $c
			);

			$xignite_header = new SoapHeader('http://www.xignite.com/services/',
     "Header", array("Username" => "AF4FE65E138E4113B340284717DE4391"));
			$client->__setSoapHeaders(array($xignite_header));

			$result = $client->ConvertRealTimeValue($param)->ConvertRealTimeValueResult;

			/*$data = $client->ConversionRate(array('FromCurrency'=>$a,'ToCurrency'=>$b))->ConversionRateResult;*/
			return $result;
		}

		public function convert3($a,$b,$c,$d){
			$client = new SoapClient('http://currencyconverter.kowabunga.net/converter.asmx?WSDL');
			$data = $client->GetConversionAmount(array('CurrencyFrom'=>$a,'CurrencyTo'=>$b,'RateDate'=>$c,'Amount'=>$d))->GetConversionAmountResult;
			return $data;
		}
	}
?>