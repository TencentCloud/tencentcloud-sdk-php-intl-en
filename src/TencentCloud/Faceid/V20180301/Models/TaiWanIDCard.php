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
 * Taiwan ID card.
 *
 * @method string getFullName() Obtain Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuedCountry() Obtain Issued country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuedCountry(string $IssuedCountry) Set Issued country
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistrationNumber() Obtain Registration number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaiWanIDCard extends AbstractModel
{
    /**
     * @var string Full name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string Gender
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Issued country
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuedCountry;

    /**
     * @var string Registration number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistrationNumber;

    /**
     * @param string $FullName Full name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuedCountry Issued country
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistrationNumber Registration number
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("IssuedCountry",$param) and $param["IssuedCountry"] !== null) {
            $this->IssuedCountry = $param["IssuedCountry"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }
    }
}
