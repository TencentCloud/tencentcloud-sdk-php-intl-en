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
 * ID cards of Hong Kong (China), Macao (China) and Taiwan (China), and international passport.
 *
 * @method string getLicenseNumber() Obtain Passport ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set Passport ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullName() Obtain Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSurname() Obtain Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSurname(string $Surname) Set Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGivenName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGivenName(string $GivenName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender (F-Female, M-Male)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender (F-Female, M-Male)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDateOfExpiration() Obtain Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDateOfExpiration(string $DateOfExpiration) Set Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuingCountry() Obtain Issuing country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuingCountry(string $IssuingCountry) Set Issuing country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNationalityCode() Obtain Nationality code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNationalityCode(string $NationalityCode) Set Nationality code
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeFirst() Obtain The first line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeFirst(string $PassportCodeFirst) Set The first line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPassportCodeSecond() Obtain The second line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPassportCodeSecond(string $PassportCodeSecond) Set The second line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InternationalIDPassport extends AbstractModel
{
    /**
     * @var string Passport ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Full name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string Last name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Surname;

    /**
     * @var string First name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GivenName;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Gender (F-Female, M-Male)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DateOfExpiration;

    /**
     * @var string Issuing country
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuingCountry;

    /**
     * @var string Nationality code
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NationalityCode;

    /**
     * @var string The first line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeFirst;

    /**
     * @var string The second line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PassportCodeSecond;

    /**
     * @param string $LicenseNumber Passport ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullName Full name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Surname Last name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GivenName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender (F-Female, M-Male)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DateOfExpiration Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuingCountry Issuing country
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NationalityCode Nationality code
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeFirst The first line at the bottom, the MRZ Code sequence
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PassportCodeSecond The second line at the bottom, the MRZ Code sequence
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
