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
 * Hong Kong, Macao, and Taiwan region as well as overseas passport
 *
 * @method string getLicenseNumber() Obtain Passport ID
 * @method void setLicenseNumber(string $LicenseNumber) Set Passport ID
 * @method string getFullName() Obtain Name
 * @method void setFullName(string $FullName) Set Name
 * @method string getSurname() Obtain Last name
 * @method void setSurname(string $Surname) Set Last name
 * @method string getGivenName() Obtain Name
 * @method void setGivenName(string $GivenName) Set Name
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getSex() Obtain Gender (F: female, M: male).
 * @method void setSex(string $Sex) Set Gender (F: female, M: male).
 * @method string getDateOfExpiration() Obtain Validity period.
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Validity period.
 * @method string getIssuingCountry() Obtain Issuing country
 * @method void setIssuingCountry(string $IssuingCountry) Set Issuing country
 * @method string getNationalityCode() Obtain Country region code
 * @method void setNationalityCode(string $NationalityCode) Set Country region code
 * @method string getPassportCodeFirst() Obtain MRZ Code sequence in the first row at the bottom
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set MRZ Code sequence in the first row at the bottom
 * @method string getPassportCodeSecond() Obtain MRZ Code sequence in the second line from the bottom
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set MRZ Code sequence in the second line from the bottom
 */
class InternationalIDPassport extends AbstractModel
{
    /**
     * @var string Passport ID
     */
    public $LicenseNumber;

    /**
     * @var string Name
     */
    public $FullName;

    /**
     * @var string Last name
     */
    public $Surname;

    /**
     * @var string Name
     */
    public $GivenName;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Gender (F: female, M: male).
     */
    public $Sex;

    /**
     * @var string Validity period.
     */
    public $DateOfExpiration;

    /**
     * @var string Issuing country
     */
    public $IssuingCountry;

    /**
     * @var string Country region code
     */
    public $NationalityCode;

    /**
     * @var string MRZ Code sequence in the first row at the bottom
     */
    public $PassportCodeFirst;

    /**
     * @var string MRZ Code sequence in the second line from the bottom
     */
    public $PassportCodeSecond;

    /**
     * @param string $LicenseNumber Passport ID
     * @param string $FullName Name
     * @param string $Surname Last name
     * @param string $GivenName Name
     * @param string $Birthday Date of birth
     * @param string $Sex Gender (F: female, M: male).
     * @param string $DateOfExpiration Validity period.
     * @param string $IssuingCountry Issuing country
     * @param string $NationalityCode Country region code
     * @param string $PassportCodeFirst MRZ Code sequence in the first row at the bottom
     * @param string $PassportCodeSecond MRZ Code sequence in the second line from the bottom
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
        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("NationalityCode",$param) and $param["NationalityCode"] !== null) {
            $this->NationalityCode = $param["NationalityCode"];
        }

        if (array_key_exists("PassportCodeFirst",$param) and $param["PassportCodeFirst"] !== null) {
            $this->PassportCodeFirst = $param["PassportCodeFirst"];
        }

        if (array_key_exists("PassportCodeSecond",$param) and $param["PassportCodeSecond"] !== null) {
            $this->PassportCodeSecond = $param["PassportCodeSecond"];
        }
    }
}
