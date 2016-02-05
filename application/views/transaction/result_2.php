
<div class="col-md-5">

    <?php if($result->success): ?>

        <div class="panel panel-success">
            <div class="panel-heading">
              <h1 class="panel-title">Full Reponse Log</h1>

              <?php var_dump($result->transaction); ?>

    <?php else: ?>

        <div class="panel panel-danger">
            <div class="panel-heading">
              <h1 class="panel-title">Full Reponse Log</h1>

              <?php print_r($result->errors->deepAll()); ?>

    <?php endif; ?>


    </div>
</div>
