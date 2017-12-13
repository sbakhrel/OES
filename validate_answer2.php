<?php 
include 'tokenize.php';
if(!isset($_POST['qno'])){
}else{
$qno=$_POST['qno'];
echo $qno;
     $connection=makeconnection();
    $sql="SELECT qno,question,Must_Include,Answer FROM word_questions where qno='$qno'";
	$result =mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        	$qid=$row['qno'];  
        	$question=$row["question"];
            $Must_Include=$row['Must_Include'];
            $answer_db=$row['Answer'];
            echo "<h1>".$question."</h1>";
            echo "<br>";
            
        }
    }
    echo "<h3>Ans:\t".$answer_db."</h3><br>";
	$token_answer_db=tokenize($Must_Include);
    /*echo "<br> The Database answer after tokenization answer is:  ";
    for ($i=0; $i <count($token_answer_db) ; $i++) { 
        echo $i."\t";
        printf($token_answer_db[$i]);
        echo "<br>";
    }*/
	$stem_answer_db=stemming($token_answer_db);
	$stem_len_db=count($stem_answer_db);
   /* echo "<br> The Stemmed database answer is:  ";
    for ($i=0; $i <$stem_len_db ; $i++) { 
        echo $i."\t";
        printf($stem_answer_db[$i]);
        echo "<br>";
    }*/
	$db_length=count(array_filter($stem_answer_db));

	$answer_user=get_user_ans();
    echo "<h3>".$answer_user."</h3>";
	$token_answer_user=tokenize($answer_user);
    $token_len_user=count($token_answer_user);
    echo "<br><h3>Ans:\t The tokenized answer is: </h3><br> ";
    for ($i=0; $i <$token_len_user ; $i++) { 
        echo"<h4>Token No.:".$i."\t";
        printf($token_answer_user[$i]);
        echo "</h4><br>";
    }
	$stem_answer_user=stemming($token_answer_user);
    echo "<br><h3>Ans:\t The Stemmed answer is:  </h3><br>";
    for ($i=0; $i <count($stem_answer_user ); $i++) { 
        echo"<h4>Stemmed No.:".$i."\t";
        printf($stem_answer_user[$i]);
        echo "</h4><br>";
    }
	$stem_len_user=count($stem_answer_user);
	
    
    $sum=0;
    for ($i=0; $i <$stem_len_db ; $i++) { 
        for ($j=0; $j < $stem_len_user; $j++) {          	
         	similar_text( $stem_answer_user[$j],$stem_answer_db[$i] ,$percent);
        	if( $percent>80)
            {
                $sum=$sum+$percent;
            }
           
        }
       
    } 
  $avg_score=$sum/$db_length;
  echo $avg_score;
  $marks=(($avg_score/100)*2);
            echo "Obtained marks out of total 2 is:";
            $marks= round( $marks, 1, PHP_ROUND_HALF_UP);
                if($marks<=0.3)
                {
                    $marks=0;
                }
                elseif ($marks>0.3 && $marks<=0.7) {
                   $marks=0.5;
                }
                    elseif($marks>0.7&& $marks<=1.2){
                        $marks=1.0;
                    }
                    elseif($marks>1.2 && $marks<=1.7){
                        $marks=1.5;
                     }
                else{
                    $marks=2;
                }
            echo $marks;
       
}
?>