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
 * Usage rate information of Reserved Coupons
 *
 * @method float getRate() Obtain Usage rate
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setRate(float $Rate) Set Usage rate
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getNum() Obtain Quantity of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNum(integer $Num) Set Quantity of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getCPU() Obtain Number of cores

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setCPU(float $CPU) Set Number of cores

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method float getMemory() Obtain Memory

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setMemory(float $Memory) Set Memory

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getType() Obtain  Type of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set  Type of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getGpuNum() Obtain Number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setGpuNum(string $GpuNum) Set Number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getZone() Obtain Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster ID

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getNodeName() Obtain Node name

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNodeName(string $NodeName) Set Node name

Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getPodNum() Obtain Number of Pods
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setPodNum(integer $PodNum) Set Number of Pods
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class ReservedInstanceUtilizationRate extends AbstractModel
{
    /**
     * @var float Usage rate
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Rate;

    /**
     * @var integer Quantity of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Num;

    /**
     * @var float Number of cores

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $CPU;

    /**
     * @var float Memory

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Memory;

    /**
     * @var string  Type of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string Number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $GpuNum;

    /**
     * @var string Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var string Cluster ID

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Node name

Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $NodeName;

    /**
     * @var integer Number of Pods
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $PodNum;

    /**
     * @param float $Rate Usage rate
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $Num Quantity of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $CPU Number of cores

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param float $Memory Memory

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Type  Type of Reserved Coupons
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $GpuNum Number of GPU cards
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $Zone Availability zone

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster ID

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $NodeName Node name

Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $PodNum Number of Pods
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PodNum",$param) and $param["PodNum"] !== null) {
            $this->PodNum = $param["PodNum"];
        }
    }
}
