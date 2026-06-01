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
 * Master instance information
 *
 * @method string getRegion() Obtain <p>Regional information</p>
 * @method void setRegion(string $Region) Set <p>Regional information</p>
 * @method integer getRegionId() Obtain <p>Region ID</p>
 * @method void setRegionId(integer $RegionId) Set <p>Region ID</p>
 * @method integer getZoneId() Obtain <p>Availability zone ID.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Availability zone ID.</p>
 * @method string getZone() Obtain <p>AZ information</p>
 * @method void setZone(string $Zone) Set <p>AZ information</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getResourceId() Obtain <p>Instance long ID</p>
 * @method void setResourceId(string $ResourceId) Set <p>Instance long ID</p>
 * @method integer getStatus() Obtain <p>Instance status</p>
 * @method void setStatus(integer $Status) Set <p>Instance status</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method integer getInstanceType() Obtain <p>Instance type</p>
 * @method void setInstanceType(integer $InstanceType) Set <p>Instance type</p>
 * @method integer getTaskStatus() Obtain <p>Task status.</p>
 * @method void setTaskStatus(integer $TaskStatus) Set <p>Task status.</p>
 * @method integer getMemory() Obtain <p>Memory capacity</p>
 * @method void setMemory(integer $Memory) Set <p>Memory capacity</p>
 * @method integer getVolume() Obtain <p>Disk capacity</p>
 * @method void setVolume(integer $Volume) Set <p>Disk capacity</p>
 * @method string getDeviceType() Obtain <p>Instance model</p>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance model</p>
 * @method integer getQps() Obtain <p>Queries per second.</p>
 * @method void setQps(integer $Qps) Set <p>Queries per second.</p>
 * @method integer getVpcId() Obtain <p>VPC ID</p>
 * @method void setVpcId(integer $VpcId) Set <p>VPC ID</p>
 * @method integer getSubnetId() Obtain <p>subnet ID</p>
 * @method void setSubnetId(integer $SubnetId) Set <p>subnet ID</p>
 * @method string getExClusterId() Obtain <p>Dedicated cluster ID</p>
 * @method void setExClusterId(string $ExClusterId) Set <p>Dedicated cluster ID</p>
 * @method string getExClusterName() Obtain <p>Dedicated cluster name</p>
 * @method void setExClusterName(string $ExClusterName) Set <p>Dedicated cluster name</p>
 */
class MasterInfo extends AbstractModel
{
    /**
     * @var string <p>Regional information</p>
     */
    public $Region;

    /**
     * @var integer <p>Region ID</p>
     */
    public $RegionId;

    /**
     * @var integer <p>Availability zone ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>AZ information</p>
     */
    public $Zone;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance long ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>Instance status</p>
     */
    public $Status;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>Instance type</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>Task status.</p>
     */
    public $TaskStatus;

    /**
     * @var integer <p>Memory capacity</p>
     */
    public $Memory;

    /**
     * @var integer <p>Disk capacity</p>
     */
    public $Volume;

    /**
     * @var string <p>Instance model</p>
     */
    public $DeviceType;

    /**
     * @var integer <p>Queries per second.</p>
     */
    public $Qps;

    /**
     * @var integer <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var integer <p>subnet ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Dedicated cluster ID</p>
     */
    public $ExClusterId;

    /**
     * @var string <p>Dedicated cluster name</p>
     */
    public $ExClusterName;

    /**
     * @param string $Region <p>Regional information</p>
     * @param integer $RegionId <p>Region ID</p>
     * @param integer $ZoneId <p>Availability zone ID.</p>
     * @param string $Zone <p>AZ information</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $ResourceId <p>Instance long ID</p>
     * @param integer $Status <p>Instance status</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param integer $InstanceType <p>Instance type</p>
     * @param integer $TaskStatus <p>Task status.</p>
     * @param integer $Memory <p>Memory capacity</p>
     * @param integer $Volume <p>Disk capacity</p>
     * @param string $DeviceType <p>Instance model</p>
     * @param integer $Qps <p>Queries per second.</p>
     * @param integer $VpcId <p>VPC ID</p>
     * @param integer $SubnetId <p>subnet ID</p>
     * @param string $ExClusterId <p>Dedicated cluster ID</p>
     * @param string $ExClusterName <p>Dedicated cluster name</p>
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
