<?php
    session_start();
    require_once('../fpdf/fpdf.php');
    include_once('conexion.php');

    /*Este fichero se encarga de realizar la salida por pdf con la libreria fpdf, con las funciones header y footer se define todo lo
    que saldra en todas las paginas del pdf */

    class pdf extends FPDF {
        public function header() {
            $this->SetFillColor(208, 208, 208);
            $this->Rect(0,0, 220, 25, 'F');
            $this->SetY(10); 
            $this->SetTextColor(255, 41, 132 );
            $this->SetFont('Arial', 'B', 30);
            $this->Write(5, 'MiTienda');
         

        }

        public function footer() {
            $this->SetFillColor(208, 208, 208);
            $this->SetTextColor(255, 41, 132 );
            $this->Rect(0, 250, 220, 50, 'F');
            $this->SetY(-20);
            $this->SetFont('Arial', '', 12);
            $this->SetX(120);
            $this->Write(5, 'MiTienda');
            $this->Ln();
            $this->SetX(120);
            $this->Write(5, 'Patricia Cantero Garcia');
            $this->SetX(120);
            $this->Ln();
        }
    }
    
    $fpdf = new pdf('P','mm','letter',true);
    $fpdf -> AddPage();
    $fpdf->SetMargins(10,30,20,20);
    $fpdf->SetFont('Arial', '', 12);
    $fpdf->SetY(15);
    $fpdf->SetX(120);
    $fpdf -> Write(5, utf8_decode('FACTURA Nº'). rand(1,100));
    $fpdf->Ln();

    $total=0;
        $fpdf -> SetY(40);
        $fpdf -> SetTextColor(0,0,0);
        $fpdf -> SetFillColor(208, 208, 208);
        $fpdf -> Cell(60, 10, 'PRODUCTO', 1, 0, 'C', 1);
        $fpdf -> Cell(40, 10, 'PRECIO', 1, 0, 'C', 1);
        $fpdf -> Cell(40, 10, 'CANTIDAD', 1, 0, 'C', 1);
        $fpdf -> Cell(40, 10, 'SUBTOTAL', 1, 0, 'C', 1);
        $fpdf -> Ln();

        $db = Db::conectar();
        $select  = $db -> prepare( 'select * from linea_pedido join productos where codigo_productos = id');
        $select -> execute();
        $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
        foreach($lista as $producto){
            $fpdf -> SetFillColor(255,255,255);
            $fpdf -> Cell(60, 10, utf8_decode($producto['nombre']), 1, 0, 'C', 1);
            $fpdf -> Cell(40, 10, $producto['precio'], 1, 0, 'C', 1);
            $fpdf -> Cell(40, 10, $producto['cantidad'], 1, 0, 'C', 1);
            $fpdf -> Cell(40, 10, $producto['precio']*$producto['cantidad'], 1, 0, 'C', 1);
            $fpdf -> Ln();
            $total=$total+($producto['precio']*$producto['cantidad']);
        }
        $fpdf -> Cell(140, 10, 'TOTAL:', 1, 0, 'C', 1);
        $fpdf -> Cell(40, 10, $total, 1, 0, 'C', 1);
    
    $fpdf -> Output();
?>