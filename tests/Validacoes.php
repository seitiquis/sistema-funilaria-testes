<?php

function validarCliente($nome, $telefone) {
    return trim($nome) !== "" && trim($telefone) !== "";
}

function validarAgendamento($clienteId, $dataAgendamento, $dataAtual) {
    return !empty($clienteId) && strtotime($dataAgendamento) >= strtotime($dataAtual);
}

function validarOrdemServico($clienteId, $descricao) {
    return !empty($clienteId) && trim($descricao) !== "";
}
