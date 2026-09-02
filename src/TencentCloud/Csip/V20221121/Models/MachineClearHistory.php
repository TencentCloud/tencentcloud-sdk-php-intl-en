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
 * Machine Cleanup Record Object
 *
 * @method integer getId() Obtain <p>ID value</p>
 * @method void setId(integer $Id) Set <p>ID value</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getPublicIp() Obtain <p>Public IP address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP address</p>
 * @method string getPrivateIp() Obtain <p>Private IP address.</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IP address.</p>
 * @method string getAgentLastOfflineTime() Obtain <p>Client's last offline time</p>
 * @method void setAgentLastOfflineTime(string $AgentLastOfflineTime) Set <p>Client's last offline time</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 */
class MachineClearHistory extends AbstractModel
{
    /**
     * @var integer <p>ID value</p>
     */
    public $Id;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Public IP address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>Client's last offline time</p>
     */
    public $AgentLastOfflineTime;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @param integer $Id <p>ID value</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $PublicIp <p>Public IP address</p>
     * @param string $PrivateIp <p>Private IP address.</p>
     * @param string $AgentLastOfflineTime <p>Client's last offline time</p>
     * @param string $CreateTime <p>Creation time.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("AgentLastOfflineTime",$param) and $param["AgentLastOfflineTime"] !== null) {
            $this->AgentLastOfflineTime = $param["AgentLastOfflineTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
