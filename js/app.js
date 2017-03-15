window.addEventListener("load", function(){
    let world = new World();

    document.addEventListener(
        "keydown",
        new Keypress(world).create_listener()
    );

    world.display();
});

