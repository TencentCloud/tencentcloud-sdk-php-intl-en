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
 * Japan ID card.
 *
 * @method string getFullName() Obtain Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAge() Obtain Age
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAge(string $Age) Set Age
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpirationDate() Obtain Expire date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpirationDate(string $ExpirationDate) Set Expire date
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 */
class JapanIDCard extends AbstractModel
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
     * @var string Age
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Age;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Expire date
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpirationDate;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @param string $FullName Full name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Age Age
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpirationDate Expire date
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress Address
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

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }
    }
}
