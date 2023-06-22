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
 * Read-only group parameter
 *
 * @method string getRoGroupMode() Obtain Read-only group mode. Valid values: `alone` (the system assigns a read-only group automatically), `allinone` (a new read-only group will be created), `join` (an existing read-only group will be used).
 * @method void setRoGroupMode(string $RoGroupMode) Set Read-only group mode. Valid values: `alone` (the system assigns a read-only group automatically), `allinone` (a new read-only group will be created), `join` (an existing read-only group will be used).
 * @method string getRoGroupId() Obtain Read-only group ID.
 * @method void setRoGroupId(string $RoGroupId) Set Read-only group ID.
 * @method string getRoGroupName() Obtain Read-only group name.
 * @method void setRoGroupName(string $RoGroupName) Set Read-only group name.
 * @method integer getRoOfflineDelay() Obtain Whether to enable the function of isolating an instance that exceeds the latency threshold. If it is enabled, when the latency between the read-only instance and the primary instance exceeds the latency threshold, the read-only instance will be isolated. Valid values: 1 (enabled), 0 (not enabled)
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) Set Whether to enable the function of isolating an instance that exceeds the latency threshold. If it is enabled, when the latency between the read-only instance and the primary instance exceeds the latency threshold, the read-only instance will be isolated. Valid values: 1 (enabled), 0 (not enabled)
 * @method integer getRoMaxDelayTime() Obtain Latency threshold
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) Set Latency threshold
 * @method integer getMinRoInGroup() Obtain Minimum number of instances to be retained. If the number of the purchased read-only instances is smaller than the set value, they will not be removed.
 * @method void setMinRoInGroup(integer $MinRoInGroup) Set Minimum number of instances to be retained. If the number of the purchased read-only instances is smaller than the set value, they will not be removed.
 * @method string getWeightMode() Obtain Read/write weight distribution mode. Valid values: `system` (weights are assigned by the system automatically), `custom` (weights are customized)
 * @method void setWeightMode(string $WeightMode) Set Read/write weight distribution mode. Valid values: `system` (weights are assigned by the system automatically), `custom` (weights are customized)
 * @method integer getWeight() Obtain This field has been disused. To view the weight of a read-only instance, check the `Weight` value in the `RoInstances` field.
 * @method void setWeight(integer $Weight) Set This field has been disused. To view the weight of a read-only instance, check the `Weight` value in the `RoInstances` field.
 * @method array getRoInstances() Obtain Details of read-only instances in read-only group
 * @method void setRoInstances(array $RoInstances) Set Details of read-only instances in read-only group
 * @method string getVip() Obtain Private IP of read-only group.
 * @method void setVip(string $Vip) Set Private IP of read-only group.
 * @method integer getVport() Obtain Private network port number of read-only group.
 * @method void setVport(integer $Vport) Set Private network port number of read-only group.
 * @method string getUniqVpcId() Obtain VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getUniqSubnetId() Obtain Subnet ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRoGroupRegion() Obtain Read-only group region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRoGroupRegion(string $RoGroupRegion) Set Read-only group region.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRoGroupZone() Obtain Read-only group AZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRoGroupZone(string $RoGroupZone) Set Read-only group AZ.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDelayReplicationTime() Obtain Replication delay.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDelayReplicationTime(integer $DelayReplicationTime) Set Replication delay.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class RoGroup extends AbstractModel
{
    /**
     * @var string Read-only group mode. Valid values: `alone` (the system assigns a read-only group automatically), `allinone` (a new read-only group will be created), `join` (an existing read-only group will be used).
     */
    public $RoGroupMode;

    /**
     * @var string Read-only group ID.
     */
    public $RoGroupId;

    /**
     * @var string Read-only group name.
     */
    public $RoGroupName;

    /**
     * @var integer Whether to enable the function of isolating an instance that exceeds the latency threshold. If it is enabled, when the latency between the read-only instance and the primary instance exceeds the latency threshold, the read-only instance will be isolated. Valid values: 1 (enabled), 0 (not enabled)
     */
    public $RoOfflineDelay;

    /**
     * @var integer Latency threshold
     */
    public $RoMaxDelayTime;

    /**
     * @var integer Minimum number of instances to be retained. If the number of the purchased read-only instances is smaller than the set value, they will not be removed.
     */
    public $MinRoInGroup;

    /**
     * @var string Read/write weight distribution mode. Valid values: `system` (weights are assigned by the system automatically), `custom` (weights are customized)
     */
    public $WeightMode;

    /**
     * @var integer This field has been disused. To view the weight of a read-only instance, check the `Weight` value in the `RoInstances` field.
     */
    public $Weight;

    /**
     * @var array Details of read-only instances in read-only group
     */
    public $RoInstances;

    /**
     * @var string Private IP of read-only group.
     */
    public $Vip;

    /**
     * @var integer Private network port number of read-only group.
     */
    public $Vport;

    /**
     * @var string VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UniqVpcId;

    /**
     * @var string Subnet ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UniqSubnetId;

    /**
     * @var string Read-only group region.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RoGroupRegion;

    /**
     * @var string Read-only group AZ.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RoGroupZone;

    /**
     * @var integer Replication delay.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DelayReplicationTime;

    /**
     * @param string $RoGroupMode Read-only group mode. Valid values: `alone` (the system assigns a read-only group automatically), `allinone` (a new read-only group will be created), `join` (an existing read-only group will be used).
     * @param string $RoGroupId Read-only group ID.
     * @param string $RoGroupName Read-only group name.
     * @param integer $RoOfflineDelay Whether to enable the function of isolating an instance that exceeds the latency threshold. If it is enabled, when the latency between the read-only instance and the primary instance exceeds the latency threshold, the read-only instance will be isolated. Valid values: 1 (enabled), 0 (not enabled)
     * @param integer $RoMaxDelayTime Latency threshold
     * @param integer $MinRoInGroup Minimum number of instances to be retained. If the number of the purchased read-only instances is smaller than the set value, they will not be removed.
     * @param string $WeightMode Read/write weight distribution mode. Valid values: `system` (weights are assigned by the system automatically), `custom` (weights are customized)
     * @param integer $Weight This field has been disused. To view the weight of a read-only instance, check the `Weight` value in the `RoInstances` field.
     * @param array $RoInstances Details of read-only instances in read-only group
     * @param string $Vip Private IP of read-only group.
     * @param integer $Vport Private network port number of read-only group.
     * @param string $UniqVpcId VPC ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $UniqSubnetId Subnet ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RoGroupRegion Read-only group region.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RoGroupZone Read-only group AZ.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $DelayReplicationTime Replication delay.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("RoGroupMode",$param) and $param["RoGroupMode"] !== null) {
            $this->RoGroupMode = $param["RoGroupMode"];
        }

        if (array_key_exists("RoGroupId",$param) and $param["RoGroupId"] !== null) {
            $this->RoGroupId = $param["RoGroupId"];
        }

        if (array_key_exists("RoGroupName",$param) and $param["RoGroupName"] !== null) {
            $this->RoGroupName = $param["RoGroupName"];
        }

        if (array_key_exists("RoOfflineDelay",$param) and $param["RoOfflineDelay"] !== null) {
            $this->RoOfflineDelay = $param["RoOfflineDelay"];
        }

        if (array_key_exists("RoMaxDelayTime",$param) and $param["RoMaxDelayTime"] !== null) {
            $this->RoMaxDelayTime = $param["RoMaxDelayTime"];
        }

        if (array_key_exists("MinRoInGroup",$param) and $param["MinRoInGroup"] !== null) {
            $this->MinRoInGroup = $param["MinRoInGroup"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("RoInstances",$param) and $param["RoInstances"] !== null) {
            $this->RoInstances = [];
            foreach ($param["RoInstances"] as $key => $value){
                $obj = new RoInstanceInfo();
                $obj->deserialize($value);
                array_push($this->RoInstances, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("RoGroupRegion",$param) and $param["RoGroupRegion"] !== null) {
            $this->RoGroupRegion = $param["RoGroupRegion"];
        }

        if (array_key_exists("RoGroupZone",$param) and $param["RoGroupZone"] !== null) {
            $this->RoGroupZone = $param["RoGroupZone"];
        }

        if (array_key_exists("DelayReplicationTime",$param) and $param["DelayReplicationTime"] !== null) {
            $this->DelayReplicationTime = $param["DelayReplicationTime"];
        }
    }
}
