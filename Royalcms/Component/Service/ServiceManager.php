<?php


namespace Royalcms\Component\Service;


class ServiceManager
{

    protected $handles = [];


    public function __construct()
    {

    }

    /**
     * @param $tag
     * @param $handle
     */
    public function addService($tag, $app, $handle)
    {
        $this->handles[$tag][][$app] = $handle;
    }


}