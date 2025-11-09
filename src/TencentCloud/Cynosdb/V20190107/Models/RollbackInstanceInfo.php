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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getUniqVpcId() Obtain VPC information
 * @method void setUniqVpcId(string $UniqVpcId) Set VPC information
 * @method string getUniqSubnetId() Obtain Subnet information.
 * @method void setUniqSubnetId(string $UniqSubnetId) Set Subnet information.
 * @method string getVip() Obtain vip information.
 * @method void setVip(string $Vip) Set vip information.
 * @method integer getVport() Obtain Specifies the vport information.
 * @method void setVport(integer $Vport) Set Specifies the vport information.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 * @method integer getCpu() Obtain CPU Size
 * @method void setCpu(integer $Cpu) Set CPU Size
 * @method integer getMem() Obtain Memory Size
 * @method void setMem(integer $Mem) Set Memory Size
 * @method integer getStorageLimit() Obtain Storage size
 * @method void setStorageLimit(integer $StorageLimit) Set Storage size
 */
class RollbackInstanceInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string VPC information
     */
    public $UniqVpcId;

    /**
     * @var string Subnet information.
     */
    public $UniqSubnetId;

    /**
     * @var string vip information.
     */
    public $Vip;

    /**
     * @var integer Specifies the vport information.
     */
    public $Vport;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @var integer CPU Size
     */
    public $Cpu;

    /**
     * @var integer Memory Size
     */
    public $Mem;

    /**
     * @var integer Storage size
     */
    public $StorageLimit;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name.
     * @param string $UniqVpcId VPC information
     * @param string $UniqSubnetId Subnet information.
     * @param string $Vip vip information.
     * @param integer $Vport Specifies the vport information.
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Status Status
     * @param integer $Cpu CPU Size
     * @param integer $Mem Memory Size
     * @param integer $StorageLimit Storage size
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }
    }
}
