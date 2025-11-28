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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the health information of a target
 *
 * @method string getIP() Obtain Private IP of the target
 * @method void setIP(string $IP) Set Private IP of the target
 * @method integer getPort() Obtain Port bound to the target
 * @method void setPort(integer $Port) Set Port bound to the target
 * @method boolean getHealthStatus() Obtain Current health status. true: healthy; false: unhealthy.
 * @method void setHealthStatus(boolean $HealthStatus) Set Current health status. true: healthy; false: unhealthy.
 * @method string getTargetId() Obtain Instance ID of the target, such as ins-12345678
 * @method void setTargetId(string $TargetId) Set Instance ID of the target, such as ins-12345678
 * @method string getHealthStatusDetail() Obtain Describes the detailed information of the current health status. for example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, Unknown status, Close means health check disabled or listener status stop.
 * @method void setHealthStatusDetail(string $HealthStatusDetail) Set Describes the detailed information of the current health status. for example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, Unknown status, Close means health check disabled or listener status stop.
 * @method string getHealthStatusDetial() Obtain (**This parameter will be disused soon. Please use `HealthStatusDetail` instead.**) Details of the current health status. Values: `Alive` (healthy), `Dead` (abnormal), `Unknown` (Health check not started/checking/unknown status)
 * @method void setHealthStatusDetial(string $HealthStatusDetial) Set (**This parameter will be disused soon. Please use `HealthStatusDetail` instead.**) Details of the current health status. Values: `Alive` (healthy), `Dead` (abnormal), `Unknown` (Health check not started/checking/unknown status)
 * @method string getTargetGroupId() Obtain Target group unique ID.
 * @method void setTargetGroupId(string $TargetGroupId) Set Target group unique ID.
 * @method integer getWeight() Obtain Specifies the weight of the Target.
 * @method void setWeight(integer $Weight) Set Specifies the weight of the Target.
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
     * @var string Describes the detailed information of the current health status. for example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, Unknown status, Close means health check disabled or listener status stop.
     */
    public $HealthStatusDetail;

    /**
     * @var string (**This parameter will be disused soon. Please use `HealthStatusDetail` instead.**) Details of the current health status. Values: `Alive` (healthy), `Dead` (abnormal), `Unknown` (Health check not started/checking/unknown status)
     * @deprecated
     */
    public $HealthStatusDetial;

    /**
     * @var string Target group unique ID.
     */
    public $TargetGroupId;

    /**
     * @var integer Specifies the weight of the Target.
     */
    public $Weight;

    /**
     * @param string $IP Private IP of the target
     * @param integer $Port Port bound to the target
     * @param boolean $HealthStatus Current health status. true: healthy; false: unhealthy.
     * @param string $TargetId Instance ID of the target, such as ins-12345678
     * @param string $HealthStatusDetail Describes the detailed information of the current health status. for example: Alive, Dead, Unknown, Close. Alive status is healthy, Dead state is abnormal, Unknown status includes not started, checking, Unknown status, Close means health check disabled or listener status stop.
     * @param string $HealthStatusDetial (**This parameter will be disused soon. Please use `HealthStatusDetail` instead.**) Details of the current health status. Values: `Alive` (healthy), `Dead` (abnormal), `Unknown` (Health check not started/checking/unknown status)
     * @param string $TargetGroupId Target group unique ID.
     * @param integer $Weight Specifies the weight of the Target.
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

        if (array_key_exists("HealthStatusDetial",$param) and $param["HealthStatusDetial"] !== null) {
            $this->HealthStatusDetial = $param["HealthStatusDetial"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
