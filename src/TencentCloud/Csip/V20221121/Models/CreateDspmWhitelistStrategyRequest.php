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
 * CreateDspmWhitelistStrategy request structure.
 *
 * @method string getStrategyType() Obtain <p>Policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getName() Obtain <p>Allowlist</p>
 * @method void setName(string $Name) Set <p>Allowlist</p>
 * @method string getRule() Obtain <p>Policy</p>
 * @method void setRule(string $Rule) Set <p>Policy</p>
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method string getAccount() Obtain <p>Account</p>
 * @method void setAccount(string $Account) Set <p>Account</p>
 * @method string getHost() Obtain <p>Host</p>
 * @method void setHost(string $Host) Set <p>Host</p>
 * @method string getRiskId() Obtain <p>Risk id</p>
 * @method void setRiskId(string $RiskId) Set <p>Risk id</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getWhitelistType() Obtain <p>Whitelist type</p><p>Enumeration values:</p><ul><li>static_risk: allowlist rules for static configuration scan</li><li>audit: audit allowlist rules</li><li>ueba: allowlist rules related to UEBA</li></ul>
 * @method void setWhitelistType(string $WhitelistType) Set <p>Whitelist type</p><p>Enumeration values:</p><ul><li>static_risk: allowlist rules for static configuration scan</li><li>audit: audit allowlist rules</li><li>ueba: allowlist rules related to UEBA</li></ul>
 */
class CreateDspmWhitelistStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyType;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Allowlist</p>
     */
    public $Name;

    /**
     * @var string <p>Policy</p>
     */
    public $Rule;

    /**
     * @var string <p>Asset id</p>
     */
    public $AssetId;

    /**
     * @var string <p>Account</p>
     */
    public $Account;

    /**
     * @var string <p>Host</p>
     */
    public $Host;

    /**
     * @var string <p>Risk id</p>
     */
    public $RiskId;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Whitelist type</p><p>Enumeration values:</p><ul><li>static_risk: allowlist rules for static configuration scan</li><li>audit: audit allowlist rules</li><li>ueba: allowlist rules related to UEBA</li></ul>
     */
    public $WhitelistType;

    /**
     * @param string $StrategyType <p>Policy type</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $Name <p>Allowlist</p>
     * @param string $Rule <p>Policy</p>
     * @param string $AssetId <p>Asset id</p>
     * @param string $Account <p>Account</p>
     * @param string $Host <p>Host</p>
     * @param string $RiskId <p>Risk id</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $WhitelistType <p>Whitelist type</p><p>Enumeration values:</p><ul><li>static_risk: allowlist rules for static configuration scan</li><li>audit: audit allowlist rules</li><li>ueba: allowlist rules related to UEBA</li></ul>
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WhitelistType",$param) and $param["WhitelistType"] !== null) {
            $this->WhitelistType = $param["WhitelistType"];
        }
    }
}
