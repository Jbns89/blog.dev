<?php

//need to include this to be able to use getCreatedAtAttribute
use Carbon\Carbon;

class BaseModel extends Eloquent
{
    //All accessors start with the word get and use camelCase
    public function getCreatedAtAttribute($value)
    {
        //this is going into the carbon framework and creting an instance
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        
        return $utc->setTimezone('America/Chicago');
    }
    
    public function getUpdatedAtAttribute($value)
    {
        //this is going into the carbon framework and creting an instance
        $utc = Carbon::updateFromFormat($this->getDateFormat(), $value);
        
        return $utc->setTimezone('America/Chicago');
    }
}


?>
