 <main>
   <div class="registro">
     <form action="<?= BASE_URL ?>evento/sendMail" method="post">
       <div class="contenido-registro">
         <label for="nombre">Nombre: </label>
         <input type="text" name="nombre" placeholder="Nombre">
       </div>
       <div class="contenido-registro">
         <label for="carrera">Carrera: </label>
         <select name="carrera">
           <option value="">Seleciona tu carrera</option>
           <option value="tecnologias de la informacion">Tecnologias de la informacion</option>
           <option value="mecanica">Mecanica</option>
           <option value="mantenimiento industrial">Mantenimiento Industrial</option>
           <option value="prosesos agricolas">Prosesos Agricolas</option>
           <option value="desarrollo de negocios">Desarrollo de negocios</option>
         </select>
       </div>

       <div class="contenido-registro">
         <label for="gradoYgrupo">Grado y Grupo: </label>
         <input type="text" placeholder="Inserta tu grado y grupo" name="gradoygrupo">
       </div>

       <div class="contenido-registro">
         <label for="telefono">No. telefono: </label>
         <input type="text" name="telefono" placeholder="Inserta tu numero de telefono">
       </div>

       <div class="contenido-registro">
         <label for="email">Correo: </label>
         <input type="text" name="email" placeholder="@gmail">
       </div>
       <div class="contenido-registro">
         <label for="evento">Seleciona el evento</label>
         <select name="evento">
           <option value="">Seleciona el evento</option>
           <option value="noche mexicana">Noche Mexicana</option>
           <option value="halloween">Halloween</option>
         </select>
       </div>

       <button type="submit">
         Registrarse
       </button>
     </form>
   </div>

 </main>