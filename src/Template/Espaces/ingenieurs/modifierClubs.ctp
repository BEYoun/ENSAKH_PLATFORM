<?php
/**
  * @var \App\View\AppView $this
  */
?>
<section class="content-header">
  <h1>
    Parascolaire
    <small><?= __('') ?></small>
  </h1>
  <ol class="breadcrumb">
    <li>
    <?= $this->Html->link('<i class="fa fa-dashboard"></i> '.__('Retour'), ['action' => 'afficherClubs'], ['escape' => false]) ?>
    </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Modifier') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($club, array('type' => 'file')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('nom',array('label'=>"Nom du club "));
            echo $this->Form->input('mission',array('label'=>"Mission "));
            echo $this->Form->input('datePost',array('label'=>"Date"));
            echo $this->Form->input('mot',array('label'=>"Mot du teamleader"));
            echo $this->Form->input('texte',array('label'=>"Presentation du club"));
           echo $this->Form->input('logo',array('type'=>'file'));
            
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Enregistrer')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
