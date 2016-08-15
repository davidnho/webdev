<!--source : https://medium.com/web-design-tutorials/simple-jquery-accordion-29b39ac24b38-->
<?php
$items = array(
    "Item 1" => "This is item 1"
    ,"Item 2" => "This is item 2"
    ,"Item 3" => "This is item 3"
);
?>
<html>
    <head>
        <script src="../../js/jquery.min.js"></script>    
        <script>
            $(function($) {
                var allAccordions = $('.accordion div.data');
                var allAccordionItems = $('.accordion .accordion-item');
                $('.accordion > .accordion-item').click(function() {
                    if ($(this).hasClass('open')) {
                        $(this).removeClass('open');
                        $(this).next().slideUp("slow");
                    }
                    else {
                        allAccordions.slideUp("slow");
                        allAccordionItems.removeClass('open');
                        $(this).addClass('open');
                        $(this).next().slideDown("slow");
                        return false;
                    }
                });
            });
        </script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .accordion {
                width: 100%;
                min-height: 300px;
                margin: 20px auto;
            }

            .accordion-item {
                font-size: 1.5em;
                margin: 0 10px 0 10px;
                padding: 10px;
                height: 20px;
                background: #f2f2f2;
                border-bottom: 1px solid #ccc;
                color:  000;
                cursor: pointer;
            }

            .accordion-item.open {
                background: #14ad40;
                border-bottom: 0px;
                color: #fff;
            }

            .accordion-item.open .type {
                float: left;
                background: url('http://vivekarora.com/images/minus.png') center no-repeat;
                padding: 10px;
            }

            .accordion-item .type {
                float: left;
                background: url('http://vivekarora.com/images/plus.png') center no-repeat;
                padding: 10px;
            }

            div.data {
                background: #fff;
                margin: 0 10px 0 10px;
                padding: 10px;
                border: 1px solid #ccc;
                font-size: 1em;
                line-height: 140%;
                display: none;
            }
        </style>
    </head>

    <body>
        <div class="accordion">
            <?php 
            foreach ($items as $item => $data){
            ?>
            <div class="accordion-item">
                <?php echo $item;?>
                <div class="type"></div>
            </div>
            <div class="data">
                <?php echo $data ;?>
            </div>
            <?php } ?>
        </div>

        <!--<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
    </body>

</html>