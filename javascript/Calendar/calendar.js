let monthAndYear=document.getElementById('monthAndYear');//h3 tag

let today=new Date();//current date and time
let cmonth=today.getMonth();//Current date month
let cyear=today.getFullYear();//Current date Year
let selectYear=document.getElementById('year');//choosed year fom option
let selectMonth=document.getElementById('month');//choosed month from option

let months=["Jan","Feb","Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
showCalendar(cmonth,cyear);

function next() {
    cyear = (cmonth === 11) ? cyear + 1 : cyear;
    cmonth = (cmonth + 1) % 12;
    showCalendar(cmonth, cyear);
}

function previous() {
    cyear = (cmonth === 0) ? cyear - 1 : cyear;
    cmonth = (cmonth === 0) ? 11 : cmonth - 1;
    showCalendar(cmonth, cyear);
}

function jump(event) {
    event.preventDefault();
    cyear = selectYear.value;
    cmonth = selectMonth.value;
    showCalendar(cmonth, cyear);
}

function showCalendar(month,year){
    let firstDay=(new Date(year,month)).getDay();//To get the first date of the specfied month in a year
    let daysInMonth = 32 - new Date(year, month, 32).getDate();
    //gIVES THE LAST DAY OF THE CURRENT MONTH

    let tbl=document.getElementById('calendar');//Body of the calendar

    tbl.innerHTML="";
    monthAndYear.innerHTML=months[month]+" "+year;
    selectYear.value = year;
    selectMonth.value = month;
    
    let date=1;
    for(i=0;i<=6;i++){//Each week
        let row=document.createElement('tr');
        for(j=0;j<7;j++){//Creating days in a week
            if(i==0 && j<firstDay){//blank cells in the first row of a calendar before 1
            let cell=document.createElement('td');//creating a data cell
            let cellText=document.createTextNode("");//creating a blank
            cell.appendChild(cellText);//Appending the blank into data cell
            row.appendChild(cell);//Appending the cell into the coloumn of the row
            }
            else if(date>daysInMonth){
                break;
            }
            else{
            let cell=document.createElement('td');//creating a data cell
            let cellText=document.createTextNode(date);//node withe date value
            if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                cell.style.backgroundColor="red";
                cell.style.color="white";

            }
            cell.appendChild(cellText);
            row.appendChild(cell);
            date++;
            }
        }
        tbl.appendChild(row);//appending each child into calendar body
    }
}

