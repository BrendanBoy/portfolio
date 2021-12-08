const testing = document.getElementById('test-type');

const typewriter = new Typewriter(testing, {
    loop: true,
    delay: 75,
});

typewriter
    .typeString('Testing')
    .pauseFor(300)
    .deleteChars(7)
    .typeString('Testing')
    .pauseFor(300)
    .typeString(' 1')
    .pauseFor(300)
    .typeString(', 2')
    .pauseFor(300)
    .typeString(', 3')
    .pauseFor(2000)
    .start();