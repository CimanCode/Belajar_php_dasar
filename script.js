function helloCiman(nama) {
    console.log(nama);
}

helloCiman("Firman");

class Ciman {
    constructor(nama) {
        this.nama = nama;
    }

    getNama() {
        return this.nama;
    }
}

const firman = new Ciman("Firman");
