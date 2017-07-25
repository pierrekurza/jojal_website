<?php echo $this->Html->script(['Tabs.js'], array('inline' => false)); ?>

<div class="UserBanner">
	<?= $this->Html->image('DefaultBanner.png', ['width'=>'1270px','height'=>'350px']); ?>
</div>
<div class="UserPicture">
	<?= $this->Html->image('DefaultPP.png', ['width'=>'220px','height'=>'219px']); ?>
</div>
<div class="UserName">
	<h2>Joseph Joestar</h2>
	<p>jojo@jojo.jojo</p>
</div>
<div class="ProfileInfo">
	<div class="tab">
		<button class="tablinks" onclick="Tab(event, 'about')">A propos de moi</button>
		<button class="tablinks" onclick="Tab(event, 'contact')">Me contacter</button>
		<button class="tablinks" onclick="Tab(event, 'other')">Autres</button>
	</div>

	<div id="about" class="tabcontent">
		<h3>A propos de moi</h3>
		<p>lorem ipsum</p>
	</div>

<div id="contact" class="tabcontent">
		<h3>Me contacter</h3>
		<p>lorem ipsum</p> 
	</div>

<div id="other" class="tabcontent">
		<h3>Autres</h3>
		<p>lorem ipsum</p>
	</div>
</div>


