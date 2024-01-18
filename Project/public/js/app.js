
const btn = document.querySelector('.Btn');
const dataLine = document.querySelector('#data_line');
let cont = 0;

btn.addEventListener('click', e => {
    e.preventDefault();
    cont = cont + 1;
    console.log('hola');
    dataLine.insertAdjacentHTML('beforeend', `
        <div class="details personal">
                            
        <span class="title" style="margin-top: 2%; "> Detalles de la línea 2</span>

        <div class="fields" id="data_line"> <!--hay que modificar esto en java. Debido a que hay que ver 
                                                                            lo de como va a traer la info cuando sean varias lineas por cliente-->
            <div class="input-fields" >
                <label for="">Código</label>
                <h2> 0411</h2>
            </div>
            <div class="input-fields">
                <label for="">Número asignado</label>
                <h2>6086582</h2>
            </div>
            

            <div class="input-fields">
                            <label for="">Plan</label>
                                <select name="ciudades" required>
                                    <option value="valencia">Básico</option>
                                    <option value="valencia">Intermedio</option>
                                    <option value="caracas">Premium</option>
                                </select>
                            </div>
                            <div class="input-fields">
                            <label for="">Servicios</label>
                                <select name="ciudades" required>
                                    <option value="valencia">Llamadas extras</option>
                                    <option value="valencia">Mensajes extras</option>
                                    <option value="caracas">Datos extras</option>
                                </select>
                            </div>
        
            <div class="input-fields">
                <label for="">Tipo de pago</label>
                <select name="pagos" required>
                    <option value="valencia">Post-pago</option>
                    <option value="valencia">Pre-pago</option>
                </select>
            </div>
            
        </div>
       
    </div>
    `);

  });

  window.dispatchEvent(new Event('resize'));

  