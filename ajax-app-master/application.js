(function() {
  'use strict';

  var fourSquareUrl = 'https://api.foursquare.com/v2/venues/explore?ll=45.533,-122.69&oauth_token=TAM5U5CGI2BMMZYSGGBCM44MMQWP5TGQ3OJ0A4MIVKLNVTMB&v=20140612&section=food';


  var loadVenues = function() {
    $.ajax(fourSquareUrl, { dataType: 'jsonp' })
    .then(function(data, status, xhr) {
      console.log(status);
      console.log('success (promises): ');
      var venuesArray = data.response.groups[0].items;
      var venueInfo = getVenueInfo(venuesArray);
      console.log(venueInfo);
      console.log(venuesArray);
      populateHTML(venueInfo);
    }, function(xhr, status, error) {
      console.log('failed (promises): ' + error);
    });
  };


  var getRandomInt = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  };


  var getVenueInfo = function(venArray) {
    var randomInt = getRandomInt(0, 29);
    var name = venArray[randomInt].venue.name;
    var address = venArray[randomInt].venue.location.address;
    var distance = venArray[randomInt].venue.location.distance;
    var menuUrl = null;
    var hours = null;
    console.log(randomInt);
    if (venArray[randomInt].venue.menu){
      menuUrl = venArray[randomInt].venue.menu.url;
    }
    if (venArray[randomInt].venue.hours.status){
      hours = venArray[randomInt].venue.hours.status;
    }
    return {name: name, hours: hours, address: address, distance: distance,
      menuUrl: menuUrl};
  };


  var populateHTML = function(venInfo) {
    $('body').append("<p>" + venInfo.name + "</p><p>" + venInfo.address + "</p><p>" + venInfo.distance + " meters away.</p>");
    if (venInfo.menuUrl !== null){
      $('body').append("<p><a href=" + venInfo.menuUrl + ">Menu</a></p>");
    }
    if (venInfo.hours !== null){
      $('body').append("<p>" +venInfo.hours+ "</p>");
    }
  };

  $(function() {
    loadVenues();
  });

})();
