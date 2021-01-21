<?php
                // to create upload path
                echo __DIR__;
                $filepath = __DIR__ . "/" ."upload/"; 
                echo $filepath;
                $fileup = $filepath .  $_FILES['importfilesite']['name'];
                // end create 
                $image = "../upload/" . $_FILES['importfilesite']['name']; // image path
                $extensions = array("gif","png","jpg","jpeg"); // my extension 
                $uploadExten = pathinfo($_FILES['importfilesite']['name'])['extension']; // uploaded file extension
                if ( in_array($uploadExten,$extensions) && $_FILES['importfilesite']['size'] < 300000){
                    move_uploaded_file($_FILES['importfilesite']['tmp_name'],$fileup);
                    // echo  "File Uploaded Seccessfully";
                }
                else{
                    echo "sorry we need image only";
                }