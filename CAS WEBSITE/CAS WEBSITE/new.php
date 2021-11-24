<!-- count down -->
<div id="countdown">
            <h2><?=$user_data['subtitle2']?></h2>
            <div id="time">
                <div class="totalTime" id="days">30<b>d</b></div>
                <div class="totalTime" id="hrs">23<b>h</b></div>
                <div class="totalTime" id="mins">44<b>m</b></div>
                <div class="totalTime" id="secs">56<b>s</b></div>
            </div>
        </div>


        #countdown {
    position: absolute;
    bottom: 5%;
    left: 5%;
}

#countdown h2 {
    font-size: 25px;
    padding: 0 10px;
    color: #126e12;
}

#countdown #time {
    display: flex;
    flex-direction: row;
}

#countdown #time .totalTime {
    font-size: 30px;
    padding: 20px 10px;
    color: #e6e7e9;
}

#countdown #time .totalTime b {
    font-size: 15px;
    color: #126e12;
}


@media only screen and (max-width: 520px) {
    #content h3 {
        font-size: 50px;
    }

    #content p {
        font-size: 20px;
    }

    #socialIcons {
        position: absolute;
        bottom: 20%;
        left: 5%;
    }

    #countdown {
        position: absolute;
        bottom: 5%;
        left: 5%;
    }
}

@media only screen and (max-width: 395px) {
    #content h3 {
        font-size: 30px;
    }

    #content p {
        font-size: 10px;
    }

    #socialIcons {
        position: absolute;
        bottom: 15%;
        left: 2%;
        transform: scale(70%);
    }

    #countdown {
        position: absolute;
        bottom: 5%;
        left: 5%;
        transform: scale(70%);
    }
}