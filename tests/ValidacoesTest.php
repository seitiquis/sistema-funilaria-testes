<?php

require_once 'Validacoes.php';

echo "Teste 1 - Cliente sem nome: ";
echo validarCliente("", "42999999999") ? "Falhou\n" : "OK\n";

echo "Teste 2 - Agendamento com data passada: ";
echo validarAgendamento(1, "2024-01-01", date("Y-m-d")) ? "Falhou\n" : "OK\n";

echo "Teste 3 - Ordem sem descrição: ";
echo validarOrdemServico(1, "") ? "Falhou\n" : "OK\n";
