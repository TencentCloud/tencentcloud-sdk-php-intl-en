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
 * Dynamic message retention time configuration
 *
 * @method integer getEnable() Obtain Whether the dynamic message retention time configuration is enabled. 0: disabled; 1: enabled
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Whether the dynamic message retention time configuration is enabled. 0: disabled; 1: enabled
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getDiskQuotaPercentage() Obtain Disk quota threshold (in percentage) for triggering the message retention time change event
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setDiskQuotaPercentage(integer $DiskQuotaPercentage) Set Disk quota threshold (in percentage) for triggering the message retention time change event
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getStepForwardPercentage() Obtain Percentage by which the message retention time is shortened each time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setStepForwardPercentage(integer $StepForwardPercentage) Set Percentage by which the message retention time is shortened each time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getBottomRetention() Obtain Minimum retention time, in minutes
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setBottomRetention(integer $BottomRetention) Set Minimum retention time, in minutes
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class DynamicRetentionTime extends AbstractModel
{
    /**
     * @var integer Whether the dynamic message retention time configuration is enabled. 0: disabled; 1: enabled
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer Disk quota threshold (in percentage) for triggering the message retention time change event
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $DiskQuotaPercentage;

    /**
     * @var integer Percentage by which the message retention time is shortened each time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $StepForwardPercentage;

    /**
     * @var integer Minimum retention time, in minutes
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $BottomRetention;

    /**
     * @param integer $Enable Whether the dynamic message retention time configuration is enabled. 0: disabled; 1: enabled
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $DiskQuotaPercentage Disk quota threshold (in percentage) for triggering the message retention time change event
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $StepForwardPercentage Percentage by which the message retention time is shortened each time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $BottomRetention Minimum retention time, in minutes
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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

        if (array_key_exists("DiskQuotaPercentage",$param) and $param["DiskQuotaPercentage"] !== null) {
            $this->DiskQuotaPercentage = $param["DiskQuotaPercentage"];
        }

        if (array_key_exists("StepForwardPercentage",$param) and $param["StepForwardPercentage"] !== null) {
            $this->StepForwardPercentage = $param["StepForwardPercentage"];
        }

        if (array_key_exists("BottomRetention",$param) and $param["BottomRetention"] !== null) {
            $this->BottomRetention = $param["BottomRetention"];
        }
    }
}
