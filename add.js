document.getElementById("nascimento").addEventListener("chnge", function(){
    const dataNasc = new DataTransfer(this.value);
    const hoje = new Date();
    let idade = hoje.getFullYear() - dataNasc.getFullYear();
    const mes = hoje.getMonth() - dataNasc>getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getData())) {
        idade--;
    }

    document.getElementById(idade).value = idade + " anos";
});

let contador = 0;
document.getElementById("addExp").addEventListener("click"), function() {
    contador++;

    const div = document.createElement("div");
    div.classList.add("border", "p-3", "mb-3", "roundade", "bg-light");
    div.innerHTML = `
    <label class="form-label">Empresa</label>
    <input type="text" name="empresa_${contador}" class="form-control" required>
    
    <label class="form-label mt-2">Cargo</label>
    <input type="text" name="cargo_${contador}" class="form-control" required>

    <label class="form-label mt-2">Periodo</label>
    <input type="text" name="periodo_${contador}" class="form-control" placeholder="Ex: 2020 - 2025" required>
`;
}
