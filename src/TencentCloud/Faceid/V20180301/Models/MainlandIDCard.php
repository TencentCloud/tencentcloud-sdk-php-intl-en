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
 * Mainland (China) ID Card OCR
 *
 * @method string getFullName() Obtain Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

 * @method void setFullName(string $FullName) Set Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

 * @method string getSex() Obtain Sex
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Sex
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNation() Obtain Nation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNation(string $Nation) Set Nation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.

 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.

 * @method string getFormattedAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MainlandIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

     */
    public $FullName;

    /**
     * @var string Sex
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string Nation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nation;

    /**
     * @var string Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Address;

    /**
     * @var string License number
Note: This field may return null, indicating that no valid values can be obtained.

     */
    public $LicenseNumber;

    /**
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @param string $FullName Chinese name
Note: This field may return null, indicating that no valid values can be obtained.

     * @param string $Sex Sex
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nation Nation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday Birthday
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
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

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }
    }
}
