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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource information description.
 *
 * @method integer getCpu() Obtain Processor resource, in 1/1000 cores.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Processor resource, in 1/1000 cores.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory resource, in MB.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Memory resource, in MB.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGpu() Obtain Number of GPU card resources, in 0.01 units of GpuType.Gpu=100 indicates the use of "1" GPU card. However, this "1" card could refer to a virtualized 1/4 card or a full physical card, depending on the instance type.Example 1: If the instance type includes 1 virtual GPU card, and each virtual GPU card corresponds to 1/4 of a physical T4 card, then GpuType=T4, Gpu=100, and RealGpu=25.Example 2: If the instance type includes 4 full GPU cards, and each card corresponds to 1 physical T4 card, then GpuType=T4, Gpu=400, and RealGpu=400.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGpu(integer $Gpu) Set Number of GPU card resources, in 0.01 units of GpuType.Gpu=100 indicates the use of "1" GPU card. However, this "1" card could refer to a virtualized 1/4 card or a full physical card, depending on the instance type.Example 1: If the instance type includes 1 virtual GPU card, and each virtual GPU card corresponds to 1/4 of a physical T4 card, then GpuType=T4, Gpu=100, and RealGpu=25.Example 2: If the instance type includes 4 full GPU cards, and each card corresponds to 1 physical T4 card, then GpuType=T4, Gpu=400, and RealGpu=400.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGpuType() Obtain GPU card model. Valid values: T4 and V100. It only displays the current GPU card model. If multiple types of cards are used simultaneously, see the value of RealGpuDetailSet.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGpuType(string $GpuType) Set GPU card model. Valid values: T4 and V100. It only displays the current GPU card model. If multiple types of cards are used simultaneously, see the value of RealGpuDetailSet.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRealGpu() Obtain It is not required for creation or update operations. This field is used for display only.The actual GPU card resources for postpaid instances using fractional GPU cards. This value represents the total number of actual physical GPU cards consumed.RealGpu=100 indicates the consumption of 1 GPU card. Depending on the actual instance type, this may represent: 4 instances each using a 1/4 card, 2 instances each using a 1/2 card, or 1 instance using a full card.
 * @method void setRealGpu(integer $RealGpu) Set It is not required for creation or update operations. This field is used for display only.The actual GPU card resources for postpaid instances using fractional GPU cards. This value represents the total number of actual physical GPU cards consumed.RealGpu=100 indicates the consumption of 1 GPU card. Depending on the actual instance type, this may represent: 4 instances each using a 1/4 card, 2 instances each using a 1/2 card, or 1 instance using a full card.
 * @method array getRealGpuDetailSet() Obtain It is not required for creation or update operations. This field is used for display only. It involves detailed GPU usage information.
 * @method void setRealGpuDetailSet(array $RealGpuDetailSet) Set It is not required for creation or update operations. This field is used for display only. It involves detailed GPU usage information.
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var integer Processor resource, in 1/1000 cores.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Memory resource, in MB.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var integer Number of GPU card resources, in 0.01 units of GpuType.Gpu=100 indicates the use of "1" GPU card. However, this "1" card could refer to a virtualized 1/4 card or a full physical card, depending on the instance type.Example 1: If the instance type includes 1 virtual GPU card, and each virtual GPU card corresponds to 1/4 of a physical T4 card, then GpuType=T4, Gpu=100, and RealGpu=25.Example 2: If the instance type includes 4 full GPU cards, and each card corresponds to 1 physical T4 card, then GpuType=T4, Gpu=400, and RealGpu=400.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Gpu;

    /**
     * @var string GPU card model. Valid values: T4 and V100. It only displays the current GPU card model. If multiple types of cards are used simultaneously, see the value of RealGpuDetailSet.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GpuType;

    /**
     * @var integer It is not required for creation or update operations. This field is used for display only.The actual GPU card resources for postpaid instances using fractional GPU cards. This value represents the total number of actual physical GPU cards consumed.RealGpu=100 indicates the consumption of 1 GPU card. Depending on the actual instance type, this may represent: 4 instances each using a 1/4 card, 2 instances each using a 1/2 card, or 1 instance using a full card.
     */
    public $RealGpu;

    /**
     * @var array It is not required for creation or update operations. This field is used for display only. It involves detailed GPU usage information.
     */
    public $RealGpuDetailSet;

    /**
     * @param integer $Cpu Processor resource, in 1/1000 cores.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Memory resource, in MB.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Gpu Number of GPU card resources, in 0.01 units of GpuType.Gpu=100 indicates the use of "1" GPU card. However, this "1" card could refer to a virtualized 1/4 card or a full physical card, depending on the instance type.Example 1: If the instance type includes 1 virtual GPU card, and each virtual GPU card corresponds to 1/4 of a physical T4 card, then GpuType=T4, Gpu=100, and RealGpu=25.Example 2: If the instance type includes 4 full GPU cards, and each card corresponds to 1 physical T4 card, then GpuType=T4, Gpu=400, and RealGpu=400.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GpuType GPU card model. Valid values: T4 and V100. It only displays the current GPU card model. If multiple types of cards are used simultaneously, see the value of RealGpuDetailSet.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RealGpu It is not required for creation or update operations. This field is used for display only.The actual GPU card resources for postpaid instances using fractional GPU cards. This value represents the total number of actual physical GPU cards consumed.RealGpu=100 indicates the consumption of 1 GPU card. Depending on the actual instance type, this may represent: 4 instances each using a 1/4 card, 2 instances each using a 1/2 card, or 1 instance using a full card.
     * @param array $RealGpuDetailSet It is not required for creation or update operations. This field is used for display only. It involves detailed GPU usage information.
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("RealGpu",$param) and $param["RealGpu"] !== null) {
            $this->RealGpu = $param["RealGpu"];
        }

        if (array_key_exists("RealGpuDetailSet",$param) and $param["RealGpuDetailSet"] !== null) {
            $this->RealGpuDetailSet = [];
            foreach ($param["RealGpuDetailSet"] as $key => $value){
                $obj = new GpuDetail();
                $obj->deserialize($value);
                array_push($this->RealGpuDetailSet, $obj);
            }
        }
    }
}
