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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka instance information
 *
 * @method string getInstanceID() Obtain Instance ID
 * @method void setInstanceID(string $InstanceID) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getKafkaVersion() Obtain Version No.
 * @method void setKafkaVersion(string $KafkaVersion) Set Version No.
 * @method array getTopicList() Obtain Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set Topic list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getRouteList() Obtain Routing List
 * @method void setRouteList(array $RouteList) Set Routing List
 * @method integer getDiskSize() Obtain Disk capacity (unit: GB)
 * @method void setDiskSize(integer $DiskSize) Set Disk capacity (unit: GB)
 * @method string getVpcId() Obtain vpcId. Leaving it blank indicates a basic network.
 * @method void setVpcId(string $VpcId) Set vpcId. Leaving it blank indicates a basic network.
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getHealthy() Obtain Status: 1 - healthy; 2 - alarm; 3 - abnormal instance status
 * @method void setHealthy(integer $Healthy) Set Status: 1 - healthy; 2 - alarm; 3 - abnormal instance status
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getAz() Obtain Region
 * @method void setAz(string $Az) Set Region
 * @method integer getBandwidth() Obtain Instance bandwidth (unit: Mbps)
 * @method void setBandwidth(integer $Bandwidth) Set Instance bandwidth (unit: Mbps)
 */
class CKafkaInstanceInfo extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceID;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Version No.
     */
    public $KafkaVersion;

    /**
     * @var array Topic list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @var array Routing List
     */
    public $RouteList;

    /**
     * @var integer Disk capacity (unit: GB)
     */
    public $DiskSize;

    /**
     * @var string vpcId. Leaving it blank indicates a basic network.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Status: 1 - healthy; 2 - alarm; 3 - abnormal instance status
     */
    public $Healthy;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Region
     */
    public $Az;

    /**
     * @var integer Instance bandwidth (unit: Mbps)
     */
    public $Bandwidth;

    /**
     * @param string $InstanceID Instance ID
     * @param string $InstanceName Instance name
     * @param string $KafkaVersion Version No.
     * @param array $TopicList Topic list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $RouteList Routing List
     * @param integer $DiskSize Disk capacity (unit: GB)
     * @param string $VpcId vpcId. Leaving it blank indicates a basic network.
     * @param string $SubnetId Subnet ID
     * @param integer $Healthy Status: 1 - healthy; 2 - alarm; 3 - abnormal instance status
     * @param string $Zone Availability zone
     * @param string $Az Region
     * @param integer $Bandwidth Instance bandwidth (unit: Mbps)
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new CKafkaTopicInfo();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new CKafkaRouteInfo();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            $this->Az = $param["Az"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
