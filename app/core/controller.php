<?php
namespace news\core;
use Dcblogdev\PdoWrapper\Database as Database;

class controller
{
    // this lochione folder viwes
  
    public function view($path,$parm)
    {
        extract($parm);
        require_once(VIEWS.$path.".php");
    }
}