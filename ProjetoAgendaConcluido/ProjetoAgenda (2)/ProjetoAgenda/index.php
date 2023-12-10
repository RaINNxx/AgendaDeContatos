<?php
      include_once("templates/header.php");
   ?>
   <div class="container">
    <!-- isset($printMsg) verifica se a variável $printMsg está definida, ou seja, se foi declarada e possui algum valor.
     && é o operador lógico "E" que conecta duas condições.
     $printMsg != '' verifica se o valor de $printMsg não é uma string vazia. -->
      <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?> </p>
      <?php endif;?> 

      <h1 id="main-title">Minha Agenda</h1>

      <?php if(count($contacts) > 0): ?>
        <table class="table" id="contacts-table">
          <thead>
            <tr>
              <th scoppe="col">#</th>
              <th scoppe="col">Nome</th>
              <th scoppe="col">Telefone</th>
              <th scoppe="col"></th>
            </tr>
          </thead>

          <tbody>
          <!--  Inicia o loop foreach, que percorre cada elemento do array $contacts e atribui o valor de cada elemento à variável $contact. -->
            <?php foreach($contacts as $contact): ?>
                <tr>
                  <td scope="row"><?= $contact["id"] ?></td>
                  <td scope="row"><?= $contact["name"] ?></td>
                  <td scope="row"><?= $contact["phone"] ?></td>
                  <td class="action">
                    <a href=" <?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                    <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                    <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php " method="POST">

                      <input type="hidden" name="type" value="delete">
                      <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                      <button type="submit" ><i class="fas fa-times delete-icon"></i></button>
                    </form>

                  </td>
                </tr>
           <?php endforeach; ?>

              
          </tbody>
        </table>
        <?php else: ?>
          <p id="empty-list-text">Ainda não ha contatos na sua agenda, <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar</a>.</p>
          <?php endif; ?>

  </div>
  <?php

    include_once("templates/footer.php");

  ?>