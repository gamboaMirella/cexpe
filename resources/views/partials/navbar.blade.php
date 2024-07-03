<nav>
  <table>
    <thead> <!--Bloque de cabecera-->
      <tr> 
        <th scope="col" class="{{setActivo('inicio')}}"><a href="{{route('inicio')}}">Home</a></th>
        <th scope="col" class="{{setActivo('programas.index')}}"><a href="{{route('programas.index')}}">Servicios</a></th>
        <th scope="col" class="{{setActivo('talleres.index')}}"><a href="{{route('talleres.index')}}">Servicios</a></th>
        <th scope="col" class="{{setActivo('asesoramiento')}}"><a href="{{route('asesoramiento')}}">Nosotros</a></th>
        <th scope="col" class="{{setActivo('contacto')}}"><a href="{{route('contacto')}}">Contacto</a></th>     
      </tr>
    </thead>
  </table>
</nav>
