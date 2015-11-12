function getRandomizer(bottom, top) {
    return function() {
        return Math.floor( Math.random() * ( 1 + top - bottom ) ) + bottom;
    }
}
var rollDie = getRandomizer( 1, 3 );
var step = ""
step += rollDie();
function slideit(){
document.images.Bilder.src=eval("image"+step+".src")
if(step<3)
step++
else
step=1
setTimeout("slideit()",7000)
}
slideit()
