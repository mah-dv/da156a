<?php
	include "_header.php";
	if(isset($_GET['nr'])){;
		$nr = $_GET['nr'];
		$link2 = "lectures/$nr/";
		$link = "lectures/$nr/";
		if (file_exists("lectures/$nr/index.php")) {
            ?>
            <div class="row">
                <div class="col-lg-8 create-submenu">
                    <?php
                     include "lectures/$nr/index.php";
                    ?>
               </div>
                <div class="col-lg-4 submenu-area"></div>
        	</div>
            <hr>
            <?php
		} else {
			echo "<h4>Detta är inte sidan du letar efter...</h4>";
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Föreläsningar</h2>
			<p>I kursen ges en föreläsningsserie, med sammanfattande förklaring, exempel, livedemos och tips. Föreläsningarna spelas inte in, men det mesta av stödmaterialet (bildspel, exempeldokument, etc.) publiceras här.</p>

            <table class="table table-striped">
                <tr>
                    <th>Nr.</th>
                    <th>Ämne</th>
                    <th>Föreläsare</th>
                </tr>
                <tr>
                    <td>1</td>
					<td>Föreläsning 1: Kursintroduktion</td>
					<td>Anton</td>
                </tr>
				<tr>
					<td>2</td>
					<td>Föreläsning 2: Introduktion till HTML</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Föreläsning 3: Tabeller &amp; formulär</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Föreläsning 4: Introduktion till CSS</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>5</td>
					<td>Föreläsning 5: Layout med HTML &amp; CSS</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>6</td>
					<td>Föreläsning 6: Layout med HTML &amp; CSS (2)</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>7</td>
					<td>Föreläsning 7: Responsiv webbdesign</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>8</td>
					<td>Föreläsning 8: Tutorial, att bygga en webbsida</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>9</td>
					<td>Föreläsning 9: Webbutveckling med JavaScript</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>10</td>
					<td>Föreläsning 10: Ramverk och bibliotek</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>11</td>
					<td>Föreläsning 11: Introduktion till användbarhet</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>12</td>
					<td>Föreläsning 12: Användbarhet: Fokus IT</td>
					<td>Anton</td>
				</tr>
				<tr>
					<td>13</td>
					<td>Föreläsning 13: Sammanfattning av kursen</td>
					<td>Anton</td>
				</tr>
            </table>

			<p>Notera även att innehållet kan ändras något under kursens gång - studenter har möjlighet att påverka vad som fördjupas.</p>
		</div>
		<div class="col-lg-4 submenu-area">
		</div>
	</div>

    <hr>

	<?php
	}
	include "_footer.php";
?>
