/* eslint-disable */
$(document).ready(function(){$(".blog_content img").addClass("img-fluid rounded mx-auto"),$(".blog_content h1").addClass("display-4"),$("a").each(function(){var t=$(this).attr("href"),e=$(this).attr("target"),n=$(this).text(),a=$(this).hasClass("btn")?"generate_lead":"select_content";$(this).click(function(i){i.preventDefault(),gtag("event",a,{event_label:n}),setTimeout(function(){window.open(t,e||"_self")},300)})})});
