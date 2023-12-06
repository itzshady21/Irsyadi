<!-- 
    logic error
     script error
     human error
 -->

 <!-- 
    ~ sd -1 = cuaca ekstrem
    0 sd 31 = cuaca dingin
    32 sd 99 = cuaca panas
    100 sd ~ = cuaca ekstrem
  -->

  <?php
        $suhu = 32;
        if($suhu>=100 or $suhu<0){
            echo "Cuaca Ekstrem";
        }elseif ($suhu>=32){
            echo "Cuaca Panas";
        }elseif ($suhu<32){
        echo "Cuaca Dingin";
        }
  ?>