<!DOCTYPE Html>
<Html>
<Head>
    <Title>Upload File</Title>
</Head>
<Body Style="Width: 800px; Margin: Auto; Padding: 10px;">
    <h2 Style="Text-Align: Center;">Form Upload Surat(PDF)</h2>
    <hr>
    <Form Action="../Database/process-function/proses-upload-surat.php" Method="POST" Enctype="Multipart/Form-Data">
        <b>Nomer Surat:</b>
        <input Type="Text" Name="nomer_surat" Value="" Placeholder="masukan nomer surat"><br/><br/>
        <b><label for="sifat">Sifat Surat:</label></b>
            <select id="sifat" name="sifat">
                <option value="biasa">Biasa</option>
                <option value="penting">Penting</option>
            </select><br><br>
        <b>Judul Surat:</b>
        <Input Type="Text" Name="title" Value="" Placeholder="masukan judul surat"><br/><br/>
        
        <b>Lampiran:</b>
        <input type="Number" Name="lampiran" Value="" Placeholder="" min="0"><br><br>

        <b>Perihal:</b>
        <Input Type="Text" Name="perihal" Value="" Placeholder="masukan perihal"><br/><br/>

        <b>Tanggal Surat: </b>
        <Input Type="Text" Name="tanggal_surat" Value="" Placeholder="dd-mm-yy" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}"><br/><br/>
        
        <b>Instansi Pengirim:</b>
        <Input Type="Text" Name="instansi_pengirim" Value="" Placeholder="Instansi"><br/><br/>

        <b>Upload File :</b>
        <Input Type="File" Name="berkas" Accept="Application/Pdf"><br><br>
        <Button Type="Submit" Name="berkas_upload">Upload File</Button>
    </Form>
    <hr>
</Body>
</Html>