<?php
namespace studentGradeChecker;


function StudentGrade($note){
  if($note >= 60 ){
    return 'Primera divisió';
  } elseif ($note >= 45 && $note <= 59){
    return 'Segona divisió';
  } elseif ($note >= 33 && $note <= 44){
    return 'Tercera divisió';
  } else {
    return 'Suspès';
  }
}
