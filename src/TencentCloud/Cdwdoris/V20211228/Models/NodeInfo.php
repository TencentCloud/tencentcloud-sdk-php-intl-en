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
 * NodeInfo
 *
 * @method string getIp() Obtain User IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set User IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Node status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Node status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Node role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Node role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentName() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentName(string $ComponentName) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeRole() Obtain Node role
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeRole(string $NodeRole) Set Node role
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastRestartTime() Obtain The time when the node was last restarted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastRestartTime(string $LastRestartTime) Set The time when the node was last restarted
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain The availability zone where the node is located
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set The availability zone where the node is located
Note: This field may return null, indicating that no valid values can be obtained.
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string User IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var integer Node status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Node role name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentName;

    /**
     * @var string Node role
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeRole;

    /**
     * @var string The time when the node was last restarted
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastRestartTime;

    /**
     * @var string The availability zone where the node is located
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @param string $Ip User IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Node status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Node role name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentName Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeRole Node role
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastRestartTime The time when the node was last restarted
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone The availability zone where the node is located
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
