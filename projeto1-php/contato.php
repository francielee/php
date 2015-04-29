<div id="background">
	<div id="box-standard">
		<p class="text-contact">Entre em contato conosco.</p>
		<div>
			<form method="post" action="?pagina=contato">
				<fieldset>
					<label class="text-contact" >Nome:</label><input class="camp" type="text" name="nome"/>
					<label class="text-contact" >E-mail:</label><input class="camp" type="text" name="email"/>
					<label class="text-contact" >Assunto:</label><input class="camp" type="text" name="assunto"/>
					<label class="text-contact" >Mensagem:</label><textarea rows="7" name="mensagem"></textarea>
					<input class="button" type="submit" value="Enviar">
				</fieldset>
			</form>
		</div>

		<?php 
		if ((filter_input(INPUT_POST,"nome")) && filter_input(INPUT_POST,"nome") != null &&
			(filter_input(INPUT_POST,"email")) && filter_input(INPUT_POST,"email") != null &&
			(filter_input(INPUT_POST,"assunto")) && filter_input(INPUT_POST,"assunto") != null &&
			(filter_input(INPUT_POST,"mensagem")) && filter_input(INPUT_POST,"mensagem") != null){

						//fazer mensagem que seja obrigatorio todos os campos

			echo "<div>
			<p class=\"text\">
				Dados enviados com sucesso, abaixo seguem os dados que você enviou
			</p>
			</br>
			<p>
			Nome:" . $_POST["nome"] . "
			</br>
			E-mail:" . $_POST["email"] . "
			</br>
			Assunto:" . $_POST["assunto"] . "
			</br>
			Mensagem:" . $_POST["mensagem"] . "
			</p>
			</div>";}
			?>
	</div>
</div>