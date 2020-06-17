<template>
  <div>
  <p class="error">{{ error }}</p>

  <div v-if="nama">
    <div v-if="isAvailable === 1">
      <span>Data sudah tersedia.</span>
    </div>
    <div v-else>
      <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" name="nama" id="nama" class="form-control" :value="nama" placeholder="Nama">
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
      <span>{{responseMessage}}</span>
    </div>
  </div>
  <div v-else>
    <qrcode-capture @decode="onDecode"/>
  </div>

  </div>
</template>

<script>
import { QrcodeCapture } from 'vue-qrcode-reader'

export default {

  components: { QrcodeCapture },

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

      isAvailable: 0,
      responseMessage: '',
      error: ''
    }
  },


  methods: {
    onDecode (result) {
      //this.result = result
      const details = result.split('-');
      //const details = ('(NRM)13335679-NN,ANDRANI SETYORINI-(NIK)1234567890123466-(KL)MALANG-(TL)12-FEB-1987- (ADD)PERUM KARANG DUREN PERMAI BLOK O-17, NO.978, DS. KARANG DUREN, KEC. PAKISAJI KAB. MALANG , PROV. JAWA TIMUR, 65112 (WA)081234567890,(CP)081234567891,(PY1)BPJSK1,1234567890123-(PY2) SINARMAS,98765432-(DA)AMOXCILIN,PARACETAMOL-(FA)SEAFOOD, SUSU').split('-');
      var i;
      for (i = 0; i < details.length; i++) {
        var nama = details[1];
        var nrm = details[0].split(')')[1];
        var nik = details[2].split(')')[1];
        var kl = details[3].split(')')[1];
        var tl = details[4].split(')')[1]+'-'+details[5]+'-'+details[6];
        var add = details[7].split(')')[1]+'-'+details[8].split('(WA)')[0];
        var wa = details[8].split(')')[1].split(',')[0];
        var cp = details[8].split(')')[2].split(',')[0];
        var py1 = details[8].split(')')[3];
        var py2 = details[9].split(')')[1];
        var da = details[10].split(')')[1];
        var fa = details[11].split(')')[1];
      }

      this.nama = nama;
      this.nrm = nrm;
      this.nik = nik;
      this.kl = kl;
      this.tl = tl;
      this.add = add;
      this.wa = wa;
      this.cp = cp;
      this.py1 = py1;
      this.py2 = py2;
      this.da = da;
      this.fa = fa;
      this.checkUser()
    },
    checkUser(){
      var nik = this.nik;
      let self = this;
      axios.get('pasien/show/'+nik)
      .then(function (response) {
       console.log(response.data);
        if(response.data == 1) {
         self.isAvailable = 1;
       } else {
         axios.post("pasien/store", {
             nama : self.nama,
             nrm: self.nrm,
             nik: self.nik,
             kl: self.kl,
             tl: self.tl,
             add: self.add,
             wa: self.wa,
             cp: self.cp,
             py1: self.py1,
             py2: self.py2,
             da: self.da,
             fa: self.fa,
           }
         )
         .then(function (response) {
           console.log(response);
            if(response.data) {
             self.responseMessage = response.data.success;
            }
         })
       }
      })
      .catch(function (error) {
       console.log(error);
      });
    },
  },
}
</script>
