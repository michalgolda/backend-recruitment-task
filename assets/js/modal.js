class Modal {
  constructor(containerSelector) {
    this.isHidden = true;
    this.containerElm = this.getContainer(containerSelector);

    if (this.containerElm === null) {
      console.error("The container element by passed selector doesn't exists.");
    }
  }

  getContainer(containerSelector) {
    return document.querySelector(containerSelector);
  }

  hide() {
    this.containerElm.classList.add("hidden");
  }

  show() {
    this.containerElm.classList.remove("hidden");
  }
}
