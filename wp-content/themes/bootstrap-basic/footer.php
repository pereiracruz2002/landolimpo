<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
			
			
			<footer id="site-footer" role="contentinfo">
				<div id="footer-row" class="row site-footer">
					<div class="container">
						<div class="col-md-4 footer-left">
							<?php 
							if (!dynamic_sidebar('footer-left')) {
								printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
								echo ' | ';
								printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://rundiz.com">Bootstrap Basic</a>');
							} 
							?> 
						</div>
						<div class="col-md-offset-1 col-md-7 footer-right">
							<?php dynamic_sidebar('footer-right'); ?> 
						</div>
					</div>
					<div class="container">
						<div class="col-md-offset-4 col-md-4">
							<div id="logoRodape">
								<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/logo_sem-fundo.png" alt="d4f"  />
							</div>
						</div>
						<div class="col-md-offset-4 col-md-4">

						</div>
					</div>
				</div>
			</footer>
		</div><!--.container page-container-->
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>

	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="modal-title">
				<div class="row">
					<div class="col-md-offset-4 col-md-4">
						<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo" />
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
      	<div class="modal-body">
        	<div class="row">
        		<div class="col-md-1"></div>
				<div class="col-md-10">
					<form>
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nome">
						</div>

						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar Senha">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Ao se inscrever, você confirma que aceita os <span class="danger">Termos de serviço</span> e <span class="danger">Política de Privacidade</span>
							</label>
						</div>
					  	<button type="submit" class="btn btn-grey btn-block">Criar conta</button>
					</form>
				</div>
				<div class="col-md-1"></div>
        	</div>
        	<div class="row">
        		<div class="col-md-12">
					<p class="text-center">Já é membro? <a class="danger" href="#"> Entrar</a></p>
        		</div>
        	</div>
      	</div>
    </div>

  </div>
</div>

</html>