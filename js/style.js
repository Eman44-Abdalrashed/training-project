// this function to select some companies belong to one location
function change_loc(){
    var location =document.getElementById('location').value,
        id  =document.getElementById(location),
        images  =document.getElementsByClassName('image');
        console.log(location);
    for(image of images){
        if(location=='All Location'){
            image.style.display='block';
        }else{
                image.style.display='none';
                id.style.display ='block';
        }
    }
}