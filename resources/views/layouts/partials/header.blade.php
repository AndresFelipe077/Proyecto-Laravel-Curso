<style>
*{
    margin: 0 auto;
    padding: 0;
    
}

header{
    
    border:3px solid rgb(24, 3, 3);
    position: absolute;
    align-items:center;
    border-radius:10px;
    width: 100%;
    top:0;
}

nav{
    float:left;
    
}

.ul_padre{
    decoration:none;
    float:left;
    
}

#a{
    text-decoration: none;
    color:black;
    font-size:25px;
    
}
li{ 
    text-decoration: none;
    float:left;
    margin: 5px;
    list-style:none;
    
}

</style>


<header>

    <h1>FELPIL GAMES STUDIO</h1>
    <nav>
        <ul class="ul_padre">
            <li ><a id="a" href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a> <!--el ? es como si fuera un if en cualquier lenguaje de programación-->
            {{-- <?php dump(request()->routeIs('home')); ?> --}} <!--Los : es igual a decir else, ademas '' quiere decir que no se desea hacer nada-->

                {{--@dump(request()->routeIs('home'));--}}<!--Es lo mismo que arriba, laravel lo simplifica-->
            </li>

            <li><a id="a" href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
                {{--@dump(request()->routeIs('cursos.index'));--}}
            </li>

            <li><a id="a" href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
                {{--@dump(request()->routeIs('nosotros'));--}}<!--Se borra porque ya se coloca como class-->
            </li>

            <li><a id="a" href="{{route('login')}}" class="{{request()->routeIs('login') ? 'active' : ''}}">login</a>
                {{--@dump(request()->routeIs('nosotros'));--}}<!--Se borra porque ya se coloca como class-->
            </li>

            <li>
                <a id="a" href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a>
            </li>

        </ul>
    </nav>

</header>