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
 * Mainland ID card recognition result
 *
 * @method string getFullName() Obtain <p>Name</p>
 * @method void setFullName(string $FullName) Set <p>Name</p>
 * @method string getSex() Obtain <p>Gender</p>
 * @method void setSex(string $Sex) Set <p>Gender</p>
 * @method string getNation() Obtain <p>Ethnicity</p>
 * @method void setNation(string $Nation) Set <p>Ethnicity</p>
 * @method string getBirthday() Obtain <p>Birthday</p>
 * @method void setBirthday(string $Birthday) Set <p>Birthday</p>
 * @method string getAddress() Obtain <p>Address</p>
 * @method void setAddress(string $Address) Set <p>Address</p>
 * @method string getLicenseNumber() Obtain <p>Identity card number</p>
 * @method void setLicenseNumber(string $LicenseNumber) Set <p>Identity card number</p>
 * @method string getFormattedAddress() Obtain <p>Address</p>
 * @method void setFormattedAddress(string $FormattedAddress) Set <p>Address</p>
 * @method string getAuthority() Obtain <p>Issuing authority</p>
 * @method void setAuthority(string $Authority) Set <p>Issuing authority</p>
 * @method string getValidDate() Obtain <p>Validity period</p>
 * @method void setValidDate(string $ValidDate) Set <p>Validity period</p>
 */
class MainlandIDCard extends AbstractModel
{
    /**
     * @var string <p>Name</p>
     */
    public $FullName;

    /**
     * @var string <p>Gender</p>
     */
    public $Sex;

    /**
     * @var string <p>Ethnicity</p>
     */
    public $Nation;

    /**
     * @var string <p>Birthday</p>
     */
    public $Birthday;

    /**
     * @var string <p>Address</p>
     * @deprecated
     */
    public $Address;

    /**
     * @var string <p>Identity card number</p>
     */
    public $LicenseNumber;

    /**
     * @var string <p>Address</p>
     */
    public $FormattedAddress;

    /**
     * @var string <p>Issuing authority</p>
     */
    public $Authority;

    /**
     * @var string <p>Validity period</p>
     */
    public $ValidDate;

    /**
     * @param string $FullName <p>Name</p>
     * @param string $Sex <p>Gender</p>
     * @param string $Nation <p>Ethnicity</p>
     * @param string $Birthday <p>Birthday</p>
     * @param string $Address <p>Address</p>
     * @param string $LicenseNumber <p>Identity card number</p>
     * @param string $FormattedAddress <p>Address</p>
     * @param string $Authority <p>Issuing authority</p>
     * @param string $ValidDate <p>Validity period</p>
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
