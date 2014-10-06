{{ $media->thumb() }}

<div class="item">
<input type="hidden" value="{{ $media->order }}">
	
	<div class="visu" style="float:left;padding-right:30px;">
		<img width=100 height=100 src="{{ $media->icon() }}" alt="">
	</div>
	<strong>Nom du fichier</strong> :{{ $media->name() }}<br />Taille de l'image
</div>
<br style="clear:both" />
<table>

	<tr>
		<td>Titre</td>
		<td>{{ $media->name() }} </td>
	</tr>
	<tr>
		<td>Text alternatif</td>
		<td>Le texte alternatif de l'image</td>
	</tr>
	<tr>
		<td>Cible du lien</td>
		<td>{{ $media->path }}</td>
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
