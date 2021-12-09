
   <div class="tutorial_container">
 
 <form action="/my-handling-form-page" method="POST">
       <ul>
       <li>
       <h3>INFORMACION DE LA TUTORIA </h3>
       </li>
       <li>
       <label class="labelre">Nombre: </label>
     <input type="text" name="nombre" required>
     </li>
       <li>
       <label class="labelre">Programa:</label>
     <select name="programas" >
         <option> Ingenieria de sistemas</option>
         <option> Ingenieria ambiental y sanitaria</option>
         <option> Ingenieria agroindustrial</option>
         <option> Contaduria publica</option>
         <option> Adminstracion de empresas</option>
         <option> Tecnología Agropecuaria</option>
         <option> Economia</option>
       </select>
       </li>
       <li>
       <label class="labelre"> Descripcion temas:</label>
       <textarea name="texto" placeholder="Descripcion"></textarea>
       </li>
       <li>
       <label class="labelre"> Tutor asignado:</label>
     <select name="programas" >
         <option> Miguel rincon</option>
         <option> darwin navarro</option>
         <option> jhon timi lopez</option>
       </select>
       </li>
       <li>
       <label > Horario:</label>
       <input type="radio"  class="selected" name="presencial" value="presencial" required> presencial
       <input type="radio" class="selected"  name="virtual" value="virtual" required> virtual 
       </li>      
       <li>
       <label></label>  
       <a href="https://calendar.google.com/calendar/u/0/r/settings/createcalendar?cid=cjkyOWhjZzF0MHFpdDNjbmM5Nzg3cGJraWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&pli=1">Click aqui! , Crea el horario en Google calendar y captura el link</a>
      </li>
       <li>
       <label class="labelre"> Link tutoria: </label>
     <input type="text" name="link" required>
     </li>
     <li>
     <label class="labelre"> Salon: </label>
     <input type="text" name="salon" required>
     </li>
     <li>
     <label> </label>
     <button  type="reset" class="boton">Crear tutoria</button>
     </li>
       </ul>
       </form>
       
   <div class="tutorial_container_coumn_1">
  <div class="special">
   <form class="login-form" >
   <div class="row">
       <div src="" class="dropimage">
               <input title="HacerClick aqui" type="file" class="foto" name="foto1" id="foto1" required="true">
       </div> 
   </div> 