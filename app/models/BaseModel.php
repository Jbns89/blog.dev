<?php

//need to include this to be able to use getCreatedAtAttribute
use Carbon\Carbon;

class BaseModel extends Eloquent
{
    //All accessors start with the word get and use camelCase
    //these are also getters
    public function getCreatedAtAttribute($value)
    {
        //this is going into the carbon framework and creating an instance
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        
        return $utc->setTimezone('America/Chicago');
    }
    
    public function getUpdatedAtAttribute($value)
    {
        
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        
        return $utc->setTimezone('America/Chicago');
    }
    
    //These are setters
    // public function setCreatedAtAttribute($value)
    // {
        
    //     $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        
    //     return $utc->setTimezone('UTC');
    // }
    
    // public function setUpdatedAtAttribute($value)
    // {
        
    //     $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        
    //     return $utc->setTimezone('UTC');
    // }
}
