<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
<?php
  $tokenAcesso = '23a092b87f9db1073bd49af66e696891';

  $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_CUSTOMREQUEST => "GET",  
        CURLOPT_URL => 'http://www.grupojorlan.com.br/webservice/seminovos/v1/5',
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
          'Authorization: '.$tokenAcesso,
          'Content-Type: application/json'
        )
  ));

    $response = curl_exec($ch);

    if($response === FALSE){
        die(curl_error($ch));
    }

// DE ARRAY PARA XML
  function arrayToXml($array, $rootElement = null, $xml = null) {
  $_xml = $xml;

  if ($_xml === null) {
    $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root><root/>');
  }

  foreach ($array as $k => $v) {
    if (is_array($v)) { //nested array
      arrayToXml($v, $k, $_xml->addChild($k));
    } 
    else {
            $_xml->addChild($k, $v);
      }
    }
    return $_xml->asXML();
  }

  // our JSON string
  $str = $response;

    // decode json string to php array
    $array = json_decode($str,true);

    // call array to xml conversion function
    $xml = arrayToXml($array, '<dados></dados>');

    echo($xml);















      // $arrayJSON = json_decode($response, TRUE);






  //   $arrayJSON = json_decode($response, TRUE);
      // var_dump($arrayJSON);

// $test_array = array (
//   'bla' => 'div',
//   'foo' => 'div',
//   'another_array' => array (
//     'stack' => 'overflow',
//   ),
// );

// $xml = new SimpleXMLElement('<div/>');
// array_walk_recursive($test_array, array ($xml, 'addChild'));
// print $xml->asXML();

  // $seminovos = file_get_contents("seminovos.json");
  // $obj2 = json_decode( $json, true );
  // echo($obj2);

  // foreach ($ofertas->veiculo as $oferta)
  // {
  //   echo '
  //     <div class="'.$oferta->id.'"></div>
  //           ';
  // }

   // var_dump(json_decode($seminovos));
   // var_dump(json_decode($seminovos, true));
  // echo($seminovos);

?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
