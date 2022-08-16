
    let positionx = 0
    let positiony = 0
    const preid = document.getElementById('pre')
    preid.style.display = 'none'


    function next() {
        positiony++
        if( positiony >= 2) {

        }

        else {
            document.getElementById('overflow').style.transform = `translateX(${-positiony * 50 }%)`
            preid.style.display = 'flex'
            let nextid = document.getElementById('next').style.display = 'none'
        }
        positionx--

    }

    function pre() {
        positionx++
        if( positionx >= 1 || positionx < 0) {
            let preid = document.getElementById('pre').style.display = 'none'
        }

        else {
            document.getElementById('overflow').style.transform = `translateX(${positionx * 0}px)`
            let nextid = document.getElementById('next').style.display = 'flex'
            preid.style.display = 'none'
    }
    positiony--
    
        }