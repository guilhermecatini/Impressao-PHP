<?php

require_once './ImpressaoPDF.class.php';



$cabecalho = array(
  "path_logotipo" => "http://www.tiosertec.com.br/assets/images/logo.png",
  "nr_carga" => "8105",
  "codigo" => "R 29",
  "emissao" => date('d/m/Y'),
  "revisao" => "05",
  "motorista_nome" => "GILBERTO",
  "veiculo_placa" => "EVP-0780 3º",
  "peso_total" => "3.750 Kg"
);


$itens =  array(
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
  array("nr_pedido" => "049543", "data_emissao" => "17/02/2017", "cliente_codigo" => "000340", "risco" => "B", "cliente_nome" => "TOYOTA DO BRASIL LTDA", "produto_descricao" => "ACIDO SULFURICO 0,1N", "data_entrega" => "20/02/2017", "quantidade" => "12,00", "tipo_embalagem" => "FRASCO DE 1 LITRO", "quantidade_embalagem" => "12", "lote" => "26450", "municipio" => "INDAIATUBA"),
);

$rodape = array(
  'data' => date('d/m/Y'),
  'hora' => date('H:i')
);


$ax = new ImpressaoPDF($cabecalho, $itens, $rodape);

$ax->setTipoImpressao(1);

if (!$ax->GerarPDF()) {
  echo $ax->getError();
}



// 1- Checagem de Carga (Tiosertec)
