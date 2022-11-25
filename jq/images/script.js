$(function () {
    $('.carousel').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        autoplaySpeed: 5000,
        arrows: true,
    });

    $('.button-more').on('mouseover', function() {
        $(this).animate({
            opacity: 0.5,
            marginLeft: 20,
        }, 100);
    });

    $('.button-more').on('mouseout', function() {
        $(this).animate( {
            opacity: 1,
            marginLeft: 0,
        }, 100);
    });

    $('#name').blur(function () {
        inputCheck();
    });
    $('#furigama').blur(function () {
        inputCheck();
    });
    $('#email').blur(function () {
        inputCheck();
    });
    $('#tel').blur(function () {
        inputCheck();
    });
    $('#message').blur(function () {
        inputCheck();
    });
    $('#agree').blur(function () {
        inputCheck();
    });

    function inputCheck() {
        let result;
        let message = '';
        let error = false;

        if($('#name').val() == '') {
            $('#name').css('background-color', '#f79999');
            erroe = true;
            message += 'お名前を入力してください。\n';
        }else {
            $('#name').css('background-color', '#fafafa');
        }

        if($('#furigana').val() == '') {
            $('#furigana').css('background-color', '#f79999');
            error = true;
            message += 'フリガナを入力してださい。';
        }else {
            $('#furigana').css('background-color', '#fafafa');
        }

        if($('#message').val() == '') {
            $('#message').css('background-color', '#f79999');
            error = true;
            message += 'フリガナを入力してださい。\n';
        }else {
            $('#message').css('background-color', '#fafafa');
        }

        if($('#email').val() == '' || $('#email').val().indexOf('@') == -1 || $('#email').val().indexOf('.') == -1){
            $('#email').css('background-color', '#f79999');
            error = true;
            message += 'メールアドレスが未記入、または「@」「.」が含まれていません。\n';
        }else {
            $('#email').css('background-color', '#fafafa');
        }

        if($('#tel').val() == '' || $('#tel').val().indexOf('-') == -1) {
            $('#tel').css('background-color', '#f79999');
            error = true;
            message += '電話番号に「-」が含まれていません。\n';
        }else {
            $('#tel').css('background-color', '#fafafa');
        }

        if ($('#agree').prop('checked') == false) {
            error = true;
            message += '個人情報の取り扱いについてご同意いただける場合は、チェックボックスにチェックしてください。\n';
        }

        if(error == true) {
            $('#submit').attr('src', 'button-submit.png');
        }else {
            $('#submit').attr('src', 'button-submit-blue.png');
        }

        result = {
            error: error,
            message: message
        }

        return result;
    }

    $('#submit').on('click', function (event) {
        // formタグによる送信を拒否
        event.preventDefault();
    
        // 入力チェックをした結果、エラーがあるかないか判定
        let result = inputCheck();
    
        // エラー判定とメッセージを取得
        let error = result.error;
        let message = result.message;
    
        // エラーが無かったらフォームを送信する
        if (error == false) {
          // Ajaxでformを送信する
          $.ajax({
            url: 'https://api.staticforms.xyz/submit',
            typy: 'POST',
            dataType: 'json',
            data: $('#from').serialize(),
            success: function (result) {
                alert('お問い合わせを送信しました')
            },
            error: function (xhr, resp, text) {
                alert('お問い合わせを送信できませんでした。');
            }
          });
        } else {
          // エラーメッセージを表示する
           alert(message);
        }
    });
});
