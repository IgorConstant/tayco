<footer>
    <div class="uk-container">
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-5@m">
                <div>
                    <div class="brandFooter">
                        <img width="120px" src="<?php echo base_url("assets/site/images/logo-tayco.svg") ?>" alt="Logo Tayco">
                    </div>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div>
                    <div class="copyright">
                        <p class="uk-text-center uk-text-small uk-text-muted">© Tayco. Todos os direitos reservados. <?php echo date("Y") ?></p>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-5@m">
                <div>
                    <div class="socialIcons">
                        <ul>
                            <li><a href="https://pt-br.facebook.com/taycorespiradoresdescartaveis/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.instagram.com/taycoind/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="https://br.linkedin.com/company/taycoind" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="<?php echo base_url('assets/site/js/main.js') ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="<?php echo base_url('assets/site/js/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('assets/site/js/owlScript.js') ?>"></script>
<script src="<?php echo base_url('assets/site/js/jquery.validate.min.js') ?>"></script>


<script>
    $(document).ready(function() {
        filter_data(1);

        function filter_data(page) {
            $('.filter_data').html('<div id="loading" style="" ></div>');
            var action = 'fetch_data';

            var cor = get_filter('cor');
            var tamanho = get_filter('tamanho');
            var categoria = get_filter('categoria');
            var classe = get_filter('classe');
            var linha = get_filter('linha');
            var quimico = get_filter('quimico');

            $.ajax({
                url: "<?php echo base_url(); ?>site/fetch_data/" + page,
                method: "POST",
                dataType: "JSON",
                data: {
                    action: action,
                    cor: cor,
                    tamanho: tamanho,
                    categoria: categoria,
                    classe: classe,
                    linha: linha,
                    quimico
                },
                success: function(data) {
                    $('.filter_data').html(data.product_list);
                    $('#pagination_link').html(data.pagination_link);
                }
            })
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $(document).on("click", ".pagination li a", function(event) {
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            filter_data(page);
        });

        $('.common_selector').click(function() {
            filter_data(1);
        });
    });
</script>


<!-- Mask -->
<script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
</script>

<!-- Form Validation -->
<script>
    $("#formValidate").validate();
</script>

</body>