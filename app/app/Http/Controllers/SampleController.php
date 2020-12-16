<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SampleController extends Controller
{
    public function statget(){
        $url = storage_path() . '\app\public\statdata';
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        //$ret = json_decode( $json , false );
        //return $ret;
        return $json;
    }

    public function place(Request $req)
    {   
        
        $client = $req->input('client');
        $ssid = $req->input('ssid');

        //storageのurlをとってくる。
        $url = storage_path() . '\app\public\statdata';
        //$jsonにまるごととってくる。
        $json = file_get_contents($url);
        //UTF8に変換
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        //json文字列をphp配列に変換。
        
        $statjson = json_decode($json, true);
        
        //ログ書き出し
        //\Log::debug(print_r($statjson, true));
        
        //受信したssidから対応する部屋名を取得
        $roomname = $statjson["clientstat"][$client];

        //受信したclient名がいる部屋の人数を減らす。
        $num = --$statjson["roomnumber"][$statjson["clientstat"][$client]];

        //人数によってクラス制御用roomstatを書き換える。
        if($num <= 0){
            $statjson["roomstat"][$roomname] = "empty";
        }
        else if($num <= 1){
            $statjson["roomstat"][$roomname] = "some";
        }
        else if($num <= 2){
            $statjson["roomstat"][$roomname] = "many";
        }
        else{
            $statjson["roomstat"][$roomname] = "full";
        }
        //受信したssidから対応する部屋名を取得
        $roomname = $statjson["ssidstat"][$ssid];
        //取得した部屋名を受信したclient名に代入
        $statjson["clientstat"][$client] = $roomname;
        //取得した部屋名の人数を増やす。
        $num = ++$statjson["roomnumber"][$roomname];

        //人数によってクラス制御用roomstatを書き換える。
        if($num <= 0){
            $statjson["roomstat"][$roomname] = "empty";
        }
        else if($num <= 1){
            $statjson["roomstat"][$roomname] = "some";
        }
        else if($num <= 2){
            $statjson["roomstat"][$roomname] = "many";
        }
        else{
            $statjson["roomstat"][$roomname] = "full";
        }

        header("Content-Type: text/javascript; charset=utf-8");

        //ログ書き出し
        //\Log::debug(print_r($statjson, true));

        // 配列をJSON形式に変換してくれる json_encode()
        //それをファイルに書き出す。
        Storage::disk('public')->put('statdata',json_encode($statjson, JSON_PRETTY_PRINT));
        return true;
    }

    public function download(){
            $archivePath = "data/";
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="'.basename("data/Setup1.msi").'"');
            header('Content-Length: ' . filesize("data/Setup1.msi"));
            echo file_get_contents("data/Setup1.msi");
    }    
}
