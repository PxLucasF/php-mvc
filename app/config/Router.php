<?php

$this->get('/', 'PagesController@index');
$this->get('/cep', 'PagesController@cep');
$this->get('/sobre', 'PagesController@sobre');
$this->get('/contato', 'PagesController@contato');