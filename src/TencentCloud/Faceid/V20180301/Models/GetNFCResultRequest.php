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
 * GetNFCResult request structure.
 *
 * @method string getNFCToken() Obtain Unique ID returned by the frontend NFC SDK
 * @method void setNFCToken(string $NFCToken) Set Unique ID returned by the frontend NFC SDK
 * @method string getIdNum() Obtain Identity card number / passport number / Hong Kong, China and Macao, China travel permit
 * @method void setIdNum(string $IdNum) Set Identity card number / passport number / Hong Kong, China and Macao, China travel permit
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getPicture() Obtain Base64 value of the portrait photo
 * @method void setPicture(string $Picture) Set Base64 value of the portrait photo
 * @method string getBirthDate() Obtain Date of birth (format: YYYYMMDD)
 * @method void setBirthDate(string $BirthDate) Set Date of birth (format: YYYYMMDD)
 * @method string getBeginTime() Obtain Validity start time of the document (format: YYYYMMDD)
 * @method void setBeginTime(string $BeginTime) Set Validity start time of the document (format: YYYYMMDD)
 * @method string getEndTime() Obtain Document validity end time (format: YYYYMMDD)
 * @method void setEndTime(string $EndTime) Set Document validity end time (format: YYYYMMDD)
 * @method string getAddress() Obtain Address
 * @method void setAddress(string $Address) Set Address
 * @method string getNation() Obtain Ethnicity
 * @method void setNation(string $Nation) Set Ethnicity
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getEnName() Obtain English name
 * @method void setEnName(string $EnName) Set English name
 * @method string getSigningOrganization() Obtain Issuing authority
 * @method void setSigningOrganization(string $SigningOrganization) Set Issuing authority
 * @method string getNationality() Obtain Nationality
 * @method void setNationality(string $Nationality) Set Nationality
 * @method string getCountryCode() Obtain Country code
 * @method void setCountryCode(string $CountryCode) Set Country code
 * @method string getMachineReadCode() Obtain Machine-readable code of the passport
 * @method void setMachineReadCode(string $MachineReadCode) Set Machine-readable code of the passport
 */
class GetNFCResultRequest extends AbstractModel
{
    /**
     * @var string Unique ID returned by the frontend NFC SDK
     */
    public $NFCToken;

    /**
     * @var string Identity card number / passport number / Hong Kong, China and Macao, China travel permit
     */
    public $IdNum;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Base64 value of the portrait photo
     */
    public $Picture;

    /**
     * @var string Date of birth (format: YYYYMMDD)
     */
    public $BirthDate;

    /**
     * @var string Validity start time of the document (format: YYYYMMDD)
     */
    public $BeginTime;

    /**
     * @var string Document validity end time (format: YYYYMMDD)
     */
    public $EndTime;

    /**
     * @var string Address
     */
    public $Address;

    /**
     * @var string Ethnicity
     */
    public $Nation;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string English name
     */
    public $EnName;

    /**
     * @var string Issuing authority
     */
    public $SigningOrganization;

    /**
     * @var string Nationality
     */
    public $Nationality;

    /**
     * @var string Country code
     */
    public $CountryCode;

    /**
     * @var string Machine-readable code of the passport
     */
    public $MachineReadCode;

    /**
     * @param string $NFCToken Unique ID returned by the frontend NFC SDK
     * @param string $IdNum Identity card number / passport number / Hong Kong, China and Macao, China travel permit
     * @param string $Name Name
     * @param string $Picture Base64 value of the portrait photo
     * @param string $BirthDate Date of birth (format: YYYYMMDD)
     * @param string $BeginTime Validity start time of the document (format: YYYYMMDD)
     * @param string $EndTime Document validity end time (format: YYYYMMDD)
     * @param string $Address Address
     * @param string $Nation Ethnicity
     * @param string $Sex Sex
     * @param string $EnName English name
     * @param string $SigningOrganization Issuing authority
     * @param string $Nationality Nationality
     * @param string $CountryCode Country code
     * @param string $MachineReadCode Machine-readable code of the passport
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
        if (array_key_exists("NFCToken",$param) and $param["NFCToken"] !== null) {
            $this->NFCToken = $param["NFCToken"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("SigningOrganization",$param) and $param["SigningOrganization"] !== null) {
            $this->SigningOrganization = $param["SigningOrganization"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("MachineReadCode",$param) and $param["MachineReadCode"] !== null) {
            $this->MachineReadCode = $param["MachineReadCode"];
        }
    }
}
