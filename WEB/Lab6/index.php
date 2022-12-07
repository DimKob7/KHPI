<?php

require_once 'Downloader.php';

$exampleUrl = "https://product_site.com/lib/about_product.avi";

echo "\nDownload without cache: \n";
$downloader = new SimpleDownloader();
$downloader->download($exampleUrl);

echo "\nDownload from cache: \n";
$proxy = new DownloaderWithCache($exampleUrl);
$proxy->download($exampleUrl);
