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
 * CPU Elastic Scaling auto scale-out policy.
 *
 * @method integer getExpandThreshold() Obtain Auto scaling threshold. Available values: 40, 50, 60, 70, 80, 90. Represents the CPU utilization reaches 40%, 50%, 60%, 70%, 80%, or 90% to trigger auto scaling in the background.
 * @method void setExpandThreshold(integer $ExpandThreshold) Set Auto scaling threshold. Available values: 40, 50, 60, 70, 80, 90. Represents the CPU utilization reaches 40%, 50%, 60%, 70%, 80%, or 90% to trigger auto scaling in the background.
 * @method integer getShrinkThreshold() Obtain CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
 * @method void setShrinkThreshold(integer $ShrinkThreshold) Set CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
 * @method integer getExpandPeriod() Obtain Auto-scaling observation period, in minutes, available values 1, 3, 5, 10, 15, 30. The backend will judge scaling out according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpandPeriod(integer $ExpandPeriod) Set Auto-scaling observation period, in minutes, available values 1, 3, 5, 10, 15, 30. The backend will judge scaling out according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShrinkPeriod() Obtain Automatic scaling down observation period, in minutes, available values 5, 10, 15, 30. The backend performs scale-in judgment according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShrinkPeriod(integer $ShrinkPeriod) Set Automatic scaling down observation period, in minutes, available values 5, 10, 15, 30. The backend performs scale-in judgment according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getExpandSecondPeriod() Obtain Elastic scaling observation period (in seconds). Value is 15, 30, 45, 60, 180, 300, 600, 900, or 1800.
 * @method void setExpandSecondPeriod(integer $ExpandSecondPeriod) Set Elastic scaling observation period (in seconds). Value is 15, 30, 45, 60, 180, 300, 600, 900, or 1800.
 * @method integer getShrinkSecondPeriod() Obtain Scale-down observation period (in seconds). Valid values: 300, 600, 900, 1800.
 * @method void setShrinkSecondPeriod(integer $ShrinkSecondPeriod) Set Scale-down observation period (in seconds). Valid values: 300, 600, 900, 1800.
 */
class AutoStrategy extends AbstractModel
{
    /**
     * @var integer Auto scaling threshold. Available values: 40, 50, 60, 70, 80, 90. Represents the CPU utilization reaches 40%, 50%, 60%, 70%, 80%, or 90% to trigger auto scaling in the background.
     */
    public $ExpandThreshold;

    /**
     * @var integer CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
     */
    public $ShrinkThreshold;

    /**
     * @var integer Auto-scaling observation period, in minutes, available values 1, 3, 5, 10, 15, 30. The backend will judge scaling out according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ExpandPeriod;

    /**
     * @var integer Automatic scaling down observation period, in minutes, available values 5, 10, 15, 30. The backend performs scale-in judgment according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $ShrinkPeriod;

    /**
     * @var integer Elastic scaling observation period (in seconds). Value is 15, 30, 45, 60, 180, 300, 600, 900, or 1800.
     */
    public $ExpandSecondPeriod;

    /**
     * @var integer Scale-down observation period (in seconds). Valid values: 300, 600, 900, 1800.
     */
    public $ShrinkSecondPeriod;

    /**
     * @param integer $ExpandThreshold Auto scaling threshold. Available values: 40, 50, 60, 70, 80, 90. Represents the CPU utilization reaches 40%, 50%, 60%, 70%, 80%, or 90% to trigger auto scaling in the background.
     * @param integer $ShrinkThreshold CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
     * @param integer $ExpandPeriod Auto-scaling observation period, in minutes, available values 1, 3, 5, 10, 15, 30. The backend will judge scaling out according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ShrinkPeriod Automatic scaling down observation period, in minutes, available values 5, 10, 15, 30. The backend performs scale-in judgment according to the configured period.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ExpandSecondPeriod Elastic scaling observation period (in seconds). Value is 15, 30, 45, 60, 180, 300, 600, 900, or 1800.
     * @param integer $ShrinkSecondPeriod Scale-down observation period (in seconds). Valid values: 300, 600, 900, 1800.
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
        if (array_key_exists("ExpandThreshold",$param) and $param["ExpandThreshold"] !== null) {
            $this->ExpandThreshold = $param["ExpandThreshold"];
        }

        if (array_key_exists("ShrinkThreshold",$param) and $param["ShrinkThreshold"] !== null) {
            $this->ShrinkThreshold = $param["ShrinkThreshold"];
        }

        if (array_key_exists("ExpandPeriod",$param) and $param["ExpandPeriod"] !== null) {
            $this->ExpandPeriod = $param["ExpandPeriod"];
        }

        if (array_key_exists("ShrinkPeriod",$param) and $param["ShrinkPeriod"] !== null) {
            $this->ShrinkPeriod = $param["ShrinkPeriod"];
        }

        if (array_key_exists("ExpandSecondPeriod",$param) and $param["ExpandSecondPeriod"] !== null) {
            $this->ExpandSecondPeriod = $param["ExpandSecondPeriod"];
        }

        if (array_key_exists("ShrinkSecondPeriod",$param) and $param["ShrinkSecondPeriod"] !== null) {
            $this->ShrinkSecondPeriod = $param["ShrinkSecondPeriod"];
        }
    }
}
