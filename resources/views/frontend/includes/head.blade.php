<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/theme.css') }}">
    <link rel="preload" href="{{ url('/css/main.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" data-minify="1" />
    <link rel='dns-prefetch' href='//s0.wp.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Vodi Main &raquo; Feed" href="https://demo2.madrasthemes.com/vodi-demos/main/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Vodi Main &raquo; Comments Feed" href="https://demo2.madrasthemes.com/vodi-demos/main/comments/feed/" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline!important;
            border: none!important;
            box-shadow: none!important;
            height: 1em!important;
            width: 1em!important;
            margin: 0 .07em!important;
            vertical-align: -0.1em!important;
            background: none!important;
            padding: 0!important
        }
    </style>
    <link rel='preload' id='vodi-fonts-css' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800%7cOpen+Sans:400,600,700&#038;subset=latin%2Clatin-ext' as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <style id='rocket-lazyload-inline-css' type='text/css'>
        .rll-youtube-player {
            position: relative;
            padding-bottom: 56.23%;
            height: 0;
            overflow: hidden;
            max-width: 100%
        }
        
        .rll-youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: 0 0
        }
        
        .rll-youtube-player img {
            bottom: 0;
            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            cursor: pointer;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all
        }
        
        .rll-youtube-player img:hover {
            -webkit-filter: brightness(75%)
        }
        
        .rll-youtube-player .play {
            height: 72px;
            width: 72px;
            left: 50%;
            top: 50%;
            margin-left: -36px;
            margin-top: -36px;
            position: absolute;
            background: url(https://demo2.madrasthemes.com/vodi-demos/main/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat;
            cursor: pointer
        }
        
        .wp-has-aspect-ratio .rll-youtube-player {
            position: absolute;
            padding-bottom: 0;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0
        }
    </style>
    <script type='text/javascript' src='https://demo2.madrasthemes.com/vodi-demos/main/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <link rel='https://api.w.org/' href='https://demo2.madrasthemes.com/vodi-demos/main/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo2.madrasthemes.com/vodi-demos/main/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://demo2.madrasthemes.com/vodi-demos/main/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.2.1" />
    <link rel="canonical" href="https://demo2.madrasthemes.com/vodi-demos/main/home-v2/" />
    <link rel='shortlink' href='https://demo2.madrasthemes.com/vodi-demos/main/?p=382' />
    <link rel="alternate" type="application/json+oembed" href="https://demo2.madrasthemes.com/vodi-demos/main/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo2.madrasthemes.com%2Fvodi-demos%2Fmain%2Fhome-v2%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://demo2.madrasthemes.com/vodi-demos/main/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo2.madrasthemes.com%2Fvodi-demos%2Fmain%2Fhome-v2%2F&#038;format=xml" />
    <style type='text/css'>
        img#wpstats {
            display: none
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline!important;
            padding: 0!important;
            margin: 0!important
        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .site-header.light .site-header__logo .vodi-gr {
            fill: url(#vodi-gr-hh)
        }
        
        @media (min-width:1200px) {
            .site-header.light .site-header__logo .vodi-gr {
                fill: url(#vodi-gr)
            }
        }
        
        .site__footer--v1.light .vodi-gr {
            fill: url(#vodi-gr)
        }
    </style>
    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none!important
            }
        </style>
    </noscript>
    <script>
        /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
        (function(w) {
            "use strict";
            if (!w.loadCSS) {
                w.loadCSS = function() {}
            }
            var rp = loadCSS.relpreload = {};
            rp.support = (function() {
                var ret;
                try {
                    ret = w.document.createElement("link").relList.supports("preload")
                } catch (e) {
                    ret = !1
                }
                return function() {
                    return ret
                }
            })();
            rp.bindMediaToggle = function(link) {
                var finalMedia = link.media || "all";

                function enableStylesheet() {
                    link.media = finalMedia
                }
                if (link.addEventListener) {
                    link.addEventListener("load", enableStylesheet)
                } else if (link.attachEvent) {
                    link.attachEvent("onload", enableStylesheet)
                }
                setTimeout(function() {
                    link.rel = "stylesheet";
                    link.media = "only x"
                });
                setTimeout(enableStylesheet, 3000)
            };
            rp.poly = function() {
                if (rp.support()) {
                    return
                }
                var links = w.document.getElementsByTagName("link");
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel === "preload" && link.getAttribute("as") === "style" && !link.getAttribute("data-loadcss")) {
                        link.setAttribute("data-loadcss", !0);
                        rp.bindMediaToggle(link)
                    }
                }
            };
            if (!rp.support()) {
                rp.poly();
                var run = w.setInterval(rp.poly, 500);
                if (w.addEventListener) {
                    w.addEventListener("load", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                } else if (w.attachEvent) {
                    w.attachEvent("onload", function() {
                        rp.poly();
                        w.clearInterval(run)
                    })
                }
            }
            if (typeof exports !== "undefined") {
                exports.loadCSS = loadCSS
            } else {
                w.loadCSS = loadCSS
            }
        }(typeof global !== "undefined" ? global : this))
    </script>
</head>