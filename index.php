<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function avgTemp()
    {
        $tempOverDays = [21.5, 22.1, 20.8, 23.4, 22.7, 21.9, 24.2];
        $total = 0;
        $measurementCount = count($tempOverDays);
        $average = $total / $measurementCount;

        foreach ($tempOverDays as $tempOverDay) {
            $total += $tempOverDay;
        }

        echo $average;


    }
    avgTemp();
    ?>
</body>
</html>