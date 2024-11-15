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
 * Pod billing information.
 *
 * @method string getStartTime() Obtain Pod billing start time
 * @method void setStartTime(string $StartTime) Set Pod billing start time
 * @method string getUid() Obtain UID of the pod.
 * @method void setUid(string $Uid) Set UID of the pod.
 * @method float getCpu() Obtain Pod CPU
 * @method void setCpu(float $Cpu) Set Pod CPU
 * @method float getMemory() Obtain Pod Memory
 * @method void setMemory(float $Memory) Set Pod Memory
 * @method string getType() Obtain Pod Type: intel, amd, v100, t4, a10\*gnv4, a10\*gnv4v, and so on.
 * @method void setType(string $Type) Set Pod Type: intel, amd, v100, t4, a10\*gnv4, a10\*gnv4v, and so on.
 * @method string getGpu() Obtain If the Pod is a GPU, then it indicates the number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setGpu(string $Gpu) Set If the Pod is a GPU, then it indicates the number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getChargeType() Obtain Billing type

PREPAID: Pod scheduled to monthly subscription super node
POSTPAID_BY_HOUR: Pay-as-you-go
RESERVED_INSTANCE: Deducted by reserved coupon in the previous period
SPOT: Bidding instance
TPOD: Preference instance
 * @method void setChargeType(string $ChargeType) Set Billing type

PREPAID: Pod scheduled to monthly subscription super node
POSTPAID_BY_HOUR: Pay-as-you-go
RESERVED_INSTANCE: Deducted by reserved coupon in the previous period
SPOT: Bidding instance
TPOD: Preference instance
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getName() Obtain Pod name
 * @method void setName(string $Name) Set Pod name
 */
class PodChargeInfo extends AbstractModel
{
    /**
     * @var string Pod billing start time
     */
    public $StartTime;

    /**
     * @var string UID of the pod.
     */
    public $Uid;

    /**
     * @var float Pod CPU
     */
    public $Cpu;

    /**
     * @var float Pod Memory
     */
    public $Memory;

    /**
     * @var string Pod Type: intel, amd, v100, t4, a10\*gnv4, a10\*gnv4v, and so on.
     */
    public $Type;

    /**
     * @var string If the Pod is a GPU, then it indicates the number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Gpu;

    /**
     * @var string Billing type

PREPAID: Pod scheduled to monthly subscription super node
POSTPAID_BY_HOUR: Pay-as-you-go
RESERVED_INSTANCE: Deducted by reserved coupon in the previous period
SPOT: Bidding instance
TPOD: Preference instance
     */
    public $ChargeType;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Pod name
     */
    public $Name;

    /**
     * @param string $StartTime Pod billing start time
     * @param string $Uid UID of the pod.
     * @param float $Cpu Pod CPU
     * @param float $Memory Pod Memory
     * @param string $Type Pod Type: intel, amd, v100, t4, a10\*gnv4, a10\*gnv4v, and so on.
     * @param string $Gpu If the Pod is a GPU, then it indicates the number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $ChargeType Billing type

PREPAID: Pod scheduled to monthly subscription super node
POSTPAID_BY_HOUR: Pay-as-you-go
RESERVED_INSTANCE: Deducted by reserved coupon in the previous period
SPOT: Bidding instance
TPOD: Preference instance
     * @param string $Namespace Namespace
     * @param string $Name Pod name
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
