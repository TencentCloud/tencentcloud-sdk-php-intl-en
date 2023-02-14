<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of a deployed contract.
 *
 * @method string getApplyName() Obtain The application name.
 * @method void setApplyName(string $ApplyName) Set The application name.
 * @method boolean getEnable() Obtain The contract status. `true`: Enabled; `false`: Not enabled.
 * @method void setEnable(boolean $Enable) Set The contract status. `true`: Enabled; `false`: Not enabled.
 * @method string getHash() Obtain The CNS address of the contract.
 * @method void setHash(string $Hash) Set The CNS address of the contract.
 * @method string getHashShow() Obtain The desensitized CNS address.
 * @method void setHashShow(string $HashShow) Set The desensitized CNS address.
 * @method string getWeId() Obtain The DID of the organization that deployed the contract.
 * @method void setWeId(string $WeId) Set The DID of the organization that deployed the contract.
 * @method string getDeployName() Obtain The name of the organization that deployed the contract.
 * @method void setDeployName(string $DeployName) Set The name of the organization that deployed the contract.
 * @method string getGroupId() Obtain The group.
 * @method void setGroupId(string $GroupId) Set The group.
 * @method string getCreateTime() Obtain The deployment time.
 * @method void setCreateTime(string $CreateTime) Set The deployment time.
 */
class Contract extends AbstractModel
{
    /**
     * @var string The application name.
     */
    public $ApplyName;

    /**
     * @var boolean The contract status. `true`: Enabled; `false`: Not enabled.
     */
    public $Enable;

    /**
     * @var string The CNS address of the contract.
     */
    public $Hash;

    /**
     * @var string The desensitized CNS address.
     */
    public $HashShow;

    /**
     * @var string The DID of the organization that deployed the contract.
     */
    public $WeId;

    /**
     * @var string The name of the organization that deployed the contract.
     */
    public $DeployName;

    /**
     * @var string The group.
     */
    public $GroupId;

    /**
     * @var string The deployment time.
     */
    public $CreateTime;

    /**
     * @param string $ApplyName The application name.
     * @param boolean $Enable The contract status. `true`: Enabled; `false`: Not enabled.
     * @param string $Hash The CNS address of the contract.
     * @param string $HashShow The desensitized CNS address.
     * @param string $WeId The DID of the organization that deployed the contract.
     * @param string $DeployName The name of the organization that deployed the contract.
     * @param string $GroupId The group.
     * @param string $CreateTime The deployment time.
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
        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("HashShow",$param) and $param["HashShow"] !== null) {
            $this->HashShow = $param["HashShow"];
        }

        if (array_key_exists("WeId",$param) and $param["WeId"] !== null) {
            $this->WeId = $param["WeId"];
        }

        if (array_key_exists("DeployName",$param) and $param["DeployName"] !== null) {
            $this->DeployName = $param["DeployName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
