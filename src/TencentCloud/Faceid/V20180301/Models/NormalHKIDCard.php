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
 * Hong Kong identity card (mapped field result)
 *
 * @method string getChineseName() Obtain Chinese name
 * @method void setChineseName(string $ChineseName) Set Chinese name
 * @method string getFullName() Obtain English name
 * @method void setFullName(string $FullName) Set English name
 * @method string getRegistrationNumber() Obtain Chinese telegraph code corresponding to the Chinese name
 * @method void setRegistrationNumber(string $RegistrationNumber) Set Chinese telegraph code corresponding to the Chinese name
 * @method string getSex() Obtain Gender: "M" (male) or "F" (female).
 * @method void setSex(string $Sex) Set Gender: "M" (male) or "F" (female).
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getPermanent() Obtain Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
 * @method void setPermanent(string $Permanent) Set Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
 * @method string getLicenseNumber() Obtain Identity number
 * @method void setLicenseNumber(string $LicenseNumber) Set Identity number
 * @method string getSymbol() Obtain Document symbol, the symbol under the date of birth, for example, "***AZ"
 * @method void setSymbol(string $Symbol) Set Document symbol, the symbol under the date of birth, for example, "***AZ"
 * @method string getIssuedDate() Obtain Date of first issue
 * @method void setIssuedDate(string $IssuedDate) Set Date of first issue
 * @method string getCurrentIssueDate() Obtain Most recent date of issue
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set Most recent date of issue
 * @method string getHKIDVersion() Obtain Hong Kong identity card version. HKID-2003: 2003 edition identity card. HKID-2018: 2018 edition identity card.
 * @method void setHKIDVersion(string $HKIDVersion) Set Hong Kong identity card version. HKID-2003: 2003 edition identity card. HKID-2018: 2018 edition identity card.
 */
class NormalHKIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
     */
    public $ChineseName;

    /**
     * @var string English name
     */
    public $FullName;

    /**
     * @var string Chinese telegraph code corresponding to the Chinese name
     */
    public $RegistrationNumber;

    /**
     * @var string Gender: "M" (male) or "F" (female).
     */
    public $Sex;

    /**
     * @var string Date of birth
     */
    public $Birthday;

    /**
     * @var string Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
     */
    public $Permanent;

    /**
     * @var string Identity number
     */
    public $LicenseNumber;

    /**
     * @var string Document symbol, the symbol under the date of birth, for example, "***AZ"
     */
    public $Symbol;

    /**
     * @var string Date of first issue
     */
    public $IssuedDate;

    /**
     * @var string Most recent date of issue
     */
    public $CurrentIssueDate;

    /**
     * @var string Hong Kong identity card version. HKID-2003: 2003 edition identity card. HKID-2018: 2018 edition identity card.
     */
    public $HKIDVersion;

    /**
     * @param string $ChineseName Chinese name
     * @param string $FullName English name
     * @param string $RegistrationNumber Chinese telegraph code corresponding to the Chinese name
     * @param string $Sex Gender: "M" (male) or "F" (female).
     * @param string $Birthday Date of birth
     * @param string $Permanent Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
     * @param string $LicenseNumber Identity number
     * @param string $Symbol Document symbol, the symbol under the date of birth, for example, "***AZ"
     * @param string $IssuedDate Date of first issue
     * @param string $CurrentIssueDate Most recent date of issue
     * @param string $HKIDVersion Hong Kong identity card version. HKID-2003: 2003 edition identity card. HKID-2018: 2018 edition identity card.
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
        if (array_key_exists("ChineseName",$param) and $param["ChineseName"] !== null) {
            $this->ChineseName = $param["ChineseName"];
        }

        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("RegistrationNumber",$param) and $param["RegistrationNumber"] !== null) {
            $this->RegistrationNumber = $param["RegistrationNumber"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("LicenseNumber",$param) and $param["LicenseNumber"] !== null) {
            $this->LicenseNumber = $param["LicenseNumber"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }

        if (array_key_exists("HKIDVersion",$param) and $param["HKIDVersion"] !== null) {
            $this->HKIDVersion = $param["HKIDVersion"];
        }
    }
}
