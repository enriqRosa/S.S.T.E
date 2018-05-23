<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="../../libs/jQuery/jQuery-3-3-1.min.js"></script>
    </head>
    <body>
        <style>
            .c-agenda-quirofano {
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 100000;
                background: rgba(0, 0, 0, 0.5);
                overflow-y: scroll;
            }
            .fancy {
                opacity: 0;
                pointer-events: none;
                -webkit-transition: 0.5s ease-in;
                -moz-transition: 0.5s ease-in;
                transition: 0.5s ease-in;
            }
            .visible {
                opacity: 1!important;
                pointer-events: all!important;
            }
            .close-fancy {
                background: #2DCCD3;
                width: 30px;
                height: 30px;
                text-align: center;
                cursor: pointer;
                font-weight: bolder;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                position: relative;
                left: 88%;
                top: -10px;
                z-index: 100;
            }
            .close-fancy img {
                width: 20px;
            }
            .agendar-quirofano {
                width: 95%;
                height: 95%;
                max-width: 600px;
                max-height: 600px;
                margin: 0 auto;
                background: #fff;
                border-radius: 20px;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%,-50%);
                -moz-transform: translate(-50%,-50%);
                transform: translate(-50%,-50%);
                padding: 20px 0;
                overflow-y: scroll;
            }
        </style>

        <div class="c-agenda-quirofano fancy">
            <div class="agendar-quirofano">
                <div class="close-fancy">X</div>
                <h1>VENTANA MODAL</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem quo fugit iusto
                    excepturi non impedit id numquam at! Officia quae sunt ipsam adipisci cumque non
                    consequuntur quibusdam ipsum dolorem rem?</p>
                <p>Voluptatem illum minima vero excepturi nulla quia corporis animi beatae quam
                    repellat enim exercitationem neque fugit inventore placeat magnam, totam porro
                    modi doloribus quas, cumque molestias. Rerum sint officia deserunt.</p>
                <p>Sit sapiente illum qui nihil rerum laudantium, eaque in voluptatum, possimus
                    doloremque dolores quidem? Dolorum quidem inventore quisquam aliquid totam vitae
                    consequatur voluptas molestias eveniet? Sapiente soluta qui nesciunt mollitia.</p>
                <p>Alias quidem sunt, autem exercitationem mollitia reiciendis laboriosam vitae
                    a temporibus necessitatibus! Consequuntur illo quos aliquam eveniet. Assumenda,
                    odio. Quod sequi numquam hic rem rerum, libero pariatur explicabo. Similique,
                    at?</p>
            </div>
        </div>


<button class="btn-agendar">AGENDAR</button>

<script>
$( document ).ready(function() {
//--------------------Vntanas Modales---------------------------------------
    
    $('.btn-agendar').on('click', function(){
        $('.c-agenda-quirofano').addClass('visible');
        $('body').addClass('scrollNO');
    
    })
    $('.close-fancy').on('click', function(){
        $(this).closest('.c-agenda-quirofano').removeClass('visible');  
        $('body').removeClass('scrollNO');
    });

})
</script>
    </body>
</html>