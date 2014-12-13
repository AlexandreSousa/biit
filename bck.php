 <?php if($qt_busca > 0){ ?>
    <hr>

        <?php
        while($row = $qr_busca->fetch_array()){
        ?>

           <b><a href="http://<?php echo $row[2];?> " target="_blank" style="font-size: 12px; color: #2a6496;"><?php echo $row[1].'<br>'; ?></a> </b>
            <i><font size="2"> <?php echo utf8_encode($row[2]).'<br>'; ?></font></i>
           <b><a><a href="http://<?php echo $row[2];?>" target="_blank"  style="font-size: 12px; color: green;"><?php echo $row[2].'<br>'; ?></a> </b>

       <?php
        }
        ?>

        <?php }else{
            ?>
        </div>
        <?
        }
        ?>
    <?php ?>