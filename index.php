<?php 
    use Dompdf\Dompdf;
    // include autoloader
    require_once 'dompdf/autoload.inc.php';

    $dompdf = new DOMPDF();

    $style='
        <html>
            <head>
                <style type="text/css">
                    .header {
                        text-align:center;
                    }
                    .footer {
                        position:absolute;
                        bottom:0;
                        width:100%;
                        text-align:center;
                    }
                </style>
            </head>
        <body>';
    $header = '<h1 class="header">Gerar PDF</h1>';
    $body = '
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur at justo vel viverra. Sed quis tristique turpis, a ullamcorper ex. Curabitur semper, libero quis sodales pellentesque, libero libero hendrerit felis, ac vestibulum orci velit nec orci. Nunc hendrerit lobortis tempor. Nullam a risus ullamcorper, venenatis leo et, cursus urna. Etiam pellentesque risus vitae leo porttitor, id ullamcorper nisl aliquam. Vivamus sed auctor risus, nec ullamcorper sem. Proin et nisi massa. Quisque semper congue mauris quis lacinia. Sed tempor lobortis augue, vitae tempor tortor ornare vel. Aenean eu magna ipsum. Sed in tortor nisl. Suspendisse potenti.
        </p>
        <p>
            Donec porta mauris sit amet erat vulputate rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eget turpis libero. Proin imperdiet sagittis massa, at facilisis nulla hendrerit vel. Duis fringilla, eros ac vehicula ornare, velit nibh sagittis purus, in iaculis quam nunc non mi. Fusce sapien leo, laoreet a risus id, vehicula sagittis ligula. Nunc vitae ullamcorper augue, nec iaculis sem. Ut sit amet feugiat velit.
        </p>            
    ';     
    $footer = '
        <div class="footer">
            Footer
        </div>
        </body>
    ';
        
    $html =$style.$header.$body.$footer;
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