<?php


namespace App\classes;


class Calculator
{
    protected $firstNumber;
    protected $lastNumber;
    protected $option;
    protected $result;

    public function __construct($post=null)
    {
        if($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option = $post['option'];

        }

    }
    public  function add()
    {
        $this->result = $this->firstNumber + $this->lastNumber;
        return $this->result;
    }
    public  function sub()
    {
        $this->result = $this->firstNumber - $this->lastNumber;
        return $this->result;
    }
    public  function mul()
    {
        $this->result = $this->firstNumber * $this->lastNumber;
        return $this->result;
    }
    public  function div()
    {
        $this->result = $this->firstNumber / $this->lastNumber;
        return $this->result;
    }
    public  function mod()
    {

        return $this->firstNumber % $this->lastNumber;
    }




    public function index()
    {
        switch ($this->option)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result = $this->mul();
                break;
            case '/':
                $this->result = $this->div();
                break;
            case '%':
                $this->result = $this->mod();
                break;
        }
        return $this->result;
    }



}