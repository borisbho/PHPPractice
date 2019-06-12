<?php 

/**
 * This is the controller part
 */
include_once './Repos/StudentRepo.php';
    $student_repo = new StudentRepo();
    $students = $student_repo->getStudents();    
?>

<!-- this is the view part -->

<?php
include_once './header.php'
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                        <!-- the ?= is generally not used due to readability issues --> 
                            <td><?=$student->getId();?></td>
                            <td><?=$student->name;?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include_once './footer.php';
/**
 * When you end with a <?php statment, some recommend (and others even require)
 * that you not end the block, i.e. omit the ?>.  This will make php cut off
 * any extra whitespace at the end of the file.
 */