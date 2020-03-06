<script>

var test_array= [
           { date: "20191201" , totalcount: 1},
           { date: "20191201" , totalcount: 1},
           { date: "20191202" , totalcount: 1},
           { date: "20191202" , totalcount: 1},
           { date: "20191202" , totalcount: 2},
           { date: "20191203" , totalcount: 4}
]
var test_array2= [];

const unique = test_array.map(function (val, index) {
  
	return val['date'];
}).filter(function (val, index, arr) {

  
	return arr.indexOf(val) === index;
});

console.log(unique);


   var test_array_value=  test_array.reduce(function (preValue, currentValue) { // {a:2, b:1}
    (preValue.hasOwnProperty(currentValue.date)) ?
       preValue[currentValue.date] +=currentValue.totalcount:
       preValue[currentValue.date] =currentValue.totalcount;
    return preValue
}, {})


     var array_test2= Object.entries(test_array_value);

     console.log(array_test2);
     for(i=0;i<array_test2.length;i++){

        console.log(array_test2[i][0]);
        console.log(array_test2[i][1]);
     }

</script>




