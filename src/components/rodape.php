<?php
    
    // Função para retornar o componente Rodapé
    function rodape() {

        $footer = '';

        $footer .= '
            <!-- BEGIN FOOTER -->
            <div class="footer">
                <div class="footer-inner">
                    2022 &copy; Multidados TI.
                </div>
                <div class="footer-tools">
                    <span class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </span>
                </div>
            </div>
            <!-- END FOOTER -->
        ';

        return $footer;

    }

?>