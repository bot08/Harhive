<style>

.area{ 
    background: -webkit-linear-gradient(to left, #df48be5d, #646ad849);  
    width: 100%;
    position: relative;
    z-index: -1;

}

.circles{
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
}

.circles li{
    position: fixed;
    display: block;
    list-style: none;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.12);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}


.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 40px;
    height: 40px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 40px;
    height: 40px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 30px;
    height: 30px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 21px;
    height: 21px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 0.5;
        border-radius: 33% 67% 32% 68% / 22% 20% 80% 78%;
    }

    100%{
        transform: translateY(-1100px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
</style>

<div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
        </ul>
</div >

