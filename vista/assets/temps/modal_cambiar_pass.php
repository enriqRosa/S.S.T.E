<?php

class vista_password{
function funcion_vista_password($datos){
    $cad='
    <body>
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


        <script>
        $( document ).ready(function() {
        //--------------------Vntanas Modales---------------------------------------
            
            $(".btn-agendar").on("click", function(){
                $(".c-agenda-quirofano").addClass("visible");
                $("body").addClass("scrollNO");
            
            })
            $(".close-fancy").on("click", function(){
                $(this).closest(".c-agenda-quirofano").removeClass("visible");  
                $("body").removeClass("scrollNO");
            });
        
        })
        </script>
        </body>

        ';
	return $cad;
}
}
?>
