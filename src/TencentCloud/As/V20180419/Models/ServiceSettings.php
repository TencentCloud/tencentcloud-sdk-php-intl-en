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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service settings
 *
 * @method boolean getReplaceMonitorUnhealthy() Obtain Enables unhealthy instance replacement. If this feature is enabled, AS will replace instances that are flagged as unhealthy by Cloud Monitor. If this parameter is not specified, the value will be False by default.
 * @method void setReplaceMonitorUnhealthy(boolean $ReplaceMonitorUnhealthy) Set Enables unhealthy instance replacement. If this feature is enabled, AS will replace instances that are flagged as unhealthy by Cloud Monitor. If this parameter is not specified, the value will be False by default.
 * @method string getScalingMode() Obtain Valid values: 
CLASSIC_SCALING: this is the typical scaling method, which creates and terminates instances to perform scaling operations. 
WAKE_UP_STOPPED_SCALING: this scaling method first tries to start stopped instances. If the number of instances woken up is insufficient, the system creates new instances for scale-out. For scale-in, instances are terminated as in the typical method. You can use the StopAutoScalingInstances API to stop instances in the scaling group. Scale-out operations triggered by alarms will still create new instances.
Default value: CLASSIC_SCALING
 * @method void setScalingMode(string $ScalingMode) Set Valid values: 
CLASSIC_SCALING: this is the typical scaling method, which creates and terminates instances to perform scaling operations. 
WAKE_UP_STOPPED_SCALING: this scaling method first tries to start stopped instances. If the number of instances woken up is insufficient, the system creates new instances for scale-out. For scale-in, instances are terminated as in the typical method. You can use the StopAutoScalingInstances API to stop instances in the scaling group. Scale-out operations triggered by alarms will still create new instances.
Default value: CLASSIC_SCALING
 * @method boolean getReplaceLoadBalancerUnhealthy() Obtain Enable unhealthy instance replacement. If this feature is enabled, AS will replace instances that are found unhealthy in the CLB health check. If this parameter is not specified, the default value `False` will be used.
 * @method void setReplaceLoadBalancerUnhealthy(boolean $ReplaceLoadBalancerUnhealthy) Set Enable unhealthy instance replacement. If this feature is enabled, AS will replace instances that are found unhealthy in the CLB health check. If this parameter is not specified, the default value `False` will be used.
 * @method string getReplaceMode() Obtain Replacement mode of the unhealthy replacement service. valid values:.
RECREATE: rebuild an instance to replace the unhealthy instance.
RESET: performs a system reinstallation on unhealthy instances while keeping the data disk, private IP address, instance id, and other information unchanged. the instance login settings, hostname, enhanced services, and UserData remain consistent with the current launch configuration.
Default value: RECREATE.
 * @method void setReplaceMode(string $ReplaceMode) Set Replacement mode of the unhealthy replacement service. valid values:.
RECREATE: rebuild an instance to replace the unhealthy instance.
RESET: performs a system reinstallation on unhealthy instances while keeping the data disk, private IP address, instance id, and other information unchanged. the instance login settings, hostname, enhanced services, and UserData remain consistent with the current launch configuration.
Default value: RECREATE.
 * @method boolean getAutoUpdateInstanceTags() Obtain Automatic instance Tag update. the default value is False. if this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (this feature takes effect for Tag creation and editing but not Tag deletion.) the update does not take effect immediately due to certain latency.
 * @method void setAutoUpdateInstanceTags(boolean $AutoUpdateInstanceTags) Set Automatic instance Tag update. the default value is False. if this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (this feature takes effect for Tag creation and editing but not Tag deletion.) the update does not take effect immediately due to certain latency.
 * @method boolean getDesiredCapacitySyncWithMaxMinSize() Obtain Expected number of instances sync minimum and maximum value. default value is False. this parameter only takes effect in scenarios where the expected number is not passed in to modify scaling group api.
<Li>True: when modifying the maximum or minimum value, if a conflict exists with the current expected value, synchronously adjust the expected value. for example, if the input minimum value is 2 while the current expected value is 1, the expected value will be synchronously adjusted to 2.</li>.
<Li>False: if a conflict exists between the current expected value when modifying the maximum or minimum value, an error message indicates it is not allowed to be modified.</li>.
 * @method void setDesiredCapacitySyncWithMaxMinSize(boolean $DesiredCapacitySyncWithMaxMinSize) Set Expected number of instances sync minimum and maximum value. default value is False. this parameter only takes effect in scenarios where the expected number is not passed in to modify scaling group api.
<Li>True: when modifying the maximum or minimum value, if a conflict exists with the current expected value, synchronously adjust the expected value. for example, if the input minimum value is 2 while the current expected value is 1, the expected value will be synchronously adjusted to 2.</li>.
<Li>False: if a conflict exists between the current expected value when modifying the maximum or minimum value, an error message indicates it is not allowed to be modified.</li>.
 * @method boolean getPriorityScaleInUnhealthy() Obtain Scaling in unhealthy instances first. If enabled, preferentially selects unhealthy instances during scale in. Default value: False.
 * @method void setPriorityScaleInUnhealthy(boolean $PriorityScaleInUnhealthy) Set Scaling in unhealthy instances first. If enabled, preferentially selects unhealthy instances during scale in. Default value: False.
 */
class ServiceSettings extends AbstractModel
{
    /**
     * @var boolean Enables unhealthy instance replacement. If this feature is enabled, AS will replace instances that are flagged as unhealthy by Cloud Monitor. If this parameter is not specified, the value will be False by default.
     */
    public $ReplaceMonitorUnhealthy;

    /**
     * @var string Valid values: 
CLASSIC_SCALING: this is the typical scaling method, which creates and terminates instances to perform scaling operations. 
WAKE_UP_STOPPED_SCALING: this scaling method first tries to start stopped instances. If the number of instances woken up is insufficient, the system creates new instances for scale-out. For scale-in, instances are terminated as in the typical method. You can use the StopAutoScalingInstances API to stop instances in the scaling group. Scale-out operations triggered by alarms will still create new instances.
Default value: CLASSIC_SCALING
     */
    public $ScalingMode;

    /**
     * @var boolean Enable unhealthy instance replacement. If this feature is enabled, AS will replace instances that are found unhealthy in the CLB health check. If this parameter is not specified, the default value `False` will be used.
     */
    public $ReplaceLoadBalancerUnhealthy;

    /**
     * @var string Replacement mode of the unhealthy replacement service. valid values:.
RECREATE: rebuild an instance to replace the unhealthy instance.
RESET: performs a system reinstallation on unhealthy instances while keeping the data disk, private IP address, instance id, and other information unchanged. the instance login settings, hostname, enhanced services, and UserData remain consistent with the current launch configuration.
Default value: RECREATE.
     */
    public $ReplaceMode;

    /**
     * @var boolean Automatic instance Tag update. the default value is False. if this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (this feature takes effect for Tag creation and editing but not Tag deletion.) the update does not take effect immediately due to certain latency.
     */
    public $AutoUpdateInstanceTags;

    /**
     * @var boolean Expected number of instances sync minimum and maximum value. default value is False. this parameter only takes effect in scenarios where the expected number is not passed in to modify scaling group api.
<Li>True: when modifying the maximum or minimum value, if a conflict exists with the current expected value, synchronously adjust the expected value. for example, if the input minimum value is 2 while the current expected value is 1, the expected value will be synchronously adjusted to 2.</li>.
<Li>False: if a conflict exists between the current expected value when modifying the maximum or minimum value, an error message indicates it is not allowed to be modified.</li>.
     */
    public $DesiredCapacitySyncWithMaxMinSize;

    /**
     * @var boolean Scaling in unhealthy instances first. If enabled, preferentially selects unhealthy instances during scale in. Default value: False.
     */
    public $PriorityScaleInUnhealthy;

    /**
     * @param boolean $ReplaceMonitorUnhealthy Enables unhealthy instance replacement. If this feature is enabled, AS will replace instances that are flagged as unhealthy by Cloud Monitor. If this parameter is not specified, the value will be False by default.
     * @param string $ScalingMode Valid values: 
CLASSIC_SCALING: this is the typical scaling method, which creates and terminates instances to perform scaling operations. 
WAKE_UP_STOPPED_SCALING: this scaling method first tries to start stopped instances. If the number of instances woken up is insufficient, the system creates new instances for scale-out. For scale-in, instances are terminated as in the typical method. You can use the StopAutoScalingInstances API to stop instances in the scaling group. Scale-out operations triggered by alarms will still create new instances.
Default value: CLASSIC_SCALING
     * @param boolean $ReplaceLoadBalancerUnhealthy Enable unhealthy instance replacement. If this feature is enabled, AS will replace instances that are found unhealthy in the CLB health check. If this parameter is not specified, the default value `False` will be used.
     * @param string $ReplaceMode Replacement mode of the unhealthy replacement service. valid values:.
RECREATE: rebuild an instance to replace the unhealthy instance.
RESET: performs a system reinstallation on unhealthy instances while keeping the data disk, private IP address, instance id, and other information unchanged. the instance login settings, hostname, enhanced services, and UserData remain consistent with the current launch configuration.
Default value: RECREATE.
     * @param boolean $AutoUpdateInstanceTags Automatic instance Tag update. the default value is False. if this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (this feature takes effect for Tag creation and editing but not Tag deletion.) the update does not take effect immediately due to certain latency.
     * @param boolean $DesiredCapacitySyncWithMaxMinSize Expected number of instances sync minimum and maximum value. default value is False. this parameter only takes effect in scenarios where the expected number is not passed in to modify scaling group api.
<Li>True: when modifying the maximum or minimum value, if a conflict exists with the current expected value, synchronously adjust the expected value. for example, if the input minimum value is 2 while the current expected value is 1, the expected value will be synchronously adjusted to 2.</li>.
<Li>False: if a conflict exists between the current expected value when modifying the maximum or minimum value, an error message indicates it is not allowed to be modified.</li>.
     * @param boolean $PriorityScaleInUnhealthy Scaling in unhealthy instances first. If enabled, preferentially selects unhealthy instances during scale in. Default value: False.
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
        if (array_key_exists("ReplaceMonitorUnhealthy",$param) and $param["ReplaceMonitorUnhealthy"] !== null) {
            $this->ReplaceMonitorUnhealthy = $param["ReplaceMonitorUnhealthy"];
        }

        if (array_key_exists("ScalingMode",$param) and $param["ScalingMode"] !== null) {
            $this->ScalingMode = $param["ScalingMode"];
        }

        if (array_key_exists("ReplaceLoadBalancerUnhealthy",$param) and $param["ReplaceLoadBalancerUnhealthy"] !== null) {
            $this->ReplaceLoadBalancerUnhealthy = $param["ReplaceLoadBalancerUnhealthy"];
        }

        if (array_key_exists("ReplaceMode",$param) and $param["ReplaceMode"] !== null) {
            $this->ReplaceMode = $param["ReplaceMode"];
        }

        if (array_key_exists("AutoUpdateInstanceTags",$param) and $param["AutoUpdateInstanceTags"] !== null) {
            $this->AutoUpdateInstanceTags = $param["AutoUpdateInstanceTags"];
        }

        if (array_key_exists("DesiredCapacitySyncWithMaxMinSize",$param) and $param["DesiredCapacitySyncWithMaxMinSize"] !== null) {
            $this->DesiredCapacitySyncWithMaxMinSize = $param["DesiredCapacitySyncWithMaxMinSize"];
        }

        if (array_key_exists("PriorityScaleInUnhealthy",$param) and $param["PriorityScaleInUnhealthy"] !== null) {
            $this->PriorityScaleInUnhealthy = $param["PriorityScaleInUnhealthy"];
        }
    }
}
