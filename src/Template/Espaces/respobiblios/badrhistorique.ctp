<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Historiques
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">La liste des emprunts</h3>
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('chercher par numInventaire') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('titre') ?></th>
              <th><?= $this->Paginator->sort('numéro Inventaire') ?></th>
              <th><?= $this->Paginator->sort('utilisateur') ?></th>
              <th><?= $this->Paginator->sort('fonction') ?></th>
              <th><?= $this->Paginator->sort('identifiant') ?></th>
              <th><?= $this->Paginator->sort('dateEmprunte') ?></th>
              <th><?= $this->Paginator->sort('date Retour') ?></th>
            </tr>
            <?php if (isset($emprunt)) {
            for ($i=0;$i<count($emprunt);$i++) { ?>
              <tr>
                <td><?= $emprunt[$i]['titre'] ?></td>
                <td><?= $emprunt[$i]['numInventaire'] ?></td>
                <td><?= $emprunt[$i]['username'] ?></td>
                <td><?= $emprunt[$i]['role'] ?></td>
                <td><?= $emprunt[$i]['id'] ?></td>
                <td><?= $emprunt[$i]['dateEmprunte'] ?></td>
                <td><?= $emprunt[$i]['dateRetour'] ?></td>
              </tr>
            <?php }} ?>
          </table>
        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->