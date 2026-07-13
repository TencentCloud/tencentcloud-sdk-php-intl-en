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
 * ModifyBudget request structure.
 *
 * @method string getBudgetId() Obtain Budget project id
 * @method void setBudgetId(string $BudgetId) Set Budget project id
 * @method string getBudgetName() Obtain Budget Name
 * @method void setBudgetName(string $BudgetName) Set Budget Name
 * @method string getCycleType() Obtain DAY, MONTH, QUARTER, YEAR
 * @method void setCycleType(string $CycleType) Set DAY, MONTH, QUARTER, YEAR
 * @method string getPeriodBegin() Obtain Validity start time 2025-01-01
 * @method void setPeriodBegin(string $PeriodBegin) Set Validity start time 2025-01-01
 * @method string getPeriodEnd() Obtain Validity End Time 2025-12-01
 * @method void setPeriodEnd(string $PeriodEnd) Set Validity End Time 2025-12-01
 * @method string getPlanType() Obtain FIX fixed value, CYCLE different value
 * @method void setPlanType(string $PlanType) Set FIX fixed value, CYCLE different value
 * @method string getBudgetQuota() Obtain Budget amount limit 
Set as a fixed value when the schedule type is fixed budget.
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
 * @method void setBudgetQuota(string $BudgetQuota) Set Budget amount limit 
Set as a fixed value when the schedule type is fixed budget.
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
 * @method string getBillType() Obtain BILL System bill, CONSUMPTION Consumption bill
 * @method void setBillType(string $BillType) Set BILL System bill, CONSUMPTION Consumption bill
 * @method string getFeeType() Obtain COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (pre-tax)
 * @method void setFeeType(string $FeeType) Set COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (pre-tax)
 * @method array getWarnJson() Obtain threshold alert
 * @method void setWarnJson(array $WarnJson) Set threshold alert
 * @method string getBudgetNote() Obtain Budget remark
 * @method void setBudgetNote(string $BudgetNote) Set Budget remark
 * @method BudgetConditionsForm getDimensionsRange() Obtain Budget dimension range condition
 * @method void setDimensionsRange(BudgetConditionsForm $DimensionsRange) Set Budget dimension range condition
 * @method array getWaveThresholdJson() Obtain fluctuation alert
 * @method void setWaveThresholdJson(array $WaveThresholdJson) Set fluctuation alert
 */
class ModifyBudgetRequest extends AbstractModel
{
    /**
     * @var string Budget project id
     */
    public $BudgetId;

    /**
     * @var string Budget Name
     */
    public $BudgetName;

    /**
     * @var string DAY, MONTH, QUARTER, YEAR
     */
    public $CycleType;

    /**
     * @var string Validity start time 2025-01-01
     */
    public $PeriodBegin;

    /**
     * @var string Validity End Time 2025-12-01
     */
    public $PeriodEnd;

    /**
     * @var string FIX fixed value, CYCLE different value
     */
    public $PlanType;

    /**
     * @var string Budget amount limit 
Set as a fixed value when the schedule type is fixed budget.
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
     */
    public $BudgetQuota;

    /**
     * @var string BILL System bill, CONSUMPTION Consumption bill
     */
    public $BillType;

    /**
     * @var string COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (pre-tax)
     */
    public $FeeType;

    /**
     * @var array threshold alert
     */
    public $WarnJson;

    /**
     * @var string Budget remark
     */
    public $BudgetNote;

    /**
     * @var BudgetConditionsForm Budget dimension range condition
     */
    public $DimensionsRange;

    /**
     * @var array fluctuation alert
     */
    public $WaveThresholdJson;

    /**
     * @param string $BudgetId Budget project id
     * @param string $BudgetName Budget Name
     * @param string $CycleType DAY, MONTH, QUARTER, YEAR
     * @param string $PeriodBegin Validity start time 2025-01-01
     * @param string $PeriodEnd Validity End Time 2025-12-01
     * @param string $PlanType FIX fixed value, CYCLE different value
     * @param string $BudgetQuota Budget amount limit 
Set as a fixed value when the schedule type is fixed budget.
When the schedule type is CYCLE (budget planning), pass [{"dateDesc":"2025-07","quota":"1000"},{"dateDesc":"2025-08","quota":"2000"}].
     * @param string $BillType BILL System bill, CONSUMPTION Consumption bill
     * @param string $FeeType COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (pre-tax)
     * @param array $WarnJson threshold alert
     * @param string $BudgetNote Budget remark
     * @param BudgetConditionsForm $DimensionsRange Budget dimension range condition
     * @param array $WaveThresholdJson fluctuation alert
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
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
