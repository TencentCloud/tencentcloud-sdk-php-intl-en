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
 * Macao (China) IDCard
 *
 * @method string getFirstName() Obtain First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastName() Obtain Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Sex
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Sex
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAge() Obtain Age
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAge(string $Age) Set Age
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issued country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issued country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getField1() Obtain MRZ1 on card
Note: This field may return null, indicating that no valid values can be obtained. 
 * @method void setField1(string $Field1) Set MRZ1 on card
Note: This field may return null, indicating that no valid values can be obtained. 
 * @method string getField2() Obtain MRZ2 on card
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setField2(string $Field2) Set MRZ2 on card
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MacaoIDCard extends AbstractModel
{
    /**
     * @var string First name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string Last name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Sex
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Age
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Age;

    /**
     * @var string Issued country
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountry;

    /**
     * @var string MRZ1 on card
Note: This field may return null, indicating that no valid values can be obtained. 
     */
    public $Field1;

    /**
     * @var string MRZ2 on card
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Field2;

    /**
     * @param string $FirstName First name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastName Last name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Expiration date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Sex
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Age Age
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issued country
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Field1 MRZ1 on card
Note: This field may return null, indicating that no valid values can be obtained. 
     * @param string $Field2 MRZ2 on card
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
