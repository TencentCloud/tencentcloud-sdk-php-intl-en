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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePolicyConditionList.ConfigManual
 *
 * @method DescribePolicyConditionListConfigManualCalcType getCalcType() Obtain Check method.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCalcType(DescribePolicyConditionListConfigManualCalcType $CalcType) Set Check method.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListConfigManualCalcValue getCalcValue() Obtain Threshold.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCalcValue(DescribePolicyConditionListConfigManualCalcValue $CalcValue) Set Threshold.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListConfigManualContinueTime getContinueTime() Obtain Duration.
Note: This field may return null, indicating that no valid value was found.
 * @method void setContinueTime(DescribePolicyConditionListConfigManualContinueTime $ContinueTime) Set Duration.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListConfigManualPeriod getPeriod() Obtain Data period.
Note: This field may return null, indicating that no valid value was found.
 * @method void setPeriod(DescribePolicyConditionListConfigManualPeriod $Period) Set Data period.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListConfigManualPeriodNum getPeriodNum() Obtain Number of periods.
Note: This field may return null, indicating that no valid value was found.
 * @method void setPeriodNum(DescribePolicyConditionListConfigManualPeriodNum $PeriodNum) Set Number of periods.
Note: This field may return null, indicating that no valid value was found.
 * @method DescribePolicyConditionListConfigManualStatType getStatType() Obtain Statistics method.
Note: This field may return null, indicating that no valid value was found.
 * @method void setStatType(DescribePolicyConditionListConfigManualStatType $StatType) Set Statistics method.
Note: This field may return null, indicating that no valid value was found.
 */
class DescribePolicyConditionListConfigManual extends AbstractModel
{
    /**
     * @var DescribePolicyConditionListConfigManualCalcType Check method.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CalcType;

    /**
     * @var DescribePolicyConditionListConfigManualCalcValue Threshold.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CalcValue;

    /**
     * @var DescribePolicyConditionListConfigManualContinueTime Duration.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ContinueTime;

    /**
     * @var DescribePolicyConditionListConfigManualPeriod Data period.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Period;

    /**
     * @var DescribePolicyConditionListConfigManualPeriodNum Number of periods.
Note: This field may return null, indicating that no valid value was found.
     */
    public $PeriodNum;

    /**
     * @var DescribePolicyConditionListConfigManualStatType Statistics method.
Note: This field may return null, indicating that no valid value was found.
     */
    public $StatType;

    /**
     * @param DescribePolicyConditionListConfigManualCalcType $CalcType Check method.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListConfigManualCalcValue $CalcValue Threshold.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListConfigManualContinueTime $ContinueTime Duration.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListConfigManualPeriod $Period Data period.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListConfigManualPeriodNum $PeriodNum Number of periods.
Note: This field may return null, indicating that no valid value was found.
     * @param DescribePolicyConditionListConfigManualStatType $StatType Statistics method.
Note: This field may return null, indicating that no valid value was found.
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
        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = new DescribePolicyConditionListConfigManualCalcType();
            $this->CalcType->deserialize($param["CalcType"]);
        }

        if (array_key_exists("CalcValue",$param) and $param["CalcValue"] !== null) {
            $this->CalcValue = new DescribePolicyConditionListConfigManualCalcValue();
            $this->CalcValue->deserialize($param["CalcValue"]);
        }

        if (array_key_exists("ContinueTime",$param) and $param["ContinueTime"] !== null) {
            $this->ContinueTime = new DescribePolicyConditionListConfigManualContinueTime();
            $this->ContinueTime->deserialize($param["ContinueTime"]);
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = new DescribePolicyConditionListConfigManualPeriod();
            $this->Period->deserialize($param["Period"]);
        }

        if (array_key_exists("PeriodNum",$param) and $param["PeriodNum"] !== null) {
            $this->PeriodNum = new DescribePolicyConditionListConfigManualPeriodNum();
            $this->PeriodNum->deserialize($param["PeriodNum"]);
        }

        if (array_key_exists("StatType",$param) and $param["StatType"] !== null) {
            $this->StatType = new DescribePolicyConditionListConfigManualStatType();
            $this->StatType->deserialize($param["StatType"]);
        }
    }
}
