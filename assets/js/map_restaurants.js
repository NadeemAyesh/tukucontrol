function initAutocomplete() {
    (function (A) {

        if (!Array.prototype.forEach)
            A.forEach = A.forEach || function (action, that) {
                for (var i = 0, l = this.length; i < l; i++)
                    if (i in this)
                        action.call(that, this[i], i, this);
            };

    })(Array.prototype);

    var
        mapObject,
        markers = [],
        markersData = {
            'Marker': [
                {
                    location_latitude: 48.865633,
                    location_longitude: 2.321236,
                    name: 'hamza abo aitah',
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'ahmed mahmoud',
                    location_latitude: 48.854183,
                    location_longitude: 2.354808,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'waseem barzaq',
                    location_latitude: 48.863893,
                    location_longitude: 2.342348,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'saeed ahmed',
                    location_latitude: 48.860642,
                    location_longitude: 2.352245,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'

                },
                {
                    name: 'mahmoud shabat',
                    location_latitude: 48.858370,
                    location_longitude: 2.294481,
                    user_link: '#',
                    user_image: 'assets/images/profile_user.jpg',
                    phone: '+966 560010002',
                },
                {
                    name: 'mahmoud abo zyara',
                    location_latitude: 48.837273,
                    location_longitude: 2.335387,
                    user_link: '#',
                    user_image: 'assets/images/profile_user.jpg',
                    phone: '+966 560010002',
                },
                {
                    name: 'khaled saeed',
                    location_latitude: 48.860819,
                    location_longitude: 2.354507,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'moammer al swafere',
                    location_latitude: 48.853798,
                    location_longitude: 2.333328,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'abdalazeez ahmed',
                    location_latitude: 48.862880,
                    location_longitude: 2.287205,
                    user_link: '#',
                    user_image: 'assets/images/profile_user.jpg',
                    phone: '+966 560010002'
                },
                {
                    name: 'hamza hamza',
                    location_latitude: 48.865784,
                    location_longitude: 2.307314,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                },
                {
                    name: 'fayeq melad',
                    location_latitude: 48.852729,
                    location_longitude: 2.350564,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002',
                    services_image: 'assets/images/img1.svg'
                },
                {
                    name: 'saleh habosh',
                    location_latitude: 48.870587,
                    location_longitude: 2.318943,
                    user_link: '#',
                    user_image: 'assets/images/img2.png',
                    phone: '+966 560010002'
                }
            ]

        };

    var mapOptions = {
        zoom: 14,
        center: new google.maps.LatLng(48.865633, 2.321236),

        mapTypeControl: true,
        mapTypeControlOptions: {
            // style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            // mapTypeIds: [google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.ROADMAP],
            position: google.maps.ControlPosition.LEFT_TOP
        },
        panControl: false,
        panControlOptions: {
            position: google.maps.ControlPosition.TOP_RIGHT
        },
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.LARGE,
            position: google.maps.ControlPosition.BOTTM_LEFT
        },
        scrollwheel: false,
        scaleControl: false,
        scaleControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
        },

    };
    var marker;
    mapObject = new google.maps.Map(document.getElementById('driver_map'), mapOptions);
    for (var key in markersData)

        filterMarkers = function (category) {
            markersData[key].forEach(function (item) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
                    map: mapObject,
                    mapTypeId: 'satellite',
                    icon: 'assets/images/car-marker.png',
                    // visible: false
                });


                // var controlUI = document.getElementById('#div');
                //
                // // Setup the click event listeners to geolocate user
                // google.maps.event.addDomListener(controlUI, 'click', geolocate);


                // console.log(item.category);
                // console.log(category);
                if (item.category === category || category === 0 || category === 'all') {
                    marker.setMap(mapObject);
                }
                // Categories don't match
                else {
                    marker.setMap(null);
                }

                // console.log(item.category);

                // If is same category or category not picked


                if ('undefined' === typeof markers[key])
                    markers[key] = [];
                markers[key].push(marker);
                google.maps.event.addListener(marker, 'click', (function () {
                    closeInfoBox();
                    getInfoBox(item).open(mapObject, this);
                    mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
                }));
                // clearMarkers = function () {
                //     marker.setMap(null);
                //     console.log(item)
                // };

            });

        };
    filterMarkers(0);



    function closeInfoBox() {
        $('div.infoBox').remove();
    };
    // mapObject.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    // mapObject.addListener('bounds_changed', function () {
    //     searchBox.setBounds(mapObject.getBounds());
    // });


    function getInfoBox(item) {
        return new InfoBox({
            content:
                '<div class="marker_info bg-grayF" id="marker_info">' +
                '<span>' +
                '<div class="media driver-details-card">' +
                '<img class="mr-2 user-img" src="' + item.user_image + '" alt="no image">' +
                '<div class="media-body">' +
                '<h5 class="mt-0">' +
                '<a href="' + item.user_link + '" class="driver-name link-one">' + item.name +
                '</a>' +
                '</h5>' +
                '<a class="link-one driver-phone fw-500" href="tel:' + item.phone + '">' + item.phone + '</a>' +
                '</div>' +
                '</div>' +
                '</span>' +
                '</div>',
            disableAutoPan: false,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(1, 50),
            closeBoxMargin: '',
            closeBoxURL: "assets/images/close_infobox.png",
            isHidden: false,
            alignBottom: true,
            pane: 'floatPane',
            enableEventPropagation: true
        });

    }

}
