<!-- Bootstrap -->
    
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/metro-bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Mascara para campo -->
    <script src="js/jquery.mask.min.js"></script>

<!------ Mascara de Campo ---------->
	<script type="text/javascript">
			$("#telefone").mask("(00) 00000-0000");
	</script>



<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
<div class="container">
    <div class="row">
        <h1>OUVIDORIA</h1>
        <p align="justify">A ouvidoria p&uacute;blica se apresenta como instrumento aut&ecirc;ntico da democracia, na medida em que possibilita &agrave; sociedade o exerc&iacute;cio do direito &agrave; participa&ccedil;&atilde;o e ao controle da administra&ccedil;&atilde;o p&uacute;blica. A prefeitura Municipal, abra&ccedil;ando o conceito evolutivo de Estado Democr&aacute;tico de Direito, estabeleceu como meta a cont&iacute;nua proximidade da administra&ccedil;&atilde;o com o cidad&atilde;o, forma de governan&ccedil;a que busca a inser&ccedil;&atilde;o efetiva do cidad&atilde;o nas decis&otilde;es administrativas desta Prefeitura.Acreditamos que a cria&ccedil;&atilde;o de uma ouvidoria &eacute; uma ferramenta importante para uma gest&atilde;o cidad&atilde; e moderna, que viabiliza a melhoria da qualidade de vida da popula&ccedil;&atilde;o e resulta, indubitavelmente, na melhoria da presta&ccedil;&atilde;o dos servi&ccedil;os p&uacute;blicos.</p>

        
            <?php
                    if(isset($_GET['numero_protocolo'])){

                        echo "<div class='alert alert-warning'>
                                    Seu número de protocolo é ".$_GET['numero_protocolo']."<br>
O prazo para resposta é de 30 (trinta) dias, prorrogável por mais 30 (trinta) dias, mediante justificativa. Caso não seja possível atendê-lo dentro deste prazo, a ouvidoria deverá informar sobre os encaminhamentos, as etapas e os prazos previstos para uma resposta conclusiva, ou solicitar informações adicionais.
                              </div>";
                    }
            ?>

        

        <hr />

        <div class="row">
            <div class="col-sm-8">

                <h4 class="page-header">Dados da solicita&ccedil;&atilde;o</h4>
                <form role="form" action="enviar.php" method="post" enctype="multipart/form-data">
                    <div class="form-group float-label-control">
                        <label for="">Nome<span class="style1">*</span></label>
                        <input name="nome" type="text" class="form-control" placeholder="Digite o nome completo" required>
						
                    </div>
					
                    <div class="form-group float-label-control">
                        <label for="">Email<span class="style1">*</span></label>
                        <input name="email" type="email" class="form-control" placeholder="Digite seu E-mail" required/>
						
               	    </div>
					
					<div class="form-group float-label-control">
                        <label for="">Telefone(s) para Contato<span class="style1">*</span> </label>
                        <input name="telefone" id="telefone" type="text" class="form-control" placeholder="Digite seu telefone" required/>
					
                  	</div>
					
				    <div class="form-group float-label-control">
                      <label for="label">Assunto<span class="style1">*</span></label>
                      <select name="assunto" class="form-control" aria-required="true" aria-invalid="false">
                        <option value="0">- Selecione um assunto -</option>
                        <option value="1">Reclamação</option>
                        <option value="2">Solicitação de Providência</option>
                        <option value="3">Sugestão</option>
                        <option value="4">Elogio</option>
                        <option value="5">Denúncia</option>
                      </select>
                    </div>
				    <div class="form-group float-label-control">
                      <label for="label">Org&atilde;o/Setor<span class="style1">*</span></label>
                      <select name="orgao" class="form-control" aria-required="true" aria-invalid="false">
                        <option value="0">- Selecione uma órgão -</option>
                        <option value="1">Administração</option>
                        <option value="2">Educação</option>
                        <option value="3">Saúde</option>
                        <option value="4">Seguraça</option>
                        <option value="5">Transposte</option>
						<option value="6">Outros</option>
                      </select>
                    </div>
				    <div class="form-group float-label-control">
                        <label for="">Mensagem</label>
                        <textarea name="mensagem" class="form-control" placeholder="mensagem" rows="10"></textarea>
                    </div>
					
					<div class="form-group float-label-control">
						<label for="">Deseja anexar arquivos?</label>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
                                    <p align="center"><input type="file" name="arquivo[]" /></p>
				  </div>
					
					<div class="form-group float-label-control">

                       <input type="hidden" id="numero_protocolo" name="numero_protocolo" value="<?php echo time(); ?>" >

						<button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
					</div>
					
					

				
                </form>


            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>O QUE &Eacute; A OUVIDORIA?</h3>
                  </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                              <div align="justify">A ouvidoria pública se apresenta como instrumento autêntico da democracia, na medida em que possibilita à sociedade o exercício do direito à participação e ao controle da administração pública. 
A Prefeitura, abraçando o conceito de excelência em gestão pública e respeitando o princípio da legalidade, estabelece como meta a contínua proximidade da administração com o cidadão, forma de governança que busca a inserção efetiva do cidadão nas decisões administrativas desta Prefeitura.
Acreditamos que a criação de uma ouvidoria é uma ferramenta importante para uma gestão cidadã e moderna, que viabiliza a melhoria da qualidade de vida da população e resulta, indubitavelmente, na melhoria da prestação dos serviços públicos.
</div>
                            </li>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
  </div>
</div>