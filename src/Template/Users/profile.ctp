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
	<div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">A propos de moi</a></li>
        <li class="tab col s3"><a href="#test2">Me contacter</a></li>
        <li class="tab col s3"><a href="#test3">Autres</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1
	</div>
    <div id="test2" class="col s12">Test 2
	</div>
    <div id="test3" class="col s12">Test 3
	</div>
  </div>
</div>


