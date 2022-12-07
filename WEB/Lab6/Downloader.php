<?php

interface Downloader {
  public function download(string $url);
}

class SimpleDownloader implements Downloader 
{
  public function download(string $url)
  {
    echo "Download: $url\n";
  }
}

class DownloaderWithCache implements Downloader 
{
  private $cache = [];
  private $downloader;

  public function __construct(SimpleDownloader $downloader) { 
    $this->downloader = $downloader;
  }

  public function download(string $url)
  {
     if (isset($this->cache[$url])) {
            echo "Retrieve from cache: $url\n";
        } else {
            $this->downloader->download($url);
            $this->cache[$url] = $url;
        }
  }
}
