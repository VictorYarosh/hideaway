<?PHP
 
function complete_mail() {
        // $_POST['title'] містить дані з поля "Тема", trim() - забираємо всі лишні пробіли і переноси рядків, htmlspecialchars() - переобразує спеціальні символи в HTML по суті, для того, щоб самі прості спроби взламати сайт не вийшли, ну і  substr($_POST['title'], 0, 1000) - зменшуємо текст до 1000 символів. Для змінних $_POST['mess'], $_POST['name'], $_POST['tel'], $_POST['email'] все аналогічно
        $_POST['mess'] =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000);
        $_POST['name'] =  substr(htmlspecialchars(trim($_POST['name'])), 0, 30);
        $_POST['tel'] =  substr(htmlspecialchars(trim($_POST['tel'])), 0, 30);
        // якщо не заповнене поле "Імя" - показуемо помилку 0
        if (empty($_POST['name']))
             output_err(0);
        // якщо не правильно заповнене поле email - показуемо помилку 1
        if(empty($_POST['mess']))
             output_err(2);
        // створюємо наше повідомлення
        $mess = 'Ваше имя:'.$_POST['name'].'Телефон в формате +380:'.$_POST['tel'].''.$_POST['mess'];
        // $to - кому відправляємо
        $to = 'victoryarosh131@gmail.com';
        // $from - від кого
        $from='victoryarosh131@gmail.com';
        mail($to, $_POST['title'], $mess, "From:".$from);
        echo 'Дякую! Ваш лист відісланий.';
} 
 
function output_err($num)
{
    $err[0] = 'ПОМИЛКА! Не введено імя.';
    $err[1] = 'ПОМИЛКА! Невірно введений e-mail.';
    $err[2] = 'ПОМИЛКА! Не введено повідомлення.';
    echo '<p>'.$err[$num].'</p>';
    show_form();
    exit();
} 
 
if (!empty($_POST['submit'])) complete_mail();
else show_form();
 ?>