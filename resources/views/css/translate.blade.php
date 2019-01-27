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

amp-accordion, amp-accordion .current, .dropdown-item, .info_speak-btn {
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

.footer-con_upon, .tl_base-list .tl_list-item, .tl_section-list .tl_list-item {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-ms-flex-pack: justify;
justify-content: space-between;
}

.tl_topnav, .tl_container .tl_main-content .tl_info-box {
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

.tl_search {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: center;
-ms-flex-pack: center;
justify-content: center;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
}

.tl_search-hot, .tl_base-bt-bar {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
}

.tl_container {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-pack: justify;
-ms-flex-pack: justify;
justify-content: space-between;
-ms-flex-wrap: wrap;
flex-wrap: wrap;
}

.dropdown-list, .footer_menu, .tl_synonym-list {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-ms-flex-direction: column;
flex-direction: column;
}

.tl_topnav, .tl_search, .tl_container {
max-width: 1000px;
margin: 0 auto;
}

.tl_info-article, .tl_hot-words {
border: 1px solid #eeeeee;
padding: 30px;
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

.tl_search-outer {
background: #F5F5F5;
padding: 40px 0;
-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

@media screen and (max-width: 1000px) {
.tl_search {
margin-left: 15px;
margin-right: 15px;
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
width: 80%;
margin-top: 15px;
height: 20px;
overflow: hidden;
}

.tl_search-hot .search-hot_tit {
margin-right: 20px;
}

.tl_search-hot a {
padding: 0 10px;
color: #699BD5;
}

.tl_search-hot a:hover {
color: #4F75A0;
}

.tl_container-outer {
padding: 80px 0;
}

@media screen and (max-width: 1000px) {
.tl_container {
margin-left: 15px;
margin-right: 15px;
}
}

.tl_container .tl_main-content {
width: calc(100% - 340px);
}

@media screen and (max-width: 850px) {
.tl_container .tl_main-content {
width: 100%;
}
}

.tl_container .tl_main-content .tl_info-box {
background: #E5F0F9;
padding: 30px;
margin-bottom: 40px;
}

.tl_container .tl_sidebar {
width: 300px;
}

@media screen and (max-width: 850px) {
.tl_container .tl_sidebar {
width: 100%;
}
}

.tl_info-box .info_keyword {
font-size: 36px;
font-weight: bold;
color: #333333;
}

.info_speak-btn {
background: #ffffff;
-webkit-box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
width: 40px;
height: 40px;
border-radius: 50%;
cursor: pointer;
}

.info_speak-btn:hover {
-webkit-box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
}

.info_speak-btn img {
width: 20px;
}

.tl_info-article {
margin-bottom: 40px;
}

.tl_info-article .tl_tabnav {
border-bottom: 1px solid #eeeeee;
margin-bottom: 40px;
}

.tl_info-article .tl_tabnav li {
color: #828282;
padding: 0 20px 10px 20px;
cursor: pointer;
border-bottom: 4px solid #ffffff;
}

.tl_info-article .tl_tabnav li:hover {
border-bottom: 4px solid #699BD5;
}

@media screen and (max-width: 650px) {
.tl_info-article .tl_tabnav li {
padding: 0 10px 10px 10px;
}
}

.tl_info-article .tl_tabnav li.active {
color: #699BD5;
border-bottom: 4px solid #699BD5;
font-weight: bold;
}

.tl_base-list .tl_list-item {
font-size: 18px;
margin-bottom: 15px;
}

.tl_base-list .tl_list-item:last-child {
margin-bottom: 0;
}

.tl_base-list .prop {
color: #C76970;
width: 50px;
line-height: 25px;
height: 25px;
}

.tl_base-list .tl_item-text {
width: calc(100% - 50px);
}

.tl_base-list .tl_item-text span::after {
content: '；';
}

.tl_base-bt-bar {
margin-top: 30px;
border-top: 1px solid #eeeeee;
padding-top: 35px;
}

.bar-text {
margin-right: 20px;
margin-bottom: 15px;
font-size: 12px;
color: #828282;
}

.bar-text .shape {
color: #4f4f4f;
font-size: 14px;
}

.tl_section-list .tl_list-item {
font-size: 18px;
margin-bottom: 35px;
}

.tl_section-list .tl_list-item .number {
width: 25px;
line-height: 25px;
height: 25px;
}

.tl_section-list .tl_list-item .tl_item-text {
width: calc(100% - 25px);
}

.tl_section-list .tl_list-item .tl_item-text p {
margin-bottom: 5px;
}

.tl_section-list .tl_list-item .tl_item-text p:last-child {
margin-bottom: 0;
}

.tl_section-list .tl_list-item .tl_item-text .chiness {
font-size: 15px;
color: #4f4f4f;
}

.tl_section-list .tl_list-item .tl_item-text b {
color: #C76970;
}

.tl_section-list .tl_list-item:last-child {
margin-bottom: 0;
}

.tl_synonym-list .tl_list-item {
font-size: 18px;
margin-bottom: 35px;
}

.tl_synonym-list .tl_list-item:last-child {
margin-bottom: 0;
}

.tl_synonym-list .item-tit {
color: #C76970;
margin-bottom: 10px;
}

.tl_synonym-list .item-wrap li::after {
content: '；';
}

.tl_hot-words .hot-words_wrap li {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
font-size: 18px;
margin-bottom: 20px;
}

.tl_hot-words .hot-words_wrap li:last-child {
margin-bottom: 0;
}

.tl_hot-words .hot-words_wrap .bumber {
line-height: 25px;
height: 25px;
color: #ababab;
margin-right: 25px;
}

.tl_hot-words .hot-words_wrap a:hover {
text-decoration: underline;
}


</style>