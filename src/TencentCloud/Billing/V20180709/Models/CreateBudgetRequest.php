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
 * CreateBudget request structure.
 *
 * @method string getBudgetName() Obtain Budget Name
 * @method void setBudgetName(string $BudgetName) Set Budget Name
 * @method string getCycleType() Obtain DAY, MONTH, QUARTER, YEAR
 * @method void setCycleType(string $CycleType) Set DAY, MONTH, QUARTER, YEAR
 * @method string getPeriodBegin() Obtain Validity start time 2025-01-01 (Period: day) / 2025-01 (Period: month)
 * @method void setPeriodBegin(string $PeriodBegin) Set Validity start time 2025-01-01 (Period: day) / 2025-01 (Period: month)
 * @method string getPeriodEnd() Obtain Validity end time 2025-12-01 (Period: day) / 2025-12 (Cycle: month)
 * @method void setPeriodEnd(string $PeriodEnd) Set Validity end time 2025-12-01 (Period: day) / 2025-12 (Cycle: month)
 * @method string getPlanType() Obtain FIX Fixed Budget, CYCLE Budget Planning
 * @method void setPlanType(string $PlanType) Set FIX Fixed Budget, CYCLE Budget Planning
 * @method string getBudgetQuota() Obtain Budget amount limit
Pass a fixed value when the schedule type is FIX (fixed budget).
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
 * @method void setBudgetQuota(string $BudgetQuota) Set Budget amount limit
Pass a fixed value when the schedule type is FIX (fixed budget).
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
 * @method string getBillType() Obtain BILL System bill, CONSUMPTION Consumption bill
 * @method void setBillType(string $BillType) Set BILL System bill, CONSUMPTION Consumption bill
 * @method string getFeeType() Obtain COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
 * @method void setFeeType(string $FeeType) Set COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
 * @method array getWarnJson() Obtain Threshold alert
 * @method void setWarnJson(array $WarnJson) Set Threshold alert
 * @method string getBudgetNote() Obtain Budget remark
 * @method void setBudgetNote(string $BudgetNote) Set Budget remark
 * @method BudgetConditionsForm getDimensionsRange() Obtain Budget Dimension Range Condition
 * @method void setDimensionsRange(BudgetConditionsForm $DimensionsRange) Set Budget Dimension Range Condition
 * @method array getWaveThresholdJson() Obtain Fluctuation alert
 * @method void setWaveThresholdJson(array $WaveThresholdJson) Set Fluctuation alert
 */
class CreateBudgetRequest extends AbstractModel
{
    /**
     * @var string Budget Name
     */
    public $BudgetName;

    /**
     * @var string DAY, MONTH, QUARTER, YEAR
     */
    public $CycleType;

    /**
     * @var string Validity start time 2025-01-01 (Period: day) / 2025-01 (Period: month)
     */
    public $PeriodBegin;

    /**
     * @var string Validity end time 2025-12-01 (Period: day) / 2025-12 (Cycle: month)
     */
    public $PeriodEnd;

    /**
     * @var string FIX Fixed Budget, CYCLE Budget Planning
     */
    public $PlanType;

    /**
     * @var string Budget amount limit
Pass a fixed value when the schedule type is FIX (fixed budget).
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
     */
    public $BudgetQuota;

    /**
     * @var string BILL System bill, CONSUMPTION Consumption bill
     */
    public $BillType;

    /**
     * @var string COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
     */
    public $FeeType;

    /**
     * @var array Threshold alert
     */
    public $WarnJson;

    /**
     * @var string Budget remark
     */
    public $BudgetNote;

    /**
     * @var BudgetConditionsForm Budget Dimension Range Condition
     */
    public $DimensionsRange;

    /**
     * @var array Fluctuation alert
     */
    public $WaveThresholdJson;

    /**
     * @param string $BudgetName Budget Name
     * @param string $CycleType DAY, MONTH, QUARTER, YEAR
     * @param string $PeriodBegin Validity start time 2025-01-01 (Period: day) / 2025-01 (Period: month)
     * @param string $PeriodEnd Validity end time 2025-12-01 (Period: day) / 2025-12 (Cycle: month)
     * @param string $PlanType FIX Fixed Budget, CYCLE Budget Planning
     * @param string $BudgetQuota Budget amount limit
Pass a fixed value when the schedule type is FIX (fixed budget).
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
     * @param string $BillType BILL System bill, CONSUMPTION Consumption bill
     * @param string $FeeType COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
     * @param array $WarnJson Threshold alert
     * @param string $BudgetNote Budget remark
     * @param BudgetConditionsForm $DimensionsRange Budget Dimension Range Condition
     * @param array $WaveThresholdJson Fluctuation alert
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
        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("PeriodBegin",$param) and $param["PeriodBegin"] !== null) {
            $this->PeriodBegin = $param["PeriodBegin"];
        }

        if (array_key_exists("PeriodEnd",$param) and $param["PeriodEnd"] !== null) {
            $this->PeriodEnd = $param["PeriodEnd"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("WarnJson",$param) and $param["WarnJson"] !== null) {
            $this->WarnJson = [];
            foreach ($param["WarnJson"] as $key => $value){
                $obj = new BudgetWarn();
                $obj->deserialize($value);
                array_push($this->WarnJson, $obj);
            }
        }

        if (array_key_exists("BudgetNote",$param) and $param["BudgetNote"] !== null) {
            $this->BudgetNote = $param["BudgetNote"];
        }

        if (array_key_exists("DimensionsRange",$param) and $param["DimensionsRange"] !== null) {
            $this->DimensionsRange = new BudgetConditionsForm();
            $this->DimensionsRange->deserialize($param["DimensionsRange"]);
        }

        if (array_key_exists("WaveThresholdJson",$param) and $param["WaveThresholdJson"] !== null) {
            $this->WaveThresholdJson = [];
            foreach ($param["WaveThresholdJson"] as $key => $value){
                $obj = new WaveThresholdForm();
                $obj->deserialize($value);
                array_push($this->WaveThresholdJson, $obj);
            }
        }
    }
}
