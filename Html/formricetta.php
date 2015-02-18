<div id="formricetta">

			<form method="post" action="addricetta.php">	
				<table>
					<tr>
						<th>Aggiungi una ricetta </th>
						<th></th>
					</tr>
					<tr>
						<td>Seleziona il tipo di ricetta</td>
						<td></td>
					</tr>
					<tr>						
						<td><label for="primi"> Primo </label></td>
						<td><input type="radio" name="tipo" id="primo" value="1"></td>
					</tr>
					<tr>
						<td><label for="secondo"> Secondo </label></td>
						<td><input type="radio" name="tipo" id="secondo" value="2"></td>
					</tr>
					<tr>
						<td><label for="dolce"> Dessert </label></td>
						<td><input type="radio" name="tipo" id="dolce" value="3"></td>
					</tr>
					<tr>
						<td><label for="titolo"> Titolo Ricetta </label></td>
						<td><input type="text" name="titolo" id="titolo" value="Scegli un titolo"></td>
					</tr>
					<tr>
						<td><label for="immagine"> Carica un'immagine </label></td>
						<td><input type="file" name="immagine" id="immagine"></td>
					</tr>
					<tr>
						<td><label for="descrizione"> Spiegazione ricetta </label></td>
						<td><textarea rows="15" cols="45" name="descrizione" id="descrizione"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><button type="submit"> Aggiungi </button></td>
					</tr>
				</table>					
			</form>
		</div>