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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information list
 *
 * @method string getNodeName() Obtain Node name
 * @method void setNodeName(string $NodeName) Set Node name
 * @method integer getStatus() Obtain Node status
 * @method void setStatus(integer $Status) Set Node status
 * @method string getIp() Obtain Node IP
 * @method void setIp(string $Ip) Set Node IP
 * @method string getNodeRole() Obtain Node role
 * @method void setNodeRole(string $NodeRole) Set Node role
 * @method string getComponentName() Obtain Component name
 * @method void setComponentName(string $ComponentName) Set Component name
 * @method string getLastRestartTime() Obtain Last restart time
 * @method void setLastRestartTime(string $LastRestartTime) Set Last restart time
 */
class NodeInfos extends AbstractModel
{
    /**
     * @var string Node name
     */
    public $NodeName;

    /**
     * @var integer Node status
     */
    public $Status;

    /**
     * @var string Node IP
     */
    public $Ip;

    /**
     * @var string Node role
     */
    public $NodeRole;

    /**
     * @var string Component name
     */
    public $ComponentName;

    /**
     * @var string Last restart time
     */
    public $LastRestartTime;

    /**
     * @param string $NodeName Node name
     * @param integer $Status Node status
     * @param string $Ip Node IP
     * @param string $NodeRole Node role
     * @param string $ComponentName Component name
     * @param string $LastRestartTime Last restart time
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }
    }
}
