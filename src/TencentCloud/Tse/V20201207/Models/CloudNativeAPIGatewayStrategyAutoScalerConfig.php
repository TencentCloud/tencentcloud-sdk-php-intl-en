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
 * Auto scaling policy
 *
 * @method integer getMaxReplicas() Obtain Maximum number of replicas
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum number of replicas
 * @method array getMetrics() Obtain Metric list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetrics(array $Metrics) Set Metric list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnabled() Obtain Whether metric scaling is enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnabled(boolean $Enabled) Set Whether metric scaling is enabled
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getModifyTime() Obtain Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStrategyId() Obtain Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStrategyId(string $StrategyId) Set Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAutoScalerId() Obtain Metric configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoScalerId(string $AutoScalerId) Set Metric configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AutoScalerBehavior getBehavior() Obtain Metric scaling behavior configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBehavior(AutoScalerBehavior $Behavior) Set Metric scaling behavior configuration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CloudNativeAPIGatewayStrategyAutoScalerConfig extends AbstractModel
{
    /**
     * @var integer Maximum number of replicas
     */
    public $MaxReplicas;

    /**
     * @var array Metric list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Metrics;

    /**
     * @var boolean Whether metric scaling is enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Enabled;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $CreateTime;

    /**
     * @var string Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ModifyTime;

    /**
     * @var string Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $StrategyId;

    /**
     * @var string Metric configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $AutoScalerId;

    /**
     * @var AutoScalerBehavior Metric scaling behavior configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Behavior;

    /**
     * @param integer $MaxReplicas Maximum number of replicas
     * @param array $Metrics Metric list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Enabled Whether metric scaling is enabled
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ModifyTime Modification time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StrategyId Policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AutoScalerId Metric configuration ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AutoScalerBehavior $Behavior Metric scaling behavior configuration
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
        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = [];
            foreach ($param["Metrics"] as $key => $value){
                $obj = new CloudNativeAPIGatewayStrategyAutoScalerConfigMetric();
                $obj->deserialize($value);
                array_push($this->Metrics, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("AutoScalerId",$param) and $param["AutoScalerId"] !== null) {
            $this->AutoScalerId = $param["AutoScalerId"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = new AutoScalerBehavior();
            $this->Behavior->deserialize($param["Behavior"]);
        }
    }
}
