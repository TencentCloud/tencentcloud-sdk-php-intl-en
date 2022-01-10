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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RO group configuration information.
 *
 * @method string getRoGroupName() Obtain RO group name.
 * @method void setRoGroupName(string $RoGroupName) Set RO group name.
 * @method integer getRoMaxDelayTime() Obtain Maximum delay threshold for RO instances in seconds. Minimum value: 1. Please note that this value will take effect only if an instance removal policy is enabled in the RO group.
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) Set Maximum delay threshold for RO instances in seconds. Minimum value: 1. Please note that this value will take effect only if an instance removal policy is enabled in the RO group.
 * @method integer getRoOfflineDelay() Obtain Whether to enable instance removal. Valid values: 1 (enabled), 0 (not enabled). Please note that if instance removal is enabled, the delay threshold parameter (`RoMaxDelayTime`) must be set.
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) Set Whether to enable instance removal. Valid values: 1 (enabled), 0 (not enabled). Please note that if instance removal is enabled, the delay threshold parameter (`RoMaxDelayTime`) must be set.
 * @method integer getMinRoInGroup() Obtain Minimum number of instances to be retained, which can be set to any value less than or equal to the number of RO instances in the RO group. Please note that if this value is set to be greater than the number of RO instances, no removal will be performed, and if it is set to 0, all instances with an excessive delay will be removed.
 * @method void setMinRoInGroup(integer $MinRoInGroup) Set Minimum number of instances to be retained, which can be set to any value less than or equal to the number of RO instances in the RO group. Please note that if this value is set to be greater than the number of RO instances, no removal will be performed, and if it is set to 0, all instances with an excessive delay will be removed.
 * @method string getWeightMode() Obtain Weighting mode. Supported values include `system` (automatically assigned by the system) and `custom` (defined by user). Please note that if the `custom` mode is selected, the RO instance weight configuration parameter (RoWeightValues) must be set.
 * @method void setWeightMode(string $WeightMode) Set Weighting mode. Supported values include `system` (automatically assigned by the system) and `custom` (defined by user). Please note that if the `custom` mode is selected, the RO instance weight configuration parameter (RoWeightValues) must be set.
 * @method integer getReplicationDelayTime() Obtain Replication delay.
 * @method void setReplicationDelayTime(integer $ReplicationDelayTime) Set Replication delay.
 */
class RoGroupAttr extends AbstractModel
{
    /**
     * @var string RO group name.
     */
    public $RoGroupName;

    /**
     * @var integer Maximum delay threshold for RO instances in seconds. Minimum value: 1. Please note that this value will take effect only if an instance removal policy is enabled in the RO group.
     */
    public $RoMaxDelayTime;

    /**
     * @var integer Whether to enable instance removal. Valid values: 1 (enabled), 0 (not enabled). Please note that if instance removal is enabled, the delay threshold parameter (`RoMaxDelayTime`) must be set.
     */
    public $RoOfflineDelay;

    /**
     * @var integer Minimum number of instances to be retained, which can be set to any value less than or equal to the number of RO instances in the RO group. Please note that if this value is set to be greater than the number of RO instances, no removal will be performed, and if it is set to 0, all instances with an excessive delay will be removed.
     */
    public $MinRoInGroup;

    /**
     * @var string Weighting mode. Supported values include `system` (automatically assigned by the system) and `custom` (defined by user). Please note that if the `custom` mode is selected, the RO instance weight configuration parameter (RoWeightValues) must be set.
     */
    public $WeightMode;

    /**
     * @var integer Replication delay.
     */
    public $ReplicationDelayTime;

    /**
     * @param string $RoGroupName RO group name.
     * @param integer $RoMaxDelayTime Maximum delay threshold for RO instances in seconds. Minimum value: 1. Please note that this value will take effect only if an instance removal policy is enabled in the RO group.
     * @param integer $RoOfflineDelay Whether to enable instance removal. Valid values: 1 (enabled), 0 (not enabled). Please note that if instance removal is enabled, the delay threshold parameter (`RoMaxDelayTime`) must be set.
     * @param integer $MinRoInGroup Minimum number of instances to be retained, which can be set to any value less than or equal to the number of RO instances in the RO group. Please note that if this value is set to be greater than the number of RO instances, no removal will be performed, and if it is set to 0, all instances with an excessive delay will be removed.
     * @param string $WeightMode Weighting mode. Supported values include `system` (automatically assigned by the system) and `custom` (defined by user). Please note that if the `custom` mode is selected, the RO instance weight configuration parameter (RoWeightValues) must be set.
     * @param integer $ReplicationDelayTime Replication delay.
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
        if (array_key_exists("RoGroupName",$param) and $param["RoGroupName"] !== null) {
            $this->RoGroupName = $param["RoGroupName"];
        }

        if (array_key_exists("RoMaxDelayTime",$param) and $param["RoMaxDelayTime"] !== null) {
            $this->RoMaxDelayTime = $param["RoMaxDelayTime"];
        }

        if (array_key_exists("RoOfflineDelay",$param) and $param["RoOfflineDelay"] !== null) {
            $this->RoOfflineDelay = $param["RoOfflineDelay"];
        }

        if (array_key_exists("MinRoInGroup",$param) and $param["MinRoInGroup"] !== null) {
            $this->MinRoInGroup = $param["MinRoInGroup"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("ReplicationDelayTime",$param) and $param["ReplicationDelayTime"] !== null) {
            $this->ReplicationDelayTime = $param["ReplicationDelayTime"];
        }
    }
}
