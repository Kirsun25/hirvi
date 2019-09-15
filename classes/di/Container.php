<?php


namespace di;


class Container
{
    protected $objects = [];

    /**
     * @param string $service_name
     * @param array $config
     * @throws
     * @return bool
     * $config = [
     *  'class' => 'название класса'
     *  0 => 'первый аргумент в конструктор'
     *  1 => 'второй аргумент в конструктор'
     * ]
     */
    public function set(string $service_name, array $config)
    {

        if(!array_key_exists('class', $config)){
            throw new \Exception('Не указан класс для связывания');
        }
        $class = new \ReflectionClass($config['class']);
        unset($config['class']);
        $this->objects[$service_name] = $class->newInstanceArgs($config);
        return true;
    }

    /**
     * @param string $service_name
     * @return bool
     */
    public function has(string $service_name)
    {
        return array_key_exists($service_name,$this->objects);
    }

    /**
     * @param $service
     * @return mixed
     * @throws \Exception
     */
    public function get($service)
    {
        if($this->has($service)){
            return $this->objects[$service];
        }
        throw new \Exception('Запрошенный объект не установлен');
    }

}