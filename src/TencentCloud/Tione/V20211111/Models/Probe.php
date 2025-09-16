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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Probe structure information.
 *
 * @method ProbeAction getProbeAction() Obtain Probe action.
 * @method void setProbeAction(ProbeAction $ProbeAction) Set Probe action.
 * @method integer getInitialDelaySeconds() Obtain Delay in waiting for a service startup.
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) Set Delay in waiting for a service startup.
 * @method integer getPeriodSeconds() Obtain Polling check interval.
 * @method void setPeriodSeconds(integer $PeriodSeconds) Set Polling check interval.
 * @method integer getTimeoutSeconds() Obtain Check timeout duration.
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) Set Check timeout duration.
 * @method integer getFailureThreshold() Obtain Number of acknowledged failed detections.
 * @method void setFailureThreshold(integer $FailureThreshold) Set Number of acknowledged failed detections.
 * @method integer getSuccessThreshold() Obtain Number of acknowledged successful detections. The default values for readiness, liveness, and startup statuses are 3, 1, and 1.
 * @method void setSuccessThreshold(integer $SuccessThreshold) Set Number of acknowledged successful detections. The default values for readiness, liveness, and startup statuses are 3, 1, and 1.
 */
class Probe extends AbstractModel
{
    /**
     * @var ProbeAction Probe action.
     */
    public $ProbeAction;

    /**
     * @var integer Delay in waiting for a service startup.
     */
    public $InitialDelaySeconds;

    /**
     * @var integer Polling check interval.
     */
    public $PeriodSeconds;

    /**
     * @var integer Check timeout duration.
     */
    public $TimeoutSeconds;

    /**
     * @var integer Number of acknowledged failed detections.
     */
    public $FailureThreshold;

    /**
     * @var integer Number of acknowledged successful detections. The default values for readiness, liveness, and startup statuses are 3, 1, and 1.
     */
    public $SuccessThreshold;

    /**
     * @param ProbeAction $ProbeAction Probe action.
     * @param integer $InitialDelaySeconds Delay in waiting for a service startup.
     * @param integer $PeriodSeconds Polling check interval.
     * @param integer $TimeoutSeconds Check timeout duration.
     * @param integer $FailureThreshold Number of acknowledged failed detections.
     * @param integer $SuccessThreshold Number of acknowledged successful detections. The default values for readiness, liveness, and startup statuses are 3, 1, and 1.
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
        if (array_key_exists("ProbeAction",$param) and $param["ProbeAction"] !== null) {
            $this->ProbeAction = new ProbeAction();
            $this->ProbeAction->deserialize($param["ProbeAction"]);
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("PeriodSeconds",$param) and $param["PeriodSeconds"] !== null) {
            $this->PeriodSeconds = $param["PeriodSeconds"];
        }

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }

        if (array_key_exists("FailureThreshold",$param) and $param["FailureThreshold"] !== null) {
            $this->FailureThreshold = $param["FailureThreshold"];
        }

        if (array_key_exists("SuccessThreshold",$param) and $param["SuccessThreshold"] !== null) {
            $this->SuccessThreshold = $param["SuccessThreshold"];
        }
    }
}
