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
namespace TencentCloud\Autoscaling\V20180419\Models;
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
 * @method string getReplaceMode() Obtain Replace mode of unhealthy replacement service. Valid values:
RECREATE: Rebuild an instance to replace the original unhealthy instance.
RESET: Performing a system reinstallation on unhealthy instances to keep information such as data disks, private IP addresses, and instance IDs unchanged. The instance login settings, HostName, enhanced services, and UserData will remain consistent with the current launch configuration.
Default value: RECREATE.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplaceMode(string $ReplaceMode) Set Replace mode of unhealthy replacement service. Valid values:
RECREATE: Rebuild an instance to replace the original unhealthy instance.
RESET: Performing a system reinstallation on unhealthy instances to keep information such as data disks, private IP addresses, and instance IDs unchanged. The instance login settings, HostName, enhanced services, and UserData will remain consistent with the current launch configuration.
Default value: RECREATE.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoUpdateInstanceTags() Obtain Automatic instance tag update. The default value is false. If this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (This feature takes effect for tag creation and editing but not tag deletion.) The update does not take effect immediately due to certain latency.
 * @method void setAutoUpdateInstanceTags(boolean $AutoUpdateInstanceTags) Set Automatic instance tag update. The default value is false. If this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (This feature takes effect for tag creation and editing but not tag deletion.) The update does not take effect immediately due to certain latency.
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
     * @var string Replace mode of unhealthy replacement service. Valid values:
RECREATE: Rebuild an instance to replace the original unhealthy instance.
RESET: Performing a system reinstallation on unhealthy instances to keep information such as data disks, private IP addresses, and instance IDs unchanged. The instance login settings, HostName, enhanced services, and UserData will remain consistent with the current launch configuration.
Default value: RECREATE.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplaceMode;

    /**
     * @var boolean Automatic instance tag update. The default value is false. If this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (This feature takes effect for tag creation and editing but not tag deletion.) The update does not take effect immediately due to certain latency.
     */
    public $AutoUpdateInstanceTags;

    /**
     * @param boolean $ReplaceMonitorUnhealthy Enables unhealthy instance replacement. If this feature is enabled, AS will replace instances that are flagged as unhealthy by Cloud Monitor. If this parameter is not specified, the value will be False by default.
     * @param string $ScalingMode Valid values: 
CLASSIC_SCALING: this is the typical scaling method, which creates and terminates instances to perform scaling operations. 
WAKE_UP_STOPPED_SCALING: this scaling method first tries to start stopped instances. If the number of instances woken up is insufficient, the system creates new instances for scale-out. For scale-in, instances are terminated as in the typical method. You can use the StopAutoScalingInstances API to stop instances in the scaling group. Scale-out operations triggered by alarms will still create new instances.
Default value: CLASSIC_SCALING
     * @param boolean $ReplaceLoadBalancerUnhealthy Enable unhealthy instance replacement. If this feature is enabled, AS will replace instances that are found unhealthy in the CLB health check. If this parameter is not specified, the default value `False` will be used.
     * @param string $ReplaceMode Replace mode of unhealthy replacement service. Valid values:
RECREATE: Rebuild an instance to replace the original unhealthy instance.
RESET: Performing a system reinstallation on unhealthy instances to keep information such as data disks, private IP addresses, and instance IDs unchanged. The instance login settings, HostName, enhanced services, and UserData will remain consistent with the current launch configuration.
Default value: RECREATE.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoUpdateInstanceTags Automatic instance tag update. The default value is false. If this feature is enabled, tags of running instances in a scaling group will be updated as well if the scaling group tags are updated. (This feature takes effect for tag creation and editing but not tag deletion.) The update does not take effect immediately due to certain latency.
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
    }
}
