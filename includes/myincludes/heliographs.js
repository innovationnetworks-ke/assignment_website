var priceslist = {
    Writing:
        {
            'High School': {'360': 12.00,'240': 14.50,'168': 16.50,'120': 18.50,'96': 22.50,'72': 23.50,'48': 29.50,'24': 32.50,'12': 34.50,'6': 41.50,'3': 43.50},
            'College': {'360': 19.00,'240': 19.50,'168': 20.50,'120': 22.50,'96': 25.50,'72': 27.50,'48': 31.50,'24': 35.50,'12': 37.50,'6': 42.50,'3': 47.50},
            'Undergraduate': {'360': 19.50,'240': 21.50,'168': 24.50,'120': 27.50,'96': 29.50,'72': 31.50,'48': 33.50,'24': 39.50,'12': 43.50,'6': 49.50,'3': 51.50},
            'Master': {'360': 20.50,'240': 22.50,'168': 25.50,'120': 28.50,'96': 31.50,'72': 34.50,'48': 37.50,'24': 42.50,'12': 47.50,'6': 53.50,'3': 66.50},
            'Ph.D.': {'360': 25.50,'240': 27.50,'168': 29.50,'120': 32.50,'96': 35.50,'72': 39.50,'48': 43.50,'24': 48.50,'12': 55.50,'6': 61.50,'3': 74.50}
        },
    Editing:
        {
            'High School': {'360': 8.00,'240': 10.50,'168': 12.50,'120': 14.50,'96': 18.50,'72': 19.50,'48': 25.50,'24': 28.50,'12': 30.50,'6': 37.50,'3': 39.50},
            'College': {'360': 15.00,'240': 15.50,'168': 16.50,'120': 18.50,'96': 21.50,'72': 23.50,'48': 27.50,'24': 31.50,'12': 33.50,'6': 38.50,'3': 43.50},
            'Undergraduate': {'360': 15.50,'240': 17.50,'168': 20.50,'120': 23.50,'96': 25.50,'72': 27.50,'48': 29.50,'24': 35.50,'12': 39.50,'6': 45.50,'3': 47.50},
            'Master': {'360': 16.50,'240': 18.50,'168': 21.50,'120': 24.50,'96': 27.50,'72': 30.50,'48': 33.50,'24': 38.50,'12': 43.50,'6': 49.50,'3': 62.50},
            'Ph.D.': {'360': 21.50,'240': 23.50,'168': 25.50,'120': 28.50,'96': 31.50,'72': 35.50,'48': 39.50,'24': 44.50,'12': 51.50,'6': 57.50,'3': 70.50}
        },
    Proofreading:
        {
            'High School': {'360':6.00,'240': 6.50,'168': 8.50,'120': 10.50,'96': 14.50,'72': 15.50,'48': 21.50,'24': 24.50,'12': 26.50,'6': 33.50,'3': 35.50},
            'College': {'360': 11.00,'240': 11.50,'168': 12.50,'120': 14.50,'96': 17.50,'72': 19.50,'48': 23.50,'24': 27.50,'12': 29.50,'6': 34.50,'3': 39.50},
            'Undergraduate': {'360': 11.50,'240': 13.50,'168': 16.50,'120': 19.50,'96': 21.50,'72': 23.50,'48': 25.50,'24': 31.50,'12': 35.50,'6': 41.50,'3': 43.50},
            'Master': {'360': 12.50,'240': 14.50,'168': 17.50,'120': 20.50,'96': 23.50,'72': 26.50,'48': 29.50,'24': 34.50,'12': 39.50,'6': 45.50,'3': 58.50},
            'Ph.D.': {'360': 17.50,'240': 19.50,'168': 21.50,'120': 24.50,'96': 27.50,'72': 31.50,'48': 35.50,'24': 40.50,'12': 47.50,'6': 53.50,'3': 66.50}
        }
};
$('.dropdown-select').on('change', function () {
    setHomeCalculator(); 
});
$(".OrderNow").on('click', function () {
    var t = $("#level option:selected").attr('data-val'),
        e = $("#service_type option:selected").attr('data-val'),
        s = $("#services option:selected").attr('data-val'),
        r = $("#pages").val(),
        a = $("#days option:selected").attr('data-val');
    var params = "";
    if (isNaN(s)) {
        params = "?Level=" + t + "&ServiceType=" + e + "&Pages=" + r + "&Delivery=" + a;
    }
    else {
        params = "?Level=" + t + "&Service=" + s + "&ServiceType=" + e + "&Pages=" + r + "&Delivery=" + a;
    }
    window.location.href = "https://assignmentmavens.com/sign-up.php";
//    window.location.href = "https://assignmentmavens.com/sign-up.php" + params;
});
$('#servicebtn').on('click', function () {
    var ServiceType = $('#ServiceType option:selected').attr('data-val');
    var Service = $('#services option:selected').attr('data-val');
    var link = 'https://assignmentmavens.com/sign-up.php';
    if (isNaN(ServiceType) && isNaN(Service)) {
        window.location.href = link;
    }
    else if (!isNaN(ServiceType) && !isNaN(Service))
        window.location.href = link + "?Service=" + Service + "&ServiceType=" + ServiceType;
    else {
        link += !isNaN(Service) ? "?Service=" + Service : '';
        link += !isNaN(ServiceType) ? "?ServiceType=" + ServiceType : '';
        window.location.href = link;
    }
});
$('#ordernowlink').on('click', function () {
    let service = $('#service :selected').attr('data-val');
    var link = 'https://assignmentmavens.com/sign-up.php';
    if (isNaN(service)) {
        window.location.href = link;
    }
    else {
        window.location.href = link + "?Service=" + service;
    }
});
var DisableLevel = function (level, page) {
    console.log(level , page);
    $('.disabled').attr("disabled", 'disabled');
    $(".list").find('li:contains(High School)').prop("disabled", true);
    $(".list").find('li:contains(College)').prop("disabled", true);
    //Select drop down position as it is changed in different pages 
    let dropdownNumber = page === '/' ? 1 : 1;
    if (level === 'High School' || level === 'College') {
        $(".list li").removeClass('selected').removeClass('focus');
        $(".list").find('li:contains(Undergraduate)').addClass("selected").addClass("focus");
        $(".current").eq(dropdownNumber).text('Undergraduate');
        $('#level').val(4);
    }
}
var EnableLevel = function () {
    $('.disabled').attr("disabled", false);
    $(".list").find('li:contains(High School)').prop("disabled", false);
    $(".list").find('li:contains(College)').prop("disabled", false);
}
var setHomeCalculator = function() {
    //let ser = $("[name=services] option:selected").attr('value');
    let ser = $("#services").val();
    ser === '5' || ser === '6' || ser === '35' ? DisableLevel($("#level :selected").text(), window.location.pathname) : EnableLevel();
    let level = $("#level :selected").text();
    let service = $("#service_type :selected").text();
    let timePeriod = $("#days :selected").text();
    let pages = Number($("#pages").val());
    let timeSpan = convertdaystohours(timePeriod);
    let finalprice = priceslist[service][level][timeSpan];
    finalprice = finalprice * pages;
    let discountPrice = finalprice * 0.50;
    $("#standard_price").html("<span class='dollor'>$</span>" + finalprice.toFixed(2));
    $('#discount_price').html("<span class='dollor'>$</span>" + discountPrice.toFixed(2));
}
$('#document_type').on('change', function () {
    var type = $('#document_type').val();
    type === '5' || type === '6' || type === '35' ? DisableLevel($("#level :selected").text(), window.location.pathname) : EnableLevel();
});
function UpdatePrices(Service)
{
    $(".priceTbl").empty();
    let ser = $("[name=services] option:selected").attr('value');
    var Deadlines = priceslist[Service]['High School'];
    var array = Object.keys(Deadlines).map(function (key) {
        return Number(key);
    });
    for (var i = array.length - 1; i >= 0; i--) 
    {
        var deadline = array[i];
        var d = "";
        if (parseInt(deadline) > 48) {
             d = parseInt(deadline) / 24;
             d = d + " Days";
        }
        else {
            d = deadline + " Hours";
        }
        var htm = "<tr> <td><span>" + d + "</span></td>";
        let price;
        for (var academiclevel in priceslist[Service]) {
            htm += "<td><span>" + getPrice(ser, academiclevel, Service, deadline) + "</span></td>";
        }
        htm += "</tr>";
        $(".priceTbl").append(htm);
    }
}
var getPrice = function (ser, academicLevel, service, deadline) {
    if ((academicLevel === 'High School' || academicLevel === 'College') && (ser === '5' || ser === '6' || ser === '35')) {
        return '-';
    }
    else {
        return "$" + priceslist[service][academicLevel][deadline] / 2;
    }  
}
function convertdaystohours(timePeriod) {
    if (timePeriod.indexOf(" day") >= 0) {
        let timephase = timePeriod.slice(0, -4);
        finalTime = timephase * 24;
        return Number(finalTime);
    }
    else {
        let timephase = timePeriod.slice(0, -5);
        return Number(timephase);
    }
}
function checkIt(t) {
    t = t ? t : window.event;
    var e = t.which ? t.which : t.keyCode;
    return e > 31 && (48 > e || e > 57) ? (status = "This field accepts numbers only.", !1) : (status = "", !0)
}
//Order page increament/ Decreament
$(document).ready(function () {
    var quantitiy = 0;
    $('.quantity-right-plus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#pages').val());
        // If is not undefined
        if (quantity < 9999) {
            $('#pages').val(quantity + 1);
        }
        setHomeCalculator();
        // Increment
    });
    $('.quantity-left-minus').click(function (e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#pages').val());
        // If is not undefined
        // Increment
        if (quantity > 1) {
            $('#pages').val(quantity - 1);
        }
        setHomeCalculator();
    });
    $('#pages').on('input', function () {
        var t = $("#pages").val();
        1 > t && $("#pages").val(1)
        setHomeCalculator();
    });
    setHomeCalculator();
});