<?php

namespace App\Swep\FormHelpers;

use Illuminate\Support\Collection;

class __textbox
{

    private $name,
            $label,
            $placeholder,
            $autocomplete = 'on',
            $value,
            $class,
            $containerClass,
            $cols,
            $type = 'text',
            $for;

    public static function make()
    {
        return new __textbox();
    }

    public function __construct()
    {

    }


    public function render(){
        $cls = new \ReflectionClass(__CLASS__);
        $toPass = new Collection();
        foreach ($cls->getProperties() as $property){
           $toPass->{$property->name} = $this->{$property->name};
        }
        return  view('helpers.textbox')->with([
            'thiss' => $toPass,
        ]);
    }

    public function for($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }
    public function cols($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }
    public function label($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }
    public function name($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }

    public function value($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }
    public function type($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }

    public function placeholder($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }

    public function autocomplete($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }
    public function class($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }

    public function containerClass($value)
    {
        $this->{__FUNCTION__} = $value;
        return $this;
    }



}