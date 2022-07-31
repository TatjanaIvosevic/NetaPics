$(document).ready(function () {
    $("#xssForm").submit(function (event) {
            let valid = true;
            let message = "";

            if ($("#input").val() == "") {
                valid = false;
                message += "Input is empty. \n";
            }


            if ($('input[name="protection"]:checked').length == 0) {
                valid = false;
                message += "Choose protection state. \n";
            }


            if (valid) {
                $(this).submit();
            } else {
                alert(message);
                return false;
            }


        }
    );


    function openInNewTab(url) {
        let win = window.open(url, '_blank','height=400,width=400,toolbar=0,location=0,menubar=0');
        win.focus();
    }

    $(".codes").on('click',function (event) {
        let id = $(this).data("id");
        openInNewTab('raw_code.php?id='+id)
    });

});