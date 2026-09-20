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
 * Macao identity card
 *
 * @method string getFirstName() Obtain First name
 * @method void setFirstName(string $FirstName) Set First name
 * @method string getLastName() Obtain Last name
 * @method void setLastName(string $LastName) Set Last name
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getExpirationDate() Obtain Expiration date
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
 * @method string getLicenseNumber() Obtain Identity number
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity number
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getAge() Obtain Age
 * @method void setAge(string $Age) Set Age
 * @method string getIssuedCountry() Obtain Issuing country
 * @method void setIssuedCountry(string $IssuedCountry) Set Issuing country
 * @method string getField1() Obtain mrz field 1
 * @method void setField1(string $Field1) Set mrz field 1
 * @method string getField2() Obtain mrz field 2
 * @method void setField2(string $Field2) Set mrz field 2
 */
class MacaoIDCard extends AbstractModel
{
    /**
     * @var string First name
     */
    public $FirstName;

    /**
     * @var string Last name
     */
    public $LastName;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string Expiration date
     */
    public $ExpirationDate;

    /**
     * @var string Identity number
     */
    public $LicenseNumber;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Age
     */
    public $Age;

    /**
     * @var string Issuing country
     */
    public $IssuedCountry;

    /**
     * @var string mrz field 1
     */
    public $Field1;

    /**
     * @var string mrz field 2
     */
    public $Field2;

    /**
     * @param string $FirstName First name
     * @param string $LastName Last name
     * @param string $Birthday Birthday
     * @param string $ExpirationDate Expiration date
     * @param string $LicenseNumber Identity number
     * @param string $Sex Sex
     * @param string $Age Age
     * @param string $IssuedCountry Issuing country
     * @param string $Field1 mrz field 1
     * @param string $Field2 mrz field 2
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
        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("Field1",$param) and $param["Field1"] !== null) {
            $this->Field1 = $param["Field1"];
        }

        if (array_key_exists("Field2",$param) and $param["Field2"] !== null) {
            $this->Field2 = $param["Field2"];
        }
    }
}
