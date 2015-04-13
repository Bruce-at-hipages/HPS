<?php
/**
 * sample API...
 */
namespace HAPI;

class Api
{
    /**
     * get foo
     * @return mixed|string
     */
    public function getFoo()
    {
        return json_encode([
            'message' => 'bar',
            'type' => 'get'
        ]);

    }

    /**
     * post foo
     * @return mixed|string
     */
    public function postFoo()
    {
        return json_encode([
            'message' => 'bar',
            'type' => 'get'
        ]);

    }

}
