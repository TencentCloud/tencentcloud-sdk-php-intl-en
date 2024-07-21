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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster auto scaling configuration
 *
 * @method boolean getIsScaleDownEnabled() Obtain Whether to enable scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method void setIsScaleDownEnabled(boolean $IsScaleDownEnabled) Set Whether to enable scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method string getExpander() Obtain The scale-out method when there are multiple scaling groups. `random`: select a random scaling group. `most-pods`: choose the scaling group that can schedule the most pods. `least-waste`: select the scaling group that can ensure the fewest remaining resources after Pod scheduling.. The default value is `random`.)
Note: this field may return null, indicating that no valid value was found.
 * @method void setExpander(string $Expander) Set The scale-out method when there are multiple scaling groups. `random`: select a random scaling group. `most-pods`: choose the scaling group that can schedule the most pods. `least-waste`: select the scaling group that can ensure the fewest remaining resources after Pod scheduling.. The default value is `random`.)
Note: this field may return null, indicating that no valid value was found.
 * @method integer getMaxEmptyBulkDelete() Obtain Max concurrent scale-in volume
Note: this field may return null, indicating that no valid value was found.
 * @method void setMaxEmptyBulkDelete(integer $MaxEmptyBulkDelete) Set Max concurrent scale-in volume
Note: this field may return null, indicating that no valid value was found.
 * @method integer getScaleDownDelay() Obtain Number of minutes after cluster scale-out when the system starts judging whether to perform scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method void setScaleDownDelay(integer $ScaleDownDelay) Set Number of minutes after cluster scale-out when the system starts judging whether to perform scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method integer getScaleDownUnneededTime() Obtain Number of consecutive minutes of idleness after which the node is subject to scale-in (default value: 10)
Note: this field may return null, indicating that no valid value was found.
 * @method void setScaleDownUnneededTime(integer $ScaleDownUnneededTime) Set Number of consecutive minutes of idleness after which the node is subject to scale-in (default value: 10)
Note: this field may return null, indicating that no valid value was found.
 * @method integer getScaleDownUtilizationThreshold() Obtain Percentage of node resource usage below which the node is considered to be idle (default value: 50)
Note: this field may return null, indicating that no valid value was found.
 * @method void setScaleDownUtilizationThreshold(integer $ScaleDownUtilizationThreshold) Set Percentage of node resource usage below which the node is considered to be idle (default value: 50)
Note: this field may return null, indicating that no valid value was found.
 * @method boolean getSkipNodesWithLocalStorage() Obtain Do not scale in a node if it contains local storage Pods. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSkipNodesWithLocalStorage(boolean $SkipNodesWithLocalStorage) Set Do not scale in a node if it contains local storage Pods. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getSkipNodesWithSystemPods() Obtain Do not scale in a node if it contains Pods in the kube-system namespace that are not managed by DaemonSet. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSkipNodesWithSystemPods(boolean $SkipNodesWithSystemPods) Set Do not scale in a node if it contains Pods in the kube-system namespace that are not managed by DaemonSet. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getIgnoreDaemonSetsUtilization() Obtain Whether to ignore DaemonSet pods by default when calculating resource usage (default value: False: do not ignore)
Note: this field may return null, indicating that no valid value was found.
 * @method void setIgnoreDaemonSetsUtilization(boolean $IgnoreDaemonSetsUtilization) Set Whether to ignore DaemonSet pods by default when calculating resource usage (default value: False: do not ignore)
Note: this field may return null, indicating that no valid value was found.
 * @method integer getOkTotalUnreadyCount() Obtain Number at which CA health detection is triggered (default value: 3). After the number specified in OkTotalUnreadyCount is exceeded, CA will perform health detection.
Note: this field may return null, indicating that no valid value was found.
 * @method void setOkTotalUnreadyCount(integer $OkTotalUnreadyCount) Set Number at which CA health detection is triggered (default value: 3). After the number specified in OkTotalUnreadyCount is exceeded, CA will perform health detection.
Note: this field may return null, indicating that no valid value was found.
 * @method integer getMaxTotalUnreadyPercentage() Obtain Max percentage of unready nodes. After the max percentage is exceeded, CA will stop operation.
Note: this field may return null, indicating that no valid value was found.
 * @method void setMaxTotalUnreadyPercentage(integer $MaxTotalUnreadyPercentage) Set Max percentage of unready nodes. After the max percentage is exceeded, CA will stop operation.
Note: this field may return null, indicating that no valid value was found.
 * @method integer getScaleDownUnreadyTime() Obtain Amount of time before unready nodes become eligible for scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method void setScaleDownUnreadyTime(integer $ScaleDownUnreadyTime) Set Amount of time before unready nodes become eligible for scale-in
Note: this field may return null, indicating that no valid value was found.
 * @method integer getUnregisteredNodeRemovalTime() Obtain Waiting time before CA deletes nodes that are not registered in Kubernetes
Note: this field may return null, indicating that no valid value was found.
 * @method void setUnregisteredNodeRemovalTime(integer $UnregisteredNodeRemovalTime) Set Waiting time before CA deletes nodes that are not registered in Kubernetes
Note: this field may return null, indicating that no valid value was found.
 */
class ClusterAsGroupOption extends AbstractModel
{
    /**
     * @var boolean Whether to enable scale-in
Note: this field may return null, indicating that no valid value was found.
     */
    public $IsScaleDownEnabled;

    /**
     * @var string The scale-out method when there are multiple scaling groups. `random`: select a random scaling group. `most-pods`: choose the scaling group that can schedule the most pods. `least-waste`: select the scaling group that can ensure the fewest remaining resources after Pod scheduling.. The default value is `random`.)
Note: this field may return null, indicating that no valid value was found.
     */
    public $Expander;

    /**
     * @var integer Max concurrent scale-in volume
Note: this field may return null, indicating that no valid value was found.
     */
    public $MaxEmptyBulkDelete;

    /**
     * @var integer Number of minutes after cluster scale-out when the system starts judging whether to perform scale-in
Note: this field may return null, indicating that no valid value was found.
     */
    public $ScaleDownDelay;

    /**
     * @var integer Number of consecutive minutes of idleness after which the node is subject to scale-in (default value: 10)
Note: this field may return null, indicating that no valid value was found.
     */
    public $ScaleDownUnneededTime;

    /**
     * @var integer Percentage of node resource usage below which the node is considered to be idle (default value: 50)
Note: this field may return null, indicating that no valid value was found.
     */
    public $ScaleDownUtilizationThreshold;

    /**
     * @var boolean Do not scale in a node if it contains local storage Pods. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SkipNodesWithLocalStorage;

    /**
     * @var boolean Do not scale in a node if it contains Pods in the kube-system namespace that are not managed by DaemonSet. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SkipNodesWithSystemPods;

    /**
     * @var boolean Whether to ignore DaemonSet pods by default when calculating resource usage (default value: False: do not ignore)
Note: this field may return null, indicating that no valid value was found.
     */
    public $IgnoreDaemonSetsUtilization;

    /**
     * @var integer Number at which CA health detection is triggered (default value: 3). After the number specified in OkTotalUnreadyCount is exceeded, CA will perform health detection.
Note: this field may return null, indicating that no valid value was found.
     */
    public $OkTotalUnreadyCount;

    /**
     * @var integer Max percentage of unready nodes. After the max percentage is exceeded, CA will stop operation.
Note: this field may return null, indicating that no valid value was found.
     */
    public $MaxTotalUnreadyPercentage;

    /**
     * @var integer Amount of time before unready nodes become eligible for scale-in
Note: this field may return null, indicating that no valid value was found.
     */
    public $ScaleDownUnreadyTime;

    /**
     * @var integer Waiting time before CA deletes nodes that are not registered in Kubernetes
Note: this field may return null, indicating that no valid value was found.
     */
    public $UnregisteredNodeRemovalTime;

    /**
     * @param boolean $IsScaleDownEnabled Whether to enable scale-in
Note: this field may return null, indicating that no valid value was found.
     * @param string $Expander The scale-out method when there are multiple scaling groups. `random`: select a random scaling group. `most-pods`: choose the scaling group that can schedule the most pods. `least-waste`: select the scaling group that can ensure the fewest remaining resources after Pod scheduling.. The default value is `random`.)
Note: this field may return null, indicating that no valid value was found.
     * @param integer $MaxEmptyBulkDelete Max concurrent scale-in volume
Note: this field may return null, indicating that no valid value was found.
     * @param integer $ScaleDownDelay Number of minutes after cluster scale-out when the system starts judging whether to perform scale-in
Note: this field may return null, indicating that no valid value was found.
     * @param integer $ScaleDownUnneededTime Number of consecutive minutes of idleness after which the node is subject to scale-in (default value: 10)
Note: this field may return null, indicating that no valid value was found.
     * @param integer $ScaleDownUtilizationThreshold Percentage of node resource usage below which the node is considered to be idle (default value: 50)
Note: this field may return null, indicating that no valid value was found.
     * @param boolean $SkipNodesWithLocalStorage Do not scale in a node if it contains local storage Pods. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $SkipNodesWithSystemPods Do not scale in a node if it contains Pods in the kube-system namespace that are not managed by DaemonSet. Default: `true`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $IgnoreDaemonSetsUtilization Whether to ignore DaemonSet pods by default when calculating resource usage (default value: False: do not ignore)
Note: this field may return null, indicating that no valid value was found.
     * @param integer $OkTotalUnreadyCount Number at which CA health detection is triggered (default value: 3). After the number specified in OkTotalUnreadyCount is exceeded, CA will perform health detection.
Note: this field may return null, indicating that no valid value was found.
     * @param integer $MaxTotalUnreadyPercentage Max percentage of unready nodes. After the max percentage is exceeded, CA will stop operation.
Note: this field may return null, indicating that no valid value was found.
     * @param integer $ScaleDownUnreadyTime Amount of time before unready nodes become eligible for scale-in
Note: this field may return null, indicating that no valid value was found.
     * @param integer $UnregisteredNodeRemovalTime Waiting time before CA deletes nodes that are not registered in Kubernetes
Note: this field may return null, indicating that no valid value was found.
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
        if (array_key_exists("IsScaleDownEnabled",$param) and $param["IsScaleDownEnabled"] !== null) {
            $this->IsScaleDownEnabled = $param["IsScaleDownEnabled"];
        }

        if (array_key_exists("Expander",$param) and $param["Expander"] !== null) {
            $this->Expander = $param["Expander"];
        }

        if (array_key_exists("MaxEmptyBulkDelete",$param) and $param["MaxEmptyBulkDelete"] !== null) {
            $this->MaxEmptyBulkDelete = $param["MaxEmptyBulkDelete"];
        }

        if (array_key_exists("ScaleDownDelay",$param) and $param["ScaleDownDelay"] !== null) {
            $this->ScaleDownDelay = $param["ScaleDownDelay"];
        }

        if (array_key_exists("ScaleDownUnneededTime",$param) and $param["ScaleDownUnneededTime"] !== null) {
            $this->ScaleDownUnneededTime = $param["ScaleDownUnneededTime"];
        }

        if (array_key_exists("ScaleDownUtilizationThreshold",$param) and $param["ScaleDownUtilizationThreshold"] !== null) {
            $this->ScaleDownUtilizationThreshold = $param["ScaleDownUtilizationThreshold"];
        }

        if (array_key_exists("SkipNodesWithLocalStorage",$param) and $param["SkipNodesWithLocalStorage"] !== null) {
            $this->SkipNodesWithLocalStorage = $param["SkipNodesWithLocalStorage"];
        }

        if (array_key_exists("SkipNodesWithSystemPods",$param) and $param["SkipNodesWithSystemPods"] !== null) {
            $this->SkipNodesWithSystemPods = $param["SkipNodesWithSystemPods"];
        }

        if (array_key_exists("IgnoreDaemonSetsUtilization",$param) and $param["IgnoreDaemonSetsUtilization"] !== null) {
            $this->IgnoreDaemonSetsUtilization = $param["IgnoreDaemonSetsUtilization"];
        }

        if (array_key_exists("OkTotalUnreadyCount",$param) and $param["OkTotalUnreadyCount"] !== null) {
            $this->OkTotalUnreadyCount = $param["OkTotalUnreadyCount"];
        }

        if (array_key_exists("MaxTotalUnreadyPercentage",$param) and $param["MaxTotalUnreadyPercentage"] !== null) {
            $this->MaxTotalUnreadyPercentage = $param["MaxTotalUnreadyPercentage"];
        }

        if (array_key_exists("ScaleDownUnreadyTime",$param) and $param["ScaleDownUnreadyTime"] !== null) {
            $this->ScaleDownUnreadyTime = $param["ScaleDownUnreadyTime"];
        }

        if (array_key_exists("UnregisteredNodeRemovalTime",$param) and $param["UnregisteredNodeRemovalTime"] !== null) {
            $this->UnregisteredNodeRemovalTime = $param["UnregisteredNodeRemovalTime"];
        }
    }
}
