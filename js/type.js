// Typewriter Effect
const headType = document.getElementById('head-type');
const paraType = document.getElementById('para-type');

const headWriter = new Typewriter(headType, {
    autoStart: true,
    cursor: null,
    strings: 'My Name is Brendan Boyle'
});

const paraWriter = new Typewriter(paraType, {
    delay: 75
});

// Can I make this DRYer?
paraWriter
    .pauseFor(4500)
    .changeDeleteSpeed(1)
    .typeString("I'm a Pirate!")
    .pauseFor(300)
    .deleteChars(7)
    .typeString('Ninja')
    .pauseFor(300)
    .deleteChars(5)
    .typeString('Wizard?')
    .pauseFor(300)
    .deleteChars(7)
    .typeString('<strong>Web Developer</strong>')
    .start();