let down = false;
function toggleForm(n) {
    //const shade = document.querySelector(".shade");
    let formDiv = document.querySelector(".form-div");
    if(n==2) {
        formDiv = document.querySelector(".form2-div");
    }
    if(!down) {
        //shade.style.display = "inline";
        //shade.style.opacity = "0.35";
        formDiv.style.top = "100px";
        if (n==2){formDiv.style.top = "5px";}
    } else {
       // window.setTimeout(function(){shade.style.display = "none"}, 1000);
        //shade.style.opacity = "0";
        document.querySelector(".form-div").style.top = "-525px";
        document.querySelector(".form2-div").style.top = "-1000px";
    }
    down = !down;
}
document.querySelector("#theButton").addEventListener("click", toggleForm);
document.querySelector("#theButton2").addEventListener("click", function(){toggleForm(2)});
//document.querySelector(".shade").addEventListener("click", function(){if(this.style.opacity==0.35){toggleForm()}});

function filter(by) {
    const fields = document.querySelectorAll("tbody tr");
    fields.forEach(function(e) { //loops through every company
        e.classList.remove("hidden"); // acts as a reset so filtering multiple times doesn't break
        let group = e.children[3].textContent.toLowerCase();
        if(group !== by && group !== "*" && by !== "*") { // the conditions are(in order): group doesn't match, group isn't a match-all(*), filter is selected.
            e.classList.add("hidden");
        }
    })
}