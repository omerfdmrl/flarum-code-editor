<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up'    =>  function(Builder $schema){
        $schema->create('omerfdmrl_code_editors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('body');
            $table->enum('type',['html'])->default('html');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    },
    'down'  =>  function(Builder $schema){
        $schema->dropIfExists('omerfdmrl_code_editors');
    }
];