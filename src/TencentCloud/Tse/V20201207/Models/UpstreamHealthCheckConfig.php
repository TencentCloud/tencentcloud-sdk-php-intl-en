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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud-native gateway health check configuration
 *
 * @method boolean getEnableActiveHealthCheck() Obtain Enable active health check
 * @method void setEnableActiveHealthCheck(boolean $EnableActiveHealthCheck) Set Enable active health check
 * @method KongActiveHealthCheck getActiveHealthCheck() Obtain Active health check configuration
 * @method void setActiveHealthCheck(KongActiveHealthCheck $ActiveHealthCheck) Set Active health check configuration
 * @method boolean getEnablePassiveHealthCheck() Obtain Enable passive health check
 * @method void setEnablePassiveHealthCheck(boolean $EnablePassiveHealthCheck) Set Enable passive health check
 * @method KongPassiveHealthCheck getPassiveHealthCheck() Obtain Passive health check configuration
 * @method void setPassiveHealthCheck(KongPassiveHealthCheck $PassiveHealthCheck) Set Passive health check configuration
 * @method integer getSuccesses() Obtain Consecutive health threshold, unit: times
 * @method void setSuccesses(integer $Successes) Set Consecutive health threshold, unit: times
 * @method integer getFailures() Obtain Continuous anomaly threshold, unit: times	
 * @method void setFailures(integer $Failures) Set Continuous anomaly threshold, unit: times	
 * @method integer getTimeouts() Obtain Timeout threshold, unit: times
 * @method void setTimeouts(integer $Timeouts) Set Timeout threshold, unit: times
 * @method array getHealthyHttpStatuses() Obtain Healthy HTTP status code
 * @method void setHealthyHttpStatuses(array $HealthyHttpStatuses) Set Healthy HTTP status code
 * @method array getUnhealthyHttpStatuses() Obtain abnormal HTTP status code
 * @method void setUnhealthyHttpStatuses(array $UnhealthyHttpStatuses) Set abnormal HTTP status code
 * @method boolean getIgnoreZeroWeightNodes() Obtain Health check monitoring blocks nodes with a weight of 0 in reported data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreZeroWeightNodes(boolean $IgnoreZeroWeightNodes) Set Health check monitoring blocks nodes with a weight of 0 in reported data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getZeroWeightHeathCheck() Obtain Health check supports nodes with support weights of 0
 * @method void setZeroWeightHeathCheck(boolean $ZeroWeightHeathCheck) Set Health check supports nodes with support weights of 0
 */
class UpstreamHealthCheckConfig extends AbstractModel
{
    /**
     * @var boolean Enable active health check
     */
    public $EnableActiveHealthCheck;

    /**
     * @var KongActiveHealthCheck Active health check configuration
     */
    public $ActiveHealthCheck;

    /**
     * @var boolean Enable passive health check
     */
    public $EnablePassiveHealthCheck;

    /**
     * @var KongPassiveHealthCheck Passive health check configuration
     */
    public $PassiveHealthCheck;

    /**
     * @var integer Consecutive health threshold, unit: times
     */
    public $Successes;

    /**
     * @var integer Continuous anomaly threshold, unit: times	
     */
    public $Failures;

    /**
     * @var integer Timeout threshold, unit: times
     */
    public $Timeouts;

    /**
     * @var array Healthy HTTP status code
     */
    public $HealthyHttpStatuses;

    /**
     * @var array abnormal HTTP status code
     */
    public $UnhealthyHttpStatuses;

    /**
     * @var boolean Health check monitoring blocks nodes with a weight of 0 in reported data
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $IgnoreZeroWeightNodes;

    /**
     * @var boolean Health check supports nodes with support weights of 0
     */
    public $ZeroWeightHeathCheck;

    /**
     * @param boolean $EnableActiveHealthCheck Enable active health check
     * @param KongActiveHealthCheck $ActiveHealthCheck Active health check configuration
     * @param boolean $EnablePassiveHealthCheck Enable passive health check
     * @param KongPassiveHealthCheck $PassiveHealthCheck Passive health check configuration
     * @param integer $Successes Consecutive health threshold, unit: times
     * @param integer $Failures Continuous anomaly threshold, unit: times	
     * @param integer $Timeouts Timeout threshold, unit: times
     * @param array $HealthyHttpStatuses Healthy HTTP status code
     * @param array $UnhealthyHttpStatuses abnormal HTTP status code
     * @param boolean $IgnoreZeroWeightNodes Health check monitoring blocks nodes with a weight of 0 in reported data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ZeroWeightHeathCheck Health check supports nodes with support weights of 0
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
        if (array_key_exists("EnableActiveHealthCheck",$param) and $param["EnableActiveHealthCheck"] !== null) {
            $this->EnableActiveHealthCheck = $param["EnableActiveHealthCheck"];
        }

        if (array_key_exists("ActiveHealthCheck",$param) and $param["ActiveHealthCheck"] !== null) {
            $this->ActiveHealthCheck = new KongActiveHealthCheck();
            $this->ActiveHealthCheck->deserialize($param["ActiveHealthCheck"]);
        }

        if (array_key_exists("EnablePassiveHealthCheck",$param) and $param["EnablePassiveHealthCheck"] !== null) {
            $this->EnablePassiveHealthCheck = $param["EnablePassiveHealthCheck"];
        }

        if (array_key_exists("PassiveHealthCheck",$param) and $param["PassiveHealthCheck"] !== null) {
            $this->PassiveHealthCheck = new KongPassiveHealthCheck();
            $this->PassiveHealthCheck->deserialize($param["PassiveHealthCheck"]);
        }

        if (array_key_exists("Successes",$param) and $param["Successes"] !== null) {
            $this->Successes = $param["Successes"];
        }

        if (array_key_exists("Failures",$param) and $param["Failures"] !== null) {
            $this->Failures = $param["Failures"];
        }

        if (array_key_exists("Timeouts",$param) and $param["Timeouts"] !== null) {
            $this->Timeouts = $param["Timeouts"];
        }

        if (array_key_exists("HealthyHttpStatuses",$param) and $param["HealthyHttpStatuses"] !== null) {
            $this->HealthyHttpStatuses = $param["HealthyHttpStatuses"];
        }

        if (array_key_exists("UnhealthyHttpStatuses",$param) and $param["UnhealthyHttpStatuses"] !== null) {
            $this->UnhealthyHttpStatuses = $param["UnhealthyHttpStatuses"];
        }

        if (array_key_exists("IgnoreZeroWeightNodes",$param) and $param["IgnoreZeroWeightNodes"] !== null) {
            $this->IgnoreZeroWeightNodes = $param["IgnoreZeroWeightNodes"];
        }

        if (array_key_exists("ZeroWeightHeathCheck",$param) and $param["ZeroWeightHeathCheck"] !== null) {
            $this->ZeroWeightHeathCheck = $param["ZeroWeightHeathCheck"];
        }
    }
}
