<form action="login.php" method="POST" enctype="multipart/form-data">
    <!--
        input
        textarea
        file
        select
        radio
        checkbox
        multiple select
        button
     -->

    <br> Username:  <br>
    <input type="text"   name="username" id="username">
    <br>
    Password:<br>
    <input type="text"  name="password" id="password">
    <br>
    Name: <br>
    <input name="Name"  placeholder="Name" ></input>
    <br> Surname: <br>
    <input name="Surname"  placeholder="Surname" ></input>
    <br> Age: <br>
    <input name="Age" type="number"  placeholder="Age" ></input>
    <br>
    Section: <br>
    <select name="Section">
        <option>-- Seç --</option>
        <option value="Bilgisayar Programcılığı">Bilgisayar Programcılığı</option>
        <option value="Animasyon">Animasyon</option>
        <option value="asçılık">asçılık</option>
        <option value="Tiyatro">Tiyatro</option>
        <option value="Kapı Malzeme">Kapı Malzeme</option>
        <option value="Bilgisayar Malzeme">Backand DEV.</option>
    </select>
    <br>

    Grade: <br>
    <select name="Grade">
        <option>-- Seç --</option>
        <option value="Hazırlık">Hazırlık</option>
        <option value="1.sınıf">1.sınıf</option>
        <option value="2.sınıf">2.sınıf</option>
        <option value="3.sınıf">3.sınıf</option>
        <option value="4.sınıf">4.sınıf</option>
        <option value="5.sınıf">5.sınıf</option>
        <option value="6.sınıf">6.sınıf</option>
    </select>
    <br> Gano:  <br>
    <input type="number" name="Gano">

    <button  type="submit" name="submit" value="submit">Gönder</button>


</form>


<a href="register.php"><button>Kayıt Ol</button></a>
