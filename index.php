<?php
require_once 'pr_1_var_4.php';

$adress = new \Veiw\MailAdress();
echo $adress->getIndex();
echo  $adress->getStreet();

$adress=null;
if(null === $adress){
    echo "Объект уничтожен";
}else if(null != $adress){
    echo "Объект не удалён";
}
?>

