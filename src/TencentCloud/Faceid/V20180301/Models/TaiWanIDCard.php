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
 * Taiwan (China) ID card
 *
 * @method string getFullName() Obtain Name.
 * @method void setFullName(string $FullName) Set Name.
 * @method string getLicenseNumber() Obtain Identity card
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity card
 * @method string getSex() Obtain Sex
 * @method void setSex(string $Sex) Set Sex
 * @method string getIssuedCountry() Obtain City of issuance
 * @method void setIssuedCountry(string $IssuedCountry) Set City of issuance
 * @method string getRegistrationNumber() Obtain Registration number
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Registration number
 */
class TaiWanIDCard extends AbstractModel
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
     * @var string Sex
     */
    public $Sex;

    /**
     * @var string City of issuance
     */
    public $IssuedCountry;

    /**
     * @var string Registration number
     */
    public $RegistrationNumber;

    /**
     * @param string $FullName Name.
     * @param string $LicenseNumber Identity card
     * @param string $Sex Sex
     * @param string $IssuedCountry City of issuance
     * @param string $RegistrationNumber Registration number
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
