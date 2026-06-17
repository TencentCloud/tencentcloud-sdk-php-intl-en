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
namespace TencentCloud\Clb\V20230417\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the health information of a target
 *
 * @method string getIP() Obtain Private network IP of target
 * @method void setIP(string $IP) Set Private network IP of target
 * @method integer getPort() Obtain Port bound to the target
 * @method void setPort(integer $Port) Set Port bound to the target
 * @method boolean getHealthStatus() Obtain Detailed information of the current health status. For example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, unknown status, Close means health check disabled or listener status stop.
 * @method void setHealthStatus(boolean $HealthStatus) Set Detailed information of the current health status. For example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, unknown status, Close means health check disabled or listener status stop.
 * @method string getTargetId() Obtain Target instance ID, such as ins-12345678
 * @method void setTargetId(string $TargetId) Set Target instance ID, such as ins-12345678
 * @method string getHealthStatusDetail() Obtain Detailed information about the current health status. Alive: Healthy; Dead: Exceptional; Unknown: Check not started/Checking/Unknown status.
 * @method void setHealthStatusDetail(string $HealthStatusDetail) Set Detailed information about the current health status. Alive: Healthy; Dead: Exceptional; Unknown: Check not started/Checking/Unknown status.
 * @method string getTargetGroupId() Obtain Target group unique ID.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group unique ID.
 * @method integer getWeight() Obtain Weight of the Target
 * @method void setWeight(integer $Weight) Set Weight of the Target
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Private network IP of target
     */
    public $IP;

    /**
     * @var integer Port bound to the target
     */
    public $Port;

    /**
     * @var boolean Detailed information of the current health status. For example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, unknown status, Close means health check disabled or listener status stop.
     */
    public $HealthStatus;

    /**
     * @var string Target instance ID, such as ins-12345678
     */
    public $TargetId;

    /**
     * @var string Detailed information about the current health status. Alive: Healthy; Dead: Exceptional; Unknown: Check not started/Checking/Unknown status.
     */
    public $HealthStatusDetail;

    /**
     * @var string Target group unique ID.
     */
    public $TargetGroupId;

    /**
     * @var integer Weight of the Target
     */
    public $Weight;

    /**
     * @param string $IP Private network IP of target
     * @param integer $Port Port bound to the target
     * @param boolean $HealthStatus Detailed information of the current health status. For example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, unknown status, Close means health check disabled or listener status stop.
     * @param string $TargetId Target instance ID, such as ins-12345678
     * @param string $HealthStatusDetail Detailed information about the current health status. Alive: Healthy; Dead: Exceptional; Unknown: Check not started/Checking/Unknown status.
     * @param string $TargetGroupId Target group unique ID.
     * @param integer $Weight Weight of the Target
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

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
