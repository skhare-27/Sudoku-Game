const Board=document.querySelector("#Board");
const clearAll=document.querySelector("#clearall");
const deletenum=document.querySelector("#help");
const givehint=document.querySelector("#hint");
const complete=document.querySelector("#submit");
var numSelected=null;
 
const puzzle=[
    "-52--6---",
    "16-9----4",
    "-498-362-",
    "4-----8--",
    "-832-159-",
    "--1-----2",
    "-973-524-",
    "2----9-56",
    "---1--97-",
]
const solution=[
    "352476189",
    "168952734",
    "749813625",
    "425697813",
    "683241597",
    "971538462",
    "897365241",
    "214789356",
    "536124978",
]

window.onload=(()=>{
    for(let i=0;i<9;i++){
        for(let j=0;j<9;j++){
            const input=document.createElement("input");
            input.classList.add("input");
            input.maxLength=1;
            input.addEventListener("click",select);
            input.setAttribute("row",i);
            input.setAttribute("col",j);
            if(puzzle[i][j]!="-")
            {
                input.value=puzzle[i][j];
                input.classList.add("filled");
            }
            Board.appendChild(input);
        }   
    }
  }

)
function select(){
    if(numSelected!=null){
        numSelected.classList.remove("varselect");
        numSelected.classList.remove("right");
        numSelected.classList.remove("wrong");
        var inputs = document.querySelectorAll('input');
        inputs.forEach(function(input) 
        {
        if(!input.classList.contains("filled"))
        {
            input.classList.remove("right");
            input.classList.remove("wrong");
        }
        });
    }
    numSelected=this;
    numSelected.classList.add("varselect");

}
deletenum.onclick=()=>{
    var inputs = document.querySelectorAll('input');
    numSelected.classList.remove("right");
    numSelected.classList.remove("wrong");
    inputs.forEach(function(input) 
    {
        if(!input.classList.contains("filled"))
        {
            input.classList.remove("right");
            input.classList.remove("wrong");
        }
    });
    if(!numSelected.classList.contains("filled"))
    {
        numSelected.value="";
    }
}
function action(button){
    var inputs = document.querySelectorAll('input');
    numSelected.classList.remove("right");
    numSelected.classList.remove("wrong");
    inputs.forEach(function(input) 
    {
        if(!input.classList.contains("filled"))
        {
            input.classList.remove("right");
            input.classList.remove("wrong");
        }
    });
    var buttonValue = button.innerHTML;
    numSelected.value=buttonValue;
}
clearAll.onclick=()=>{
    var inputs = document.querySelectorAll('input');
    numSelected.classList.remove("right");
    numSelected.classList.remove("wrong");
    inputs.forEach(function(input) 
    {
        if(!input.classList.contains("filled"))
        {
            input.value = '';
            input.classList.remove("right");
            input.classList.remove("wrong");
        }
    });
}
givehint.onclick=()=>{
    let x=numSelected.getAttribute("row");
    let y=numSelected.getAttribute("col");
    if(solution[x][y]==numSelected.value)
    {
        numSelected.classList.add("right");
    }
    else
    {
        numSelected.classList.add("wrong");
    }
    
}
complete.onclick=()=>{
    const inputs = document.querySelectorAll('input');
    let userAns=[...inputs].map((input)=>{
        return input.value;
    });
    let k=0;
    let count=0;
    for(let i=0;i<9;i++)
    {
        for(let j=0;j<9;j++)
        {
            if(solution[i][j]==userAns[k])
            {
                if(!inputs[k].classList.contains("filled"))
                {     
                    inputs[k].classList.add("right");
                }
            }
            else{
                count++;
                inputs[k].classList.add("wrong");
            }
            k++;
            
        }
    }
    if(count<1)
    {
        alert("Congratulations !!! You Won !")
    }
    
}
   

