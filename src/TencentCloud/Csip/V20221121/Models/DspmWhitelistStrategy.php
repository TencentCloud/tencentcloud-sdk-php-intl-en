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
 * Dspm allowlist policy
 *
 * @method string getWhitelistStrategyId() Obtain <p>Allowlist policy id</p>
 * @method void setWhitelistStrategyId(string $WhitelistStrategyId) Set <p>Allowlist policy id</p>
 * @method string getStrategyType() Obtain <p>Policy type</p>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type</p>
 * @method string getName() Obtain <p>Allowlist policy name</p>
 * @method void setName(string $Name) Set <p>Allowlist policy name</p>
 * @method string getStrategyCategory() Obtain <p>Policy type</p>
 * @method void setStrategyCategory(string $StrategyCategory) Set <p>Policy type</p>
 * @method string getRule() Obtain <p>Policy rule</p>
 * @method void setRule(string $Rule) Set <p>Policy rule</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method string getModifyTime() Obtain <p>Modification time.</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>Modification time.</p>
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method string getAccount() Obtain <p>Account</p>
 * @method void setAccount(string $Account) Set <p>Account</p>
 * @method string getHost() Obtain <p>Host</p>
 * @method void setHost(string $Host) Set <p>Host</p>
 * @method string getDescription() Obtain <p>Policy rule content description</p>
 * @method void setDescription(string $Description) Set <p>Policy rule content description</p>
 * @method string getRiskType() Obtain <p>Allowlist type. risk - risk allowlist; alarm - alarm allowlist.</p>
 * @method void setRiskType(string $RiskType) Set <p>Allowlist type. risk - risk allowlist; alarm - alarm allowlist.</p>
 * @method integer getAppId() Obtain <p>app id of the asset's associated account</p>
 * @method void setAppId(integer $AppId) Set <p>app id of the asset's associated account</p>
 * @method string getNickName() Obtain <p>Account nickname</p>
 * @method void setNickName(string $NickName) Set <p>Account nickname</p>
 * @method string getUin() Obtain <p>uin of the associated account of the asset</p>
 * @method void setUin(string $Uin) Set <p>uin of the associated account of the asset</p>
 * @method string getWhitelistType() Obtain <p>Type of allowlist</p>
 * @method void setWhitelistType(string $WhitelistType) Set <p>Type of allowlist</p>
 */
class DspmWhitelistStrategy extends AbstractModel
{
    /**
     * @var string <p>Allowlist policy id</p>
     */
    public $WhitelistStrategyId;

    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyType;

    /**
     * @var string <p>Allowlist policy name</p>
     */
    public $Name;

    /**
     * @var string <p>Policy type</p>
     */
    public $StrategyCategory;

    /**
     * @var string <p>Policy rule</p>
     */
    public $Rule;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var string <p>Modification time.</p>
     */
    public $ModifyTime;

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
     * @var string <p>Policy rule content description</p>
     */
    public $Description;

    /**
     * @var string <p>Allowlist type. risk - risk allowlist; alarm - alarm allowlist.</p>
     */
    public $RiskType;

    /**
     * @var integer <p>app id of the asset's associated account</p>
     */
    public $AppId;

    /**
     * @var string <p>Account nickname</p>
     */
    public $NickName;

    /**
     * @var string <p>uin of the associated account of the asset</p>
     */
    public $Uin;

    /**
     * @var string <p>Type of allowlist</p>
     */
    public $WhitelistType;

    /**
     * @param string $WhitelistStrategyId <p>Allowlist policy id</p>
     * @param string $StrategyType <p>Policy type</p>
     * @param string $Name <p>Allowlist policy name</p>
     * @param string $StrategyCategory <p>Policy type</p>
     * @param string $Rule <p>Policy rule</p>
     * @param string $Remark <p>Remarks.</p>
     * @param string $ModifyTime <p>Modification time.</p>
     * @param string $AssetId <p>Asset id</p>
     * @param string $Account <p>Account</p>
     * @param string $Host <p>Host</p>
     * @param string $Description <p>Policy rule content description</p>
     * @param string $RiskType <p>Allowlist type. risk - risk allowlist; alarm - alarm allowlist.</p>
     * @param integer $AppId <p>app id of the asset's associated account</p>
     * @param string $NickName <p>Account nickname</p>
     * @param string $Uin <p>uin of the associated account of the asset</p>
     * @param string $WhitelistType <p>Type of allowlist</p>
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
        if (array_key_exists("WhitelistStrategyId",$param) and $param["WhitelistStrategyId"] !== null) {
            $this->WhitelistStrategyId = $param["WhitelistStrategyId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrategyCategory",$param) and $param["StrategyCategory"] !== null) {
            $this->StrategyCategory = $param["StrategyCategory"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("WhitelistType",$param) and $param["WhitelistType"] !== null) {
            $this->WhitelistType = $param["WhitelistType"];
        }
    }
}
