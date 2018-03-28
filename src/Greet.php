<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/28
 * Time: 17:54
 */
namespace wsx\greet;

use Hanson\Vbot\Extension\AbstractMessageHandler;
use Illuminate\Support\Collection;

class Greet extends AbstractMessageHandler
{
    public $name = "greet";
    public $zhName = "入群欢迎语";
    public $author = "wxs";
    public $version = "1.0";

    public static $status = true;

    public function register()
    {
        // TODO: Implement register() method.
    }

    public function handler(Collection $collection)
    {
        if ($collection['type'] === 'group_change') {
            switch ($collection['action']){
                case "ADD" :
                    Text::send($collection['from']['UserName'], '欢迎新人 '.$collection['invited'].PHP_EOL.'邀请人：'.$collection['inviter']);
            }
        }
    }

}