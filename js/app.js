window.addEventListener("load", function(){
    let world = new World();

    document.addEventListener(
        "keypress",
        new Keypress(world).create_listener()
    );

    world.display();
});

