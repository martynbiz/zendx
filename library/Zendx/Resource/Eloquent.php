<?php

/**
 * Resource for using eloquent in Zend
 */
class Zendx_Resource_Eloquent extends Zend_Application_Resource_ResourceAbstract
{
    /**
     * @var Validator
     */
    protected $validator;

    public function init()
    {
        $options = $this->getOptions();

        $capsule = new Illuminate\Database\Capsule\Manager;

        $capsule->addConnection(array(
            'driver'    => $options['driver'],
            'host'      => $options['host'],
            'database'  => $options['dbname'],
            'username'  => $options['username'],
            'password'  => $options['password'],
            'charset'   => $options['charset'],
            'collation' => $options['collation'],
            'prefix'    => $options['prefix'],
        ));

        $capsule->bootEloquent();
    }
}
