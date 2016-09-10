<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comp 4711 Lab 1 by Gerard Ng</title>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <br>
            <div class="jumbotron">
                <h1><i class=" glyphicon glyphicon-list-alt"></i> BCIT Student Records</h1>
                <p>This is personal information. By reading this, you are agreeing to a non-disclosure contract.
                    You may not use any information gathered here for commercial use.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Students <span class="badge">3</span></a></p>
            </div>
            <hr>
            <h3><?php
                include('student.php');

                $students = array();
                /* added first student */
                $first = new Student();
                $first->surname = "Doe";
                $first->first_name = "John";
                $first->add_email('home','john@doe.com');
                $first->add_email('work','jdoe@mcdonalds.com');
                $first->add_grade(65);
                $first->add_grade(75);
                $first->add_grade(55);
                $students['j123'] = $first;

                /* added second student */
                $second = new Student();
                $second->surname = "Einstein";
                $second->first_name = "Albert";
                $second->add_email('home','albert@braniacs.com');
                $second->add_email('work1','a_einstein@bcit.ca');
                $second->add_email('work2','albert@physics.mit.edu');
                $second->add_grade(95);
                $second->add_grade(80);
                $second->add_grade(50);
                $students['a456'] = $second;

                /* added myself as a student */
                $third = new Student();
                $third->surname = "Ng";
                $third->first_name = "Gerard";
                $third->add_email('home','gerard@gerardng.com');
                $third->add_email('school','gerard@bcit.ca');
                $third->add_grade(99);
                $third->add_grade(98);
                $third->add_grade(99);
                $third->add_grade(100);
                $third->add_grade(98);
                $students['a008'] = $third;

                ksort($students);	// one of the many sort functions

                /* for each $student object in $students array, print out $student's toString method */
                foreach($students as $student)
                        echo $student->toString() . '<hr>';
            ?></h3>
        </div>
    </body>
</html>
