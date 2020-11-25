<?php
    include_once 'model/catalog.php';
    include_once 'model/thongke.php';
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            $items=drawChart();
            $xe = drawChartXe();
            include 'view/thongke/index.php';
        break;
        case 'chart':
            $items=drawChart();
            include 'view/thongke/chart.php';
        break;
        case 'chartxe':
            $xe=drawChartXe();
            include 'view/thongke/chartxe.php';
        break;
        default:
        break;
    }
?>