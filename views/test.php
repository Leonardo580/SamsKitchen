<?php
                include "../Controller/IngredientC.php";

                $rc=new IngredientC();
                $list=$rc->afficherIngredient();
                $s4=0;$s3=0;$s2=0;
                foreach($list as $l){
                    if ($l['rate']>=8) $s4++;
                    else if ($l['rate']>=5) $s3++;
                    else $s2++;
                }
                $dataPoints = array(
                    array("label"=>"Great", "y"=>(float)($s4/$list->rowCount())*100),
                    array("label"=>"Average", "y"=>(float)($s3/$list->rowCount())*100),
                    array("label"=>"bad", "y"=>(float)($s2/$list->rowCount())*100)
                )

                ?>
                <!DOCTYPE HTML>
                <html>
                <head>
                    <script>
                        window.onload = function() {


                            var chart = new CanvasJS.Chart("chartContainer", {
                                animationEnabled: true,
                                title: {
                                    text: "Food Rating "
                                },
                                subtitles: [{
                                    text: "April 2021"
                                }],
                                data: [{
                                    type: "pie",
                                    yValueFormatString: "#,##0.00\"%\"",
                                    indexLabel: "{label} ({y})",
                                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                                }]
                            });
                            chart.render();

                        }
                    </script>
                </head>
                <body>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




                <?php

include "../Controller/ReviewsC.php";

$rc=new ReviewsC();
$list=$rc->afficherreviews();
if (isset($_POST["sort"]))
    $list=$rc->sort();
?>