<html>

<head>
    <style>
        table td {
            border:1px dotted black;
            padding:10px;
        }
    </style>
</head>
<body>
<?php

    require_once 'app/Mage.php';
    Mage::app('');

    $pst = Mage::getModel('core/date')->date();

    $edt = date("Y-m-d H:i:s", time());

    date_default_timezone_set('Europe/Berlin');
    $hamburg = date("Y-m-d H:i:s", time());

    date_default_timezone_set('UTC');
    $gmt = date("Y-m-d H:i:s", time());


    echo "<table><tr><td>PST (Magento Internal / Cron, CB Office)</td><td>Hamburg</td><td>EDT (Server)</td><td>GMT/UTC (Reference Time)</td></tr>";
    echo "<tr><td>$pst</td><td>$hamburg</td><td>$edt</td><td>$gmt</td></tr></table>";

    
?>
</body>
</html>