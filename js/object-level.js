let Level = function(name_, linked_ = []) {
    this.elt = document.createElement("div");
    this.elt.classList.add("level");
    this.elt.classList.add("locked");
    this.elt.style.top = "" + (Math.random()*90) + "%";
    this.elt.style.left = "" + (Math.random()*90) + "%";

    document.getElementById("world").appendChild(this.elt);

    this.name = name_;
    this.locked = true;
    this.linked = linked_;
}

Level.prototype.display = function() {
}

Level.prototype.unlock = function() {
    if(this.locked)
    {
        this.locked = false;
        this.elt.classList.remove("locked");
        this.elt.classList.add("unlocked");
        alert("level " + this.name + " is unlocked");
    }
}

Level.prototype.finish = function() {
    this.elt.classList.add("finished");

    for(let i in this.linked)
    {
        this.linked[i].unlock();
    }
}

