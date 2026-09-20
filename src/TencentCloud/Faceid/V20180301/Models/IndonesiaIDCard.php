<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Indonesian Identity Card
 *
 * @method string getNIK() Obtain ID number
 * @method void setNIK(string $NIK) Set ID number
 * @method string getNama() Obtain Name
 * @method void setNama(string $Nama) Set Name
 * @method string getTempatTglLahir() Obtain Birthplace/Date of birth
 * @method void setTempatTglLahir(string $TempatTglLahir) Set Birthplace/Date of birth
 * @method string getJenisKelamin() Obtain Sex
 * @method void setJenisKelamin(string $JenisKelamin) Set Sex
 * @method string getGolDarah() Obtain Blood type
 * @method void setGolDarah(string $GolDarah) Set Blood type
 * @method string getAlamat() Obtain Address.
 * @method void setAlamat(string $Alamat) Set Address.
 * @method string getRTRW() Obtain Street
 * @method void setRTRW(string $RTRW) Set Street
 * @method string getKelDesa() Obtain Village
 * @method void setKelDesa(string $KelDesa) Set Village
 * @method string getKecamatan() Obtain Region.
 * @method void setKecamatan(string $Kecamatan) Set Region.
 * @method string getAgama() Obtain Religious belief
 * @method void setAgama(string $Agama) Set Religious belief
 * @method string getStatusPerkawinan() Obtain Marital status
 * @method void setStatusPerkawinan(string $StatusPerkawinan) Set Marital status
 * @method string getPerkerjaan() Obtain Occupation
 * @method void setPerkerjaan(string $Perkerjaan) Set Occupation
 * @method string getKewargaNegaraan() Obtain Nationality
 * @method void setKewargaNegaraan(string $KewargaNegaraan) Set Nationality
 * @method string getBerlakuHingga() Obtain Validity period of the ID card
 * @method void setBerlakuHingga(string $BerlakuHingga) Set Validity period of the ID card
 * @method string getIssuedDate() Obtain Issue date
 * @method void setIssuedDate(string $IssuedDate) Set Issue date
 * @method string getProvinsi() Obtain Province
 * @method void setProvinsi(string $Provinsi) Set Province
 * @method string getKota() Obtain city
 * @method void setKota(string $Kota) Set city
 */
class IndonesiaIDCard extends AbstractModel
{
    /**
     * @var string ID number
     */
    public $NIK;

    /**
     * @var string Name
     */
    public $Nama;

    /**
     * @var string Birthplace/Date of birth
     */
    public $TempatTglLahir;

    /**
     * @var string Sex
     */
    public $JenisKelamin;

    /**
     * @var string Blood type
     */
    public $GolDarah;

    /**
     * @var string Address.
     */
    public $Alamat;

    /**
     * @var string Street
     */
    public $RTRW;

    /**
     * @var string Village
     */
    public $KelDesa;

    /**
     * @var string Region.
     */
    public $Kecamatan;

    /**
     * @var string Religious belief
     */
    public $Agama;

    /**
     * @var string Marital status
     */
    public $StatusPerkawinan;

    /**
     * @var string Occupation
     */
    public $Perkerjaan;

    /**
     * @var string Nationality
     */
    public $KewargaNegaraan;

    /**
     * @var string Validity period of the ID card
     */
    public $BerlakuHingga;

    /**
     * @var string Issue date
     */
    public $IssuedDate;

    /**
     * @var string Province
     */
    public $Provinsi;

    /**
     * @var string city
     */
    public $Kota;

    /**
     * @param string $NIK ID number
     * @param string $Nama Name
     * @param string $TempatTglLahir Birthplace/Date of birth
     * @param string $JenisKelamin Sex
     * @param string $GolDarah Blood type
     * @param string $Alamat Address.
     * @param string $RTRW Street
     * @param string $KelDesa Village
     * @param string $Kecamatan Region.
     * @param string $Agama Religious belief
     * @param string $StatusPerkawinan Marital status
     * @param string $Perkerjaan Occupation
     * @param string $KewargaNegaraan Nationality
     * @param string $BerlakuHingga Validity period of the ID card
     * @param string $IssuedDate Issue date
     * @param string $Provinsi Province
     * @param string $Kota city
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NIK",$param) and $param["NIK"] !== null) {
            $this->NIK = $param["NIK"];
        }

        if (array_key_exists("Nama",$param) and $param["Nama"] !== null) {
            $this->Nama = $param["Nama"];
        }

        if (array_key_exists("TempatTglLahir",$param) and $param["TempatTglLahir"] !== null) {
            $this->TempatTglLahir = $param["TempatTglLahir"];
        }

        if (array_key_exists("JenisKelamin",$param) and $param["JenisKelamin"] !== null) {
            $this->JenisKelamin = $param["JenisKelamin"];
        }

        if (array_key_exists("GolDarah",$param) and $param["GolDarah"] !== null) {
            $this->GolDarah = $param["GolDarah"];
        }

        if (array_key_exists("Alamat",$param) and $param["Alamat"] !== null) {
            $this->Alamat = $param["Alamat"];
        }

        if (array_key_exists("RTRW",$param) and $param["RTRW"] !== null) {
            $this->RTRW = $param["RTRW"];
        }

        if (array_key_exists("KelDesa",$param) and $param["KelDesa"] !== null) {
            $this->KelDesa = $param["KelDesa"];
        }

        if (array_key_exists("Kecamatan",$param) and $param["Kecamatan"] !== null) {
            $this->Kecamatan = $param["Kecamatan"];
        }

        if (array_key_exists("Agama",$param) and $param["Agama"] !== null) {
            $this->Agama = $param["Agama"];
        }

        if (array_key_exists("StatusPerkawinan",$param) and $param["StatusPerkawinan"] !== null) {
            $this->StatusPerkawinan = $param["StatusPerkawinan"];
        }

        if (array_key_exists("Perkerjaan",$param) and $param["Perkerjaan"] !== null) {
            $this->Perkerjaan = $param["Perkerjaan"];
        }

        if (array_key_exists("KewargaNegaraan",$param) and $param["KewargaNegaraan"] !== null) {
            $this->KewargaNegaraan = $param["KewargaNegaraan"];
        }

        if (array_key_exists("BerlakuHingga",$param) and $param["BerlakuHingga"] !== null) {
            $this->BerlakuHingga = $param["BerlakuHingga"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("Provinsi",$param) and $param["Provinsi"] !== null) {
            $this->Provinsi = $param["Provinsi"];
        }

        if (array_key_exists("Kota",$param) and $param["Kota"] !== null) {
            $this->Kota = $param["Kota"];
        }
    }
}
