<?
    $mysqli = @new mysqli('ИП БД','ИМЯ БД','ПАРОЛЬ','ИМЯ БД');  //ДАННЫЕ ОТ БД//         ИП | ПОЛЬЗОВАТЕЛЬ | ПАРОЛЬ | ИМЯ БД
    $mysqli->set_charset("utf8");

    $sql = "SELECT count(*) FROM `accounts` WHERE `online` < 1001";		    //ТУТ МОЖЕШЬ НИЧЕГО НЕ ТРОГАТЬ
    $result = $mysqli->query($sql);
    $rows = $result->fetch_row();
    $online = $rows[0] + 0;

    $sql = "SELECT count(*) FROM `accounts`";        //ТУТ МОЖЕШЬ НИЧЕГО НЕ ТРОГАТЬ
    $result = $mysqli->query($sql);
    $rows = $result->fetch_row();
    $account = $rows[0] + 0;
?>
{
  "name": "Evolve RolePlay 03",
  "serveronline": "1",
  "online": "<? echo $online; ?>",
  "maxonline": "500",
  "account": "<? echo $account; ?>"
}