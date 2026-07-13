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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Budget threshold notification
 *
 * @method string getWarnType() Obtain ACTUAL amount
FORECAST Amount
 * @method void setWarnType(string $WarnType) Set ACTUAL amount
FORECAST Amount
 * @method string getCalType() Obtain PERCENTAGE Percentage of the budget amount, ABS Fixed value
 * @method void setCalType(string $CalType) Set PERCENTAGE Percentage of the budget amount, ABS Fixed value
 * @method string getThresholdValue() Obtain Threshold (greater than or equal to 0)
 * @method void setThresholdValue(string $ThresholdValue) Set Threshold (greater than or equal to 0)
 */
class BudgetWarn extends AbstractModel
{
    /**
     * @var string ACTUAL amount
FORECAST Amount
     */
    public $WarnType;

    /**
     * @var string PERCENTAGE Percentage of the budget amount, ABS Fixed value
     */
    public $CalType;

    /**
     * @var string Threshold (greater than or equal to 0)
     */
    public $ThresholdValue;

    /**
     * @param string $WarnType ACTUAL amount
FORECAST Amount
     * @param string $CalType PERCENTAGE Percentage of the budget amount, ABS Fixed value
     * @param string $ThresholdValue Threshold (greater than or equal to 0)
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
        if (array_key_exists("WarnType",$param) and $param["WarnType"] !== null) {
            $this->WarnType = $param["WarnType"];
        }

        if (array_key_exists("CalType",$param) and $param["CalType"] !== null) {
            $this->CalType = $param["CalType"];
        }

        if (array_key_exists("ThresholdValue",$param) and $param["ThresholdValue"] !== null) {
            $this->ThresholdValue = $param["ThresholdValue"];
        }
    }
}
