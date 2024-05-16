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
 * Malaysia ID card.
 *
 * @method string getFullName() Obtain Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullName(string $FullName) Set Full Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLicenseNumber() Obtain License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseNumber(string $LicenseNumber) Set License number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSex() Obtain Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSex(string $Sex) Set Gender
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFormattedAddress() Obtain Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Lisence type
MyKad ID card
MyPR Permanent resident ID card
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD Labor ID card
MyKid Juvenile ID card
Example: MyKad
 * @method void setType(string $Type) Set Lisence type
MyKad ID card
MyPR Permanent resident ID card
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD Labor ID card
MyKid Juvenile ID card
Example: MyKad
 * @method string getBirthday() Obtain Birthday (Currently, this filed only supports IKAD labor ID card and MyKad ID card)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBirthday(string $Birthday) Set Birthday (Currently, this filed only supports IKAD labor ID card and MyKad ID card)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NormalMLIDCard extends AbstractModel
{
    /**
     * @var string Full Name
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
     * @var string Address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FormattedAddress;

    /**
     * @var string Lisence type
MyKad ID card
MyPR Permanent resident ID card
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD Labor ID card
MyKid Juvenile ID card
Example: MyKad
     */
    public $Type;

    /**
     * @var string Birthday (Currently, this filed only supports IKAD labor ID card and MyKad ID card)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Birthday;

    /**
     * @param string $FullName Full Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LicenseNumber License number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Sex Gender
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FormattedAddress Address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Lisence type
MyKad ID card
MyPR Permanent resident ID card
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD Labor ID card
MyKid Juvenile ID card
Example: MyKad
     * @param string $Birthday Birthday (Currently, this filed only supports IKAD labor ID card and MyKad ID card)
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

        if (array_key_exists("FormattedAddress",$param) and $param["FormattedAddress"] !== null) {
            $this->FormattedAddress = $param["FormattedAddress"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }
    }
}
