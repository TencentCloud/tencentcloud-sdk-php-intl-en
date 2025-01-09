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
 * Nigeria ID card
 *
 * @method string getLastName() Obtain Last name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastName(string $LastName) Set Last name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstName() Obtain First name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstName(string $FirstName) Set First name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAge() Obtain Age.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAge(string $Age) Set Age.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issued country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issued country.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NigeriaIDCard extends AbstractModel
{
    /**
     * @var string Last name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastName;

    /**
     * @var string First name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstName;

    /**
     * @var string License number.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Age.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Age;

    /**
     * @var string Birthday.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Issued country.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountry;

    /**
     * @var string Gender.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @param string $LastName Last name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstName First name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Age Age.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issued country.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender.
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
        if (array_key_exists("LastName",$param) and $param["LastName"] !== null) {
            $this->LastName = $param["LastName"];
        }

        if (array_key_exists("FirstName",$param) and $param["FirstName"] !== null) {
            $this->FirstName = $param["FirstName"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }
    }
}
