<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model

{

    protected $fillable = ['firstname','lastname','company','department','status'];

}