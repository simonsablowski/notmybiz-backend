<?php
$GalleryAlbums = array();
foreach ($Objects as $Object) {
	$GalleryAlbums[$Object->getAlbumId()] = $Object->getAlbum();
}
$parameterSet = $this->getConfiguration('parameterSetImages');
$imagePathPattern = sprintf('%sImage:show:%%s:%d:%d:%s:%s:%d', $this->getApplication()->getConfiguration('frontendUrl'), $parameterSet['width'], $parameterSet['height'], $parameterSet['crop'] ? 'true' : 'false', $parameterSet['grey'] ? 'true' : 'false', $parameterSet['quality']);
?>
<? $this->displayView('components/header.php'); ?>
			<h1>
				<a href="<? echo $this->link($ObjectName . '/index'); ?>" title="<? echo $this->localize($ObjectName); ?>"><? echo $this->localize($ObjectName); ?></a>
			</h1>
			<div class="options">
				<a class="option" href="<? echo $this->link($ObjectName . '/create'); ?>" title="<? echo $this->localize('Create'); ?>"><? echo $this->localize('Create'); ?></a>
			</div>
			<table class="content">
				<thead class="head">
					<tr>
						<th class="number">
							<? echo $this->localize('Position'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('Image'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('File Name'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('Title'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('Description'); ?>

						</th>
						<th class="field">
							<? echo $this->localize('Preview'); ?>

						</th>
						<th class="option">
							&nbsp;
						</th>
						<th class="option">
							&nbsp;
						</th>
					</tr>
				</thead>
				<tbody class="body accordeon">
<? foreach ($GalleryAlbums as $GalleryAlbum): ?>
					<tr id="group<? echo $GalleryAlbum->getId(); ?>" class="divider row">
						<td class="field data" colspan="6">
							<? echo $GalleryAlbum->getTitle(); ?> (<? echo $GalleryAlbum->getKey(); ?>): <em><? echo $this->localize('%d ' . (($count = count($GalleryAlbum->getImages())) == 1 ? $this->localize('image') : $this->localize('images')), $count); ?></em>
						</td>
						<td class="field data right" colspan="2">
							<a href="<? echo $this->link('GalleryAlbum/update/' . implode('/', $GalleryAlbum->getPrimaryKeyValue())); ?>" title="<? echo $this->localize('Update'); ?>"><? echo $this->localize('Update'); ?></a>
						</td>
					</tr>
<? foreach ($GalleryAlbum->getImages() as $n => $Object): ?>
					<tr class="<? echo $n % 2 ? 'odd' : 'even'; ?> group<? echo $GalleryAlbum->getId(); ?> row">
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>number">
							<? echo $Object->getPosition(); ?> <small>(<? echo $n + 1; ?>)</small>
						</td>
						<td class="main data field">
							<img src="<? echo sprintf($imagePathPattern, urldecode($Object->getFileName())); ?>" alt="<? echo $Object->getTitle(); ?>" title="<? echo $Object->getTitle(); ?>"/>
						</td>
						<td class="main data field">
							<? echo $Object->getFileName(); ?>

						</td>
						<td class="main data field">
							<? echo $Object->getTitle(); ?>

						</td>
						<td class="main data field">
							<? echo $Object->getDescription(); ?>

						</td>
						<td class="field">
							<? echo $this->localize($Object->getPreview()); ?>

						</td>
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>option">
							<a href="<? echo $this->link($ObjectName . '/update/' . implode('/', $Object->getPrimaryKeyValue())); ?>" title="<? echo $this->localize('Update'); ?>"><? echo $this->localize('Update'); ?></a>
						</td>
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>option">
							<a href="<? echo $this->link($ObjectName . '/delete/' . implode('/', $Object->getPrimaryKeyValue())); ?>" title="<? echo $this->localize('Delete'); ?>"><? echo $this->localize('Delete'); ?></a>
						</td>
					</tr>
<? endforeach; ?>
<? endforeach; ?>
				</tbody>
			</table>
<? $this->displayView('components/footer.php'); ?>