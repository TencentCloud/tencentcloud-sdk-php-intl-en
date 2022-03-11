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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check status of the backend
 *
 * @method string getIP() Obtain Private IP of the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIP(string $IP) Set Private IP of the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Port bound to the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Port bound to the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getHealthStatus() Obtain Current health status. Valid values: true: healthy; false: unhealthy (e.g., check not started, checking, or exceptional status). CLB instance will route traffic to only healthy real servers whose weights are greater than 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthStatus(boolean $HealthStatus) Set Current health status. Valid values: true: healthy; false: unhealthy (e.g., check not started, checking, or exceptional status). CLB instance will route traffic to only healthy real servers whose weights are greater than 0.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTargetId() Obtain Instance ID of the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargetId(string $TargetId) Set Instance ID of the target
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHealthStatusDetail() Obtain Detailed information of the current health status. Valid values: Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status; Close: health check not configured.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHealthStatusDetail(string $HealthStatusDetail) Set Detailed information of the current health status. Valid values: Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status; Close: health check not configured.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Private IP of the target
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IP;

    /**
     * @var integer Port bound to the target
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var boolean Current health status. Valid values: true: healthy; false: unhealthy (e.g., check not started, checking, or exceptional status). CLB instance will route traffic to only healthy real servers whose weights are greater than 0.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthStatus;

    /**
     * @var string Instance ID of the target
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TargetId;

    /**
     * @var string Detailed information of the current health status. Valid values: Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status; Close: health check not configured.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $HealthStatusDetail;

    /**
     * @param string $IP Private IP of the target
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Port bound to the target
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $HealthStatus Current health status. Valid values: true: healthy; false: unhealthy (e.g., check not started, checking, or exceptional status). CLB instance will route traffic to only healthy real servers whose weights are greater than 0.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TargetId Instance ID of the target
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $HealthStatusDetail Detailed information of the current health status. Valid values: Alive: healthy; Dead: exceptional; Unknown: check not started/checking/unknown status; Close: health check not configured.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("HealthStatusDetail",$param) and $param["HealthStatusDetail"] !== null) {
            $this->HealthStatusDetail = $param["HealthStatusDetail"];
        }
    }
}
