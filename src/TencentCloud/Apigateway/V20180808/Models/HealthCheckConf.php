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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Health check configuration, including `TsfHealthCheckConf` and `TargetServicesHealthCheckConf`
 *
 * @method boolean getIsHealthCheck() Obtain Whether to enable health check.
 * @method void setIsHealthCheck(boolean $IsHealthCheck) Set Whether to enable health check.
 * @method integer getRequestVolumeThreshold() Obtain Health check threshold.
 * @method void setRequestVolumeThreshold(integer $RequestVolumeThreshold) Set Health check threshold.
 * @method integer getSleepWindowInMilliseconds() Obtain Window size.
 * @method void setSleepWindowInMilliseconds(integer $SleepWindowInMilliseconds) Set Window size.
 * @method integer getErrorThresholdPercentage() Obtain Threshold percentage.
 * @method void setErrorThresholdPercentage(integer $ErrorThresholdPercentage) Set Threshold percentage.
 */
class HealthCheckConf extends AbstractModel
{
    /**
     * @var boolean Whether to enable health check.
     */
    public $IsHealthCheck;

    /**
     * @var integer Health check threshold.
     */
    public $RequestVolumeThreshold;

    /**
     * @var integer Window size.
     */
    public $SleepWindowInMilliseconds;

    /**
     * @var integer Threshold percentage.
     */
    public $ErrorThresholdPercentage;

    /**
     * @param boolean $IsHealthCheck Whether to enable health check.
     * @param integer $RequestVolumeThreshold Health check threshold.
     * @param integer $SleepWindowInMilliseconds Window size.
     * @param integer $ErrorThresholdPercentage Threshold percentage.
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
        if (array_key_exists("IsHealthCheck",$param) and $param["IsHealthCheck"] !== null) {
            $this->IsHealthCheck = $param["IsHealthCheck"];
        }

        if (array_key_exists("RequestVolumeThreshold",$param) and $param["RequestVolumeThreshold"] !== null) {
            $this->RequestVolumeThreshold = $param["RequestVolumeThreshold"];
        }

        if (array_key_exists("SleepWindowInMilliseconds",$param) and $param["SleepWindowInMilliseconds"] !== null) {
            $this->SleepWindowInMilliseconds = $param["SleepWindowInMilliseconds"];
        }

        if (array_key_exists("ErrorThresholdPercentage",$param) and $param["ErrorThresholdPercentage"] !== null) {
            $this->ErrorThresholdPercentage = $param["ErrorThresholdPercentage"];
        }
    }
}
