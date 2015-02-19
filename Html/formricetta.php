<div id="formricetta">

			<form id="formRicet">	
				<table>
					<tr>
						<th>Aggiungi una ricetta </th>
						<th></th>
					</tr>
					<tr>
						<td><label for="tipo"> Seleziona il tipo di ricetta </label></td>
						<td>
							<select name="tipo" id="tipo"> 
								<option value="1"> Primi </option>
								<option value="2"> Secondi </option>
								<option value="3"> Dolci </option>
							</select>
						</td>
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