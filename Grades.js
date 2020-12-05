window.onload = function(){

    var table = document.getElementById("myTable");
    var progressBar;
    var subjectText;
    var gradeText;
    var valueText;
    var progressText;
    var progressValues = [];
    var subjects = ["Calculus","English","Higher Maths","OOP","Databases","Computer Graphics","Data Structures","Mechanics","Physical Education"];
    var selectedSubjects = [];
    var j=0;

    buildSubjectsList(subjects);
    buildTable(selectedSubjects);

    for(let i=0; i<progressBar.length; i++){

        progressValues.push(Math.floor(Math.random()*101));

    }

    var anInterval = setInterval(function(){

        run();

    },25);

    function run(){

        for(let i=0; i<progressValues.length; i++){

            if(j >= progressValues[i]){

                progressBar[i].value = progressValues[i];
                valueText[i].innerHTML = progressValues[i];
                gradeText[i].innerHTML = getGrade(progressValues[i]);

            } else {

                progressBar[i].value = j;
                valueText[i].innerHTML = j;
                gradeText[i].innerHTML = getGrade(j);

            }


        }

        if(j == 100){

            clearInterval(anInterval);


        } else {

            j++;

        }

    }

    function getGrade(n){

        var result = "";

        if(n < 50){

            result += "fail";

        } else if(n < 60){

            result += "5";

        } else if(n < 70){

            result += "6";

        } else if(n < 80){

            result += "7";

        } else if(n < 90){

            result += "8";

        } else if(n < 100){

            result += "9";

        } else {

            result += "10";

        }

        return result;

    }

    function buildSubjectsList(arr){

        var maxSubjects = Math.floor(Math.random()*10)+(arr.length-10);

        for(let i=0; i<maxSubjects; i++){

            var thePick = arr[Math.floor(Math.random()*arr.length)];

            if(selectedSubjects.includes(thePick) == false){

                selectedSubjects.push(thePick);

            } else {

                i--;

            }

        }

    }

    function buildTable(arr){

        for(let i=0; i<arr.length; i++){

            var row = table.insertRow(i+2);

            for(let j=0; j<4; j++){

                var cell = row.insertCell(j);

                if(j == 3){

                    var myProg = document.createElement("progress");
                    myProg.setAttribute("value","0");
                    myProg.setAttribute("max","100");
                    myProg.setAttribute("min","0");
                    myProg.className = "progressBar";

                    cell.appendChild(myProg);

                }

            }

        }

        subjectText = document.querySelectorAll("tr > td:nth-of-type(1)");
        gradeText = document.querySelectorAll("tr > td:nth-of-type(2)");
        valueText = document.querySelectorAll("tr > td:nth-of-type(3)");
        progressText = document.querySelectorAll("tr > td:nth-of-type(4)");
        progressBar = document.getElementsByClassName("progressBar");

        for(let i=0; i<arr.length; i++){

            subjectText[i].innerHTML = ""+arr[i];
            gradeText[i].innerHTML = "hi";

        }

    }

    /*
    	For subjects set up in a certain format:

    	>Name at top title
    	>Subject on left hand side of row
    	>Grade on 2nd column
    	>Progress bar on 3rd column (it fills up when js loads up)
    	>percent symbol on right or left hand side of the curent value progress stage (95% for example it'll be on the left hand side and at 5% it will be on the right hand side).
    	It can appear after the bar animation

    */
}
