console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);
const x = document.querySelector.bind(document);
const xx = document.querySelectorAll.bind(document);

const app = {
    render: function () {

        // ============================home__service__boxImg============================
        const home__service__boxImg = xx('.home__service__boxImg');
        let w1 = 0;
        const calcBoxImg = () => {
            home__service__boxImg.forEach((item,index) => {
                if (w1 < item.offsetWidth){
                    w1 = item.offsetWidth
                }
            })
            return w1;
        }
        calcBoxImg();
        if (w1 > 0){
            home__service__boxImg.forEach((item,index) => {
                item.style.minWidth = w1 + 'px'
            })
        }
        // ============================home__service__boxImg============================









        // ============================home__block01__box============================
        const home__block01__box = xx('.home__block01__box');
        const home__block01__img = x('.home__block01__img');
        const calcHeihgt = () => {
            const imgHeight = home__block01__img ? home__block01__img.offsetHeight : 0
            home__block01__box.forEach((item,index)=>{
                if (item.offsetHeight < imgHeight){
                    item.style.minHeight = imgHeight + 'px'
                }else if (item.offsetHeight > imgHeight){

                }else {

                }
            })
        }
        calcHeihgt();
        // ============================home__block01__box============================



        // ============================home__team__icon============================
        const home__team__icon = xx('.home__team__icon');
        let imgH = 0;
        const calc1 = () => {
            home__team__icon.forEach((item,index)=>{
                if (item.offsetHeight > imgH){
                    imgH = item.offsetHeight
                }
            })
        }
        calc1()
        if (imgH > 0){
            home__team__icon.forEach((item,index)=>{
                item.style.minHeight = imgH + 'px'
            })
        }
        // ============================home__team__icon============================


        onresize = (event) => {
            console.log('onresize')
            calcHeihgt();
        };
    },
    start: function () {
        this.render();
    }
}

window.addEventListener("load", ()=>{
    console.log("page is fully loaded");
    app.start();
})