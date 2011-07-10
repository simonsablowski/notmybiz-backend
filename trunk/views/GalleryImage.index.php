<?php
$GalleryAlbums = array();
foreach ($Objects as $Object) {
	$GalleryAlbums[$Object->getAlbumId()] = $Object->getAlbum();
}
?>
<? $this->displayView('components/header.php'); ?>
			<h1>
				<a href="<? echo $this->getConfiguration('baseUrl') . $ObjectName; ?>/index" title="<? echo $this->localize($ObjectName); ?>"><? echo $this->localize($ObjectName); ?></a>
			</h1>
			<div class="options">
				<a class="option" href="<? echo $this-getConfiguration('baseUrl') . $ObjectName; ?>/create" title="<? echo $this->localize('Create'); ?>"><? echo $this->localize('Create'); ?></a>
			</div>
			<table class="content">
				<thead class="head">
					<tr>
						<th class="number">
							<? echo $this->localize('Position'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('File Name'); ?>

						</th>
						<th class="main field">
							<? echo $this->localize('Title'); ?>

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
						<td class="field data" colspan="8">
							<? echo $GalleryAlbum->getTitle(); ?> (<? echo $GalleryAlbum->getKey(); ?>): <em><? echo $this->localize('%d ' . (($count = count($GalleryAlbum->getImages())) == 1 ? $this->localize('image') : $this->localize('images')), $count); ?></em>
						</td>
					</tr>
<? foreach ($GalleryAlbum->getImages() as $n => $Object): ?>
					<tr class="<? echo $n % 2 ? 'odd' : 'even'; ?> group<? echo $GalleryAlbum->getId(); ?> row">
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>number">
							<? echo $Object->getPosition(); ?>

						</td>
						<td class="main data field">
							<? echo $Object->getFileName(); ?>

						</td>
						<td class="main data field">
							<? echo $Object->getTitle(); ?>

						</td>
						<td class="field">
							<? echo $this->localize($Object->getPreview()); ?>

						</td>
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>option">
							<a href="<? echo $this->getConfiguration('baseUrl') . $ObjectName; ?>/update/<? echo implode('/', $Object->getPrimaryKeyValue()); ?>" title="<? echo $this->localize('Update'); ?>"><? echo $this->localize('Update'); ?></a>
						</td>
						<td class="<? if ($n + 1 == count($Objects)): ?>last <? endif; ?>option">
							<a href="<? echo $this->getConfiguration('baseUrl') . $ObjectName; ?>/delete/<? echo implode('/', $Object->getPrimaryKeyValue()); ?>" title="<? echo $this->localize('Delete'); ?>"><? echo $this->localize('Delete'); ?></a>
						</td>
					</tr>
<? endforeach; ?>
<? endforeach; ?>
				</tbody>
			</table>
<? $this->displayView('components/footer.php'); ?>