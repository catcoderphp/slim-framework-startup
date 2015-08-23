<?php require 'config/App.php';

$app = new App();
$app->get("/",function(){
    echo "Welcome to slim 2";
});

//call with ajax
$app->post("/sendData" , function() use ($app) {
    $request = $app->request();
    if(preg_match('/text\/plain/',$request->getContentType())) {
        try {
            $response = json_decode($request->getBody(),1);
            print_r($response);die;
        } catch (exception $e) {
            echo "Fuck off";
        }
    }
    print_r($request->post());
});

$app->run();
?>

