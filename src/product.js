var show=false;
document.getElementById('search').addEventListener('click',()=>{
    
    show=!show

    if(show){
        document.querySelector('.nav .innerNav .search .point2').style.opacity="100%"
        console.log("updated")
    }
    else{
        document.querySelector('.nav .innerNav .search .point2').style.opacity="0%"
    console.log("erase")
    }
    // console.log("work")
})