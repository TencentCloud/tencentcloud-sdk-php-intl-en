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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Super Node Information
 *
 * @method string getName() Obtain Instance name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Instance name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal label
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal label
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getResourceType() Obtain Resource type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setResourceType(string $ResourceType) Set Resource type
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getCPU() Obtain CPU specification of nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setCPU(float $CPU) Set CPU specification of nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getUsedCPU() Obtain Total number of CPUs of Pods on nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUsedCPU(float $UsedCPU) Set Total number of CPUs of Pods on nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getMemory() Obtain Memory specification of nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMemory(float $Memory) Set Memory specification of nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getUsedMemory() Obtain Total memory of Pods on nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setUsedMemory(float $UsedMemory) Set Total memory of Pods on nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getZone() Obtain Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getVpcId() Obtain Unique VPC ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setVpcId(string $VpcId) Set Unique VPC ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getSubnetId() Obtain Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getActiveAt() Obtain Effective time
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setActiveAt(string $ActiveAt) Set Effective time
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getExpireAt() Obtain Expiration time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setExpireAt(string $ExpireAt) Set Expiration time

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getMaxCPUScheduledPod() Obtain Maximum schedulable CPU specification for a single Pod
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMaxCPUScheduledPod(integer $MaxCPUScheduledPod) Set Maximum schedulable CPU specification for a single Pod
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getInstanceAttribute() Obtain Instance attributes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setInstanceAttribute(string $InstanceAttribute) Set Instance attributes
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class SuperNodeInfo extends AbstractModel
{
    /**
     * @var string Instance name
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var integer Auto-renewal label
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoRenewFlag;

    /**
     * @var string Resource type
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ResourceType;

    /**
     * @var float CPU specification of nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $CPU;

    /**
     * @var float Total number of CPUs of Pods on nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $UsedCPU;

    /**
     * @var float Memory specification of nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Memory;

    /**
     * @var float Total memory of Pods on nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $UsedMemory;

    /**
     * @var string Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var string Unique VPC ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Effective time
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ActiveAt;

    /**
     * @var string Expiration time

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ExpireAt;

    /**
     * @var integer Maximum schedulable CPU specification for a single Pod
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $MaxCPUScheduledPod;

    /**
     * @var string Instance attributes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $InstanceAttribute;

    /**
     * @param string $Name Instance name
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $AutoRenewFlag Auto-renewal label
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $ResourceType Resource type
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $CPU CPU specification of nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $UsedCPU Total number of CPUs of Pods on nodes (unit: cores).
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $Memory Memory specification of nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $UsedMemory Total memory of Pods on nodes (unit: Gi).
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Zone Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $VpcId Unique VPC ID
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $SubnetId Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $ActiveAt Effective time
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $ExpireAt Expiration time

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $MaxCPUScheduledPod Maximum schedulable CPU specification for a single Pod
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $InstanceAttribute Instance attributes
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("UsedCPU",$param) and $param["UsedCPU"] !== null) {
            $this->UsedCPU = $param["UsedCPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UsedMemory",$param) and $param["UsedMemory"] !== null) {
            $this->UsedMemory = $param["UsedMemory"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ActiveAt",$param) and $param["ActiveAt"] !== null) {
            $this->ActiveAt = $param["ActiveAt"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("MaxCPUScheduledPod",$param) and $param["MaxCPUScheduledPod"] !== null) {
            $this->MaxCPUScheduledPod = $param["MaxCPUScheduledPod"];
        }

        if (array_key_exists("InstanceAttribute",$param) and $param["InstanceAttribute"] !== null) {
            $this->InstanceAttribute = $param["InstanceAttribute"];
        }
    }
}
