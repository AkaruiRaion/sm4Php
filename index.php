<?
class Cookie
{
    private $type = '';

    public function setType($cookieType)
    {
        $allowedCookie = array('овсяное', 'шоколадное', 'ванильное');
        if (in_array($cookieType, $allowedCookie)) {
            $this->type = $cookieType;
        } else {
            $this->type = "Недопустимый тип";
        }
    }

    public function getType()
    {
        return $this->type;
    }
}

// Пример использования:
$cookie = new Cookie();

if (isset($_POST['cookie'])) {
    $cookie->setType($_POST['type']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <form method="post" name="cookie">
            <input type="text" name="type" placeholder="Введите тип печенья">
            <input type="submit" name="cookie" class="btn" value="Отправить">
        </form>
        <?
        if (!empty($_POST['type'])) {
        ?>
            <p class="otvet">Вы получили <?= $cookie->getType() ?> печенья</p>
        <?
        }
        ?>
    </div>

    <div class="block">
        <h3>Для справки</h3>
        <p>Доступные виды: овсяное, шоколадное, ванильное</p>
    </div>

</body>

</html>