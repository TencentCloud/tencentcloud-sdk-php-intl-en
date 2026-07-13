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
 * Mainland (China) ID Card OCR
 *
 * @method string getFullName() Obtain <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNation() Obtain <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNation(string $Nation) Set <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBirthday() Obtain <p>Birthday</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set <p>Birthday</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAuthority() Obtain <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthority(string $Authority) Set <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getValidDate() Obtain <p>Validity period</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValidDate(string $ValidDate) Set <p>Validity period</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MainlandIDCard extends AbstractModel
{
    /**
     * @var string <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullName;

    /**
     * @var string <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Sex;

    /**
     * @var string <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Nation;

    /**
     * @var string <p>Birthday</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @var string <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Address;

    /**
     * @var string <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseNumber;

    /**
     * @var string <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @var string <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Authority;

    /**
     * @var string <p>Validity period</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ValidDate;

    /**
     * @param string $FullName <p>name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex <p>Gender</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Nation <p>Ethnicity</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Birthday <p>Birthday</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber <p>Identity card number</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress <p>Address</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Authority <p>Issuing authority</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ValidDate <p>Validity period</p>
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

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }
    }
}
