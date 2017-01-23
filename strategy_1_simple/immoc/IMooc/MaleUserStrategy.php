<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/24
 * Time: 7:02
 */

namespace IMooc;



class MaleUserStrategy implements UserStrategy
{

  function showAd()
  {
     echo 'iphone6';
  }

  function showCategory()
  {
     echo '电子产品';
  }
}