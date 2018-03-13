$( document ).ready(function() {
    setCurrentDate();
});

function setCurrentDate () {
	var fullDate = new Date();
	//console.log(fullDate);
	var twoDigitMonth = fullDate.getMonth()+"";if(twoDigitMonth.length==1)	twoDigitMonth="0" +twoDigitMonth;
	var twoDigitDate = fullDate.getDate()+"";if(twoDigitDate.length==1)	twoDigitDate="0" +twoDigitDate;
	var currentDate = fullDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDate;
	//console.log(currentDate);
	//$("#paid_date").css({"display":'none', "font-size": "200%"})
	 $("#paid_date").val(currentDate);
}
