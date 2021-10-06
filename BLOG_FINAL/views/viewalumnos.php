<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$estado_session = session_status();
if ($estado_session == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['loggedUserName'])) {
    ?>
    <p>
    <br>
    <h4>Alumnos Inscritos</h4>
    <table class="striped ">
        <thead class ="black white-text">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Sexo</th>
                <th></th>            
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sqlAlumnos as $alumnoview) {
                ?>
                <tr>
                    <td><?php echo $alumnoview->id; ?></td>
                    <td><?php echo $alumnoview->nombre; ?></td>
                    <td><?php echo $alumnoview->sexo; ?></td>
                    <td>
                        <?php if ($alumnoview->sexo == 'M') { ?>
                            <i class = "material-icons prefix blue-text">male</i>
                        <?php } else {
                            ?>
                            <i class = "material-icons prefix pink-text">female</i>
                        <?php }
                        ?>
                    </td>
                    <td>
                        <button class="btn waves-effect waves-light pink" type="submit" name="action">
                                    <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>"
                                       <i class="material-icons right white-text">delete</i></a>
                        </button>                    
                        <button class="btn waves-effect waves-light pink" type="submit" name="action">
                                    <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
                                        <i class="material-icons right white-text">edit</i></a>
                        </button>                 
                    </td>

                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <br><!-- comment -->
    <br>
<?php } ?>
