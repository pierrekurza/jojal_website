<?php echo $this->Html->script(['toast.js'], array('inline' => false)); ?>
<div class="UserWrapper" onload="Materialize.toast('Scrollez pour voir la suite du profil', 8000)">
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
        	<li class="tab col s3"><a class="active" href="#about">A propos</a></li>
        	<li class="tab col s3"><a href="#contact">contact</a></li>
        	<li class="tab col s3"><a href="#others">Autres</a></li>
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
	            <td>00/00/0000<!--<?= $birth ?>--></td>
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
		</div>
    <div id="others" class="col s12">
			<table class="striped centered">
	        <thead>
	          <tr>
	              <th>Autres</th>
	          </tr>
	        </thead>
	        <tbody>
	          <tr>
	            <td>Valeur</td>
	          </tr>
	        </tbody>
	      </table>
		</div>
	</div>
</div>
