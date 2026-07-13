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
 * Query returns complete budget information
 *
 * @method string getBudgetName() Obtain Budget Name
 * @method void setBudgetName(string $BudgetName) Set Budget Name
 * @method string getBudgetQuota() Obtain Budget limit
 * @method void setBudgetQuota(string $BudgetQuota) Set Budget limit
 * @method string getCycleType() Obtain DAY, MONTH, QUARTER, YEAR
 * @method void setCycleType(string $CycleType) Set DAY, MONTH, QUARTER, YEAR
 * @method string getBillType() Obtain BILL System bill, CONSUMPTION Consumption bill
 * @method void setBillType(string $BillType) Set BILL System bill, CONSUMPTION Consumption bill
 * @method string getFeeType() Obtain COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
 * @method void setFeeType(string $FeeType) Set COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
 * @method string getPeriodBegin() Obtain Validity start time 2025-01-01
 * @method void setPeriodBegin(string $PeriodBegin) Set Validity start time 2025-01-01
 * @method string getPeriodEnd() Obtain Validity end time 2025-12-01
 * @method void setPeriodEnd(string $PeriodEnd) Set Validity end time 2025-12-01
 * @method string getDimensions() Obtain COST,USAGE,RI,SP
 * @method void setDimensions(string $Dimensions) Set COST,USAGE,RI,SP
 * @method string getPlanType() Obtain FIX fixed value, CYCLE different value
 * @method void setPlanType(string $PlanType) Set FIX fixed value, CYCLE different value
 * @method array getWarnJson() Obtain threshold alert
 * @method void setWarnJson(array $WarnJson) Set threshold alert
 * @method integer getPayerUin() Obtain User UIN
 * @method void setPayerUin(integer $PayerUin) Set User UIN
 * @method array getWaveThresholdJson() Obtain fluctuation alert
 * @method void setWaveThresholdJson(array $WaveThresholdJson) Set fluctuation alert
 * @method string getBudgetNote() Obtain Budget remark
 * @method void setBudgetNote(string $BudgetNote) Set Budget remark
 * @method string getSendDetail() Obtain Custom sending object information
 * @method void setSendDetail(string $SendDetail) Set Custom sending object information
 * @method integer getDefaultMode() Obtain Default uin sent
 * @method void setDefaultMode(integer $DefaultMode) Set Default uin sent
 * @method string getTemplateType() Obtain CUS custom budget, ZERO_COST zero-cost budget template, BY_MONTH monthly cost budget template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTemplateType(string $TemplateType) Set CUS custom budget, ZERO_COST zero-cost budget template, BY_MONTH monthly cost budget template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMoneyStatus() Obtain (1, "Not over budget")
(2, "Overspend")
 * @method void setMoneyStatus(integer $MoneyStatus) Set (1, "Not over budget")
(2, "Overspend")
 * @method integer getRemindTimes() Obtain Reminder count
 * @method void setRemindTimes(integer $RemindTimes) Set Reminder count
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update budget time
 * @method void setUpdateTime(string $UpdateTime) Set Update budget time
 * @method string getBudgetId() Obtain Associated Id of the budget
 * @method void setBudgetId(string $BudgetId) Set Associated Id of the budget
 * @method string getHasForecast() Obtain NO_FORECAST (Not set)
FORECAST_NO_DATA (Set up prediction but no data)
FORECAST_HAS_DATA (Set up prediction with predictive data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasForecast(string $HasForecast) Set NO_FORECAST (Not set)
FORECAST_NO_DATA (Set up prediction but no data)
FORECAST_HAS_DATA (Set up prediction with predictive data)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getForecastCost() Obtain predicted fee
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForecastCost(string $ForecastCost) Set predicted fee
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getForecastProgress() Obtain Projection progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForecastProgress(string $ForecastProgress) Set Projection progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealCost() Obtain actual fee
 * @method void setRealCost(string $RealCost) Set actual fee
 * @method array getBudgetSendInfoForm() Obtain Custom send
 * @method void setBudgetSendInfoForm(array $BudgetSendInfoForm) Set Custom send
 * @method string getCurDateDesc() Obtain current cycle
 * @method void setCurDateDesc(string $CurDateDesc) Set current cycle
 * @method string getBudgetStatus() Obtain EXPIRED
ACTIVE
UNACTIVATED Invalid
ACTIVATED To be effective
 * @method void setBudgetStatus(string $BudgetStatus) Set EXPIRED
ACTIVE
UNACTIVATED Invalid
ACTIVATED To be effective
 * @method BudgetConditionsForm getDimensionsRange() Obtain Budget dimension range condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDimensionsRange(BudgetConditionsForm $DimensionsRange) Set Budget dimension range condition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBudgetProgress() Obtain Budget progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBudgetProgress(string $BudgetProgress) Set Budget progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBudgetQuotaJson() Obtain Budget Type is set to budget planning and returns the budget limit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBudgetQuotaJson(array $BudgetQuotaJson) Set Budget Type is set to budget planning and returns the budget limit
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BudgetExtend extends AbstractModel
{
    /**
     * @var string Budget Name
     */
    public $BudgetName;

    /**
     * @var string Budget limit
     */
    public $BudgetQuota;

    /**
     * @var string DAY, MONTH, QUARTER, YEAR
     */
    public $CycleType;

    /**
     * @var string BILL System bill, CONSUMPTION Consumption bill
     */
    public $BillType;

    /**
     * @var string COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
     */
    public $FeeType;

    /**
     * @var string Validity start time 2025-01-01
     */
    public $PeriodBegin;

    /**
     * @var string Validity end time 2025-12-01
     */
    public $PeriodEnd;

    /**
     * @var string COST,USAGE,RI,SP
     */
    public $Dimensions;

    /**
     * @var string FIX fixed value, CYCLE different value
     */
    public $PlanType;

    /**
     * @var array threshold alert
     */
    public $WarnJson;

    /**
     * @var integer User UIN
     */
    public $PayerUin;

    /**
     * @var array fluctuation alert
     */
    public $WaveThresholdJson;

    /**
     * @var string Budget remark
     */
    public $BudgetNote;

    /**
     * @var string Custom sending object information
     */
    public $SendDetail;

    /**
     * @var integer Default uin sent
     */
    public $DefaultMode;

    /**
     * @var string CUS custom budget, ZERO_COST zero-cost budget template, BY_MONTH monthly cost budget template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TemplateType;

    /**
     * @var integer (1, "Not over budget")
(2, "Overspend")
     */
    public $MoneyStatus;

    /**
     * @var integer Reminder count
     */
    public $RemindTimes;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update budget time
     */
    public $UpdateTime;

    /**
     * @var string Associated Id of the budget
     */
    public $BudgetId;

    /**
     * @var string NO_FORECAST (Not set)
FORECAST_NO_DATA (Set up prediction but no data)
FORECAST_HAS_DATA (Set up prediction with predictive data)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasForecast;

    /**
     * @var string predicted fee
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForecastCost;

    /**
     * @var string Projection progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForecastProgress;

    /**
     * @var string actual fee
     */
    public $RealCost;

    /**
     * @var array Custom send
     */
    public $BudgetSendInfoForm;

    /**
     * @var string current cycle
     */
    public $CurDateDesc;

    /**
     * @var string EXPIRED
ACTIVE
UNACTIVATED Invalid
ACTIVATED To be effective
     */
    public $BudgetStatus;

    /**
     * @var BudgetConditionsForm Budget dimension range condition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DimensionsRange;

    /**
     * @var string Budget progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BudgetProgress;

    /**
     * @var array Budget Type is set to budget planning and returns the budget limit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BudgetQuotaJson;

    /**
     * @param string $BudgetName Budget Name
     * @param string $BudgetQuota Budget limit
     * @param string $CycleType DAY, MONTH, QUARTER, YEAR
     * @param string $BillType BILL System bill, CONSUMPTION Consumption bill
     * @param string $FeeType COST Original price, REAL_COST Actual fee, CASH Cash, INCENTIVE Free credit, VOUCHER Voucher, TRANSFER Allocated fees (royalty amount), TAX Tax, AMOUNT_BEFORE_TAX Cash payment (before tax)
     * @param string $PeriodBegin Validity start time 2025-01-01
     * @param string $PeriodEnd Validity end time 2025-12-01
     * @param string $Dimensions COST,USAGE,RI,SP
     * @param string $PlanType FIX fixed value, CYCLE different value
     * @param array $WarnJson threshold alert
     * @param integer $PayerUin User UIN
     * @param array $WaveThresholdJson fluctuation alert
     * @param string $BudgetNote Budget remark
     * @param string $SendDetail Custom sending object information
     * @param integer $DefaultMode Default uin sent
     * @param string $TemplateType CUS custom budget, ZERO_COST zero-cost budget template, BY_MONTH monthly cost budget template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MoneyStatus (1, "Not over budget")
(2, "Overspend")
     * @param integer $RemindTimes Reminder count
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update budget time
     * @param string $BudgetId Associated Id of the budget
     * @param string $HasForecast NO_FORECAST (Not set)
FORECAST_NO_DATA (Set up prediction but no data)
FORECAST_HAS_DATA (Set up prediction with predictive data)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ForecastCost predicted fee
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ForecastProgress Projection progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealCost actual fee
     * @param array $BudgetSendInfoForm Custom send
     * @param string $CurDateDesc current cycle
     * @param string $BudgetStatus EXPIRED
ACTIVE
UNACTIVATED Invalid
ACTIVATED To be effective
     * @param BudgetConditionsForm $DimensionsRange Budget dimension range condition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BudgetProgress Budget progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BudgetQuotaJson Budget Type is set to budget planning and returns the budget limit
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
        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("BudgetQuota",$param) and $param["BudgetQuota"] !== null) {
            $this->BudgetQuota = $param["BudgetQuota"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PeriodBegin",$param) and $param["PeriodBegin"] !== null) {
            $this->PeriodBegin = $param["PeriodBegin"];
        }

        if (array_key_exists("PeriodEnd",$param) and $param["PeriodEnd"] !== null) {
            $this->PeriodEnd = $param["PeriodEnd"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("WarnJson",$param) and $param["WarnJson"] !== null) {
            $this->WarnJson = [];
            foreach ($param["WarnJson"] as $key => $value){
                $obj = new BudgetWarn();
                $obj->deserialize($value);
                array_push($this->WarnJson, $obj);
            }
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("WaveThresholdJson",$param) and $param["WaveThresholdJson"] !== null) {
            $this->WaveThresholdJson = [];
            foreach ($param["WaveThresholdJson"] as $key => $value){
                $obj = new WaveThresholdForm();
                $obj->deserialize($value);
                array_push($this->WaveThresholdJson, $obj);
            }
        }

        if (array_key_exists("BudgetNote",$param) and $param["BudgetNote"] !== null) {
            $this->BudgetNote = $param["BudgetNote"];
        }

        if (array_key_exists("SendDetail",$param) and $param["SendDetail"] !== null) {
            $this->SendDetail = $param["SendDetail"];
        }

        if (array_key_exists("DefaultMode",$param) and $param["DefaultMode"] !== null) {
            $this->DefaultMode = $param["DefaultMode"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("MoneyStatus",$param) and $param["MoneyStatus"] !== null) {
            $this->MoneyStatus = $param["MoneyStatus"];
        }

        if (array_key_exists("RemindTimes",$param) and $param["RemindTimes"] !== null) {
            $this->RemindTimes = $param["RemindTimes"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("HasForecast",$param) and $param["HasForecast"] !== null) {
            $this->HasForecast = $param["HasForecast"];
        }

        if (array_key_exists("ForecastCost",$param) and $param["ForecastCost"] !== null) {
            $this->ForecastCost = $param["ForecastCost"];
        }

        if (array_key_exists("ForecastProgress",$param) and $param["ForecastProgress"] !== null) {
            $this->ForecastProgress = $param["ForecastProgress"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("BudgetSendInfoForm",$param) and $param["BudgetSendInfoForm"] !== null) {
            $this->BudgetSendInfoForm = [];
            foreach ($param["BudgetSendInfoForm"] as $key => $value){
                $obj = new BudgetSendInfoDto();
                $obj->deserialize($value);
                array_push($this->BudgetSendInfoForm, $obj);
            }
        }

        if (array_key_exists("CurDateDesc",$param) and $param["CurDateDesc"] !== null) {
            $this->CurDateDesc = $param["CurDateDesc"];
        }

        if (array_key_exists("BudgetStatus",$param) and $param["BudgetStatus"] !== null) {
            $this->BudgetStatus = $param["BudgetStatus"];
        }

        if (array_key_exists("DimensionsRange",$param) and $param["DimensionsRange"] !== null) {
            $this->DimensionsRange = new BudgetConditionsForm();
            $this->DimensionsRange->deserialize($param["DimensionsRange"]);
        }

        if (array_key_exists("BudgetProgress",$param) and $param["BudgetProgress"] !== null) {
            $this->BudgetProgress = $param["BudgetProgress"];
        }

        if (array_key_exists("BudgetQuotaJson",$param) and $param["BudgetQuotaJson"] !== null) {
            $this->BudgetQuotaJson = [];
            foreach ($param["BudgetQuotaJson"] as $key => $value){
                $obj = new BudgetPlan();
                $obj->deserialize($value);
                array_push($this->BudgetQuotaJson, $obj);
            }
        }
    }
}
