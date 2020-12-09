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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A CVM instance.
 *
 * @method string getVpcId() Obtain VPC instance ID.
 * @method void setVpcId(string $VpcId) Set VPC instance ID.
 * @method string getSubnetId() Obtain Subnet instance ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID.
 * @method string getInstanceId() Obtain CVM instance ID.
 * @method void setInstanceId(string $InstanceId) Set CVM instance ID.
 * @method string getInstanceName() Obtain CVM Name
 * @method void setInstanceName(string $InstanceName) Set CVM Name
 * @method string getInstanceState() Obtain CVM status.
 * @method void setInstanceState(string $InstanceState) Set CVM status.
 * @method integer getCPU() Obtain Number of CPU cores in an instance (in core).
 * @method void setCPU(integer $CPU) Set Number of CPU cores in an instance (in core).
 * @method integer getMemory() Obtain Instance’s memory capacity. Unit: GB.
 * @method void setMemory(integer $Memory) Set Instance’s memory capacity. Unit: GB.
 * @method string getCreatedTime() Obtain The creation time.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time.
 * @method string getInstanceType() Obtain Instance type.
 * @method void setInstanceType(string $InstanceType) Set Instance type.
 * @method integer getEniLimit() Obtain Instance ENI quota (including primary ENIs).
 * @method void setEniLimit(integer $EniLimit) Set Instance ENI quota (including primary ENIs).
 * @method integer getEniIpLimit() Obtain Private IP quoata for instance ENIs (including primary ENIs).
 * @method void setEniIpLimit(integer $EniIpLimit) Set Private IP quoata for instance ENIs (including primary ENIs).
 * @method integer getInstanceEniCount() Obtain The number of ENIs (including primary ENIs) bound to a instance.
 * @method void setInstanceEniCount(integer $InstanceEniCount) Set The number of ENIs (including primary ENIs) bound to a instance.
 */
class CvmInstance extends AbstractModel
{
    /**
     * @var string VPC instance ID.
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID.
     */
    public $SubnetId;

    /**
     * @var string CVM instance ID.
     */
    public $InstanceId;

    /**
     * @var string CVM Name
     */
    public $InstanceName;

    /**
     * @var string CVM status.
     */
    public $InstanceState;

    /**
     * @var integer Number of CPU cores in an instance (in core).
     */
    public $CPU;

    /**
     * @var integer Instance’s memory capacity. Unit: GB.
     */
    public $Memory;

    /**
     * @var string The creation time.
     */
    public $CreatedTime;

    /**
     * @var string Instance type.
     */
    public $InstanceType;

    /**
     * @var integer Instance ENI quota (including primary ENIs).
     */
    public $EniLimit;

    /**
     * @var integer Private IP quoata for instance ENIs (including primary ENIs).
     */
    public $EniIpLimit;

    /**
     * @var integer The number of ENIs (including primary ENIs) bound to a instance.
     */
    public $InstanceEniCount;

    /**
     * @param string $VpcId VPC instance ID.
     * @param string $SubnetId Subnet instance ID.
     * @param string $InstanceId CVM instance ID.
     * @param string $InstanceName CVM Name
     * @param string $InstanceState CVM status.
     * @param integer $CPU Number of CPU cores in an instance (in core).
     * @param integer $Memory Instance’s memory capacity. Unit: GB.
     * @param string $CreatedTime The creation time.
     * @param string $InstanceType Instance type.
     * @param integer $EniLimit Instance ENI quota (including primary ENIs).
     * @param integer $EniIpLimit Private IP quoata for instance ENIs (including primary ENIs).
     * @param integer $InstanceEniCount The number of ENIs (including primary ENIs) bound to a instance.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("EniLimit",$param) and $param["EniLimit"] !== null) {
            $this->EniLimit = $param["EniLimit"];
        }

        if (array_key_exists("EniIpLimit",$param) and $param["EniIpLimit"] !== null) {
            $this->EniIpLimit = $param["EniIpLimit"];
        }

        if (array_key_exists("InstanceEniCount",$param) and $param["InstanceEniCount"] !== null) {
            $this->InstanceEniCount = $param["InstanceEniCount"];
        }
    }
}
