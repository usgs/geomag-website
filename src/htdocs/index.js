
(function () {
  'use strict';

  var Xhr = require('util/Xhr');


  var _el,
      _marker,
      _onError,
      _onSuccess,
      _url;

  _el = document.querySelector('#storm-summary');
  _marker = '<!--END: Snippet-->';
  _url = '/map/sync/storm';


  _onError = function () {
    _el.innerHTML = '<h2>Latest Storm Summary</h2>' +
        '<p>No storm summaries are available at this time.</p>';
  };

  _onSuccess = function (data) {
    var storm,
        narrative;

    if (!data || data.length === 0) {
      _onError();
      return;
    }

    storm = data[0];
    narrative = storm.narrative + _marker;
    narrative = narrative.substring(0, narrative.indexOf(_marker));

    _el.innerHTML = '<h2>Latest Magnetic Disturbance Event</h2>' +
        '<h3>' +
          '<a href="/storm/' + storm.id + '">' + storm.stormName + '</a>' +
        '</h3>' +
        '<h4>' +
          'Maximum Dst Amplitude ' + storm.mainPhaseMagnitude +
          '<abbr title="Nanotesla">nT</abbr>' +
        '</h4>' +
        '<p>' + narrative + '</p>';
  };


  Xhr.ajax({
    url: _url,
    success: _onSuccess,
    error: _onError,
    done: function () {
      // clean up
      _el = null;
      _marker = null;
      _onError = null;
      _onSuccess = null;
      _url = null;
    }
  });

})();
