$(document).ready(() => {
    // size switcher 
    $('#catalog .btns button').click((e) => { 
        $($(e.target).parent().find('button')).css({color: '#198F4E'});
        $($(e.target).parent().find('button')).css({background: '#fff'});

        $(e.target).css({background: '#198F4E'});
        $(e.target).css({color: '#fff'});
    });

    // catalog obj
    let catalog1 = [
        {newPrice: '19 000 тг', oldPrice: '42 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '26 000 тг', oldPrice: '58 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '33 000 тг', oldPrice: '73 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '40 000 тг', oldPrice: '90 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '47 000 тг', oldPrice: '105 000 тг', xitGir: false, xitGirMish: true, onlyGirMish: true}
    ]
    let catalog2 = [
        {newPrice: '19 000 тг', oldPrice: '42 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '26 000 тг', oldPrice: '58 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '33 000 тг', oldPrice: '73 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '40 000 тг', oldPrice: '90 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '47 000 тг', oldPrice: '105 000 тг', xitGir: false, xitGirMish: true, onlyGirMish: true}
    ]
    let catalog3 = [
        {newPrice: '21 000 тг', oldPrice: '45 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '28 500 тг', oldPrice: '62 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '35 500 тг', oldPrice: '77 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '43 000 тг', oldPrice: '94 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '50 000 тг', oldPrice: '109 000 тг', xitGir: false, xitGirMish: true, onlyGirMish: true}
    ]
    let catalog4 = [
        {newPrice: '23 000 тг', oldPrice: '48 500 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '30 500 тг', oldPrice: '60 000 тг', xitGir: false, xitGirMish: false, onlyGirMish: false},
        {newPrice: '38 000 тг', oldPrice: '77 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '45 600 тг', oldPrice: '93 000 тг', xitGir: true, xitGirMish: false, onlyGirMish: false},
        {newPrice: '49 000 тг', oldPrice: '108 000 тг', xitGir: false, xitGirMish: true, onlyGirMish: true}
    ]

    // catalog select func
    for(let i = 0; i <= 4; i++) {
        $('#catalog .cart:nth-child(1) button').eq(i).click((e) => {
            $($(e.target).parent().parent().find('.newPrice').text(catalog1[i].newPrice));
            $($(e.target).parent().parent().find('.oldPrice').text(catalog1[i].oldPrice));
            catalog1[i].xitGir === true ? $($(e.target).parent().parent().find('.xitGirImg').show()) : $(e.target).parent().parent().find('.xitGirImg').hide();
            catalog1[i].xitGirMish === true ? $($(e.target).parent().parent().find('.xitGirMishImg').show()) : $(e.target).parent().parent().find('.xitGirMishImg').hide();
            catalog1[i].onlyGirMish === true ? $($(e.target).parent().parent().find('.girlandaMishuraPresent').show()) && $(e.target).parent().parent().find('.xitGirMishImg').hide() : $(e.target).parent().parent().find('.girlandaMishuraPresent').hide();
        });
    }
    for(let i = 0; i <= 4; i++) {
        $('#catalog .cart:nth-child(2) button').eq(i).click((e) => {
            $($(e.target).parent().parent().find('.newPrice').text(catalog2[i].newPrice));
            $($(e.target).parent().parent().find('.oldPrice').text(catalog2[i].oldPrice));
            catalog2[i].xitGir === true ? $($(e.target).parent().parent().find('.xitGirImg').show()) : $(e.target).parent().parent().find('.xitGirImg').hide();
            catalog2[i].xitGirMish === true ? $($(e.target).parent().parent().find('.xitGirMishImg').show()) : $(e.target).parent().parent().find('.xitGirMishImg').hide();
            catalog2[i].onlyGirMish === true ? $($(e.target).parent().parent().find('.girlandaMishuraPresent').show()) && $(e.target).parent().parent().find('.xitGirMishImg').hide() : $(e.target).parent().parent().find('.girlandaMishuraPresent').hide();
        });
    }
    for(let i = 0; i <= 4; i++) {
        $('#catalog .cart:nth-child(3) button').eq(i).click((e) => {
            $($(e.target).parent().parent().find('.newPrice').text(catalog3[i].newPrice));
            $($(e.target).parent().parent().find('.oldPrice').text(catalog3[i].oldPrice));
            catalog3[i].xitGir === true ? $($(e.target).parent().parent().find('.xitGirImg').show()) : $(e.target).parent().parent().find('.xitGirImg').hide();
            catalog3[i].xitGirMish === true ? $($(e.target).parent().parent().find('.xitGirMishImg').show()) : $(e.target).parent().parent().find('.xitGirMishImg').hide();
            catalog3[i].onlyGirMish === true ? $($(e.target).parent().parent().find('.girlandaMishuraPresent').show()) && $(e.target).parent().parent().find('.xitGirMishImg').hide() : $(e.target).parent().parent().find('.girlandaMishuraPresent').hide();
        });
    }
    for(let i = 0; i <= 4; i++) {
        $('#catalog .cart:nth-child(4) button').eq(i).click((e) => {
            $($(e.target).parent().parent().find('.newPrice').text(catalog4[i].newPrice));
            $($(e.target).parent().parent().find('.oldPrice').text(catalog4[i].oldPrice));
            catalog4[i].xitGir === true ? $($(e.target).parent().parent().find('.xitGirImg').show()) : $(e.target).parent().parent().find('.xitGirImg').hide();
            catalog4[i].xitGirMish === true ? $($(e.target).parent().parent().find('.xitGirMishImg').show()) : $(e.target).parent().parent().find('.xitGirMishImg').hide();
            catalog4[i].onlyGirMish === true ? $($(e.target).parent().parent().find('.girlandaMishuraPresent').show()) && $(e.target).parent().parent().find('.xitGirMishImg').hide() : $(e.target).parent().parent().find('.girlandaMishuraPresent').hide();
        });
    }

    // counter
    let seconds = 20;
    let minutes = 37;
    let hours = '04';

    $('.hour1').text(hours[0]);
    $('.hour2').text(hours[1]);
    $('.minute1').text(minutes.toString()[0]);
    $('.minute2').text(minutes.toString()[1]);
    $('.second1').text(seconds.toString()[0]);
    $('.second2').text(seconds.toString()[1]);

    setInterval(() => {
        seconds--;
        if(seconds.toString().length < 2) {
            seconds = '0' + seconds;
        }
        if(seconds == '-1') {
            seconds = 59;
            minutes--;
        }
        $('.second1').text(seconds.toString()[0]);
        $('.second2').text(seconds.toString()[1]);

        if(minutes.toString().length < 2) {
            minutes = '0' + minutes;
        }
        if(minutes == '-1') {
            minutes = 59;
            hours--;
        }
        $('.minute1').text(minutes.toString()[0]);
        $('.minute2').text(minutes.toString()[1]);
        
    }, 1000); 

    // reviews func
    /* $('.tumbs span').click((e) => {
        $('#reviews .text span').text(reviews[e.target.classList.toString().match(/\d+/)[0]].text);
        $('#reviews .user .info p').eq(0).text(reviews[e.target.classList.toString().match(/\d+/)[0]].name);
        $('#reviews .user .info p').eq(1).text(reviews[e.target.classList.toString().match(/\d+/)[0]].age);
        $('#reviews .user img').attr('src', `../assets/img/${reviews[e.target.classList.toString().match(/\d+/)[0]].img}`);
        $('#reviews .item > img').attr('src', `../assets/img/${reviews[e.target.classList.toString().match(/\d+/)[0]].photo}`);
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').fadeIn('slow');
        $('.tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    }); */

    $('.tumbs span').eq(0).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(0).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(1).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(1).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(2).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(2).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(3).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(3).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(4).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(4).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(5).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(5).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });
    $('.tumbs span').eq(6).click((e) => {
        $('#reviews .slider .wrap .item').hide();
        $('#reviews .slider .wrap .item').eq(6).fadeIn().css({display: 'flex'});
        $('#reviews .tumbs span').css({background: '#B9B9B9'});
        $(e.target).css({background: '#B82334'});
    });

    // feedback pop up
    $('#popUpSale input[type="button"], #popUpManeger input[type="button"]').click(() => {
        if($('#popUpSale input, #popUpManeger input').eq(0).val().length < 1) {
            alert('Введите имя');
        }
        else if($('#popUpSale input, #popUpManeger input').eq(1).val().length < 1) {
            alert('Введите номер телефона')
        }
        else if($('#popUpSale input, #popUpManeger input').eq(2).val().length < 1) {
            alert('Город')
        }
        else {
            $('#popUpSale .wrap p:first-child, #popUpManeger .wrap p:first-child').text('Спасибо! Мы скоро с Вами свяжемся!');
            $('#popUpSale form, #popUpManeger form').hide();
            $('#popUpSale .wrap p:nth-child(3), #popUpManeger .wrap p:nth-child(3)').hide();
            $('#popUpSale .wrap, #popUpManeger .wrap').css({height: 'auto', padding: '0 0 50px 0'});
        }
    });

    $('.superSale button').click(() => {
        $('#popUpSale').fadeIn('slow');
        $('body').css({overflow: 'hidden'});
    });
    $('#help button').click(() => {
        $('#popUpManeger').fadeIn('slow');
        $('body').css({overflow: 'hidden'});
    });

    document.querySelector('#popUpSale .close').onclick = () => {
        document.querySelector('#popUpSale').style.display = 'none';
        document.body.style.overflow = 'scroll';
    }
    document.querySelector('#popUpManeger .close').onclick = () => {
        document.querySelector('#popUpManeger').style.display = 'none';
        document.body.style.overflow = 'scroll';
    }
});