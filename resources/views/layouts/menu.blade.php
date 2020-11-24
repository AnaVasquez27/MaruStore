
<a><span>Registros de ventas</span></a>
<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('facturacions*') ? 'active' : '' }}">
    <a href="{{ route('facturacions.index') }}"><i class="fa fa-edit"></i><span>Factura</span></a>
</li>

<li class="{{ Request::is('productosVendidos*') ? 'active' : '' }}">
    <a href="{{ route('productosVendidos.index') }}"><i class="fa fa-edit"></i><span>Productos por factura</span></a>
</li>

<a><span>Opciones de inventario</span></a>

<li class="{{ Request::is('tiposDePrendas*') ? 'active' : '' }}">
    <a href="{{ route('tiposDePrendas.index') }}"><i class="fa fa-edit"></i><span>Tipos De Prendas</span></a>
</li>

<li class="{{ Request::is('colores*') ? 'active' : '' }}">
    <a href="{{ route('colores.index') }}"><i class="fa fa-edit"></i><span>Colores</span></a>
</li>

<li class="{{ Request::is('tallasEnLetras*') ? 'active' : '' }}">
    <a href="{{ route('tallasEnLetras.index') }}"><i class="fa fa-edit"></i><span>Tallas En Letras</span></a>
</li>

<li class="{{ Request::is('tallasEnNumeros*') ? 'active' : '' }}">
    <a href="{{ route('tallasEnNumeros.index') }}"><i class="fa fa-edit"></i><span>Tallas En Numeros</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('prendaTls*') ? 'active' : '' }}">
    <a href="{{ route('prendaTls.index') }}"><i class="fa fa-edit"></i><span>Prenda Tls</span></a>
</li>

<li class="{{ Request::is('prendaTns*') ? 'active' : '' }}">
    <a href="{{ route('prendaTns.index') }}"><i class="fa fa-edit"></i><span>Prenda Tns</span></a>
</li>

