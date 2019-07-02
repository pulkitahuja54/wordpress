
<?php /* Template Name: CustomPageT1 */ ?>
<?php
 
echo "Upcoming events";
require 'C:/composer/vendor/autoload.php';
use GuzzleHttp\Client;


$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://54.234.226.74/api/',
    // You can set any number of default request options.
    'timeout'  => 5.0,

]);

$response = $client->request('GET', '/events');
if ($response->getStatusCode() == 200)
{
 $json =$response->getBody()->getContents();

 print_r($json);
}
?>
