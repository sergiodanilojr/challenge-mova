<?php 

namespace Core\Support;

class Config
{
    protected string $path;
    
    protected Collection $config;

    public function __construct(string $configFile)
    {
        $this->load($configFile);
    }

    /**
     * Método responsável por obter um dado da config através do seu índice
     * @param string $key
     * @return mixed
     */
    public function get(string $key):mixed
    {
        return $this->config->get($key);
    }

    public function has(string $key):bool
    {
        return $this->config->has($key);
    }

    /**
     * Método responsável por inserir um dado na config carregada
     * @param string $key
     * @return mixed
     */
    public function set(string $key, mixed $value)
    {
        return $this->config->set($key, $value);
    }

    /**
     * Método responsável por excluir um dado da config através do seu índice
     * @param string $key
     * @return void
     */
    public function delete(string $key):void
    {
        $this->config->delete($key);
    }

    /**
     * Efetua o carregamento do arquivo de configuração caso ele exista
     * @param string $path
     * @throws \Exception
     * @return void
     */
    protected function load(string $path):void
    {
       $path = $this->setPath($path).".php";

       if(!File::exists($path)){
         throw new \Exception("Config file not found in {$this->path}", 404);
       }


       if(! is_array($config = require($path))){
        throw new \Exception("Config config must be array", 404);
       }

       $this->config = new Collection($config);
    }

    /**
     * Limpa o caminho do arquivo de configuração, removendo pontos por separadores de diretório
     * @param string $path
     * @return string
     */
    protected function setPath($path):string
    {
        return $this->path = config_path() . DIRECTORY_SEPARATOR . preg_replace("/\./", DIRECTORY_SEPARATOR,mb_strtolower($path));
    }

}