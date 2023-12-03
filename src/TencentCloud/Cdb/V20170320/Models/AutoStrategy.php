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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Automatic scale-out policy for elastic CPU scale-out.
 *
 * @method integer getExpandThreshold() Obtain CPU utilization threshold (percent value). Valid values: 70, 80, and 90. Automatic scale-out will be triggered when CPU utilization reaches the set threshold.
 * @method void setExpandThreshold(integer $ExpandThreshold) Set CPU utilization threshold (percent value). Valid values: 70, 80, and 90. Automatic scale-out will be triggered when CPU utilization reaches the set threshold.
 * @method integer getExpandPeriod() Obtain Interval, in seconds. Valid values: 1, 3, 5, 10, 15, and 30. The system backend determines whether automatic scale-out is required at the set interval.
 * @method void setExpandPeriod(integer $ExpandPeriod) Set Interval, in seconds. Valid values: 1, 3, 5, 10, 15, and 30. The system backend determines whether automatic scale-out is required at the set interval.
 * @method integer getShrinkThreshold() Obtain CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
 * @method void setShrinkThreshold(integer $ShrinkThreshold) Set CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
 * @method integer getShrinkPeriod() Obtain Interval, in seconds. Valid values: 5, 10, 15, and 30. The system backend determines whether automatic scale-in is required at the set interval.
 * @method void setShrinkPeriod(integer $ShrinkPeriod) Set Interval, in seconds. Valid values: 5, 10, 15, and 30. The system backend determines whether automatic scale-in is required at the set interval.
 */
class AutoStrategy extends AbstractModel
{
    /**
     * @var integer CPU utilization threshold (percent value). Valid values: 70, 80, and 90. Automatic scale-out will be triggered when CPU utilization reaches the set threshold.
     */
    public $ExpandThreshold;

    /**
     * @var integer Interval, in seconds. Valid values: 1, 3, 5, 10, 15, and 30. The system backend determines whether automatic scale-out is required at the set interval.
     */
    public $ExpandPeriod;

    /**
     * @var integer CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
     */
    public $ShrinkThreshold;

    /**
     * @var integer Interval, in seconds. Valid values: 5, 10, 15, and 30. The system backend determines whether automatic scale-in is required at the set interval.
     */
    public $ShrinkPeriod;

    /**
     * @param integer $ExpandThreshold CPU utilization threshold (percent value). Valid values: 70, 80, and 90. Automatic scale-out will be triggered when CPU utilization reaches the set threshold.
     * @param integer $ExpandPeriod Interval, in seconds. Valid values: 1, 3, 5, 10, 15, and 30. The system backend determines whether automatic scale-out is required at the set interval.
     * @param integer $ShrinkThreshold CPU utilization threshold (percent value). Valid values: 10, 20, and 30. Automatic scale-in will be triggered when CPU utilization reaches the set threshold.
     * @param integer $ShrinkPeriod Interval, in seconds. Valid values: 5, 10, 15, and 30. The system backend determines whether automatic scale-in is required at the set interval.
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

        if (array_key_exists("ExpandPeriod",$param) and $param["ExpandPeriod"] !== null) {
            $this->ExpandPeriod = $param["ExpandPeriod"];
        }

        if (array_key_exists("ShrinkThreshold",$param) and $param["ShrinkThreshold"] !== null) {
            $this->ShrinkThreshold = $param["ShrinkThreshold"];
        }

        if (array_key_exists("ShrinkPeriod",$param) and $param["ShrinkPeriod"] !== null) {
            $this->ShrinkPeriod = $param["ShrinkPeriod"];
        }
    }
}
