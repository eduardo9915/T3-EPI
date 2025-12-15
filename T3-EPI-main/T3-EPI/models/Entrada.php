<?php
    class Entrada {
        private int $idEntrada;
        private string $dataHoraEntrada;
        private string $tipoEntrada;
        private string $observacaoEntrada;

        public function __construct(
            $_dataHoraEntrada,
            $_tipoEntrada,
            $_observacaoEntrada,
            $_idEntrada = 0
        ) {
            $this->idEntrada = $id_entrada;
            $this->dataHoraEntrada = $data_hora_entrada;
            $this->tipoEntrada = $tipo_entrada;
            $this->observacaoEntrada = $observacao_entrada;
        }
    }
?>