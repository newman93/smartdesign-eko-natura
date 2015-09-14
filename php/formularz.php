	#komunikat#
	<form action="#strona#" method="post" id="formularz">
		
		<div>
			<label>Nick/Imię i nazwisko: <span class="red">*</span></label>
			<input type="text" id="nick" name="nick" value="#nick#" />
		</div>
		<div>
			<label>Adres e-mail: <span class="red">*</span></label>
			<input type="text" id="mail" name="mail" value="#mail#" />
		</div>
		<div>
			<label>Temat: <span class="red">*</span></label>
			<input type="text" id="temat" name="temat" value="#temat#" />
		</div>
		<div>
			<label>Treść: <span class="red">*</span></label>
			<textarea cols="27" rows="10" id="tresc" name="tresc" >#tresc#</textarea>
		</div>
		<div>
			<span class="red">*</span> - oznacza pola wymagane.
		</div>
		<div>
			<input type="submit" value="Wyślij" />
		</div>
		
	</form>