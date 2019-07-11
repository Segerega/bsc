<?php /* Template Name: Contact */
get_header(); ?>

<div class="content-wrapper section-with-background"
     style="background-image: url('/wp-content/themes/twentyseventeen/assets/images/BKG_Contact.jpg'); background-position: cover">
    <div class="descripton-contact-wrapper">
        <h1 class="title-contact">For new business inquiries or if you'd like to join our team, drop us a line </h1>
    </div>
    <div class="content-wrapper contact-section">
        <div class="row">
            <div class="col-sm-12 col-md-4 table-contact position contact-flex-column">
                <a class="a-contact" href="mailto:info@bioscicom.net">
                    <div class="mail-contact">info@bioscicom.net</div>
                </a>
            </div>
            <div class="col position media-contact contact-flex-column contact-flex-row link-ny">
                <div class="title-contact-map">new york</div>
                <div class="description-contact">250 Hudson Street<br>New York. NY 10013. USA<br>+212.704.1000</div>
                <div class="map-new-york-img ">
                    <img class="img-map ny-map-new" src="/wp-content/themes/twentyseventeen/assets/images/map-new-ny-new.jpg" alt="">
                    <a class="link" href="#"></a>
                </div>
            </div>

            <div class="col position media-contact contact-flex-row link-london">
                <div class="title-contact-map">london</div>
                <div class="description-contact">105 Victoria Street<br>London SWIE 6QT. UK<br>+7.302.80346801</div>

                <div class="map-london-img">
                    <img class="img-map london-map-new" src="/wp-content/themes/twentyseventeen/assets/images/map-new-london-new.jpg"
                         alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map-wrapper">
    <div id="map-new-york" class="ny-click  map-container"></div>
    <div id="map-london" class="london-click map-container"></div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMTF4gLcdN0VFjAenar22NeTJfqUz4x4A&callback=initMap"
        async defer></script>
<script>
    var styles = [
            // {
            //     "stylers": [
            //         {
            //             "visibility": "simplified"
            //         }
            //     ]
            // },
            {
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "elementType": "labels.text.stroke",
                "stylers": [
                    {
                        "color": "#f5f5f5"
                    }
                ]
            },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
        {
            "featureType": "poi",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
            {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#bdbdbd"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            // {
            //     "featureType": "poi",
            //     "stylers": [
            //         {
            //             "color": "#c0c0c0"
            //         },
            //         {
            //             "visibility": "simplified"
            //         }
            //     ]
            // },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            // {
            //     "featureType": "poi",
            //     "elementType": "labels.text.fill",
            //     "stylers": [
            //         {
            //             "color": "#757575"
            //         }
            //     ]
            // },
            {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "road",
                "stylers": [
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#757575"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#dadada"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#616161"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            },
            {
                "featureType": "transit",
                "stylers": [
                    {
                        "color": "#c0c0c0"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#e5e5e5"
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#eeeeee"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                    {
                        "color": "#c9c9c9"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#9e9e9e"
                    }
                ]
            }
        ]
    ;

    var newYork = {lat: 40.741051, lng: -74.005095};
    var london = {lat: 51.497272, lng: -0.136857};
    var mapNY;
    var optionNY = {
        center: newYork,
        zoom: 15,
        zoomControl: true,
        mapTypeControl: true,
        draggable: true,
        scaleControl: false,
        scrollwheel: true,
        navigationControl: false,
        streetViewControl: false,
        styles: styles,
        fullscreenControl: true
    };

    var optionLondon;
    optionLondon = Object.assign({}, optionNY);
    optionLondon.center = london;
    console.log(optionLondon, optionNY)

    function initMap() {
        mapNY = new google.maps.Map(document.getElementById('map-new-york'), optionNY);

        new google.maps.Marker({
            position: newYork, map: mapNY, title: 'BSC center', icon: {
                url: "/wp-content/themes/twentyseventeen/assets/images/map1.png",
                scaledSize: new google.maps.Size(25, 41)
            }

        });
        mapLondon = new google.maps.Map(document.getElementById('map-london'), optionLondon);
        new google.maps.Marker({
            position: london, map: mapLondon, title: 'BSC center', icon: {
                url: "/wp-content/themes/twentyseventeen/assets/images/map1.png",
                scaledSize: new google.maps.Size(25, 41)
            }

        });
    }
</script>
<style>
    /* Always set the mapNY height explicitly to define the size of the div
     * element that contains the mapNY. */

    /*There style must be here*/
    .section-with-background {
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        padding: 0px 0 60px;
        min-height: 50vh;
    }

    .descripton-contact-wrapper {
        padding-top: 64px;
        margin-top: -200px;
    }

    @media only screen and (max-width: 992px) {
        h1 {
            font-size: 30px;
            /*margin: 0 1%;*/
        }
    }

    .a-contact {
        position: relative;
        margin-left: 17px;
    }

    .a-contact .mail-contact {
        position: relative;
        display: inline-block;
    }

    .a-contact:before {
        content: '';
        position: absolute;
        bottom: calc(100% - 7px);
        left: 0px;
        width: 36px;
        border: 18px solid transparent;
        height: 36px;
        border-top-color: #64b978;
        font-style: italic;
        font-weight: 500;
    }

    .a-contact .mail-contact:after {
        border-bottom: 1px solid #64b978;
        content: '';
        position: absolute;
        height: 2px;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    .a-contact:hover {
        text-decoration: none;
    }

    .img-contact {
        width: 40px;
    }

    .mail-contact {
        color: #64b978;
        font-size: 23px;
    }

</style>

<? get_footer(); ?>


