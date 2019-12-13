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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIP() 获取Private IP of the target
 * @method void setIP(string $IP) 设置Private IP of the target
 * @method integer getPort() 获取Port bound to the target
 * @method void setPort(integer $Port) 设置Port bound to the target
 * @method boolean getHealthStatus() 获取Current health status. true: healthy; false: unhealthy.
 * @method void setHealthStatus(boolean $HealthStatus) 设置Current health status. true: healthy; false: unhealthy.
 * @method string getTargetId() 获取Instance ID of the target, such as ins-12345678
 * @method void setTargetId(string $TargetId) 设置Instance ID of the target, such as ins-12345678
 * @method string getHealthStatusDetial() 获取Detailed information of the current health status. Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status.
 * @method void setHealthStatusDetial(string $HealthStatusDetial) 设置Detailed information of the current health status. Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status.
 */

/**
 *Describes the health information of a target
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Private IP of the target
     */
    public $IP;

    /**
     * @var integer Port bound to the target
     */
    public $Port;

    /**
     * @var boolean Current health status. true: healthy; false: unhealthy.
     */
    public $HealthStatus;

    /**
     * @var string Instance ID of the target, such as ins-12345678
     */
    public $TargetId;

    /**
     * @var string Detailed information of the current health status. Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status.
     */
    public $HealthStatusDetial;
    /**
     * @param string $IP Private IP of the target
     * @param integer $Port Port bound to the target
     * @param boolean $HealthStatus Current health status. true: healthy; false: unhealthy.
     * @param string $TargetId Instance ID of the target, such as ins-12345678
     * @param string $HealthStatusDetial Detailed information of the current health status. Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("HealthStatusDetial",$param) and $param["HealthStatusDetial"] !== null) {
            $this->HealthStatusDetial = $param["HealthStatusDetial"];
        }
    }
}
