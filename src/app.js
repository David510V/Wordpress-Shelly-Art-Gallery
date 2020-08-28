$('#one').owlCarousel({
    center: true,
    lazyLoad:false,
    items:1,
    loop:true,
    margin:10,
    responsive:{
        600:{
            items:1
        }
    }
});

$('#second').owlCarousel({
    center: false,
    dots:false,
    dragEndSpeed:600,
    items:2,
    loop:false,
    margin:-415,
    responsive:{
        300:{
            margin:100,
            center:true,
        },

        700:{
            margin:-415
        }
    }
    
});

var first=document.querySelector('.big .half:first-of-type span')
var second=document.querySelector('.big .half:last-of-type span')
var discoverFirst=document.querySelector('.details .content .discover .bigH .half:first-of-type span')
var images=document.querySelector('.details .images')
var image1=document.querySelector('.details .images .img1')
var image2=document.querySelector('.details .images .img2')
var discoverSecond=document.querySelector('.details .content .discover .bigH .half:last-of-type span')
var newFirst=document.querySelector('.details .content .new .bigH .half:first-of-type span')
var newSecond=document.querySelector('.details .content .new .bigH .half:last-of-type span')

var line=document.querySelector('.details .content .new .innerNew .second')
var lineFirst=document.querySelector('.details .content .new .innerNew .first')

window.addEventListener('scroll',()=>{
    
    var scrollFirstY=-39+((window.scrollY)/5)
    var scrollSecondY=-139-((window.scrollY)/3)
    
    var newFirstScroll=`${scrollFirstY}%`
    var newSecondScroll=`${scrollSecondY}%`
    


    var media=window.matchMedia('(min-width:300px) and (max-width:500px)')
    if(!media.matches){
        
        first.style.transform=`translate3d(0px, ${newFirstScroll},0px)`
        first.style.animation=""
        second.style.transform=`translate3d(0px,${newSecondScroll},0px)`
        second.style.animation=""
        // console.log(window.scrollY)
        if(790<=window.scrollY && window.scrollY<1870){
            
            discoverFirst.style.animation="1s cubic-bezier(.215,.61,.355,1) firstDiscover"
            discoverSecond.style.animation="1s cubic-bezier(.215,.61,.355,1) secondDiscover"
        }
        else{
            discoverFirst.style.animation=""
            discoverSecond.style.animation=""
        }
        if(1700<window.scrollY){
            newFirst.style.animation="1s cubic-bezier(.215,.61,.355,1) firstNew"
            newSecond.style.animation="1s cubic-bezier(.215,.61,.355,1) secondNew"
            line.style.animation="2.5s cubic-bezier(.215,.61,.355,1) loadLine"
            lineFirst.style.animation="2.5s cubic-bezier(.215,.61,.355,1) opacityNav "
        }
        else{
            newFirst.style.animation=""
            newSecond.style.animation=""
            line.style.animation=""
            lineFirst.style.animation=""
        }
    }


    
    if(790<=window.scrollY && window.scrollY<1370){
            
        discoverFirst.style.animation="0.8s cubic-bezier(.215,.61,.355,1) firstMobileDiscover"
        discoverSecond.style.animation="0.8s cubic-bezier(.215,.61,.355,1) secondMobileDiscover"
    }
    else{
        discoverFirst.style.animation=""
        discoverSecond.style.animation=""
    }
    if(1380<window.scrollY){
        newFirst.style.animation="1s cubic-bezier(.215,.61,.355,1) firstMobileNew"
        newSecond.style.animation="1s cubic-bezier(.215,.61,.355,1) secondMobileNew"
        
    }
    else{
        newFirst.style.animation=""
        newSecond.style.animation=""
        line.style.animation=""
        lineFirst.style.animation=""
    }
    
})

window.addEventListener('scroll',()=>{
    
    var media=window.matchMedia('(min-width:300px) and (max-width:500px)')
    var bigMedia=window.matchMedia('(min-width:1600px)')
    if(!media.matches){
        if(window.scrollY<1325.199951171875){
            images.classList.add('beforeEnter')
            images.classList.remove('inEnter')
            images.classList.remove('afterEnter')
        }
        if(1325.199951171875<=window.scrollY && window.scrollY<23760.39990234375){
            images.classList.remove('beforeEnter')
            images.classList.add('inEnter')
            images.classList.remove('afterEnter')
        }
    
       if(2365.39990234375<=window.scrollY){
           images.classList.remove('beforeEnter')
           images.classList.remove('inEnter')
           images.classList.add('afterEnter')
       }
    
       if(window.scrollY<=1865.4000244140625){
        image1.classList.add('showImg')
        image2.classList.remove('showImg')
       }
       if(1865.4000244140625<=window.scrollY){
        image1.classList.remove('showImg')
        image2.classList.add('showImg')
        }
    }
    

    if(bigMedia.matches && !media.matches){
        if(window.scrollY<1711){
            images.classList.add('beforeEnter')
            images.classList.remove('inEnter')
            images.classList.remove('afterEnter')
        }
        if(1711<=window.scrollY && window.scrollY<3059){
            images.classList.remove('beforeEnter')
            images.classList.add('inEnter')
            images.classList.remove('afterEnter')
        }
    
       if(3059<=window.scrollY){
           images.classList.remove('beforeEnter')
           images.classList.remove('inEnter')
           images.classList.add('afterEnter')
       }
    
       if(window.scrollY<=2301){
        image1.classList.add('showImg')
        image2.classList.remove('showImg')
       }
       if(2301<=window.scrollY){
        image1.classList.remove('showImg')
        image2.classList.add('showImg')
        }
    }

})


var innerNav=document.querySelector('.nav .innerNav')
var circle=document.querySelector('.nav .innerNav .circle')

var open1=document.querySelector('.open')
var exhibition=document.querySelector('.exhibition')

var discover=document.querySelector('#discover')
var details=document.querySelector('.details')

var dnew=document.querySelector('#new')


open1.style.backgroundColor="#F1D2C8"
exhibition.style.backgroundColor="#7998A6"
discover.style.backgroundColor="rgb(243, 116, 74)"
dnew.style.backgroundColor="rgb(163, 133, 189)"



//rgb(252, 227, 115)
var options={
    root:null,
    threshold:0.3,
    rootMargin:"-50px"
}
var observer=new IntersectionObserver((entries,observer)=>{
    
    entries.forEach(entry=>{
        console.log(entry)
        if (entry.isIntersecting){
            console.log(innerNav.style.color)
            innerNav.style.color=entry.target.style.backgroundColor
            circle.style.backgroundColor=entry.target.style.backgroundColor
        }

    })
},options)


observer.observe(open1)
observer.observe(exhibition)
observer.observe(discover)
observer.observe(dnew)