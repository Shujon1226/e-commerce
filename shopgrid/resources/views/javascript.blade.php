

<div style="width: 520px; height: 400px; border: 1px solid red; margin: 20px;">
    <img src="{{asset('/')}}img/1.jpg" id="mainImage" alt="" style="width: 100%; height: 300px;"/>
    <div class="">
        <img src="{{asset('/')}}img/1.jpg" id="image1" alt="" style="width: 100px; height: 100px;"/>
        <img src="{{asset('/')}}img/2.jpg" id="image2" alt="" style="width: 100px; height: 100px;"/>
        <img src="{{asset('/')}}img/3.jpg" id="image3" alt="" style="width: 100px; height: 100px;"/>
        <img src="{{asset('/')}}img/4.jpg" id="image4" alt="" style="width: 100px; height: 100px;"/>
        <img src="{{asset('/')}}img/5.jpg" id="image5" alt="" style="width: 100px; height: 100px;"/>
    </div>

</div>

<div style="margin-bottom: 10px;">
    <table>
        <tr>
            <th>Enter Height</th>
            <td><input type="number" id="height"/></td>
        </tr>
        <tr>
            <th>Enter Width</th>
            <td><input type="number" id="width"/></td>
        </tr>
        <tr>
            <th>Enter Background Color</th>
            <td><input type="color" id="bg"/></td>
        </tr>
        <tr>
            <th></th>
            <td><button type="button" id="btn">Click Me</button></td>
        </tr>
    </table>

    <div id="res">

    </div>
</div>
<div>
    <h1 id="h1">This is a content</h1>
    <input type="text" id="inputText"/>
</div>

<script>

    // $(selector).action();


    // var image1 = document.getElementById('image1');
    // image1.onclick = function () {
    //     var imageURL = image1.getAttribute('src');
    //     var mainImage = document.getElementById('mainImage');
    //     mainImage.setAttribute('src', imageURL);
    // }
    //
    // var image2 = document.getElementById('image2');
    // image2.onclick = function () {
    //     var imageURL = image2.getAttribute('src');
    //     var mainImage = document.getElementById('mainImage');
    //     mainImage.setAttribute('src', imageURL);
    // }
    //
    // var image3 = document.getElementById('image3');
    // image3.onclick = function () {
    //     var imageURL = image3.getAttribute('src');
    //     var mainImage = document.getElementById('mainImage');
    //     mainImage.setAttribute('src', imageURL);
    // }
    //
    // var bitm = document.getElementById('btn');
    // bitm.onclick = function () {
    //     var height  = document.getElementById('height').value;
    //     var width   = document.getElementById('width').value;
    //     var bg      = document.getElementById('bg').value;
    //
    //     var div = document.createElement('div');
    //     div.style.height = height+'px';
    //     div.style.width = width+'px';
    //     div.style.backgroundColor = bg;
    //     document.getElementById('res').append(div);
    // };


    // var bitm = document.getElementById('inputText');
    // bitm.onkeyup = function () {
    //   var data = bitm.value;
    //   document.getElementById('h1').innerHTML = data;
    // };

    // var students = [
    //     { 'name' : 'Sujon', 'email' : 'Sujon@gmail.com', 'mobile' :'12312'},
    //     { 'name' : 'Suchi', 'email' : 'Suchi@gmail.com', 'mobile' :'43534543'},
    //     { 'name' : 'Momin', 'email' : 'momin@gmail.com', 'mobile' :'243234'},
    //     { 'name' : 'Rahat', 'email' : 'rahat@gmail.com', 'mobile' :'324234'},
    // ];
    //
    // for (key in students)
    // {
    //     document.write(students[key].name+' '+students[key].email + students[key].mobile + '<br/>');
    // }
    //document.write(students[3].email);
    // var data = [
    //     'Sujon', 'sujon@gmail.com', '12312'
    // ];

    //document.write(data[0]);
    // for (bitm in data)
    // {
    //     document.write(data[bitm]+' ');
    // }


    //document.write("<h1>Hello JavaScript</h1>");
    //alert('HELLO');
    // console.log('BIYTM NBTIM');

    //var firstName   = 'BITM';
    //var lastName    = 'BASIS';

    //document.write(firstName + '  ' +lastName);
</script>
