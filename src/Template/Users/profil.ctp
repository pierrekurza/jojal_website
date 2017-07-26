<?php echo $this->Html->script(['Tabs.js'], array('inline' => false)); ?>
<div class="UserWrapper">
	<div class="UserBanner">
		<?= $this->Html->image('DefaultBanner.png', ['width'=>'1270px','height'=>'350px']); ?>
	</div>
	<div class="UserPicture">
		<?= $this->Html->image('DefaultPP.png', ['width'=>'100%','height'=>'100%']); ?>
	</div>
	<div class="UserName">
		<h2>Joseph Joestar<!--: <?= $nom ?>--></h2>
		<p>&nbsp;jojo@jojo.jojo<!-- <?= $mail ?>--></p>
	</div>
	<div class="ProfileInfo">
		<div class="row">
    	<div class="col s12">
      	<ul class="tabs tabs-fixed-width tabs">
        	<li class="tab col s3"><a class="active" href="#about">A propos de moi</a></li>
        	<li class="tab col s3"><a href="#contact">Me contacter</a></li>
        	<li class="tab col s3"><a href="#other">Autres</a></li>
      	</ul>
    	</div>
    <div id="about" class="col s12">
			<table class="striped centered">
	        <thead>
	          <tr>
	              <th>Pseudo</th>
	              <th>Date de naissance</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>Joseph Joestar<!--<?= $nom ?>--></td>
	            <td>00/00/000<!--<?= $birth ?>--></td>
	          </tr>
	        </tbody>
	      </table>
		</div>

    <div id="contact" class="col s12">
			<table class="striped centered">
	        <thead>
	          <tr>
	              <th>mail</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>jojo@jojo.jojo<!--<?= $mail ?>--></td>
	          </tr>
	        </tbody>
	      </table>
    <div id="other" class="col s12">
			<table class="striped centered">
	        <thead>
	          <tr>
	              <th>...</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>...</td>
	          </tr>
	        </tbody>
	      </table>
		</div>
  	</div>
	</div>
</div>
