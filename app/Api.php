<?php
/**
 * sample API...
 */
namespace HAPI;

use HPS\Dao\Base as DaoBase, HPS\Service\Base as ServiceBase;

class Api
{
    /**
     * get foo
     * @return mixed|string
     */
    public function getFoo()
    {
        $dao = new DaoBase();

        return json_encode([
            'message' => 'bar',
            'type' => 'get',
            'dao:bar' => $dao->bar()
        ]);

    }

    /**
     * post foo
     * @return mixed|string
     */
    public function postFoo()
    {
        $service = new ServiceBase();

        return json_encode([
            'message' => 'bar',
            'type' => 'get',
            'service:bar' => $service->bar()
        ]);

    }

}
