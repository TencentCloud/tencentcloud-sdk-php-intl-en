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
 * 
 *
 * @method string getFirstName() Obtain 
 * @method void setFirstName(string $FirstName) Set 
 * @method string getLastName() Obtain 
 * @method void setLastName(string $LastName) Set 
 * @method string getBirthday() Obtain 
 * @method void setBirthday(string $Birthday) Set 
 * @method string getExpirationDate() Obtain 
 * @method void setExpirationDate(string $ExpirationDate) Set 
 * @method string getLicenseNumber() Obtain 
 * @method void setLicenseNumber(string $LicenseNumber) Set 
 * @method string getSex() Obtain 
 * @method void setSex(string $Sex) Set 
 * @method string getAge() Obtain 
 * @method void setAge(string $Age) Set 
 * @method string getIssuedCountry() Obtain 
 * @method void setIssuedCountry(string $IssuedCountry) Set 
 * @method string getField1() Obtain 
 * @method void setField1(string $Field1) Set 
 * @method string getField2() Obtain 
 * @method void setField2(string $Field2) Set 
 */
class MacaoIDCard extends AbstractModel
{
    /**
     * @var string 
     */
    public $FirstName;

    /**
     * @var string 
     */
    public $LastName;

    /**
     * @var string 
     */
    public $Birthday;

    /**
     * @var string 
     */
    public $ExpirationDate;

    /**
     * @var string 
     */
    public $LicenseNumber;

    /**
     * @var string 
     */
    public $Sex;

    /**
     * @var string 
     */
    public $Age;

    /**
     * @var string 
     */
    public $IssuedCountry;

    /**
     * @var string 
     */
    public $Field1;

    /**
     * @var string 
     */
    public $Field2;

    /**
     * @param string $FirstName 
     * @param string $LastName 
     * @param string $Birthday 
     * @param string $ExpirationDate 
     * @param string $LicenseNumber 
     * @param string $Sex 
     * @param string $Age 
     * @param string $IssuedCountry 
     * @param string $Field1 
     * @param string $Field2 
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
