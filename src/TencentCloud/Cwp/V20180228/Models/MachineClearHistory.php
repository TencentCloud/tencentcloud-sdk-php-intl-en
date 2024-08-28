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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Machine Cleanup Record Object
 *
 * @method integer getId() Obtain ID Value
 * @method void setId(integer $Id) Set ID Value
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getPrivateIp() Obtain Private IP address
 * @method void setPrivateIp(string $PrivateIp) Set Private IP address
 * @method string getAgentLastOfflineTime() Obtain Client Last Offline Time
 * @method void setAgentLastOfflineTime(string $AgentLastOfflineTime) Set Client Last Offline Time
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 */
class MachineClearHistory extends AbstractModel
{
    /**
     * @var integer ID Value
     */
    public $Id;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Private IP address
     */
    public $PrivateIp;

    /**
     * @var string Client Last Offline Time
     */
    public $AgentLastOfflineTime;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @param integer $Id ID Value
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $PublicIp Public IP address
     * @param string $PrivateIp Private IP address
     * @param string $AgentLastOfflineTime Client Last Offline Time
     * @param string $CreateTime Creation time
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
