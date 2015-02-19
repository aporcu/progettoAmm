<div id="formricetta">

			<form id="formRicet">	
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
						<td><input type="radio" name="tipo" id="primo" value="1" checked></td>
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
						<td><input type="text" name="titolo" id="titolo" placeholder="..."></td>
					</tr>
					<tr>
						<td id="spieg"><label for="descrizione"> Spiegazione ricetta </label></td>
						<td><textarea rows="15" cols="45" name="descrizione" id="descrizione" placeholder="..."></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="insRic" name="insRic" type="button" value="Aggiungi"> </td>
						
					</tr>
				</table>					
			</form>
		</div>