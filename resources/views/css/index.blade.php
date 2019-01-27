<style amp-custom>
* {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
}

body {
    letter-spacing: 1px;
    font-family: Helvetica, Arial, sans-serif, "Microsoft JhengHei", 微軟正黑體;
}

html, select, button, input {
    font-family: Helvetica, Arial, sans-serif, "Microsoft JhengHei", 微軟正黑體;
}

h1, h2, h3 {
    font-family: Roboto, Helvetica, Arial, sans-serif;
}

ol, ul {
    list-style: none;
}

ol li, ul li {
    display: inline-block;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after {
    content: '';
    content: none;
}

q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

html, body {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    letter-spacing: 1px;
    background: #fffff;
    color: #4a4a4a;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -o-font-smoothing: antialiased;
}

a {
    text-decoration: none;
    color: #333333;
    -webkit-transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    transition: all .3s ease-in;
}

input:focus, button:focus {
    outline: 0;
}

amp-accordion, amp-accordion .current, .dropdown-item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.tl_topnav .logo, .tl_search-box, .tl_search-box .search-clear {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.footer-con_upon {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.tl_topnav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.tl_search-hot {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.dropdown-list, .footer_menu {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.main_container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}

.tl_topnav {
    max-width: 1000px;
    margin: 0 auto;
}

.tl_font18 {
    font-size: 18px;
}

@media screen and (max-width: 650px) {
    .tl_font18 {
        font-size: 14px;
    }
}

.tit18 {
    font-size: 18px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eeeeee;
    margin-bottom: 25px;
}

.tl_topnav-outer {
    -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
}

.tl_topnav {
    position: relative;
    height: 70px;
}

@media screen and (max-width: 1000px) {
    .tl_topnav {
        margin-left: 15px;
        margin-right: 15px;
    }
}

.tl_topnav .logo {
    color: #4F75A0;
    font-size: 20px;
    font-weight: bold;
    height: 40px;
}

amp-accordion {
    height: 40px;
}

amp-accordion .current-btn {
    background: #ffffff;
    border: 1px solid #e0e0e0;
    padding: 0;
}

amp-accordion .current-btn:focus {
    outline: 0;
}

amp-accordion .current {
    width: 100%;
    padding: 10px 25px;
    font-size: 14px;
}

amp-accordion .current::after {
    content: '';
    background: url(/images/arrow-down.svg);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    margin-left: 10px;
    width: 15px;
    height: 15px;
}

.dropdown-list {
    background: #ffffff;
    z-index: 100;
    -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
    padding: 15px 25px;
    -webkit-transition: all .25s ease-in;
    -o-transition: all .25s ease-in;
    transition: all .25s ease-in;
    cursor: pointer;
}

.dropdown-item:hover {
    background: #f7f7f7;
}

.dropdown-item .item {
    font-size: 14px;
    color: #4f4f4f;
    font-weight: 400;
}

.footer-outer {
    background: #393939;
    padding: 25px 0;
}

.footer_con {
    max-width: 800px;
    margin: 0 auto;
}

@media screen and (max-width: 800px) {
    .footer_con {
        margin-left: 15px;
        margin-right: 15px;
    }
}

.footer-con_upon {
    padding: 5px 0 10px;
}

@media screen and (max-width: 400px) {
    .footer-con_upon {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
}

.footer_logo {
    color: #ffffff;
    display: block;
}

@media screen and (max-width: 400px) {
    .footer_logo {
        width: 100%;
        margin-bottom: 25px;
    }
}

.footer_menu .tit {
    font-size: 16px;
    color: #ffffff;
    margin-bottom: 10px;
}

.footer_menu .item {
    font-size: 12px;
    color: #C9C9C9;
    padding: 5px 0;
}

.footer_menu .item:hover {
    color: #ffffff;
}

.footer-con_bototm {
    border-top: 1px solid #707070;
    padding-top: 15px;
}

.footer-copyright {
    color: #C9C9C9;
    font-size: 12px;
}

.vh100-layout {
    height: 100vh;
    overflow: hidden;
}

.main-outer {
    height: calc(100vh - 248px);
    position: relative;
}

.main_image {
    background-image: url(/images/bg.jpg);
    background-position: center;
    background-size: cover;
    height: 100%;
}

.main_shadow {
    background: rgba(80, 80, 80, 0.3);
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
}

.main_container {
    height: 100%;
    position: absolute;
    right: 0;
    left: 0;
    top: 0;
    z-index: 2;
}

.con_tit {
    font-size: 36px;
    font-weight: bold;
    color: #ffffff;
}

@media screen and (max-width: 500px) {
    .con_tit {
        font-size: 30px;
    }
}

.con_text {
    font-size: 21px;
    color: #ffffff;
    padding: 15px 0 30px;
}

@media screen and (max-width: 500px) {
    .con_text {
        font-size: 18px;
    }
}

.tl_search-box {
    border: 1px solid #eeeeee;
    background: #ffffff;
    padding: 0 15px 0 25px;
    width: 80%;
}

.tl_search-box .search-icons {
    width: 20px;
}

.tl_search-box .search-icons img {
    width: 100%;
}

.tl_search-box .search-input {
    width: calc(100% - 90px);
}

.tl_search-box .search-input input {
    height: 60px;
    padding: 5px 15px;
    width: 100%;
}

.tl_search-box .search-clear {
    cursor: pointer;
    color: #bdbdbd;
}

.tl_search-box .search-clear:hover {
    color: #828282;
}

.tl_search-box .search-clear img {
    width: 15px;
}

.tl_search-box .search-clear span {
    padding: 0 10px;
}

.tl_search-hot {
    margin-top: 15px;
    height: 20px;
    overflow: hidden;
}

@media screen and (max-width: 800px) {
    .tl_search-hot {
        margin-right: 30px;
        margin-left: 30px;
    }
}

.tl_search-hot .search-hot_tit {
    margin-right: 20px;
    font-weight: 500;
    color: #ffffff;
}

.tl_search-hot a {
    padding: 0 10px;
    color: #ffffff;
}

.tl_search-hot a:hover {
    color: #4F75A0;
}
</style>