<?php
/**
 * Created by PhpStorm.
 * User: cmk
 * Date: 2017/1/24
 * Time: 6:57
 */

namespace IMooc;


class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo '2014新款女装';
    }

    function showCategory()
    {
        echo '女装';
    }
}