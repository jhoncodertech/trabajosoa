<?php

$wsdlUrl = "http://localhost/trabajo/wsdl.wsdl";

$options = array(
    'trace' => 1,
    'encoding' => 'UTF-8',
);

try {
  
    $client = new SoapClient($wsdl, $options);
    $params = array(
        'name' => 'John Doe',
    );

    $response = $client->hello($params);

    echo "Response from hello: " . $response->return . "\n";
} catch (SoapFault $e) {
    echo "SOAP Error: " . $e->getMessage() . "\n";
}
?>
