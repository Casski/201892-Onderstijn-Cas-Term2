<!DOCTYPE html>
<html>

	<head>

		<title>checklist</title>
		<link rel="icon" href="logo.png">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	
	<body>
		<img src="logo.png">
		<h1>Welkom bij de checklist.</h1>
		<p>Graag zo eerlijk mogelijk invullen.
		Er zijn bij elke vraag drie antwoorden mogelijk: nee/neutraal/ja.</p>
		<form action="insertNoteToDB.php" name="checklist" method="post">
		<table cellspacing="10">
			<tr>
				<td colspan="4"><h1>CHECKLIST</h1>
					<input type="text" placeholder="Naam/Nickname..."  name="naam" maxlength="45" required>
				</td>
			</tr>

			<tr>
				<td>Question</td>
				<td><p>Nee</p></td>
				<td><p>Neutraal</p></td>
				<td><p>Ja    </p></td>
			</tr>

			<tr>
				<td>Zijn je comunicative vaardigheden goed?</td>
				<td><input type="radio" name="com" value="nee"></td>
				<td><input type="radio" name="com" value="Neutraal"></td>
				<td><input type="radio" name="com" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je veel geduld?</td>
				<td><input type="radio" name="geduld" value="nee"></td>
				<td><input type="radio" name="geduld" value="Neutraal"></td>
				<td><input type="radio" name="geduld" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je motivatie voor deze opleiding?</td>
				<td><input type="radio" name="moti" value="nee"></td>
				<td><input type="radio" name="moti" value="Neutraal"></td>
				<td><input type="radio" name="moti" value="ja"></td>
			</tr>

			<tr>
				<td>Kun je in een team werken?</td>
				<td><input type="radio" name="team" value="nee"></td>
				<td><input type="radio" name="team" value="Neutraal"></td>
				<td><input type="radio" name="team" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je interesse in technologie?</td>
				<td><input type="radio" name="tech" value="nee"></td>
				<td><input type="radio" name="tech" value="Neutraal"></td>
				<td><input type="radio" name="tech" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je oplossingsgericht?</td>
				<td><input type="radio" name="oplos" value="nee"></td>
				<td><input type="radio" name="oplos" value="Neutraal"></td>
				<td><input type="radio" name="oplos" value="ja"></td>
			</tr>

			<tr>
				<td>Kun je goed tegen stress en frustratie?</td>
				<td><input type="radio" name="stfr" value="nee"></td>
				<td><input type="radio" name="stfr" value="Neutraal"></td>
				<td><input type="radio" name="stfr" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je gemotiveerd om te leren?</td>
				<td><input type="radio" name="leren" value="nee"></td>
				<td><input type="radio" name="leren" value="Neutraal"></td>
				<td><input type="radio" name="leren" value="ja"></td>
			</tr>

			<tr>
				<td>Kan je logisch denken?</td>
				<td><input type="radio" name="denken" value="nee"></td>
				<td><input type="radio" name="denken" value="Neutraal"></td>
				<td><input type="radio" name="denken" value="ja"></td>
			</tr>

			<tr>
				<td>Heb je veel motivatie voor zelfstudie?</td>
				<td><input type="radio" name="zelf" value="nee"></td>
				<td><input type="radio" name="zelf" value="Neutraal"></td>
				<td><input type="radio" name="zelf" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je een gepassioneerd computer gebruiker?</td>
				<td><input type="radio" name="comp" value="nee"></td>
				<td><input type="radio" name="comp" value="Neutraal"></td>
				<td><input type="radio" name="comp" value="ja"></td>
			</tr>

			<tr>
				<td>Ben je goed in de Engelse taal</td>
				<td><input type="radio" name="eng" value="nee"></td>
				<td><input type="radio" name="eng" value="Neutraal"></td>
				<td><input type="radio" name="eng" value="ja"></td>
			</tr>

		</table>

		<textarea rows="6" cols="81" placeholder="Wat verwacht je van deze opleiding? (optioneel)" name="opleiding"></textarea>
		
		<button name="submit" type="Submit" value="submit" style="border: none; width: 44em; height: 4em; display: block; margin-left: auto; margin-right: auto;">Submit</button>
		</form>
	</body>

</html>