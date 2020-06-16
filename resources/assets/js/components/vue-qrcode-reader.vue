<template>
  <div>
    <p class="error">{{ error }}</p>
    <qrcode-stream @decode="onDecode" @init="onInit" />

    <div class="form-group row">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" name="nama" id="nama" class="form-control" :value="nama" placeholder="nama">
      </div>
    </div>
    <div class="form-group row">
      <label for="nik" class="col-sm-2 col-form-label">NIK</label>
      <div class="col-sm-10">
        <input type="text" name="nik" id="nik" class="form-control" :value="nik" placeholder="NIK">
      </div>
    </div>
    <div class="form-group row">
      <label for="nrm" class="col-sm-2 col-form-label">No. Rekam Medis</label>
      <div class="col-sm-10">
        <input type="text" name="nrm" id="nrm" class="form-control" :value="nrm" placeholder="No. Rekam Medis">
      </div>
    </div>
    <div class="form-group row">
      <label for="kl" class="col-sm-2 col-form-label">Tempat Lahir</label>
      <div class="col-sm-10">
        <input type="text" name="kl" id="kl" class="form-control" :value="kl" placeholder="Tempat Lahir">
      </div>
    </div>
    <div class="form-group row">
      <label for="tl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="text" name="tl" id="tl" class="form-control" :value="tl" placeholder="Tanggal Lahir">
      </div>
    </div>
    <div class="form-group row">
      <label for="add" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" name="add" id="add" class="form-control" :value="add" placeholder="Alamat">
      </div>
    </div>
    <div class="form-group row">
      <label for="wa" class="col-sm-2 col-form-label">Whatsapp</label>
      <div class="col-sm-10">
        <input type="text" name="wa" id="wa" class="form-control" :value="wa" placeholder="Whatsapp">
      </div>
    </div>
    <div class="form-group row">
      <label for="cp" class="col-sm-2 col-form-label">No. HP</label>
      <div class="col-sm-10">
        <input type="text" name="cp" id="cp" class="form-control" :value="cp" placeholder="No. HP">
      </div>
    </div>
    <div class="form-group row">
      <label for="py1" class="col-sm-2 col-form-label">Payment 1</label>
      <div class="col-sm-10">
        <input type="text" name="py1" id="py1" class="form-control" :value="py1" placeholder="Payment 1">
      </div>
    </div>
    <div class="form-group row">
      <label for="py2" class="col-sm-2 col-form-label">Payment 2</label>
      <div class="col-sm-10">
        <input type="text" name="py2" id="py2" class="form-control" :value="py2" placeholder="Payment 2">
      </div>
    </div>
    <div class="form-group row">
      <label for="da" class="col-sm-2 col-form-label">Alergi Obat</label>
      <div class="col-sm-10">
        <input type="text" name="da" id="da" class="form-control" :value="da" placeholder="Alergi Obat">
      </div>
    </div>
    <div class="form-group row">
      <label for="fa" class="col-sm-2 col-form-label">Alergi Makanan</label>
      <div class="col-sm-10">
        <input type="text" name="fa" id="fa" class="form-control" :value="fa" placeholder="Alergi Makanan">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</template>

<script>
import { QrcodeStream } from 'vue-qrcode-reader'

export default {

  components: { QrcodeStream },

  data () {
    return {
      nama: '',
      nrm: '',
      nik: '',
      kl: '',
      tl: '',
      add: '',
      wa: '',
      cp: '',
      py1: '',
      py2: '',
      da: '',
      fa: '',
      error: ''
    }
  },

  methods: {
    onDecode (result) {
      //this.result = result
      const details = result.split('-');
      var i;
      for (i = 0; i < details.length; i++) {
        this.nama = details[1];
        this.nrm = details[0].split(')')[1];
        this.nik = details[2].split(')')[1];
        this.kl = details[3].split(')')[1];
        this.tl = details[4].split(')')[1];
        this.add = details[5].split(')')[1];
        this.wa = details[5].split(')')[1].split(')')[1];
        this.cp = details[5].split(')')[1].split(')')[2];
        this.py1 = details[5].split(')')[1].split(')')[3];
        this.py2 = details[9].split(')')[1];
        this.da = details[10].split(')')[1];
        this.fa = details[11].split(')')[1];
      }
    },

    async onInit (promise) {
      try {
        await promise
      } catch (error) {
        if (error.name === 'NotAllowedError') {
          this.error = "ERROR: you need to grant camera access permisson"
        } else if (error.name === 'NotFoundError') {
          this.error = "ERROR: no camera on this device"
        } else if (error.name === 'NotSupportedError') {
          this.error = "ERROR: secure context required (HTTPS, localhost)"
        } else if (error.name === 'NotReadableError') {
          this.error = "ERROR: is the camera already in use?"
        } else if (error.name === 'OverconstrainedError') {
          this.error = "ERROR: installed cameras are not suitable"
        } else if (error.name === 'StreamApiNotSupportedError') {
          this.error = "ERROR: Stream API is not supported in this browser"
        }
      }
    }
  }
}
</script>

<style scoped>
.error {
  font-weight: bold;
  color: red;
}
</style>
