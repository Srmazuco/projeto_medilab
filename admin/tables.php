<?php require './components/header.php'; ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <?php

    require '../config.php';

    $sql = $pdo->prepare("SELECT * FROM consultas_marcadas");
    $sql->execute();
    $info = $sql->fetchAll();
    if ($sql->rowCount() > 0) {
        foreach ($info as $key => $value) {
            echo 'Nome: ' . $value['nome'];
        }
    }

    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">CRM</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require '../config.php';

            $sql = $pdo->prepare("SELECT * FROM login");
            $sql->execute();
            $info = $sql->fetchAll();
            if ($sql->rowCount() > 0) {
                foreach ($info as $key => $value) :



            ?>
                    <tr>
                        <th scope="row"><?php echo $value['id']; ?></th>
                        <td><?php echo $value['user']; ?></td>
                        <td><?php echo $value['crm']; ?></td>
                        <td><?php echo $value['senha']; ?></td>
                    </tr>
            <?php
                endforeach;
            }
            ?>
        </tbody>
    </table>
    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Departamento</th>
                                            <th>Mensagem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            require '../config.php';
                                            $listando = $pdo->prepare("SELECT * INTO consultas_marcadas");
                                            $listando->execute();
                                            $dados = $listando->fetchAll();
                                            if ($listando->rowCount() > 0) {
                                                foreach ($dados as $key => $value) {
                                                    echo '<td>' . $value['nome'] . '</td>';
                                                }
                                            }
                                            ?>
                                        </tr>
                                        <?php

                                        // require '../config.php';

                                        // $listando = $pdo->prepare("SELECT * INTO consultas_marcadas");
                                        // $listando->execute();

                                        // $dados = $listando->fetchAll();

                                        // if($listando->rowCount() > 0){
                                        //     foreach ($dados as $key => $value){
                                        //         echo '<tr>';
                                        //             echo '<td>'. $value['id'] .'</td>'; 
                                        //             echo '<td>'. $value['nome'] .'</td>'; 

                                        //         echo '</tr>';
                                        //     }
                                        // }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>