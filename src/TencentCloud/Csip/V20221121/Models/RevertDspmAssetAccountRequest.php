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
 * RevertDspmAssetAccount request structure.
 *
 * @method string getAssetId() Obtain Instance ID.
 * @method void setAssetId(string $AssetId) Set Instance ID.
 * @method string getAccount() Obtain Account name.
 * @method void setAccount(string $Account) Set Account name.
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method integer getPrivilegeFlag() Obtain Whether to roll back permissions
 * @method void setPrivilegeFlag(integer $PrivilegeFlag) Set Whether to roll back permissions
 * @method integer getPasswordFlag() Obtain Whether to roll back the password
 * @method void setPasswordFlag(integer $PasswordFlag) Set Whether to roll back the password
 * @method string getRiskId() Obtain Risk id
 * @method void setRiskId(string $RiskId) Set Risk id
 */
class RevertDspmAssetAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $AssetId;

    /**
     * @var string Account name.
     */
    public $Account;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var integer Whether to roll back permissions
     */
    public $PrivilegeFlag;

    /**
     * @var integer Whether to roll back the password
     */
    public $PasswordFlag;

    /**
     * @var string Risk id
     */
    public $RiskId;

    /**
     * @param string $AssetId Instance ID.
     * @param string $Account Account name.
     * @param string $Host Host address
     * @param integer $PrivilegeFlag Whether to roll back permissions
     * @param integer $PasswordFlag Whether to roll back the password
     * @param string $RiskId Risk id
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("PrivilegeFlag",$param) and $param["PrivilegeFlag"] !== null) {
            $this->PrivilegeFlag = $param["PrivilegeFlag"];
        }

        if (array_key_exists("PasswordFlag",$param) and $param["PasswordFlag"] !== null) {
            $this->PasswordFlag = $param["PasswordFlag"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }
    }
}
