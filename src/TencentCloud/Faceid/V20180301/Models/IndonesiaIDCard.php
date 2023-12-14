<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Indonesia ID card.
 *
 * @method string getNIK() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNIK(string $NIK) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNama() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNama(string $Nama) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTempatTglLahir() Obtain Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTempatTglLahir(string $TempatTglLahir) Set Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getJenisKelamin() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setJenisKelamin(string $JenisKelamin) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGolDarah() Obtain Blood type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGolDarah(string $GolDarah) Set Blood type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAlamat() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlamat(string $Alamat) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRTRW() Obtain Street
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRTRW(string $RTRW) Set Street
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKelDesa() Obtain Village
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKelDesa(string $KelDesa) Set Village
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKecamatan() Obtain Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKecamatan(string $Kecamatan) Set Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAgama() Obtain Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAgama(string $Agama) Set Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusPerkawinan() Obtain Marital status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusPerkawinan(string $StatusPerkawinan) Set Marital status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPerkerjaan() Obtain Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPerkerjaan(string $Perkerjaan) Set Job
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKewargaNegaraan() Obtain Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKewargaNegaraan(string $KewargaNegaraan) Set Nationality
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBerlakuHingga() Obtain ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBerlakuHingga(string $BerlakuHingga) Set ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedDate() Obtain Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedDate(string $IssuedDate) Set Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProvinsi() Obtain Province
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProvinsi(string $Provinsi) Set Province
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKota() Obtain City
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKota(string $Kota) Set City
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IndonesiaIDCard extends AbstractModel
{
    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NIK;

    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nama;

    /**
     * @var string Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TempatTglLahir;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $JenisKelamin;

    /**
     * @var string Blood type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GolDarah;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Alamat;

    /**
     * @var string Street
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RTRW;

    /**
     * @var string Village
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KelDesa;

    /**
     * @var string Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Kecamatan;

    /**
     * @var string Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Agama;

    /**
     * @var string Marital status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusPerkawinan;

    /**
     * @var string Job
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Perkerjaan;

    /**
     * @var string Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KewargaNegaraan;

    /**
     * @var string ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BerlakuHingga;

    /**
     * @var string Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedDate;

    /**
     * @var string Province
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Provinsi;

    /**
     * @var string City
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Kota;

    /**
     * @param string $NIK License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nama Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TempatTglLahir Birth place/Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $JenisKelamin Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GolDarah Blood type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Alamat Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RTRW Street
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KelDesa Village
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Kecamatan Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Agama Religious beliefs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusPerkawinan Marital status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Perkerjaan Job
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KewargaNegaraan Nationality
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BerlakuHingga ID card validity period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedDate Date of issue
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Provinsi Province
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Kota City
Note: This field may return null, indicating that no valid values can be obtained.
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
