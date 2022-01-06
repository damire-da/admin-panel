<?php

function students_all($link){
    $query = "SELECT * FROM students";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $length = mysqli_num_rows($result);
    $students = array();

    for($i = 0; $i < $length; $i++){
        $row = mysqli_fetch_assoc($result);
        $students[] = $row;
    }

    return $students;
};


function student_add($link, $last_name, $birthday,
$gender, $team, $facult, $place_work, $city){
    $last_name = trim($last_name);
    $gender = trim($gender);
    $team = trim($team);
    $facult = trim($facult);
    $place_work = trim($place_work);
    $city = trim($city);
    
    if($last_name == '')
        return false;
    
    $req = "INSERT INTO students (last_name, birthday, gender,
    team, facult, place_work, city) VALUES ('%s','%s',
    '%s', '%s', '%s', '%s', '%s')";

    $query = sprintf($req,
    mysqli_real_escape_string($link, $last_name),
    mysqli_real_escape_string($link, $birthday),
    mysqli_real_escape_string($link, $gender),
    mysqli_real_escape_string($link, $team),
    mysqli_real_escape_string($link, $facult),
    mysqli_real_escape_string($link, $place_work),
    mysqli_real_escape_string($link, $city));

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;
};

function student_get($link, $id){
    $query = sprintf("SELECT * FROM students WHERE id='%d'",
    (int)$id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    
    $student = mysqli_fetch_assoc($result);

    return $student;

};
function student_edit($link, $id, $last_name, $birthday,
$gender, $team, $facult, $place_work, $city){
    $id = (int)$id;
    $last_name = trim($last_name);
    $birthday = trim($birthday);
    $gender = trim($gender);
    $team = trim($team);
    $facult = trim($facult);
    $place_work = trim($place_work);
    $city = trim($city);

    if($last_name == '')
        return false;
    
    $req = "UPDATE students SET last_name='%s', birthday='%s',
    gender='%s', team='%s', facult='%s', place_work='%s',
    city='%s' WHERE id='%d'";
    $query = sprintf($req,
    mysqli_real_escape_string($link, $last_name),
    mysqli_real_escape_string($link, $birthday),
    mysqli_real_escape_string($link, $gender),
    mysqli_real_escape_string($link, $team),
    mysqli_real_escape_string($link, $facult),
    mysqli_real_escape_string($link, $place_work),
    mysqli_real_escape_string($link, $city),
    $id);

    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
                        
};

function student_remove($link, $id){
    $id = (int)$id;

    if($id == 0)
        return false;
    
    $query = sprintf("DELETE FROM students WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
};

?>