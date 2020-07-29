const deadline = new Date("Sep 30, 2020 00:00:00").getTime()

const counter = setInterval(() => {
    const now = new Date().getTime()
    const distance = deadline - now

    const counter_days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const counter_hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const counter_minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const counter_seconds = Math.floor((distance % (1000 * 60)) / 1000);

    days.textContent = counter_days.toString().length === 1 ? `0${counter_days}` : counter_days
    hours.textContent = counter_hours.toString().length === 1 ? `0${counter_hours}` : counter_hours
    minutes.textContent = counter_minutes.toString().length === 1 ? `0${counter_minutes}` : counter_minutes
    seconds.textContent = counter_seconds.toString().length === 1 ? `0${counter_seconds}` : counter_seconds

    if (distance < 0) {
        clearInterval(counter)
        window.counterIsActive = false
    }
}, 1000)
