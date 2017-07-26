
<meta lang="pt-BR">
   <?php require('header.php') ?>
        
    <div class="pic_bg" style="background-image: url('images/servicos/botox_uso_terapeutico.jpg');">
        
        <div class="quote">“Cirurgia oral menor“</div>
       
	</div>
    
    <div class="section2 black" id="about-us">
        
    <div class="section2 black">
       
        <div class="text-full">
        	<h1>Nossa Clínica</h1>
            <p>Nossa clínica foi desenvolvida para atendê-los dentro de todos os padrões da ANVISA com rigorosas normas de biossegurança, assim como uma infra estrutura e tecnologia na área de procedimentos e técnicas avançadas.
Clique nas imagens e conheça um pouco mais sobre nossa clínica</p>
        </div>
        
     
	<!-- Included JS Files -->
	<script type="text/javascript">
		$(function() {
			$('ul a').bind('click',function(event){
				var $anchor = $(this);
				
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 2000,'easeInOutQuart');
				
				event.preventDefault();
			});
		});
	</script>
    
    <script>
    	$(window).load(function(){
      		$('.responsive-nav').on('change', function() {
				window.location = $(this).val();
			});
    	});
    </script>
    
</body>
</html>
