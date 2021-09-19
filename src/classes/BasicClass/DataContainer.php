<?php

namespace Pobratym\DevelopKit\BasicClass;

class DataContainer
{
    protected $_data = [];

    #region Magic methods

    protected function __construct(array $data)
    {
        $this->_data = $data;
    }

    /**
     * @param $name
     *
     * @return mixed|null
     */
    public function __get($name)
    {
        if (!isset($this->_data[$name]) && !property_exists($this, $name)) {
            return null;
        }

        return property_exists($this, $name)
            ? $this->$name
            : $this->_data[$name];
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->_data[$name] = $value;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function __isset($name)
    {
        return true;
    }

    /**
     * @param $name
     */
    public function __unset($name)
    {
        if (property_exists($this, $name)) {
            unset($this->$name);

            return;
        }

        unset($this->_data[$name]);
    }

    #endregion

    #region Builders

    /**
     * @param array $data
     *
     * @return static
     */
    public static function make(array $data = [])
    {
        $object = new static($data);

        return $object;
    }

    #endregion
}
