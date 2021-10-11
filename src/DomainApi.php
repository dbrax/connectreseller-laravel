<?php

namespace Epmnzava\ConnectresellerLaravel;

class DomainApi
{
  // Build your next great package.

  public   string $base_url = "https://api.connectreseller.com/ConnectReseller/ESHOP";



  public function domian_exists(string $domain)
  {

    $response = $this->check_availability($domain);

    $res = json_decode($response);

    if ($res->responseMsg->statusCode == 200)
      return false;
    else
      return true;
  }
  public function check_availability(string $domain_name)
  {

    $url = $this->base_url . "/checkDomain?APIKey=" . config("connectreseller-laravel.key") . "&websiteName=" . $domain_name;

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: 92f163f8-16f3-1fcf-7a06-6256fd08f4d0"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    }

    return $response;
  }

  public function domain_register(string $domain_name, string $duration, string $iswhoidprotection, string $ns1, string $ns2)
  {

    $url = $this->base_url . "/Order?APIKey=" . config("connectreseller-laravel.key") . "&ProductType=1&Websitename=" . $domain_name . "&Duration=". $duration ."&IsWhoisProtection=true&ns1=".$ns1."&ns2=" . $ns2 . "&Id=" ."33445";



    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: 92f163f8-16f3-1fcf-7a06-6256fd08f4d0"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    }


      $res = json_decode($response);

    if ($res->responseMsg->statusCode == 200)
      return ["status"=>true,"message"=>"Domain is registered successfully"];
    else
      return ["status"=>false,"message"=>"Domain failed to be registered"];
  }

  public function domain_transfer()
  {
  }

  public function cancel_transfer()
  {
  }

  public function domain_renew()
  {
  }

  public function search()
  {
  }
}
