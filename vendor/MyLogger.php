<?php


class MyLogger
{
  private $log_file;

  function __construct($log_file){
    $this->log_file = $log_file;
  }
  function info($message){
    file_put_contents($this->log_file, date('Y-m-d H:i:s').' INFO: '.$message.PHP_EOL, FILE_APPEND);
  }
  function error($message){
    file_put_contents($this->log_file,date('Y-m-d H:i:s').' ERROR: '.$message.PHP_EOL, FILE_APPEND);
  }
}





