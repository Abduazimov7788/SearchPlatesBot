<?php
$access_token = 'TOKEN';
$api = "https://api.telegram.org/bot{$access_token}";

$output = json_decode(file_get_contents('php://input'), true);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
$stateSearch = false;

switch ($message) {
    case '/start':
        sendMessage($chat_id, file_get_contents('helloText.txt'));
        break;
    case '/kod':
        sendMessage($chat_id, file_get_contents('codes.txt'));
        break;
    case '/test':
        searchPlatesRu(ConverterLaToRu('a001aa77'));
        break;
    default:
        $commands = explode(" ", $message);
        $countCommands = count($commands);
        if ($countCommands > 1) {
            switch ($commands[0]) {
                case '/s':
                    switch ($commands[1]) {
                        case 'ua':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'ua');
                            }
                            break;

                        case 'ru':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                $platesTmp = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                    $platesTmp = $platesTmp . $commands[$i];
                                }
                                searchPlatesRu(ConverterLaToRu($platesTmp));
                                searchPlates($plates, 'ru');
                            }
                            break;
                        case 'su':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'su');
                            }
                            break;
                        case 'by':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'by');
                            }
                            break;
                        case 'az':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'az');
                            }
                            break;
                        case 'am':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'am');
                            }
                            break;
                        case 'kz':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'kz');
                            }
                            break;
                        case 'kg':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'kg');
                            }
                            break;
                        case 'lv':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'lv');
                            }
                            break;
                        case 'lt':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'lt');
                            }
                            break;
                        case 'md':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'md');
                            }
                            break;
                        case 'ee':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'ee');
                            }
                            break;
                        case 'us':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'us');
                            }
                            break;
                        case 'at':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'at');
                            }
                            break;
                        case 'be':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'be');
                            }
                            break;
                        case 'bg':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'bg');
                            }
                            break;
                        case 'uk':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'uk');
                            }
                            break;
                        case 'hu':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'hu');
                            }
                            break;
                        case 'de':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'de');
                            }
                            break;
                        case 'es':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'es');
                            }
                            break;
                        case 'it':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'it');
                            }
                            break;
                        case 'lu':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'lu');
                            }
                            break;
                        case 'nl':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'nl');
                            }
                            break;
                        case 'pl':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'pl');
                            }
                            break;
                        case 'sk':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'sk');
                            }
                            break;
                        case 'fi':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'fi');
                            }
                            break;
                        case 'fr':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'fr');
                            }
                            break;
                        case 'me':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'me');
                            }
                            break;
                        case 'cz':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'cz');
                            }
                            break;
                        case 'ch':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'ch');
                            }
                            break;
                        case 'il':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'il');
                            }
                            break;
                        case 'tr':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlates($plates, 'tr');
                            }
                            break;
                        case 'dpr':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlatesUn($plates, 'dpr');
                            }
                            break;
                        case 'lpr':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlatesUn($plates, 'lpr');
                            }
                            break;
                        case 'abh':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlatesUn($plates, 'abh');
                            }
                            break;
                        case 'rso':
                            if ($countCommands >= 2) {
                                $plates = $commands[2];
                                for ($i = 3; $i < $countCommands; $i++) {
                                    $plates = $plates . '+' . $commands[$i];
                                }
                                searchPlatesUn($plates, 'rso');
                            }
                            break;
                        default:
                            sendMessage($chat_id, 'Страна выбрана не верно!');
                            break;
                    }
                    break;
                default:
                    break;
            }

        }
        break;
}


function searchPlates($number, $country)
{
    $url = "http://avto-nomer.ru/{$country}/gallery.php?fastsearch={$number}";
    $html = file_get_contents($url);
    preg_match_all(
        '/<img src="http:.{1,}\.jpg" class="img-responsive center-block" alt="" /',
        $html,
        $resultDivIMG
    );

    preg_match_all(
        '/class="text-center"><a href="\/' . $country . '\/nomer[0-9]{1,}">.{1,}<\/a><\/h4>/',
        $html,
        $resultDivModel
    );

    $countPictures = count($resultDivIMG[0]);
    $countModels = count($resultDivModel[0]);
    if ($countPictures > 0) {
        for ($i = 0; $i < $countPictures; $i++) {
            preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
            if ($i < $countModels) {
                preg_match_all('/[0-9]">.{1,}</', $resultDivModel[0][$i], $resultModel);
                sendPhotoWithCaption(
                    $GLOBALS['chat_id'],
                    $resultIMG[0][0],
                    substr($resultModel[0][0], 3, strlen($resultModel[0][0]) - 8)
                );
                return;
            }

            sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
        }

        return;
    }

    if (false === $GLOBALS['stateSearch']) {
        sendMessage($GLOBALS['chat_id'], 'Ни одного номера не было найдено!');
    }
}

function searchPlatesUn($number, $country)
{
    $url = ' ';
    switch ($country) {
        case 'dpr':
            $url = "http://avto-nomer.ru/xx/gallery.php?ctype=1&nomer={$number}";
            break;
        case 'lpr':
            $url = "http://avto-nomer.ru/xx/gallery.php?ctype=2&nomer={$number}";
            break;
        case 'abh':
            $url = "http://avto-nomer.ru/xx/gallery.php?ctype=3&nomer={$number}";
            break;
        case 'rso':
            $url = "http://avto-nomer.ru/xx/gallery.php?ctype=4&nomer={$number}";
            break;
    }

    $html = file_get_contents($url);
    preg_match_all(
        '/<img src="http:.{1,}\.jpg" class="img-responsive center-block" alt="" /',
        $html,
        $resultDivIMG
    );

    preg_match_all(
        '/class="text-center"><a href="\/xx\/nomer[0-9]{1,}">.{1,}<\/a><\/h4>/',
        $html,
        $resultDivModel
    );
    $countPictures = count($resultDivIMG[0]);
    $countModels = count($resultDivModel[0]);
    if ($countPictures > 0) {
        for ($i = 0; $i < $countPictures; $i++) {
            preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
            if ($i < $countModels) {
                preg_match_all('/[0-9]">.{1,}</', $resultDivModel[0][$i], $resultModel);
                sendPhotoWithCaption($GLOBALS['chat_id'], $resultIMG[0][0],
                    substr($resultModel[0][0], 3, strlen($resultModel[0][0]) - 8));
            } else {
                sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
            }
        }

        return;
    }

    sendMessage($GLOBALS['chat_id'], 'Ни одного номера не было найдено!');
}

function searchPlatesRu($number)
{
    $url = "http://migalki.net/images.php?search_number={$number}&search_number_exact_matching=1";
    $html = file_get_contents($url);
    preg_match_all('/<a href="http:\/\/s.{1,}\.jpg" /', $html, $resultDivIMG);
    $countPictures = count($resultDivIMG[0]);

    if ($countPictures > 0) {
        for ($i = 0; $i < $countPictures; $i++) {
            preg_match_all('/http:.{1,}\.jpg/', $resultDivIMG[0][$i], $resultIMG);
            sendPhoto($GLOBALS['chat_id'], $resultIMG[0][0]);
        }
        $GLOBALS['stateSearch'] = true;
    }
}

function ConverterLaToRu($text)
{
    $buffer = '';
    for ($i = 0; $i < strlen($text); $i++) {
        switch ($text[$i]) {
            case 'a':
                $buffer = $buffer . 'а';
                break;
            case 'b':
                $buffer = $buffer . 'в';
                break;
            case 'e':
                $buffer = $buffer . 'е';
                break;
            case 'k':
                $buffer = $buffer . 'к';
                break;
            case 'm':
                $buffer = $buffer . 'м';
                break;
            case 'h':
                $buffer = $buffer . 'н';
                break;
            case 'o':
                $buffer = $buffer . 'о';
                break;
            case 'p':
                $buffer = $buffer . 'р';
                break;
            case 'c':
                $buffer = $buffer . 'с';
                break;
            case 't':
                $buffer = $buffer . 'т';
                break;
            case 'y':
                $buffer = $buffer . 'у';
                break;
            case 'x':
                $buffer = $buffer . 'х';
                break;
            case 'A':
                $buffer = $buffer . 'а';
                break;
            case 'B':
                $buffer = $buffer . 'в';
                break;
            case 'E':
                $buffer = $buffer . 'е';
                break;
            case 'K':
                $buffer = $buffer . 'к';
                break;
            case 'M':
                $buffer = $buffer . 'м';
                break;
            case 'H':
                $buffer = $buffer . 'н';
                break;
            case 'O':
                $buffer = $buffer . 'о';
                break;
                break;
            case 'P':
                $buffer = $buffer . 'р';
                break;
            case 'C':
                $buffer = $buffer . 'с';
                break;
            case 'T':
                $buffer = $buffer . 'т';
                break;
            case 'Y':
                $buffer = $buffer . 'у';
                break;
            case 'X':
                $buffer = $buffer . 'х';
                break;
            default:
                $buffer = $buffer . $text[$i];
                break;
        }
    }

    return $buffer;
}

function sendMessage($chat_id, $message)
{
    file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
}

function sendPhoto($chat_id, $PhotoAddress)
{
    file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id . '&photo=' . urlencode($PhotoAddress));
}

function sendPhotoWithCaption($chat_id, $photoAddress, $caption)
{
    file_get_contents(
        $GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id . '&photo=' . urlencode($photoAddress) . '&caption=' . urlencode($caption)
    );
}

