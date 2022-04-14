<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;



// echo "<pre>"; print_r($listaProfessor); echo "</pre>"; exit;


// mudar dados

class Usuario
{

    /** 
     * Identificador único da usuario
     * @var integer
     */
    public $id;

    /** 
     * nome do usuario
     * @var string
     */
    public $nome;

     /** 
     * sobrenome do usuario
     * @var string
     */
    public $sobrenome;

    /** 
     * idade do usuario
     * @var int
     */
    public $idade;

    /** 
     * cpf do usuario
     * @var bigint
     */
    public $cpf;

     /** 
     * define descricao do usuario
     * @var text
     */
    public $descricao;

     /** 
     * Define o sexo do usuario
     * @var enum
     */
    public $sexo;

     /** 
     * Define a ordem do usuario
     * @var int
     */
    public $ordem;
    
    /** 
     * Define se a usuario está ativa (0 ou 1)
     * @var tinyint
     */
    public $status;

    

    /** 
     * Função para cadastrar a usuario no banco
     * @var boolean
     */

    public function cadastrar()
    {
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;
        //Inserir a Curso no banco e retornar o ID
        $objDatabase = new Database('usuarios');
        $this->id = $objDatabase->insert([
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'idade'=> $this->idade,
            'cpf'=> $this->cpf,
            'descricao'=> $this->descricao,
            'sexo'=> $this->sexo,
            'ordem' => $this->ordem,
            'status' => $this->status,
            
        ]);
        //echo "<pre>"; print_r($this); echo "</pre>"; exit;

        //Retornar sucesso
        return true;
    }

    /**
     * Método responsável por obter as usuarios do banco de dados

     *@params string $where 
     *@params string $order
     *@params string $limit 
     *@return array
     */

    public static function getUsuarios($where = null, $order = null, $limit = null)
    {

        $objDatabase = new Database('usuarios');

         $return = ($objDatabase)->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
         $result = array();
        foreach ($return as $key => $value) {
            $result[$key]['id'] = $value->id;
            $result[$key]['nome'] = $value->nome;
            $result[$key]['sobrenome'] = $value->sobrenome;
            $result[$key]['idade'] = $value->idade;
            $result[$key]['cpf'] = $value->cpf;
            $result[$key]['descricao'] = $value->descricao;
            $result[$key]['sexo'] = $value->sexo;
            $result[$key]['ordem'] = $value->ordem;
            $result[$key]['status'] = $value->status;
        }

        // echo "<pre>"; print_r($result); echo "</pre>"; exit;
        return $result;
    }

    /**
     * Método responsável por obter as usuarios do banco de dados

     *@params int $id
     *@return Usuario
     */

    public static function getUsuario($id)
    {

        $objDatabase = new Database('usuarios');

        return ($objDatabase)->select('id = ' . $id)->fetchObject(self::class);
    }

    /**
     * Função para excluir usuarios no banco
     *@return boolean
     */

    public function excluir()
    {
        $objDatabase = new Database('usuarios');

        return ($objDatabase)->delete('id =' . $this->id);
    }

    /** 
     * Função para atualizar a Curso no banco 
     * @return boolean
     */
    public function atualizar()
    {
        
        //Definir a data
        $this->data = date('Y-m-d');

        $objDatabase = new Database('usuarios');

        return ($objDatabase)->update('id = ' . $this->id, [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'idade'=> $this->idade,
            'cpf'=> $this->cpf,
            'descricao'=> $this->descricao,
            'sexo'=> $this->sexo,
            'ordem' => $this->ordem,
            'status' => $this->status,
        ]);
    }
}
