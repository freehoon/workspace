<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible when the user starts to scroll the page.</div>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        //스크롤 최상단 위치값이 20보다 크면 실행.
        //document.body.scrolltop = document.documentElement.scrollTop 와 서로 같다.
        //브라우저 특성상 document.body.scrolltop 가 안먹는 경우 document.documentElement.scrollTop 로 해결 할 수 있다.
        //document.html.scrollTop 도 같은것
        //출처 : http://okkks.tistory.com/404
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        //document.body.scrollTop : 스크롤 최상단 위치
        document.body.scrollTop = 0;    // for Safari
        document.documentElement.scrollTop = 0; //for Chrome, Firefox, Ie and Opera
    }
</script>


<div class="scrollX"></div>
</body>
</html>
