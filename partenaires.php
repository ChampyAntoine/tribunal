<?php
$title = "Partenaire de justice";
require("include/header.php");
$cheminImg = "src/image/carte-arquebuse.png";
require("include/carousel.php");

$html = <<<HTML

<main>
	<div id="partenaires" class="div">
		<article class="avocat">
			<h2>Les avocats</h2>
			<div>
				<p>
					En droit, l'avocat est un juriste dont les fonctions traditionnelles sont de conseiller, représenter, d'assister et de défendre ses clients, personnes physiques ou morales, en justice, en plaidant pour faire valoir leurs droits et, plus généralement, pour les représenter. Par ailleurs, l'avocat s'acquitte d'une fonction de conseil mais aussi de rédacteur d'actes.
				</p>
				<p>
					Les avocats représentent et défendent leurs clients dans des affaires aussi diverses qu’un divorce, une succession, un litige, un vol, un crime, etc. Et, de fait, certains avocats se spécialisent : avocat d'affaires, avocat en droit du travail, avocat en droit de la famille.
				</p>
				<p>
					Vous pouvez retouvez 68 avocats à l'Ordre des avocats: Esplanade du Palais de Justice, 08000 CHARLEVILLE-MÉZIÈRES
				<p>
			</div>
			
		</article>
		
		<article class="notaire">
			<h2>Les Notaires</h2>
			<div>
				<p>
					En droit français, le notaire est un officier public, nommé par décision du Garde des Sceaux. Il est, à ce titre, investi d’une délégation de puissance publique. Le notaire éclaire le consentement des parties et a le pouvoir de conférer un caractère authentique à tous les actes qui lui sont demandés. Il assure également la conservation des minutes.
				</p>
			</div>
			
		</article>

		<article class="huissier">
			<h2>Les huissiers</h2>
			<div>
				<p>
					L'huissier de justice est un officier exécutant des missions d'ordre légal.
				</p>
				<p>
					Les actes d'huissier de justice sont classés en plusieurs catégories dont il est bon de donner ici un premier aperçu :
				</p>
				<ul>
					<li>
						La sommation de payer est un acte amiable délivré avant toute procédure valant mise en demeure.
					</li>
					<li>
						Les procès-verbaux de saisie conservatoire de créances, de meubles corporels sont des exemples de mesures conservatoires qui peuvent être diligentés avec ou sans autorisation judiciaire selon les cas. Ces mesures conservatoires permettent de prendre une garantie à l'encontre de son débiteur avant qu'une décision de justice soit rendue.
					</li>
					<li>
						L'assignation, la citation sont des actes qui informent le justiciable qu'un procès lui est intenté. Les assignations comportent des mentions obligatoires telles que les modalités de représentation, les prétentions de son adversaire...
					</li>
				</ul>
			</div>
		</article>
	</div>
</main>
HTML;

echo($html);
require("include/footer.php");