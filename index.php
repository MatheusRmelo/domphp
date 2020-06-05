<?php 
    use Dompdf\Dompdf;
    // include autoloader
    require_once 'dompdf/autoload.inc.php';

    $dompdf = new DOMPDF();
    $data = '05/06/2020';
    $laboratorio = 'x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x-x';
    $num_exame = '1234-AL-ON15';
    $style='
        <html>
            <head>
                <link rel="stylesheet" href="styles.css">
                <meta charset="UTF-8">
            </head>

        <body>';
    $header =
        '   <div class="header">
                <div class="header-info">
                    <p class="header-data">'.$data.'</p>
                    <p class="header-title">Resenha online</p>
                </div>
            </div>
            <div class="page-header">
                <h1 class="title">REQUISIÇÃO E RESULTADO DE DIAGNÓSTICO DE ANEMIA INFECCIOSA EQUINA</h1>
                <div class="info-lab">
                    <div class="laboratorio">
                        <div>
                            <p>Laboratório</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Endereço</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Cidade/UF:</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                    </div>
                    <div class="portaria">
                        <div>
                            <p>Portaria de credenciamento</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Telefone</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Endereço Eletrônico (e-mail):</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                    </div>
                    <div class="numero-exame">
                        <p>Número do exame</p>
                        <h1>'.$num_exame.'</h1>
                    </div>
                </div>
                <div class="info-proprietario">
                    <div class="nomes-vet-prop">
                        <div>
                            <p>Proprietário do Animal:</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Médico Veterinário Requisitante:</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                    </div>
                    <div class="enderecos-vet-prop">
                        <div>
                            <p>Endereço Completo: </p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Endereço Completo: </p>
                            <p>'.$laboratorio.'</p>
                        </div>
                    </div>
                    <div class="telefones-vet-prop">
                        <div>
                            <p>Telefone: </p>
                            <p>'.$laboratorio.'</p>
                        </div>
                        <div>
                            <p>Telefone:</p>
                            <p>'.$laboratorio.'</p>
                        </div>
                    </div>
                </div>
                
            </div>
        '
        ;
    $body = '
                 
    ';     
    $footer = '
        
    ';



        
    $html =$style.$header.$body.$footer;
    //$html = ''
    $html = utf8_decode($html);
    $dompdf->load_html($html);

    $dompdf->render();


    $dompdf->stream(
        "relatorio_teste.pdf",
        array(
            "Attachment" => false
        )
    )
?>