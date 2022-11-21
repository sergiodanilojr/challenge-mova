<?php 

namespace Core\Support;

class Collection
{
    protected array $collection;

    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * Método responsável por obter toda a coleção como um array
     * @return array
     */
    public function all():array
    {
        if(empty($this->collection)) return [];

        return $this->collection;
    }

    public function has(string $key)
    {
        return $this->keyExists($key);
    }

    /**
     * Método responsável por obter um dado da coleção através do seu índice
     * @param string $key
     * @return mixed
     */
    public function get(string $key):mixed
    {
        if(! $this->keyExists($key)) return null;

        return $this->collection[$key];
    }

    /**
     * Método responsável por inserir um dado na coleção carregada
     * @param string $key
     * @return mixed
     */
    public function set(string $key, mixed $value)
    {
        $this->collection[$key] = $value;
        return $this->collection;
    }

    /**
     * Método responsável por excluir um dado da coleção através do seu índice
     * @param string $key
     * @return void
     */
    public function delete(string $key):void
    {
        if(! $this->keyExists($key)) return;
        unset($this->collection[$key]);
    }

    /**
     * Método responsável validar a existência de um dado da coleção através do seu índice
     * @param string $key
     * @return bool
     */
    protected function keyExists(string $key):bool
    {
        return array_key_exists($key, $this->collection);
    }
    
}