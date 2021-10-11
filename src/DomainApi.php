<?php

namespace Epmnzava\ConnectresellerLaravel;

class DomainApi
{
  // Build your next great package.

  public   string $base_url = "https://api.connectreseller.com/ConnectReseller/ESHOP";



   public function domian_exists(string domain){

   $response=check_availability(domain);

    $res=json_decode($response);

    if($res->responseMsg->statusCode==200)
      return true;
    else
      return false


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

    $url = $this->base_url . "/checkDomain?APIKey=" . config("connectreseller-laravel.key") . "&websiteName=" . $domain_name . "&ProductType=1Duration=" . $duration . "&IsWhoisProt
        ection=true&ns1=" . $ns1 . "&ns2=" . $ns2 . "&id=" . config("connectreseller-laravel.brand_id");

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
