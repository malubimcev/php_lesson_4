<?php
    $city = "Murmansk,ru";
    $userKey = "c75ecbe2264d2b9f9e34626b184ba756";//личный код пользователя OpenWeatherMap
    $request = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$userKey";
    $response = file_get_contents($request);//ответ сервера OpenWeatherMap
    $celsiusZero = 273.15;//температура 0 град. по Цельсию

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP_lesson_4</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <div class="container">
        <?php
            if($response){
                $weather_data = json_decode($response, true);
            } else {
                echo "Error";
                exit;
            }
            echo "<h1>Current weather in $city</h1>";
            foreach ($weather_data as $key => $data) {
                switch ($key) {
                    case "weather":
                        echo "Description: ".$data[0]['description']."<br>";
                        break;
                    case "main":
                        $celsius = $data['temp'] - $celsiusZero;
                        echo "Temperature: ".$celsius." <sup>o</sup>C<br>";
                        break;
                    case "wind":
                        echo "Wind speed: ".$data['speed']." m/s<br>";
                        break;
                }
            }
        ?>
        </div>
    </body>
</html>
