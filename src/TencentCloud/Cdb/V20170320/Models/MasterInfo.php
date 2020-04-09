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
 * Master instance information
 *
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getZone() Obtain AZ information
 * @method void setZone(string $Zone) Set AZ information
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getResourceId() Obtain Long instance ID
 * @method void setResourceId(string $ResourceId) Set Long instance ID
 * @method integer getStatus() Obtain Instance status
 * @method void setStatus(integer $Status) Set Instance status
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getInstanceType() Obtain Instance type
 * @method void setInstanceType(integer $InstanceType) Set Instance type
 * @method integer getTaskStatus() Obtain Task status
 * @method void setTaskStatus(integer $TaskStatus) Set Task status
 * @method integer getMemory() Obtain Memory capacity
 * @method void setMemory(integer $Memory) Set Memory capacity
 * @method integer getVolume() Obtain Disk capacity
 * @method void setVolume(integer $Volume) Set Disk capacity
 * @method string getDeviceType() Obtain Instance model
 * @method void setDeviceType(string $DeviceType) Set Instance model
 * @method integer getQps() Obtain Queries per second
 * @method void setQps(integer $Qps) Set Queries per second
 * @method integer getVpcId() Obtain VPC ID
 * @method void setVpcId(integer $VpcId) Set VPC ID
 * @method integer getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(integer $SubnetId) Set Subnet ID
 * @method string getExClusterId() Obtain Dedicated cluster ID
 * @method void setExClusterId(string $ExClusterId) Set Dedicated cluster ID
 * @method string getExClusterName() Obtain Dedicated cluster name
 * @method void setExClusterName(string $ExClusterName) Set Dedicated cluster name
 */
class MasterInfo extends AbstractModel
{
    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string AZ information
     */
    public $Zone;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Long instance ID
     */
    public $ResourceId;

    /**
     * @var integer Instance status
     */
    public $Status;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Instance type
     */
    public $InstanceType;

    /**
     * @var integer Task status
     */
    public $TaskStatus;

    /**
     * @var integer Memory capacity
     */
    public $Memory;

    /**
     * @var integer Disk capacity
     */
    public $Volume;

    /**
     * @var string Instance model
     */
    public $DeviceType;

    /**
     * @var integer Queries per second
     */
    public $Qps;

    /**
     * @var integer VPC ID
     */
    public $VpcId;

    /**
     * @var integer Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Dedicated cluster ID
     */
    public $ExClusterId;

    /**
     * @var string Dedicated cluster name
     */
    public $ExClusterName;

    /**
     * @param string $Region Region information
     * @param integer $RegionId Region ID
     * @param integer $ZoneId AZ ID
     * @param string $Zone AZ information
     * @param string $InstanceId Instance ID
     * @param string $ResourceId Long instance ID
     * @param integer $Status Instance status
     * @param string $InstanceName Instance name
     * @param integer $InstanceType Instance type
     * @param integer $TaskStatus Task status
     * @param integer $Memory Memory capacity
     * @param integer $Volume Disk capacity
     * @param string $DeviceType Instance model
     * @param integer $Qps Queries per second
     * @param integer $VpcId VPC ID
     * @param integer $SubnetId Subnet ID
     * @param string $ExClusterId Dedicated cluster ID
     * @param string $ExClusterName Dedicated cluster name
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ExClusterId",$param) and $param["ExClusterId"] !== null) {
            $this->ExClusterId = $param["ExClusterId"];
        }

        if (array_key_exists("ExClusterName",$param) and $param["ExClusterName"] !== null) {
            $this->ExClusterName = $param["ExClusterName"];
        }
    }
}
