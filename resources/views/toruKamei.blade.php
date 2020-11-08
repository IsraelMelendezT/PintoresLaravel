@extends('layouts.master')
@section('title', '{{title}}')
@section('navbar')
    @stop
@section('header')
    @stop
@section('cont')
@section('toru')
<div>
        <img src="images/toru.png" alt="Toru Kamei"  id="center" width="300px">
        <footer>Toru Kamei nació en Tokyo en 1976. Se graduó del Nihon University College of Art y 
        ha expuesto en la Bienal de Fukushima (2008) o la Busan Biennale (2010). Para entender el trabajo de Kamei, es importante entender que es un pintor de Vanitas, un tema artístico clásico que fue popular en los siglos XVI y XVII.</footer> <hr>
    </div>
    <div>
        <h1>Metamorfosis</h1> <br>
        <img src="images/meta.jpg" alt="Metamorfosis" id="center" width="300px"> <br>
        <footer>La pasión de Kamei cargadas de simbolismo, junto con su deseo de metamorfosis, provocan un ambiente refinado de tranquilidad y
             esteticismo. Como si se tratara de cristal, su distintiva técnica de aplicar una gruesa capa de barniz a la superficie de sus cuadros, logra conciliar la imagen dentro de su propio mundo.. Kamei se da cuenta de una nueva modalidad de pintura que supera las limitaciones históricas.</footer><hr>
    </div>
    <div>
        <h1>Vanitas (Colección)</h1> <br>        
        <footer>El pintor nos evidencia la fragilidad de la vida y la inevitable mortalidad a través de su obra, pinturas de flores, simbolizando la fugacidad de la belleza, de las que surgen ojos que le dan vida a lo que podríamos haber llamado naturaleza muerta, cráneos que nos recuerdan lo efímero de la vida, una obra compleja e intrigante que puede ser interpretada de muchas maneras.</footer>
        <table>
            <tr>
                <th><img src="images/v1.jpg" alt="Vanitas1" id="center" width="300px"> </th>
                <th><img src="images/v2.jpg" alt="Vanitas2" id="center" width="300px"> </th>
            
                <th><img src="images/v3.jpg" alt="Vanitas3" id="center" width="300px"> </th>
                <th><img src="images/v4.jpg" alt="Vanitas3" id="center" width="300px"> </th>
            </tr>
        </table>
    </div>
    <hr>
    @stop
@section('footer')
    @stop