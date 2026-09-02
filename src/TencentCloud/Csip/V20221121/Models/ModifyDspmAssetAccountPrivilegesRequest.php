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
 * ModifyDspmAssetAccountPrivileges request structure.
 *
 * @method string getAssetId() Obtain Instance ID.
 * @method void setAssetId(string $AssetId) Set Instance ID.
 * @method string getAccount() Obtain Account name.
 * @method void setAccount(string $Account) Set Account name.
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission information
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission information
 * @method string getHost() Obtain Host address
 * @method void setHost(string $Host) Set Host address
 * @method string getRiskId() Obtain Risk id
 * @method void setRiskId(string $RiskId) Set Risk id
 */
class ModifyDspmAssetAccountPrivilegesRequest extends AbstractModel
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
     * @var DspmDbAccountPrivilege Permission information
     */
    public $Privilege;

    /**
     * @var string Host address
     */
    public $Host;

    /**
     * @var string Risk id
     */
    public $RiskId;

    /**
     * @param string $AssetId Instance ID.
     * @param string $Account Account name.
     * @param DspmDbAccountPrivilege $Privilege Permission information
     * @param string $Host Host address
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

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }
    }
}
