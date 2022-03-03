<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra-Kai-page-fan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../issets/css/style.css">
<link rel="stylesheet" href="../issets/css/bootstrap.css">
</head>
<?php


if(isset($_POST['kata'])){
    $kara = array(
        "Defence"=>"1.png",
        "Description" =>"Les katas se retrouvent dans différents arts martiaux japonais comme le judo, le karaté, le kendo ou encore l'aïkido (qui ne s'enseigne quasiment que sous la forme de katas, que ce soit à mains nues ou aux armes), et au théâtre dans le nô, le kabuki ou encore le",
        "Video"=> "https://player.vimeo.com/external/237438713.sd.mp4?s=99e01a20eb2f8fa034908e7b66a3cd677e1b0eb6&profile_id=164",  
    );
    foreach(array($kara) as $tableau){
    
        echo '<p><img src ="../issets/img/' . $tableau['Defence'] .'" height="250px" width="300px" /></p>';
        echo '<p><video controls loop src ="https://player.vimeo.com/external/237438713.sd.mp4?s=99e01a20eb2f8fa034908e7b66a3cd677e1b0eb6&profile_id=164"'. $tableau['Video'].'" height="250px" width="500px" /></p>';
        echo $tableau['Description'];
       
    };
}

if(isset($_POST['kata2'])){
    $kara2 = array(
        "Genoux-haut"=>"2.png",
        "Description" =>"teettttttttttttttttttttttttttttttt",
        "Video"=> "https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164",  
    );
    foreach(array($kara2) as $tableau2){
        echo '<p><img src ="../issets/img/' . $tableau2['Genoux-haut'] .'" height="250px" width="500px" /></p>';
        echo '<p><video controls loop src ="https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164"'. $tableau2['Video'].'" height="250px" width="500px" /></p>';
        echo $tableau2['Description'];
       
    }
}
if(isset($_POST['kata3'])){
    $kara3 = array(
        "Protection-point"=>"3.png",
        "Description" =>"teettttttttttttttttttttttttttttttt",
        "Video"=> "https://www.bing.com/videos/search?q=video+kata&&view=detail&mid=F88660592C0DEE7B39F1F88660592C0DEE7B39F1&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dvideo%2Bkata%26FORM%3DHDRSC3",  
    );
    foreach(array($kara3) as $tableau3){
        echo '<p><img src ="../issets/img/' . $tableau3['Protection-point'] .'" height="250px" width="500px" /></p>';
        echo '<p><video controls loop src ="https://www.bing.com/videos/search?q=video+kata&&view=detail&mid=F88660592C0DEE7B39F1F88660592C0DEE7B39F1&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dvideo%2Bkata%26FORM%3DHDRSC3"'. $tableau3['Video'].'" height="250px" width="500px" /></p>';
        echo $tableau3['Description'];
       
    }
}
if(isset($_POST['kata4'])){
    $kara4 = array(
        "Genoux-haut"=>"4.png",
        "Description" =>"teettttttttttttttttttttttttttttttt",
        "Video"=> "https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164",  
    );
    foreach(array($kara4) as $tableau4){
        echo '<p><img src ="../issets/img/' . $tableau4['Genoux-haut'] .'" height="250px" width="500px" /></p>';
        echo '<p><video controls loop src ="https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164"'. $tableau4['Video'].'" height="250px" width="500px" /></p>';
        echo $tableau4['Description'];
       
    }
}
if(isset($_POST['kata5'])){
    $kara5 = array(
        "Genoux-haut"=>"5.png",
        "Description" =>"teettttttttttttttttttttttttttttttt",
        "Video"=> "https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164",  
    );
    foreach(array($kara5) as $tableau5){
        echo '<p><img src ="../issets/img/' . $tableau5['Genoux-haut'] .'" height="250px" width="500px" /></p>';
        echo '<p><video controls loop src ="https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164"'. $tableau5['Video'].'" height="250px" width="500px" /></p>';
        echo $tableau1['Description'];
       
    }
}
if(isset($_POST['kata6'])){
    $kara6 = array(
        "Genoux-haut"=>"6.png",
        "Description" =>"Les katas se retrouvent dans différents arts martiaux japonais comme le judo, le karaté, le kendo ou encore l'aïkido (qui ne s'enseigne quasiment que sous la forme de katas, que ce soit à mains nues ou aux armes), et au théâtre dans le nô, le kabuki ou encore le",
        "Video"=> "https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164",  
    );
    foreach(array($kara6) as $tableau6){
   
        echo '<div class="kata6">';
        echo '<p class="test"><img src ="../issets/img/' . $tableau6['Genoux-haut'] .'" height="250px" width="300px" /></p>';
        echo '<p class="test"><video controls loop src ="https://player.vimeo.com/external/534725128.sd.mp4?s=f56295d1047d17162340a6ec1c5e62dc84474330&profile_id=164"'. $tableau6['Video'].'" height="250px" width="500px" /></p>';
        echo '<p class="test">' . $tableau6['Description'] .'</p>';
        echo'</div>';
      
      
    }
}

?>

<div class="text-center">
        <a href="../index.php" class="mt-3 btn-outline-danger">Retour</a>
        <div>
        
</html>