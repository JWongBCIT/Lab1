<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Include student class and create an array of students
        include('Student.php');
        $students = array();

        //Create first student and add info
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        //Create second student and add info
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        //Add myself as a student
        $third = new Student();
        $third->surname = "Wong";
        $third->first_name = "Jason";
        $third->add_email('home', 'jason@wong.com');
        $third->add_email('work', 'j_wong@bcit.ca');
        $third->add_grade(95);
        $third->add_grade(95);
        $third->add_grade(98);
        $students['j987'] = $third;
        
        
        //Sort the students
        ksort($students);
        
        //Print all students
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
