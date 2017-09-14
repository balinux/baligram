<?php

namespace Balinux\Message;

use GuzzleHttp\Client;


class Instagram
{


    public function getData()
    {
        $data   = app('guzzle')->request('GET','https://www.instagram.com/balinux/media/');
        $data   = json_decode((string)$data->getBody());
        $data   = (array) $data;
        return $data;
    }

    public function getName($name)
    {
        $data   = app('guzzle')->request('GET','https://www.instagram.com/'.$name.'/media/');
        $data   = json_decode((string)$data->getBody());
        $data   = (array) $data;
        return $data;
    }
}
