$(document).ready(function(){
  setInterval(function() {

      var currentTime = new Date(),
          hours = currentTime.getHours(),
          minutes = currentTime.getMinutes();
          var today = new Date();
        var day = today.getDate();
        var month = today.getMonth()+1; //January is 0!
        var year = today.getFullYear();
        if(month<10) month = "0"+month;

        if(day<10) day = "0"+day;
        //if(month<10) month = "0"+month;
        if(hours<10) hours = "0"+hours;
        if(minutes<10) minutes = "0"+minutes;

      $("#dateTime h2").html("Dati aggiornati al " + day+"/"+ month+"/"+year+" " +hours + ":" + minutes);
  }, 1000);
 });

$(document).ready(function() {
 setInterval(function() {
   var posting =$.post( "sensors.htm");
   var temperature_ext="";
   var temperature_int="";
   var pressure="";
   var humidity_ext="";
   var humidity_int="";
   var i=0;
   posting.done(function(data){
     while(data.charAt(i)!='<') {
       temperature_ext=temperature_ext+data.charAt(i);
       i++;
     }
     while(data.charAt(i)!='>') i++; i++;
     while(data.charAt(i)!='<') {
       temperature_int=temperature_int+data.charAt(i);
       i++;
     }
     while(data.charAt(i)!='>') i++; i++;
     while(data.charAt(i)!='<') {
       pressure=pressure+data.charAt(i);
       i++;
     }
     while(data.charAt(i)!='>') i++; i++;
     while(data.charAt(i)!='<') {
       humidity_int=humidity_int+data.charAt(i);
       i++;
     }
     while(data.charAt(i)!='>') i++; i++;
     while(data.charAt(i)!='<') {
       humidity_ext=humidity_ext+data.charAt(i);
       i++;
     }
     $("#temperature_int").html("Interna: "+temperature_int+"°C");
     $("#temperature_ext").html("Esterna: "+temperature_ext+"°C");
     $("#pressure").html("Unica: "+pressure+"Pa");
     $("#humidity_ext").html("Esterna: "+humidity_ext+"%");
     $("#humidity_int").html("Interna: "+humidity_int+"%");
   });
 },1000);
});
