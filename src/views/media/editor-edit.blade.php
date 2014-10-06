<div class="item">
<input type="hidden" value="{{ $media->order }}">
	<div class="visu"><img width=100 height=100 src="{{$media->icon() }}" alt=""></div>
</div>
<table>
	<tr>
	<td></td>
	<td>Nom du fichier : XXX.jpg <br />Taille de l'image</td>
	</tr>
	<tr>
		<td>Titre</td>
		<td>Nom de l'image</td>
	</tr>
	<tr>
		<td>Text alternatif</td>
		<td>Le texte alternatif de l'image</td>
	</tr>
	<tr>
		<td>Cible du lien</td>
		<td>/mon/chemin/vers/image</td>
	</tr>
	<tr>
		<td>Alignement</td>
		<td>Aucun</td>
		<td>Gauche</td>
		<td>centre</td>
		<td>Droit</td>
	</tr>
	<tr>
		<td>Insérer dans l'article</td>
		<td>supprimer</td>
	</tr>
</table>
