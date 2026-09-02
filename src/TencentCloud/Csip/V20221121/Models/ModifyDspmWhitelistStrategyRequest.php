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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmWhitelistStrategy request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getWhitelistStrategyId() Obtain Allowlist id
 * @method void setWhitelistStrategyId(string $WhitelistStrategyId) Set Allowlist id
 * @method string getName() Obtain Allowlist name
 * @method void setName(string $Name) Set Allowlist name
 * @method string getRule() Obtain Rule
 * @method void setRule(string $Rule) Set Rule
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class ModifyDspmWhitelistStrategyRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string Allowlist id
     */
    public $WhitelistStrategyId;

    /**
     * @var string Allowlist name
     */
    public $Name;

    /**
     * @var string Rule
     */
    public $Rule;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $WhitelistStrategyId Allowlist id
     * @param string $Name Allowlist name
     * @param string $Rule Rule
     * @param string $Remark Remarks
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("WhitelistStrategyId",$param) and $param["WhitelistStrategyId"] !== null) {
            $this->WhitelistStrategyId = $param["WhitelistStrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
