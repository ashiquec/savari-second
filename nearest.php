<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <section class="banner">
                <div class="col-md-12">
                    <div class="banner-info">
                         <h2 class="heading-banner text-capitalize">Hi. I'm <span>Ashique.</span></h2>
                        <p class=" mt-3">Integer porttitor <span>mollisar </span>lorem, at molestie arcu pulvinar ut. Proin ac fermentum est.
                        Cras mi ipsum, consectetur. Integer at tellus in ex iaculis accumsan nec tristique justo. Aliquam dapibus iaculis enim,
                        a dapibus nibh convallis scelerisque.</p>
                        
                    </div>
                </div>
            </section>

</body>
</html>

<?php
require_once("connection.php");
$response = array("error" => FALSE);
 
$stmt=$conn->query("SELECT * FROM nearest_driver  ");
$detailsres=$stmt->fetchAll(); 
$use=array();
$response["drv_id"]=array();


foreach($detailsres as $res){

$use['name']=$res['drv_name'];
$use['distance']=$res['drv_distance'];
$use['rating']=$res['drv_rating'];
array_push($response["drv_id"],$use);
}
     if (!$detailsres) {
        $response["error"] = TRUE;
        $response["msg"] = "error occur";
        echo json_encode($response);
    } else {
        print json_encode($response);
           
    }


?> 