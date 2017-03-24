<?php

class ImpressaoPDF {
  
  private $pdf;
  private $vArrayHeader;
  private $vArrayItens;
  private $vArrayRodape;
  private $vTipoImpressao;
  
  private $vError;
  
  public function __construct($vArrayHeader, $vArrayItens, $vArrayRodape) {
    
    require_once 'fpdf/fpdf.php';
    
    $this->vArrayHeader = $vArrayHeader;
    $this->vArrayItens = $vArrayItens;
    $this->vArrayRodape = $vArrayRodape;
    $this->pdf = new FPDF('L', 'mm', 'A4');
    
  }
  
  public function setTipoImpressao($vTipoImpressao) {
    $this->vTipoImpressao = $vTipoImpressao;
  }
  
  public function getError() {
    return $this->vError;
  }
  
  public function GerarPDF() {
    try {
      if (!isset($this->vTipoImpressao)) throw new Exception("Tipo de impressão não foi definido");
      switch ($this->vTipoImpressao) {
        case 1:
          $this->ImpressaoTipo1();
          break;
        default:
          throw new Exception("Tipo de impressão não existe");
          break;
      }
    } catch (Exception $e) {
      $this->vError = $e->getMessage();
      return false;
    }
  }
  
  private function ImpressaoTipo1() {
    
    $this->ImpressaoTipo1_Item();
    
    $this->pdf->Output('I', 'romaneio-de-carga.pdf', false);
  }
  
  private function ImpressaoTipo1_Cabecalho() {
    $this->pdf->SetFont('Arial', '', '9');
    $this->pdf->SetLineWidth(0.25);
    $this->pdf->Image($this->vArrayHeader['path_logotipo'], 6, 6, 48, 23, '', '');
    $this->pdf->Cell(50, 25, '', 1, 0, 'C', false, '');
    $this->pdf->SetFontSize(14);
    $this->pdf->Cell(170, 25, 'Registro para checagem de carga Nr. ' . $this->vArrayHeader['nr_carga'], 1, 0, 'C', false, '');
    $this->pdf->SetFontSize(9);
    $this->pdf->Cell(65, 10, 'Código: '.$this->vArrayHeader['codigo'], 1, 2, 'L', false, '');
    $this->pdf->Cell(65, 15, '', 1, 1, 'L', false, '');
    $this->pdf->Text(226,20,'Emissão: ' . $this->vArrayHeader['emissao']);
    $this->pdf->Text(226,26,'Revisão: ' . $this->vArrayHeader['revisao']);
    $this->pdf->SetX(5);
    $this->pdf->SetFont('Arial', 'BI', '11');
    $this->pdf->Cell(285, 10, $this->vArrayHeader['motorista_nome'] . ' ' . $this->vArrayHeader['veiculo_placa'], 1, 1, 'C', false, '');
    $this->pdf->SetFont('Arial', 'B', '7');
    $this->pdf->Text(258, 34, 'VALOR TOTAL RISCO');
    $this->pdf->Text(268, 38, 'LOG: 45');
    $this->pdf->SetXY(5, 42);
    $this->pdf->Cell(15, 5, 'Nr. Pedido', 1, 0, 'C', false, '');
    $this->pdf->Cell(15, 5, 'Emissão', 1, 0, 'C', false, '');
    $this->pdf->Cell(15, 5, 'Cliente', 1, 0, 'C', false, '');
    $this->pdf->Cell(10, 5, 'Risco', 1, 0, 'C', false, '');
    $this->pdf->Cell(48, 5, 'Nome', 1, 0, 'C', false, '');
    $this->pdf->Cell(48, 5, 'Descrição', 1, 0, 'C', false, '');
    $this->pdf->Cell(15, 5, 'Entrega', 1, 0, 'C', false, '');
    $this->pdf->Cell(15, 5, 'Qtd', 1, 0, 'C', false, '');
    $this->pdf->Cell(44, 5, 'Tipo Embalagem', 1, 0, 'C', false, '');
    $this->pdf->Cell(20, 5, 'Qtd Embalagem', 1, 0, 'C', false, '');
    $this->pdf->Cell(15, 5, 'Lote', 1, 0, 'C', false, '');
    $this->pdf->Cell(25, 5, 'Municipio', 1, 1, 'C', false, '');
  }
  
  private function ImpressaoTipo1_Item() {
    
    // Quantidade de itens por página
    $qtd_it_pag = 24;
    // Offset do Array dos itens
    $arrOffset = 0;
    // define a quantidade de páginas que vai ter o PDF
    $qtd_pag = ceil(count($this->vArrayItens) / $qtd_it_pag);
    // Laço das páginas
    for ($pg=0;$pg<$qtd_pag;$pg++) {
      // Adiciona uma pagina
      $this->pdf->AddPage();
      // Escreve o numero da pagina
      $this->pdf->SetFont('Arial', 'B', '7');
      $this->pdf->Text(280,8, 'Pag. ' . str_pad($pg+1, 2, '0', STR_PAD_LEFT));
      // Seta a fonte e a posição
      $this->pdf->SetFont('Arial', '', '9');
      $this->pdf->SetXY(5, 5);
      // Imprime o cabeçalho
      $this->ImpressaoTipo1_Cabecalho();
      // monta o array dos itens da pagina
      $ax_array_item = array_slice($this->vArrayItens, $arrOffset, $qtd_it_pag);
      
      $this->pdf->SetFont('Arial', '', '7');
      for ($i=0;$i<count($ax_array_item);$i++) {
        $this->pdf->SetX(5);
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['nr_pedido'], 1, 0, 'C', false, '');
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['data_emissao'], 1, 0, 'C', false, '');
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['cliente_codigo'], 1, 0, 'C', false, '');
        $this->pdf->Cell(10, 5, $ax_array_item[$i]['risco'], 1, 0, 'C', false, '');
        $this->pdf->Cell(48, 5, $ax_array_item[$i]['cliente_nome'], 1, 0, 'L', false, '');
        $this->pdf->Cell(48, 5, $ax_array_item[$i]['produto_descricao'], 1, 0, 'L', false, '');
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['data_entrega'], 1, 0, 'C', false, '');
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['quantidade'], 1, 0, 'R', false, '');
        $this->pdf->Cell(44, 5, $ax_array_item[$i]['tipo_embalagem'], 1, 0, 'L', false, '');
        $this->pdf->Cell(20, 5, $ax_array_item[$i]['quantidade_embalagem'], 1, 0, 'R', false, '');
        $this->pdf->Cell(15, 5, $ax_array_item[$i]['lote'], 1, 0, 'L', false, '');
        $this->pdf->Cell(25, 5, $ax_array_item[$i]['municipio'], 1, 1, 'L', false, '');
        $arrOffset++;
      }
      
      if ($pg+1 == $qtd_pag) {
        $this->pdf->SetX(5);
        $this->pdf->SetFont('Arial', 'BI', '11');
        $this->pdf->Cell(285, 10, 'PESO TOTAL ' . $this->vArrayHeader['peso_total'], 1, 1, 'C', false, '');
      }
      
      $this->ImpressaoTipo1_Rodape();
      
    }
  }
  
  private function ImpressaoTipo1_Rodape() {
    $this->pdf->SetFont('Arial', '', '9');
    $this->pdf->Line(15, 190, 115, 190);
    $this->pdf->Text(45, 195, 'Assinatura do Responsável');
    $this->pdf->Text(230,195, 'Data: ' . $this->vArrayRodape['data']);
    $this->pdf->Text(260,195, 'Hora: ' . $this->vArrayRodape['hora']);
  }
  
  
}