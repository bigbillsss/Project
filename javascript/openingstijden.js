let objDate = new Date ();
function openOrClosedMessage() {
    if (objDate.getHours() >= 11 && objDate.getHours() <= 22){

        openOrClosedMessage.style.color= `green`;
        if (60 - minutes < 10)
            openOrClosedMessage.innerHTML = `Open - Closes in`
    }
}

let hour = objDate.getHours();

let day = objDate.getDay();

let weekdays = ['Zondag', 'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag']

let minutes = objDate.getMinutes();

document.getElementById('date').innerHTML = objDate
document.getElementById('hour').innerHTML += hour
document.getElementById('minute').innerHTML += minutes
document.getElementById('day').innerHTML += `${day} - ${weekdays[day]}`

