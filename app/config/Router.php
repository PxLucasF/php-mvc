<?php

$this->get('/', function () {
  echo 'Página inicial 🏡';
});

$this->get('/teste', function () {
  echo 'Página de teste 📝';
});

$this->get('/teste/subpagina', function () {
  echo 'Subpágina de teste 📂';
});