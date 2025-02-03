<!-- ?php/*
$handle = opendir(dirname(realpath(__FILE__)).'/images1/');
while($file = readdir($handle)){
  if($file !== '.' && $file !== '..'){
    echo '<img style="width:100% " class="img-fluid" src="/images1/'.$file.'" border="0" />';
  }
}*/
?>  -->