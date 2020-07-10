<?php

use Illuminate\Database\Seeder;

class booksTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'titulo'=>'Desórdenes de la memoria',
            'numEdicion'=>'1',
            'precioFisico'=>'200',
            'precioDigital'=>'100',
            'descuentoFisico'=>'0',
            'descuentoDigital'=>'0',
            'sinopsis'=>'***',
            'stockFisico'=>'0',
            'stockDigital'=>'1',
            'linkDescarga'=>'desordenes.txt',
            'bannerImagen'=>'aless.PNG',
            'tiendaImagen'=>'alessC.JPG',
            'sello_id'=>'1'

        ]);
        
        DB::table('books')->insert([
            'titulo'=>'Este es el manicomio de Dios, Marianela',
            'numEdicion'=>'1',
            'precioFisico'=>'200',
            'precioDigital'=>'100',
            'descuentoFisico'=>'0',
            'descuentoDigital'=>'0',
            'sinopsis'=>'***',
            'stockFisico'=>'0',
            'stockDigital'=>'1',
            'linkDescarga'=>'manicomio.txt',
            'bannerImagen'=>'estefania.PNG',
            'tiendaImagen'=>'estefaniaC.JPG',
            'sello_id'=>'1'
        ]);
        
        DB::table('books')->insert([
            'titulo'=>'Este libro no habla de ti',
            'numEdicion'=>'1',
            'precioFisico'=>'200',
            'precioDigital'=>'100',
            'descuentoFisico'=>'0',
            'descuentoDigital'=>'0',
            'sinopsis'=>'***',
            'stockFisico'=>'0',
            'stockDigital'=>'1',
            'linkDescarga'=>'jordan.txt',
            'bannerImagen'=>'cesar.PNG',
            'tiendaImagen'=>'cesarC.JPG',
            'sello_id'=>'1'
        ]);
        
        DB::table('books')->insert([
            'titulo'=>'Estos poemas culeros que son lo menos culero que tengo',
            'numEdicion'=>'1',
            'precioFisico'=>'200',
            'precioDigital'=>'100',
            'descuentoFisico'=>'0',
            'descuentoDigital'=>'0',
            'sinopsis'=>'***',
            'stockFisico'=>'0',
            'stockDigital'=>'1',
            'linkDescarga'=>'agustin.txt',
            'bannerImagen'=>'agustin.PNG',
            'tiendaImagen'=>'agustinC.JPG',
            'sello_id'=>'1'
        ]);
    }
}
