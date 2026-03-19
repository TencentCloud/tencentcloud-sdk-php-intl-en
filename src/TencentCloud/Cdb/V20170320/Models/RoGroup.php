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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Read-only group parameter
 *
 * @method string getRoGroupMode() Obtain <p>Read-only group mode. Available values are: alone-automatic allocation by the system; allinone-create a read-only group; join-use an existing read-only group.</p>
 * @method void setRoGroupMode(string $RoGroupMode) Set <p>Read-only group mode. Available values are: alone-automatic allocation by the system; allinone-create a read-only group; join-use an existing read-only group.</p>
 * @method string getRoGroupId() Obtain <p>Read-only group ID.<br>Note: If the data structure is used during instance purchase, this item is required only when the read-only group mode is set to join.</p>
 * @method void setRoGroupId(string $RoGroupId) Set <p>Read-only group ID.<br>Note: If the data structure is used during instance purchase, this item is required only when the read-only group mode is set to join.</p>
 * @method string getRoGroupName() Obtain <p>Read-only group name.</p>
 * @method void setRoGroupName(string $RoGroupName) Set <p>Read-only group name.</p>
 * @method integer getRoOfflineDelay() Obtain <p>Whether to enable the feature to isolate an instance that exceeds the latency threshold. After enabling this feature, if the delay between a read-only instance and the primary instance exceeds the delay threshold, the read-only instance will be isolated. Available values: 1-enable; 0-disable.</p>
 * @method void setRoOfflineDelay(integer $RoOfflineDelay) Set <p>Whether to enable the feature to isolate an instance that exceeds the latency threshold. After enabling this feature, if the delay between a read-only instance and the primary instance exceeds the delay threshold, the read-only instance will be isolated. Available values: 1-enable; 0-disable.</p>
 * @method integer getRoMaxDelayTime() Obtain <p>Delay threshold, in seconds. Value range: 1–10000. The value is an integer.</p>
 * @method void setRoMaxDelayTime(integer $RoMaxDelayTime) Set <p>Delay threshold, in seconds. Value range: 1–10000. The value is an integer.</p>
 * @method integer getMinRoInGroup() Obtain <p>Minimum number of instances to retain. If the number of read-only instances purchased is less than the set number, removal will not occur.</p>
 * @method void setMinRoInGroup(integer $MinRoInGroup) Set <p>Minimum number of instances to retain. If the number of read-only instances purchased is less than the set number, removal will not occur.</p>
 * @method string getWeightMode() Obtain <p>Read-write weight allocation mode. Available values: system-automatic allocation by the system; custom-customization.</p>
 * @method void setWeightMode(string $WeightMode) Set <p>Read-write weight allocation mode. Available values: system-automatic allocation by the system; custom-customization.</p>
 * @method integer getWeight() Obtain <p>This field is deprecated and meaningless. To view the weight of a read-only instance, check the Weight value in the RoInstances field.</p>
 * @method void setWeight(integer $Weight) Set <p>This field is deprecated and meaningless. To view the weight of a read-only instance, check the Weight value in the RoInstances field.</p>
 * @method array getRoInstances() Obtain <p>Details of read-only instances in the read-only group.</p>
 * @method void setRoInstances(array $RoInstances) Set <p>Details of read-only instances in the read-only group.</p>
 * @method string getVip() Obtain <p>Private IP address of the read-only group.</p>
 * @method void setVip(string $Vip) Set <p>Private IP address of the read-only group.</p>
 * @method integer getVport() Obtain <p>Private network port number of the read-only group.</p>
 * @method void setVport(integer $Vport) Set <p>Private network port number of the read-only group.</p>
 * @method string getUniqVpcId() Obtain <p>VPC ID.</p>
 * @method void setUniqVpcId(string $UniqVpcId) Set <p>VPC ID.</p>
 * @method string getUniqSubnetId() Obtain <p>Subnet ID.</p>
 * @method void setUniqSubnetId(string $UniqSubnetId) Set <p>Subnet ID.</p>
 * @method string getRoGroupRegion() Obtain <p>Region of the read-only group.</p>
 * @method void setRoGroupRegion(string $RoGroupRegion) Set <p>Region of the read-only group.</p>
 * @method string getRoGroupZone() Obtain <p>AZ of the read-only group.</p>
 * @method void setRoGroupZone(string $RoGroupZone) Set <p>AZ of the read-only group.</p>
 * @method integer getDelayReplicationTime() Obtain <p>Replication delay time, in seconds. Value range: 1–259200. The value is an integer.</p>
 * @method void setDelayReplicationTime(integer $DelayReplicationTime) Set <p>Replication delay time, in seconds. Value range: 1–259200. The value is an integer.</p>
 */
class RoGroup extends AbstractModel
{
    /**
     * @var string <p>Read-only group mode. Available values are: alone-automatic allocation by the system; allinone-create a read-only group; join-use an existing read-only group.</p>
     */
    public $RoGroupMode;

    /**
     * @var string <p>Read-only group ID.<br>Note: If the data structure is used during instance purchase, this item is required only when the read-only group mode is set to join.</p>
     */
    public $RoGroupId;

    /**
     * @var string <p>Read-only group name.</p>
     */
    public $RoGroupName;

    /**
     * @var integer <p>Whether to enable the feature to isolate an instance that exceeds the latency threshold. After enabling this feature, if the delay between a read-only instance and the primary instance exceeds the delay threshold, the read-only instance will be isolated. Available values: 1-enable; 0-disable.</p>
     */
    public $RoOfflineDelay;

    /**
     * @var integer <p>Delay threshold, in seconds. Value range: 1–10000. The value is an integer.</p>
     */
    public $RoMaxDelayTime;

    /**
     * @var integer <p>Minimum number of instances to retain. If the number of read-only instances purchased is less than the set number, removal will not occur.</p>
     */
    public $MinRoInGroup;

    /**
     * @var string <p>Read-write weight allocation mode. Available values: system-automatic allocation by the system; custom-customization.</p>
     */
    public $WeightMode;

    /**
     * @var integer <p>This field is deprecated and meaningless. To view the weight of a read-only instance, check the Weight value in the RoInstances field.</p>
     */
    public $Weight;

    /**
     * @var array <p>Details of read-only instances in the read-only group.</p>
     */
    public $RoInstances;

    /**
     * @var string <p>Private IP address of the read-only group.</p>
     */
    public $Vip;

    /**
     * @var integer <p>Private network port number of the read-only group.</p>
     */
    public $Vport;

    /**
     * @var string <p>VPC ID.</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>Subnet ID.</p>
     */
    public $UniqSubnetId;

    /**
     * @var string <p>Region of the read-only group.</p>
     */
    public $RoGroupRegion;

    /**
     * @var string <p>AZ of the read-only group.</p>
     */
    public $RoGroupZone;

    /**
     * @var integer <p>Replication delay time, in seconds. Value range: 1–259200. The value is an integer.</p>
     */
    public $DelayReplicationTime;

    /**
     * @param string $RoGroupMode <p>Read-only group mode. Available values are: alone-automatic allocation by the system; allinone-create a read-only group; join-use an existing read-only group.</p>
     * @param string $RoGroupId <p>Read-only group ID.<br>Note: If the data structure is used during instance purchase, this item is required only when the read-only group mode is set to join.</p>
     * @param string $RoGroupName <p>Read-only group name.</p>
     * @param integer $RoOfflineDelay <p>Whether to enable the feature to isolate an instance that exceeds the latency threshold. After enabling this feature, if the delay between a read-only instance and the primary instance exceeds the delay threshold, the read-only instance will be isolated. Available values: 1-enable; 0-disable.</p>
     * @param integer $RoMaxDelayTime <p>Delay threshold, in seconds. Value range: 1–10000. The value is an integer.</p>
     * @param integer $MinRoInGroup <p>Minimum number of instances to retain. If the number of read-only instances purchased is less than the set number, removal will not occur.</p>
     * @param string $WeightMode <p>Read-write weight allocation mode. Available values: system-automatic allocation by the system; custom-customization.</p>
     * @param integer $Weight <p>This field is deprecated and meaningless. To view the weight of a read-only instance, check the Weight value in the RoInstances field.</p>
     * @param array $RoInstances <p>Details of read-only instances in the read-only group.</p>
     * @param string $Vip <p>Private IP address of the read-only group.</p>
     * @param integer $Vport <p>Private network port number of the read-only group.</p>
     * @param string $UniqVpcId <p>VPC ID.</p>
     * @param string $UniqSubnetId <p>Subnet ID.</p>
     * @param string $RoGroupRegion <p>Region of the read-only group.</p>
     * @param string $RoGroupZone <p>AZ of the read-only group.</p>
     * @param integer $DelayReplicationTime <p>Replication delay time, in seconds. Value range: 1–259200. The value is an integer.</p>
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
