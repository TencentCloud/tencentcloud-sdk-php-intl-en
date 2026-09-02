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
 * ModifyDspmAssetAccount request structure.
 *
 * @method string getAssetId() Obtain Instance ID.
 * @method void setAssetId(string $AssetId) Set Instance ID.
 * @method string getAccount() Obtain Account name.
 * @method void setAccount(string $Account) Set Account name.
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method integer getAccountType() Obtain Account type.
 * @method void setAccountType(integer $AccountType) Set Account type.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getRiskId() Obtain Risk id
 * @method void setRiskId(string $RiskId) Set Risk id
 */
class ModifyDspmAssetAccountRequest extends AbstractModel
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
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var integer Account type.
     */
    public $AccountType;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Risk id
     */
    public $RiskId;

    /**
     * @param string $AssetId Instance ID.
     * @param string $Account Account name.
     * @param array $MemberId Group Account Member ID
     * @param string $Host Host address
     * @param integer $AccountType Account type.
     * @param string $Remark Remarks
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }
    }
}
