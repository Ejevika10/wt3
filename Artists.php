<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$style = "css/Artists.css";
$content = 'Artists.html.twig';

$artists = [
    [
        'name' => "Эдуард Мане",
        'year' => "(1832-1883)",
        'portrait' => 'img/mane.jpg',
        'portrait_name' => "Эдуард Мане. Автопортрет с палитрой (1879)",
        'info' => "Скандал прилипает к шкуре Эдуарда Мане. Застенчивый, но амбициозный, он не стремился вызвать гнев споров.
                        Он считается некоторыми неофициальным лидером импрессионизма , движения, к которому он, однако, не хотел присоединяться . Мане всегда дистанцировался с импрессионистами, сохраняя при этом очень хорошие отношения с ними, между вдохновением и защитой. Мане разделял с Дега глубокий интерес к академической оценке : он хотел изменить академизм, а не противостоять ему, как большинство импрессионистов. Это объясняет, почему его предметы так отличаются от большинства других членов группы, а также объясняет, почему он не участвовал ни в одной совместной выставке , хотя он ценил своих товарищей по художественной революции.",
        'first' => "Поддерживается семейным состоянием, коллекционером и покровителем.",
        'second' => "жанровая картина, жанровый портрет, уличная сцена, натюрморт .",
        'third' => "Эдгар Дега, Клод Моне, Огюст Ренуар, Фредерик Базиль, Берта Моризо (его невестка), Ева Гонсалес (его ученица), Мари Бракемон, Гюстав Кайботт, Анри Фантен-Латур, Эмиль Зола, Шарль Бодлер.",
        'fourth' => "Музей Орсе (Париж), Национальная художественная галерея (Вашингтон), Художественный институт Чикаго, Музей Метрополитен (Нью-Йорк).",
        'fifth' => ' "Кто сказал, что рисунок - это письменная форма?» Истина в том, что искусство должно быть писанием жизни." ',
        'gallery' => "Paintings.php##mane"
    ],[
        'name' => "Клод Моне",
        'year' => "(1840-1926)",
        'portrait' => 'img/mone.jpg',
        'portrait_name' => "Огюст Ренуар. Портрет Клода Моне (1875)",
        'info' => "Клод Моне является суперзвездой импрессионизма. Почему ? Конечно, потому что он был самым продуктивным , самым общительным (он знал всех) , самым вдохновляющим и самым вдохновляющим . Его многогранная работа, несомненно, является наиболее представительной в этом движении. Это соответствует стандартам импрессионизма в том виде, в каком мы их видим сегодня: разрыв с академизмом, субъективное восприятие предмета, живопись под открытым небом, использование ярких цветов, разбавление форм и контуров ...
                Этот норманнский художник ставит галочки по всем пунктам, и именно благодаря одной из его самых популярных картин, « Впечатление», «Солей Леван» , импрессионизм называют импрессионизмом . Представленная на их первой совместной выставке в 1874 году, эта картина вдохновила известного искусствоведа, который использовал термин « впечатление », чтобы собрать под одним знаменем группу художников (и друзей), практикующих этот новый способ живописи.",
        'first' => "бедный в начале своей карьеры, его поддерживали друзья (Базиль, Мане, Кайботт), несколько редких коллекционеров (Шарль Эфрусси, Виктор Шоке, Эрнест Ошеде ...) и арт-дилеры (Дюран-Рюэль, Отец Танги).",
        'second' => "пейзажи , природные элементы (особенно кувшинки ), памятники, пейзажи, портреты.",
        'third' => "Огюст Ренуар (с которым он регулярно рисовал на берегу Сены), Фредерик Базиль (который помог ему финансово и одолжил ему свою студию), Камиль Писсарро (с которым он укрылся в Лондоне, чтобы избежать разрушительных последствий войны. -Прусский), Альфред Сислей (с которым он регулярно обедает), Эжен Буден (его нормандский наставник), Гюстав Кайботт, Поль Сезанн, Дюран-Рюэль (доверявший ему купец), Эдуард Мане (чей революционный пыл очень вдохновлял ), Берта Моризо, Эмиль Золя ...",
        'fourth' => "Его (очень) цветочный дом в Живерни, в Нормандии ; Музей Орсе, Музей Мармоттан-Моне и Музей Оранжери, в котором представлены самые красивые вариации водяных лилий (Париж).",
        'fifth' => ' "Мотив - это нечто вторичное, я хочу воспроизвести то, что находится между мной и мотивом." ',
        'gallery' => "Paintings.php##mone"
    ],[
        'name' => "Огюст Ренуар",
        'year' => "(1841-1919)",
        'portrait' => 'img/renyar.jpg',
        'portrait_name' => "Фредерик Базиль. Портрет Огюста Ренуара (1867)",
        'info' => "Огюст Ренуар , наряду с Моне, Базилем и Сислей, является одним из отцов-основателей импрессионизма. Он встретил своих товарищей в мастерской требовательного Шарля Глейра, которого они оставят вместе, по обоюдному согласию, для экспериментов с живописью под открытым небом на берегу Сены или в лесу Фонтенбло. Под влиянием Моне, он узнал , что , чтобы сделать эффекты света, технику , которая сделает его всемирно известным, в частности , благодаря шедевру Le Bal дю Мулен де ла Галетт, произведенный в 1876 году и купил его друга и покровителя. , Гюстав Кайботт. За свою 60-летнюю карьеру он создал более 4000 работ (больше, чем работы Мане, Сезанна и Дега вместе взятых), всегда сохраняя свой оригинальный и блестящий стиль.",
        'first' => "происходил из относительно бедной семьи, в начале своей карьеры он жил в бедности. Когда ему было всего 13 лет, его талант дизайнера фарфора позволил ему удовлетворить свои потребности .",
        'second' => "портреты, интерьеры, пейзажи, обнаженная натура, морские пейзажи, натюрморты и жанровые картины.",
        'third' => "Клод Моне, Эдуард Мане, Фредерик Базиль, Камиль Писсарро, Альфред Сислей, Эдгар Дега, Берта Моризо, Гюстав Кайботт, Поль Сезанн, Дюран-Рюэль, Амбруаз Воллар.",
        'fourth' => "музей Ренуара в Кань-сюр-Мер , музей Орсе, дом и мастерская Ренуара в Эссуа .",
        'fifth' => ' " Однажды утром у одного из нас закончилось черное. Он использовал синий цвет: родился импрессионизм. " ',
        'gallery' => "Paintings.php##renyar"
    ],[
        'name' => "Эдгар Дега",
        'year' => "(1834-1917)",
        'portrait' => 'img/dega.jpg',
        'portrait_name' => "Эдгар Дега. Автопортрет (1855-1856)",
        'info' => "Эдгар Дега - самая противоречивая фигура импрессионизма. Говорят, что он ненавидел цветы, животных, женщин, детей, а также евреев. Суровый, элитарный, антипатичный, женоненавистник ... Тем не менее, его ценили многие современники.
                Его противоречивый темперамент проявился и в его художественной практике: несмотря на свою приверженность импрессионизму , Дега свидетельствует об истинной классической воле . В отличие от Моне или Ренуара, его амбиции не в том, чтобы произвести революцию в мире искусства, а в том, чтобы как можно лучше интегрироваться в него. Он всегда будет отдавать предпочтение рисунку , а не цвету, и никогда не поддастся соблазну живописи под открытым небом, которую он яростно ненавидит. Он также был страстным и увлекательным коллекционером : от Делакруа до Энгра , включая Мане , Гогена , Сезанна и нескольких Ван Гогов , он явно был человеком вкуса.",
        'first' => "Поддерживается семейным состоянием, коллекционер.",
        'second' => "интерьерные сцены (танцоры, купальщицы, оркестры), сцены скачек, портреты.",
        'third' => "Эдуард Мане, Берта Моризо, Мэри Кассат, Мари Бракемон, Гюстав Кайботт, Дюран-Рюэль, Амбруаз Воллар, Огюст Ренуар, Поль Гоген (сварливый и ядовитый, как и он). После дела Дрейфуса Дега расстается со своими старыми друзьями Моне, Сислей и Писсарро.",
        'fourth' => "Музей Орсе, Париж.",
        'fifth' => '"Это ничего не значит, импрессионизм. Каждый сознательный художник всегда переводил свои впечатления ». «Ваша (академическая) картина - предмет роскоши, наша - предмет первой необходимости. " ',
        'gallery' => "Paintings.php##dega"
    ],[
        'name' => "Берта Моризо",
        'year' => "(1841-1895)",
        'portrait' => 'img/morizo.jpg',
        'portrait_name' => "Эдуард Мане. Берта Моризо с букетом фиалок (1872)",
        'info' => "Берта Моризо (1841 - 1895) является великой леди импрессионизма. Она была на всех выставках, во всех мероприятиях и во всех отношениях. Ее товарищи восхищались и уважали ее, она была не единственной женщиной импрессионизма, но, несомненно, самой важной женщиной.
                Замужем за братом Эдуарда Мане и очень близка к художнику, она будет следовать по ее следам до своей смерти в 1863 году, где она начнет отстаивать свою независимость и свой уникальный и оригинальный стиль . На протяжении своей карьеры она в основном ставила только внутренние сцены , потому что в то время женщины не могли выйти без сопровождения. Поэтому они не могли часами гулять на открытом воздухе перед мольбертом (и это прискорбно!) .",
        'first' => "ее выходец из буржуазной семьи, брак с Эженом Мане обеспечил ей мирное существование до конца ее жизни.",
        'second' => "интерьерные сцены (почти обязательные для женщин в то время) , сцены с беременными, женские интимные сцены, обнаженные тела, портреты, пейзажи (редко).",
        'third' => "Эдуард Мане (её зять), Эдгар Дега, Клод Моне, Огюст Ренуар, Камиль Писсарро, Альфред Сислей, Гюстав Кайботт, Мэри Кассат, Дюран-Рюэль.",
        'fourth' => "Musée d'Orsay и Musée Marmottan-Monet (Париж), Национальная художественная галерея (Вашингтон), Художественный институт Чикаго.",
        'fifth' => ' "Я не верю, что когда-либо был мужчина, обращающийся с женщиной как с равным, и это все, о чем я бы просила, потому что я знаю, что достойна их». " ',
        'gallery' => "Paintings.php##morizo"
    ],[
        'name' => "Камиль Писсарро",
        'year' => "(1830-1903)",
        'portrait' => 'img/pissarro.jpg',
        'portrait_name' => "Камиль Писсарро. Автопортрет (1873)",
        'info' => "В группе импрессионистов деканом был Камиль Писсарро. Друг всех, он также был учителем двух знаменитых Поля Гогена и Сезанна. Камиль Писсарро был человеком опытным во всех смыслах этого слова. У него было солидное художественное образование, но он также любил новые впечатления. Когда появились первые пуантилистические работы ( Жорж Сёра , Поль Синьяк ), заморозившие кровь большинства импрессионистов, Писсарро был полностью очарован до такой степени, что попробовал это сам.
                Искренний друг, всегда дающий хорошие советы, Писсарро знал, что его работа никогда не повлияет на души так сильно, как работа его товарищей Моне, Ренуара или Дега. За несколько лет до смерти он даже сказал: « Я остаюсь с Сислей хвостом импрессионизма». » (1895 г.)",
        'first' => "брошенный семьей после женитьбы на слуге, он будет испытывать большие трудности почти до конца своей жизни , и его друзья (особенно Кайботт и Моне) будут регулярно помогать и размещать его.",
        'second' => "пейзажи, парижские памятники, натюрморты.",
        'third' => "Клод Моне, Огюст Ренуар (до дела Дрейфуса), Фредерик Базиль, Альфред Сислей, Берта Моризо, Эдгар Дега (до дела Дрейфуса), Поль Сезанн, Поль Гоген, Гюстав Кайботт, Мэри Кассат, Дюран-Рюэль.",
        'fourth' => "музей Камиля Писсарро в Понтуазе (регион Парижа), музей Орсе (Париж), музей Метрополитен (Нью-Йорк).",
        'fifth' => ' "В принципе, мы не хотели школы , мы любим Делакруа, Курбе, Домье и всех тех, у кого что-то в животе, и природа, природа, разные впечатления, которые у нас есть, все наши заботы. Мы отвергаем все искусственные теории. " ',
        'gallery' => "Paintings.php##pissarro"
    ],[
        'name' => "Альфред Сислей",
        'year' => "(1839-1899)",
        'portrait' => 'img/sisley.jpg',
        'portrait_name' => "Огюст Ренуар. Портрет Альфреда Сислея (1874)",
        'info' => "Хотя он, тем не менее, был одним из основателей импрессионизма, Альфред Сислей (1839–1899) остается одним из его менее известных личностей , сталкиваясь с такими мировыми знаменитостями, как его товарищи Моне, Ренуар, Дега и Мане. Он никогда не узнает успеха в своей жизни . В живописи он находил экстаз только через пейзаж , создавая шедевры жанра каждым мазком кисти. Его образ жизни чередовался между парижской мирской атмосферой в кафе Guerbois в компании товарищей и спокойным отдыхом в сельской местности, где он мог заниматься живописью под открытым небом.",
        'first' => "Поддерживаемый семейным состоянием до 27 лет, он лишается наследства и с большими трудностями обеспечивает свою семью.",
        'second' => "пейзажи, памятники и натюрморты.",
        'third' => "Клод Моне, Огюст Ренуар, Фредерик Базиль, Камиль Писсарро, Мари Бракемон, Берта Моризо, Гюстав Кайботт, Дюран-Рюэль (купившая ему около 400 картин).",
        'fourth' => "разрозненные работы - Musée d'Orsay (32 картины), Musée des Beaux-Arts de Rouen (8 картин), Музей искусств Филадельфии (7 картин), Музей Ordrupgaard в Копенгагене (6 картин), Musée du Petit Palais de Paris (4), Лувр (3), MuMa Le Havre (3), Palais des Beaux-Arts de Lille (3), Монреальский музей изящных искусств (3), NY Carlsberg Glyptotek Copenhagen (3), Staatsgalerie Stuttgart ( 3)… Некоторые из его работ также есть в России, Швейцарии, Бельгии, Италии, Великобритании, Чехии и даже в Алжире.",
        'fifth' => ' "Любая картина показывает то, во что художник влюбился." ',
        'gallery' => "Paintings.php##sisley"
    ]
];

echo $twig->render("Base.html.twig", [
    'style' =>$style,
    'content' =>$content,
    'artists' =>$artists
]);