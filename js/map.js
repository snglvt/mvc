var map;

DG.then(function () {
    //рисуем карту
    map = DG.map('map', {
        center: [55.76, 37.64], //указываем центр карты
        zoom: 11 //указываем приближение карты
    });
    DG.control.location({position: 'bottomright'}).addTo(map);
    DG.control.scale().addTo(map);
    DG.control.ruler({position: 'bottomleft'}).addTo(map);
    DG.control.traffic().addTo(map);

    //переменные объектов
    var omega = "<a href=\"\\product\\1\\\" target=\"_blank\">Омега</a>";
    var smolenka = "<a href=\"\\product\\2\\\" target=\"_blank\">Смоленка</a>";
    var novokuza = "<a href=\"\\product\\3\\\" target=\"_blank\">Космодамианка</a>";
    var kutuza = "<a href=\"\\product\\4\\\" target=\"_blank\">Кутуза</a>";
    var polyanka = "<a href=\"\\product\\5\\\" target=\"_blank\">Полянка</a>";
    var arbat = "<a href=\"\\product\\6\\\" target=\"_blank\">Арбат</a>";
    var stella = "<a href=\"\\product\\7\\\" target=\"_blank\">Стелла</a>";
    var vdnkh = "<a href=\"\\product\\8\\\" target=\"_blank\">ВДНХ</a>";
    var kurskaya = "<a href=\"\\product\\9\\\" target=\"_blank\">Курская</a>";
    var sportiv = "<a href=\"\\product\\10\\\" target=\"_blank\">Спортивная</a>";
    var pravitel = "<a href=\"\\product\\11\\\" target=\"_blank\">Краснопресненская</a>";
    var dobrinin = "<a href=\"\\product\\12\\\" target=\"_blank\">Добрынинская</a>";
    var kojuh = "<a href=\"\\product\\13\\\" target=\"_blank\">Южнопортовая</a>";
    var sobor = "<a href=\"\\product\\14\\\" target=\"_blank\">Католический собор</a>";
    var kurskaya_taganka = "<a href=\"\\product\\15\\\" target=\"_blank\">Берниковская</a>";
    var kurskaya_atrium = "<a href=\"\\product\\16\\\" target=\"_blank\">Сыромятинский</a>";
    var ovchinikovskaya = "<a href=\"\\product\\17\\\" target=\"_blank\">Овчинниковская</a>";
    var shabolovka = "<a href=\"\\product\\18\\\" target=\"_blank\">Шаболовка</a>";
    var leninskiy = "<a href=\"\\product\\19\\\" target=\"_blank\">Ленинский</a>";
    var yakimanka = "<a href=\"\\product\\20\\\" target=\"_blank\">Якиманка</a>";
    var suharevka = "<a href=\"\\product\\21\\\" target=\"_blank\">Сухаревская</a>";
    var bulvar = "<a href=\"\\product\\22\\\" target=\"_blank\">Цветной Бульвар</a>";



    //добавляем маркер и попан
    DG.marker([55.749978, 37.566956]).addTo(map).bindPopup(omega);

    DG.marker([55.745165, 37.576858]).addTo(map).bindPopup(smolenka);

    DG.marker([55.74531, 37.638978]).addTo(map).bindPopup(novokuza);

    DG.marker([55.745063, 37.541357]).addTo(map).bindPopup(kutuza);

    DG.marker([55.737888, 37.618518]).addTo(map).bindPopup(polyanka);

    DG.marker([55.75284, 37.593713]).addTo(map).bindPopup(arbat);

    DG.marker([55.746609, 37.553866]).addTo(map).bindPopup(stella);

    DG.marker([55.827059, 37.649074]).addTo(map).bindPopup(vdnkh);

    DG.marker([55.764045, 37.656198]).addTo(map).bindPopup(kurskaya);

    DG.marker([55.726361, 37.560068]).addTo(map).bindPopup(sportiv);

    DG.marker([55.75354, 37.571258]).addTo(map).bindPopup(pravitel);

    DG.marker([55.729527, 37.624183]).addTo(map).bindPopup(dobrinin);

    DG.marker([55.699405, 37.687526]).addTo(map).bindPopup(kojuh);

    DG.marker([55.767002, 37.571483]).addTo(map).bindPopup(sobor);

    DG.marker([55.749881, 37.655436]).addTo(map).bindPopup(kurskaya_taganka);

    DG.marker([55.754814, 37.659631]).addTo(map).bindPopup(kurskaya_atrium);

    DG.marker([55.744604, 37.633818]).addTo(map).bindPopup(ovchinikovskaya);

    DG.marker([55.721334, 37.609506]).addTo(map).bindPopup(shabolovka);

    DG.marker([55.72647, 37.608369]).addTo(map).bindPopup(leninskiy);

    DG.marker([55.731183, 37.612124]).addTo(map).bindPopup(yakimanka);

    DG.marker([55.77352, 37.629269]).addTo(map).bindPopup(suharevka);

    DG.marker([55.771094, 37.622059]).addTo(map).bindPopup(bulvar);

    //попан с базовой информацией
    DG.popup([55.770635, 37.623368])
        .setLatLng([55.770635, 37.623368])
        .setContent('На карте указанны доступные крыши')
        .openOn(map);


});