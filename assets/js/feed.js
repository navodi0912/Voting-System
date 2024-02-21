
/*________________________ trending page pop up video ________________________*/ 

document.querySelectorAll('.video video').forEach(vid=>
    {
        vid.onclick = () =>
        {
            document.querySelector('.popup_video video').src = vid.getAttribute('src');
        }           
    });

window.document.onkeydown = function(e) 
{
    if (!e) {
      e = event;
    }
    if (e.keyCode == 27) {
        popup_close();
    }
}

function popup_open() 
{
    var popupVideo = document.getElementById("tren_video");
    window.scrollTo(0, 0);
    document.getElementById('popup_vid').style.display = 'block';
    document.getElementById('close_but').style.display = 'block';
    popupVideo.play();
}

function popup_close() 
{
    var popupVideo = document.getElementById("tren_video");
    document.getElementById('popup_vid').style.display = 'none';
    document.getElementById('close_but').style.display = 'none';
    popupVideo.currentTime = 0;
    popupVideo.pause();
}


/*________________________ pop up image ________________________*/ 

document.querySelectorAll('.column img').forEach(img=>
    {
        img.onclick = () =>
        {
            document.querySelector('.popup_image').style.display = 'block';
            document.querySelector('.popup_image img').src = img.getAttribute('src');
        }           
    });
    
    document.querySelector('.popup_image span').onclick = () =>
    {
        
        document.querySelector('.popup_image').style.display='none'       
    }

    
 /*________________________ slide show ________________________*/  

var index = 0;
var slides = document.querySelectorAll(".slides");    
        
function changeSlide()
{
        
  if(index<0)
  {
    index = slides.length-1;
  }
        
  if(index>slides.length-1)
  {
    index = 0;
  }
        
  for(let i=0;i<slides.length;i++)
  {
    slides[i].style.display = "none";
            
  }
        
  slides[index].style.display= "block";
  index++;
        
  setTimeout(changeSlide,3000);
}
        
changeSlide();    


/*________________________ trending page pop up video ________________________*/ 

document.querySelectorAll('.svideo video').forEach(vid=>
    {
        vid.onclick = () =>
        {
            document.querySelector('.spopup_video video').src = vid.getAttribute('src');
        }           
    });

window.document.onkeydown = function(e) 
{
    if (!e) {
      e = event;
    }
    if (e.keyCode == 27) {
        spopup_close();
    }
}

function spopup_open() 
{
    var spopupVideo = document.getElementById("stren_video");
    window.scrollTo(0, 0);
    document.getElementById('spopup_vid').style.display = 'block';
    document.getElementById('sclose_but').style.display = 'block';
    spopupVideo.play();
}

function spopup_close() 
{
    var spopupVideo = document.getElementById("stren_video");
    document.getElementById('spopup_vid').style.display = 'none';
    document.getElementById('sclose_but').style.display = 'none';
    spopupVideo.currentTime = 0;
    spopupVideo.pause();
}