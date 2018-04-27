<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script >
      // var Person1Age = 23;
      // var Person2Age = 45;
      // var Person1Height = 176;
      // var Person2Height = 153;
      //
      // var score;
      //
      // Person1Age = prompt("Wie alt ist Spieler 1?");
      // Person2Age = prompt("Wie alt ist Spieler 2?");
      // if (Person1Age === Person2Age){
      //     console.log ("NO Points with same result!");
      // }else if (Person1Age < Person2Age) {
      //     score = 5* Person1Age + Person1Height;
      //     console.log("PLayer 1 wins with " + score + " Points!");
      // }else{
      //     score = 5* Person2Age + Person2Height;
      //     console.log("PLayer 1 wins with " + score + " Points!");
      // }
      //

      // Arrays

      var person = {
          name: '',
          lastname: '',
          birthdate: '',
          email:''

      };

      var list = [person];
      var obst = ['Birne', 'Äpfel','Gurke'];
      var marco = ["Sascha","Kapuczinski", 1987, true];

        console.log("Obst: " + obst);

        obst.push("Honig");


        marco.unshift("Herr");
        marco.shift();
        marco.pop();
        console.log(marco);

        //Objects and
      /*
        var Sascha = {
            name: 'Sascha',
            lastName: 'Linke',
            dayofBirth: 1978,
            married: true,
            family: ['Jessica', 'Finn', 'Bennit'],
            calculatedAge: function(dayofBirth){ return 2018 - dayofBirth;}

        };
        Sascha.age = Sascha.calculatedAge(1978);
        console.log(Sascha);
        */

      /*
      var Sascha = {
          name: 'Sascha',
          lastName: 'Linke',
          dayofBirth: 1978,
          married: true,
          family: ['Jessica', 'Finn', 'Bennit'],
          calculatedAge: function(){
              this.age =  2018 - this.dayofBirth;}

      };
        Sascha.calculatedAge();
        console.log(Sascha);

      var Maike = {
          name: 'Maike',
          lastName: 'Schubert',
          dayofBirth: 1987,
          married: true,
          family: ['Sascha', 'Susi', 'Hendrim'],
          calculatedAge: function(){
              this.age =  2018 - this.dayofBirth;}

      };
      Jessica.calculatedAge();
      console.log(Jessica);
       */

      //Coding Challenge 2
      //   var years = [1978, 2009, 2005, 1954, 1956 ];
      //   var fillupData = [];
      //
      //
      //   fillupData = printFullAge(years);
      //   console.log(years);
      //   console.log(fillupData);
      //
      // function printFullAge( data) {
      //     var temp = [];
      //     for (var $i = data.length - 1; $i >= 0; $i--) {
      //
      //         if( calculateAge(data[$i]) >= 18){
      //             temp.unshift(true);
      //             console.log("Person " + ($i+1) + " is adult." );
      //         }else{
      //             temp.unshift(false);
      //             console.log("Person " + ($i+1) + " is NOT 18." );
      //         }
      //
      //     }
      //     return temp;
      // }
      //
      // function calculateAge(year){
      //
      //     return 2018-year;
      //
      // }


        // this
        //console.log(this);

        // var John = {
        //     name: 'John',
        //     lastName: 'Miller',
        //     yearOfBirth: 1990,
        //     calculateAge: function(){
        //         console.log(this);
        //         console.log(2018 - this.yearOfBirth);
        //     }
        // };
        //
        // John.calculateAge();
        //
        // var Sascha = John;
        // Sascha.name = 'Sascha';
        // Sascha.lastName = 'Kapuczinski';
        // Sascha.calculateAge();


    </script>
</head>
<body>
<?php

?>
</body>
</html>