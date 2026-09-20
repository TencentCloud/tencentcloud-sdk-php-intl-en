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
 * Malaysian identity card (mapped field result)
 *
 * @method string getFullName() Obtain Name
 * @method void setFullName(string $FullName) Set Name
 * @method string getLicenseNumber() Obtain Identity card number
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity card number
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getFormattedAddress() Obtain Address.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address.
 * @method string getType() Obtain Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
 * @method void setType(string $Type) Set Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
 * @method string getBirthday() Obtain Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
 * @method void setBirthday(string $Birthday) Set Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
 */
class NormalMLIDCard extends AbstractModel
{
    /**
     * @var string Name
     */
    public $FullName;

    /**
     * @var string Identity card number
     */
    public $LicenseNumber;

    /**
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string Address.
     */
    public $FormattedAddress;

    /**
     * @var string Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
     */
    public $Type;

    /**
     * @var string Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
     */
    public $Birthday;

    /**
     * @param string $FullName Name
     * @param string $LicenseNumber Identity card number
     * @param string $Sex Sex
     * @param string $FormattedAddress Address.
     * @param string $Type Document type
MyKad identity card
MyPR permanent residence permit
MyTentera Military ID card
MyKAS Temporary ID card
POLIS Police ID card
IKAD labor ID card
MyKid Juvenile ID card
     * @param string $Birthday Date of birth (currently this field only supports IKAD labor ID card and MyKad ID card)
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
