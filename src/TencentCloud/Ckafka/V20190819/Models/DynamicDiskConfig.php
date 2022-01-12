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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dynamic disk expansion configuration
 *
 * @method integer getEnable() Obtain Whether to enable dynamic disk expansion configuration. `0`: disable, `1`: enable.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Whether to enable dynamic disk expansion configuration. `0`: disable, `1`: enable.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStepForwardPercentage() Obtain Percentage of dynamic disk expansion each time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStepForwardPercentage(integer $StepForwardPercentage) Set Percentage of dynamic disk expansion each time.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getDiskQuotaPercentage() Obtain Disk quota threshold (in percentage) for triggering the automatic disk expansion event.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDiskQuotaPercentage(integer $DiskQuotaPercentage) Set Disk quota threshold (in percentage) for triggering the automatic disk expansion event.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaxDiskSpace() Obtain Max disk space in GB.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaxDiskSpace(integer $MaxDiskSpace) Set Max disk space in GB.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class DynamicDiskConfig extends AbstractModel
{
    /**
     * @var integer Whether to enable dynamic disk expansion configuration. `0`: disable, `1`: enable.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer Percentage of dynamic disk expansion each time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StepForwardPercentage;

    /**
     * @var integer Disk quota threshold (in percentage) for triggering the automatic disk expansion event.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DiskQuotaPercentage;

    /**
     * @var integer Max disk space in GB.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaxDiskSpace;

    /**
     * @param integer $Enable Whether to enable dynamic disk expansion configuration. `0`: disable, `1`: enable.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $StepForwardPercentage Percentage of dynamic disk expansion each time.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $DiskQuotaPercentage Disk quota threshold (in percentage) for triggering the automatic disk expansion event.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaxDiskSpace Max disk space in GB.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("StepForwardPercentage",$param) and $param["StepForwardPercentage"] !== null) {
            $this->StepForwardPercentage = $param["StepForwardPercentage"];
        }

        if (array_key_exists("DiskQuotaPercentage",$param) and $param["DiskQuotaPercentage"] !== null) {
            $this->DiskQuotaPercentage = $param["DiskQuotaPercentage"];
        }

        if (array_key_exists("MaxDiskSpace",$param) and $param["MaxDiskSpace"] !== null) {
            $this->MaxDiskSpace = $param["MaxDiskSpace"];
        }
    }
}
