<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Jenis-jenis Forms & HTML di Blade Engine </title>
    </head>
    <body>
        <!-- Opening Form -->
        {{ Form::open() }}
            <input type="submit" value="Opening Form" /> 
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke URL -->
        {{ Form::open(array('url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Mengarahkan ke URL" />
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke Routing -->
        {{ Form::open(array('route'=>'login.showLogin')) }}
            <input type="submit" value="Mengarahkan ke Routing" />
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke Controller -->
        {{ Form::open(array('action'=>'HomeController@showWelcome')) }}
            <input type="submit" value="Mengarahkan ke Controller" />
        {{ Form::close() }}
        <br />
        <!-- Menggunakan Method yang Berbeda -->
        {{ Form::open(array('method'=>'GET', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method GET" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'PUT', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method PUT" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'PATCH', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method PATCH" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'DELETE', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method DELETE" />
        {{ Form::close() }}
        <br />
        <!-- Menggunakan Atribute CSS -->
        {{ Form::open(array('class'=>'container')) }}
            <input type="submit" value="Atribut CSS Class" />
        {{ Form::close() }}    
        <br />
        {{ Form::open(array('id'=>'container')) }}
            <input type="submit" value="Atribut CSS ID" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'GET', 'route'=>'login.showLogin', 'class'=>'form-control')) }}
            <input type="submit" value="Multiple Atribut" />
        {{ Form::close() }}
        <br />
        <!-- Form Binding ke Model -->
            <!-- Form::model($data, array('route'=>'login.showLogin', $item->id)) -->
        <!-- Komponen Form -->
        <!-- Elemen label -->
        <p> {{ Form::label('revenue', 'Revenue Monthly', array('class'=>'awesome')) }} </p>
        <!-- Input Text -->
        <p> {{ Form::text('revenue', 'Rp.2.500.000.000', array('name'=>'pendapatan', 'class'=>'form-control')) }} </p>
        <!-- Input TextArea -->
        <p> {{ Form::textarea('alamat', 'Alamat Rumah', array('class'=>'form-control')) }} </p>
        <!-- Input Password --> 
        <p> {{ Form::password('kata_sandi', array('placeholder'=>'Password / Kata Sandi', 'class'=>'form-control')) }} </p>
        <!-- Input Hidden -->
        {{ Form::hidden('piutang', 'Rp.500.000.000', array('id'=>'accounts_receivable')) }}
        <!-- Check Box -->
        <p> 
            {{ Form::checkbox('isRead', '1', false, array('id'=>'pernah_dibaca', 'class'=>'form-control')) }} First  
            <br />
            {{ Form::checkbox('isRead', '2', false, array('id'=>'pernah_dibaca', 'class'=>'form-control')) }} Second
            <br />
            {{ Form::checkbox('isRead', '3', true, array('id'=>'pernah_dibaca', 'class'=>'form-control')) }} Third
        </p>
        <!-- Radio Button -->
        <p>
            {{ Form::radio('color', 'red', false, array('id'=>'warna', 'class'=>'form-control')) }} Red
            <br />
            {{ Form::radio('color', 'black', true, array('id'=>'warna', 'class'=>'form-control')) }} Black
            <br />
            {{ Form::radio('color', 'blue', false, array('id'=>'warna', 'class'=>'form-control')) }} Blue
        </p>
        <!-- Select Box / Drop Down Lists -->
        <p>
            {{ Form::select('color', array('red'=>'Merah', 'black'=>'Hitam', 'blue'=>'Biru'), 'black', 
                            array('id'=>'dropdown_color', 'class'=>'form-control')) }}
            <br /> <br />
            {{ Form::select('size', array('L'=>'Large', 'S'=>'Small'), 'S', array('id'=>'dropdown_size', 'class'=>'form-control')) }}
            <br /> <br />
            {{ Form::select('animal', array('Cats' => array('lpd'=>'Leopard', 'jgr'=>'Jaguar', 'cth'=>'Cheetah'),
                                            'Dogs' => array('spl'=>'Spaniel', 'sbh'=>'Siberian Husky', 'ptb'=>'Pit Bull', 'blg'=>'Buldog'),
                                            'Whale'=> array('bw'=>'Blue Whale', 'kw'=>'Killer Whale', 'sw'=>'Sperm Whale')), 
                            'kw', array('id'=>'dropdown_animal', 'class'=>'form-control')) }}
        </p>
        <!-- Email Input -->
        <p>
            {{ Form::email('email', 'greet@email.com') }}
        </p>
    </body>
</html>