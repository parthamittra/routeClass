<?php

require __DIR__.'/vendor/autoload.php';
use App\Classes\Request;
use App\Classes\Route;


$r=new Request("GET","/patients");
$r2= new Request("GET","/patients/2");
$r3=new Request("POST","/patients");
$r4=new Request("PATCH", "/patients/2");
$r5=new Request("DELETE","/patients/2");




echo "\n";
echo Route::resource($r);
echo "\n";
echo Route::resource($r2);
echo "\n";
echo Route::resource($r3);
echo "\n";
echo Route::resource($r4);
echo "\n";
echo Route::resource($r5);

$rm=new Request("GET","/patients/2/metrics");
$rm2= new Request("GET","/patients/2/metrics/abc");
$rm3=new Request("POST","/patients/2/metrics");
$rm4=new Request("PATCH", "/patients/2/metrics/abc");
$rm5=new Request("DELETE","/patients/2/metrics/abc");

echo "\n";
echo Route::resource($rm);
echo "\n";
echo Route::resource($rm2);
echo "\n";
echo Route::resource($rm3);
echo "\n";
echo Route::resource($rm4);
echo "\n";
echo Route::resource($rm5);

?>
