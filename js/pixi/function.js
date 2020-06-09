function gameLoop() {
    requestAnimationFrame(gameLoop);
    renderer.render(stage);
    state();
}
function start(){
    counter = totalnum;
    for (var i = 1; i < ( totalnum + 1 ); i++) {
        bannerarray[i].alpha = 1;
        if(i%2==1){
            bannerarray[i].x = rightstart;
        }
        else{
            bannerarray[i].x = leftstart;
        }
        bannerarray[i].displayGroup = new PIXI.DisplayGroup(i,true);
    }
    state = status;
}
function status(){

    if(counter%2==0 && counter!=0)
        power_switch = 1;
    else if(counter%2==1 && counter!=0)
        power_switch = 2;
    else
        power_switch = 0;

    if(counter==1 && counter!=0){
        bannerarray[totalnum].alpha = 1;
        bannerarray[totalnum].x = leftstart;
        bannerarray[totalnum].displayGroup.zIndex = 1;

        bannerarray[counter].displayGroup.zIndex = totalnum;
    }

    switch(power_switch) {
        case 1:
            state = bleft;
            break;
        case 2:
            state = bright;
            break;
        default:
            state = start;
    }
}
function bleft(){
    bannerarray[counter].x += bannerarray[counter].vx;

    if(bannerarray[counter].x>=leftend)
        bannerarray[counter].alpha -= transparencyNow;

    if(bannerarray[counter].alpha<=0){
        counter--;
        state = status;
        return ;
    }
}
function bright(){
    bannerarray[counter].x -= bannerarray[counter].vx;

    if(bannerarray[counter].x<=rightend)
        bannerarray[counter].alpha -= transparencyNow;

    if(bannerarray[counter].alpha<=0){
        counter--;
        state = status;
        return ;
    }
}
