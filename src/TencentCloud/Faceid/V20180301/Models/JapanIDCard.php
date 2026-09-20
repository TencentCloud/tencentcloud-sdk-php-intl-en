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
 * Japan identity card
 *
 * @method string getFullName() Obtain Name.
 * @method void setFullName(string $FullName) Set Name.
 * @method string getLicenseNumber() Obtain Identity card
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity card
 * @method string getAge() Obtain Age
 * @method void setAge(string $Age) Set Age
 * @method string getBirthday() Obtain Birthday
 * @method void setBirthday(string $Birthday) Set Birthday
 * @method string getExpirationDate() Obtain Expiration time.
 * @method void setExpirationDate(string $ExpirationDate) Set Expiration time.
 * @method string getFormattedAddress() Obtain Address.
 * @method void setFormattedAddress(string $FormattedAddress) Set Address.
 */
class JapanIDCard extends AbstractModel
{
    /**
     * @var string Name.
     */
    public $FullName;

    /**
     * @var string Identity card
     */
    public $LicenseNumber;

    /**
     * @var string Age
     */
    public $Age;

    /**
     * @var string Birthday
     */
    public $Birthday;

    /**
     * @var string Expiration time.
     */
    public $ExpirationDate;

    /**
     * @var string Address.
     */
    public $FormattedAddress;

    /**
     * @param string $FullName Name.
     * @param string $LicenseNumber Identity card
     * @param string $Age Age
     * @param string $Birthday Birthday
     * @param string $ExpirationDate Expiration time.
     * @param string $FormattedAddress Address.
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
