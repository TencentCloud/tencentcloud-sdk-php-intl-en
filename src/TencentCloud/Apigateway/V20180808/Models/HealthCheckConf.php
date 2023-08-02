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
 * @method boolean getIsHealthCheck() Obtain Whether health check is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsHealthCheck(boolean $IsHealthCheck) Set Whether health check is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRequestVolumeThreshold() Obtain Health check threshold. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRequestVolumeThreshold(integer $RequestVolumeThreshold) Set Health check threshold. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSleepWindowInMilliseconds() Obtain Window size. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSleepWindowInMilliseconds(integer $SleepWindowInMilliseconds) Set Window size. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getErrorThresholdPercentage() Obtain Threshold percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorThresholdPercentage(integer $ErrorThresholdPercentage) Set Threshold percentage.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HealthCheckConf extends AbstractModel
{
    /**
     * @var boolean Whether health check is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsHealthCheck;

    /**
     * @var integer Health check threshold. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RequestVolumeThreshold;

    /**
     * @var integer Window size. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SleepWindowInMilliseconds;

    /**
     * @var integer Threshold percentage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorThresholdPercentage;

    /**
     * @param boolean $IsHealthCheck Whether health check is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RequestVolumeThreshold Health check threshold. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SleepWindowInMilliseconds Window size. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ErrorThresholdPercentage Threshold percentage.
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
