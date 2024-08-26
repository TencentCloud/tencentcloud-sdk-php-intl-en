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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource group configuration
 *
 * @method string getWorkloadGroupName() Obtain Resource group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkloadGroupName(string $WorkloadGroupName) Set Resource group name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpuShare() Obtain CPU weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuShare(integer $CpuShare) Set CPU weight
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemoryLimit() Obtain Memory limit. The sum of memory limit values of all resource groups should be less than or equal to 100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemoryLimit(integer $MemoryLimit) Set Memory limit. The sum of memory limit values of all resource groups should be less than or equal to 100.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getEnableMemoryOverCommit() Obtain Whether to allow over-allocation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnableMemoryOverCommit(boolean $EnableMemoryOverCommit) Set Whether to allow over-allocation
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCpuHardLimit() Obtain CPU hard limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuHardLimit(string $CpuHardLimit) Set CPU hard limit
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WorkloadGroupConfig extends AbstractModel
{
    /**
     * @var string Resource group name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkloadGroupName;

    /**
     * @var integer CPU weight
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuShare;

    /**
     * @var integer Memory limit. The sum of memory limit values of all resource groups should be less than or equal to 100.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemoryLimit;

    /**
     * @var boolean Whether to allow over-allocation
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EnableMemoryOverCommit;

    /**
     * @var string CPU hard limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuHardLimit;

    /**
     * @param string $WorkloadGroupName Resource group name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CpuShare CPU weight
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemoryLimit Memory limit. The sum of memory limit values of all resource groups should be less than or equal to 100.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $EnableMemoryOverCommit Whether to allow over-allocation
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CpuHardLimit CPU hard limit
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }

        if (array_key_exists("CpuShare",$param) and $param["CpuShare"] !== null) {
            $this->CpuShare = $param["CpuShare"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("EnableMemoryOverCommit",$param) and $param["EnableMemoryOverCommit"] !== null) {
            $this->EnableMemoryOverCommit = $param["EnableMemoryOverCommit"];
        }

        if (array_key_exists("CpuHardLimit",$param) and $param["CpuHardLimit"] !== null) {
            $this->CpuHardLimit = $param["CpuHardLimit"];
        }
    }
}
