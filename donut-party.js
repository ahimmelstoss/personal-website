$(document).ready(function() {

  $('#count').submit(function(){

    var numGuests = parseInt($(this).find('#people').val());

    var numDonuts = parseInt($(this).find('#donuts').val());

    if(numGuests < numDonuts){
      $('h2').html("Yes! So many donuts!");
      $('#return').empty().append('<img src="http://twincitiesdonut.com/images/donut.jpg" alt="many">');
    }else if(numGuests > numDonuts){
      $('h2').html("We don't have enough donuts!!!");
      $('#return').empty().append('<img src="http://mysocalledtvblog.files.wordpress.com/2012/10/table-flip1.gif?w=824" alt="many">');
    }else{
      $('h2').html("I guess we have enough donuts...");
      $('#return').empty().append('<img src="http://haacked.com/images/haacked_com/WindowsLiveWriter/DonutCachinginASP.NETMVC_E52F/mmmm-doughnut_2.jpg" alt="many">');
    }

    return false; //prevents the page from reloading; keeps it on this page and the action in the form from being triggered

  });
});