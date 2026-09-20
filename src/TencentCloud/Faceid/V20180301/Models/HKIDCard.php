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
 * Hong Kong identity card
 *
 * @method string getCnName() Obtain Chinese name
 * @method void setCnName(string $CnName) Set Chinese name
 * @method string getEnName() Obtain English name
 * @method void setEnName(string $EnName) Set English name
 * @method string getTelexCode() Obtain Chinese name telegraph code
 * @method void setTelexCode(string $TelexCode) Set Chinese name telegraph code
 * @method string getSex() Obtain Gender: "M" (male) or "F" (female)
 * @method void setSex(string $Sex) Set Gender: "M" (male) or "F" (female)
 * @method string getBirthday() Obtain Date of birth
 * @method void setBirthday(string $Birthday) Set Date of birth
 * @method string getPermanent() Obtain Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
 * @method void setPermanent(string $Permanent) Set Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
 * @method string getIdNum() Obtain Identity number
 * @method void setIdNum(string $IdNum) Set Identity number
 * @method string getSymbol() Obtain Document symbol, the symbol below the date of birth, for example, "***AZ"
 * @method void setSymbol(string $Symbol) Set Document symbol, the symbol below the date of birth, for example, "***AZ"
 * @method string getFirstIssueDate() Obtain Date of first issue
 * @method void setFirstIssueDate(string $FirstIssueDate) Set Date of first issue
 * @method string getCurrentIssueDate() Obtain Most recent date of issue
 * @method void setCurrentIssueDate(string $CurrentIssueDate) Set Most recent date of issue
 */
class HKIDCard extends AbstractModel
{
    /**
     * @var string Chinese name
     */
    public $CnName;

    /**
     * @var string English name
     */
    public $EnName;

    /**
     * @var string Chinese name telegraph code
     */
    public $TelexCode;

    /**
     * @var string Gender: "M" (male) or "F" (female)
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
    public $IdNum;

    /**
     * @var string Document symbol, the symbol below the date of birth, for example, "***AZ"
     */
    public $Symbol;

    /**
     * @var string Date of first issue
     */
    public $FirstIssueDate;

    /**
     * @var string Most recent date of issue
     */
    public $CurrentIssueDate;

    /**
     * @param string $CnName Chinese name
     * @param string $EnName English name
     * @param string $TelexCode Chinese name telegraph code
     * @param string $Sex Gender: "M" (male) or "F" (female)
     * @param string $Birthday Date of birth
     * @param string $Permanent Permanent resident ID card: 0: non-permanent; 1: permanent; -1: unknown
     * @param string $IdNum Identity number
     * @param string $Symbol Document symbol, the symbol below the date of birth, for example, "***AZ"
     * @param string $FirstIssueDate Date of first issue
     * @param string $CurrentIssueDate Most recent date of issue
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("TelexCode",$param) and $param["TelexCode"] !== null) {
            $this->TelexCode = $param["TelexCode"];
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

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }
    }
}
