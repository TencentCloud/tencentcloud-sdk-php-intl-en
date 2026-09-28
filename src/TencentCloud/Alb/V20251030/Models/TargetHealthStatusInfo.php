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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service health status information
 *
 * @method string getStatus() Obtain Backend service health status. If DescribeListenerHealthStatus returns only unhealthy backends, this value is UnHealthy.
 * @method void setStatus(string $Status) Set Backend service health status. If DescribeListenerHealthStatus returns only unhealthy backends, this value is UnHealthy.
 * @method string getTargetId() Obtain Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 * @method void setTargetId(string $TargetId) Set Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
 * @method string getTargetIp() Obtain Backend target service IP.
 * @method void setTargetIp(string $TargetIp) Set Backend target service IP.
 * @method integer getTargetPort() Obtain Backend server port.
 * @method void setTargetPort(integer $TargetPort) Set Backend server port.
 */
class TargetHealthStatusInfo extends AbstractModel
{
    /**
     * @var string Backend service health status. If DescribeListenerHealthStatus returns only unhealthy backends, this value is UnHealthy.
     */
    public $Status;

    /**
     * @var string Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
     */
    public $TargetId;

    /**
     * @var string Backend target service IP.
     */
    public $TargetIp;

    /**
     * @var integer Backend server port.
     */
    public $TargetPort;

    /**
     * @param string $Status Backend service health status. If DescribeListenerHealthStatus returns only unhealthy backends, this value is UnHealthy.
     * @param string $TargetId Backend service instance ID. For a CVM instance, the format is "ins-" followed by 8 alphanumeric characters.
     * @param string $TargetIp Backend target service IP.
     * @param integer $TargetPort Backend server port.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("TargetPort",$param) and $param["TargetPort"] !== null) {
            $this->TargetPort = $param["TargetPort"];
        }
    }
}
