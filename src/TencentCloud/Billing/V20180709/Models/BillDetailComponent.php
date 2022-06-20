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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about components charged in the bill
 *
 * @method string getComponentCodeName() Obtain Component type: type of a resource component, e.g. memory, disk, etc.
 * @method void setComponentCodeName(string $ComponentCodeName) Set Component type: type of a resource component, e.g. memory, disk, etc.
 * @method string getItemCodeName() Obtain Component name: name of a resource component, e.g. TencentDB for MySQL-memory
 * @method void setItemCodeName(string $ItemCodeName) Set Component name: name of a resource component, e.g. TencentDB for MySQL-memory
 * @method string getSinglePrice() Obtain Component published price: original price of a resource component with the original granularity
 * @method void setSinglePrice(string $SinglePrice) Set Component published price: original price of a resource component with the original granularity
 * @method string getSpecifiedPrice() Obtain Specified price of the component
 * @method void setSpecifiedPrice(string $SpecifiedPrice) Set Specified price of the component
 * @method string getPriceUnit() Obtain Price unit
 * @method void setPriceUnit(string $PriceUnit) Set Price unit
 * @method string getUsedAmount() Obtain Component usage
 * @method void setUsedAmount(string $UsedAmount) Set Component usage
 * @method string getUsedAmountUnit() Obtain Component usage unit
 * @method void setUsedAmountUnit(string $UsedAmountUnit) Set Component usage unit
 * @method string getTimeSpan() Obtain Usage period
 * @method void setTimeSpan(string $TimeSpan) Set Usage period
 * @method string getTimeUnitName() Obtain Time unit
 * @method void setTimeUnitName(string $TimeUnitName) Set Time unit
 * @method string getCost() Obtain Original price of the component
 * @method void setCost(string $Cost) Set Original price of the component
 * @method string getDiscount() Obtain Discount rate
 * @method void setDiscount(string $Discount) Set Discount rate
 * @method string getReduceType() Obtain Offer type
 * @method void setReduceType(string $ReduceType) Set Offer type
 * @method string getRealCost() Obtain Total discounted price
 * @method void setRealCost(string $RealCost) Set Total discounted price
 * @method string getVoucherPayAmount() Obtain Amount paid in voucher
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Amount paid in voucher
 * @method string getCashPayAmount() Obtain Amount paid in cash
 * @method void setCashPayAmount(string $CashPayAmount) Set Amount paid in cash
 * @method string getIncentivePayAmount() Obtain Amount paid in trial credit
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Amount paid in trial credit
 * @method string getItemCode() Obtain Component type code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setItemCode(string $ItemCode) Set Component type code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getComponentCode() Obtain Component code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setComponentCode(string $ComponentCode) Set Component code
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getContractPrice() Obtain Contract price
 * @method void setContractPrice(string $ContractPrice) Set Contract price
 * @method string getInstanceType() Obtain The special instance (resource pack, reserved instance, savings plan, or spot instance) that is applied to deduction. Valid values:
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setInstanceType(string $InstanceType) Set The special instance (resource pack, reserved instance, savings plan, or spot instance) that is applied to deduction. Valid values:
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRiTimeSpan() Obtain The usage duration deducted by a reserved instance. The unit of measurement for deduction is the same as that for usage duration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRiTimeSpan(string $RiTimeSpan) Set The usage duration deducted by a reserved instance. The unit of measurement for deduction is the same as that for usage duration.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getOriginalCostWithRI() Obtain The amount deducted by a reserved instance based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) Set The amount deducted by a reserved instance based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSPDeductionRate() Obtain The discount multiplier that applies to the component based on the remaining commitment of the savings plan.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSPDeductionRate(string $SPDeductionRate) Set The discount multiplier that applies to the component based on the remaining commitment of the savings plan.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSPDeduction() Obtain The savings plan deduction amount.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSPDeduction(string $SPDeduction) Set The savings plan deduction amount.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getOriginalCostWithSP() Obtain The amount deducted by a savings plan based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) Set The amount deducted by a savings plan based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getBlendedDiscount() Obtain The blended discount multiplier that combines the official website discount, reserved instance discount, and savings plan discount. If no reserved instance and savings plan discounts are available, the blended discount multiplier equals the discount multiplier.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBlendedDiscount(string $BlendedDiscount) Set The blended discount multiplier that combines the official website discount, reserved instance discount, and savings plan discount. If no reserved instance and savings plan discounts are available, the blended discount multiplier equals the discount multiplier.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class BillDetailComponent extends AbstractModel
{
    /**
     * @var string Component type: type of a resource component, e.g. memory, disk, etc.
     */
    public $ComponentCodeName;

    /**
     * @var string Component name: name of a resource component, e.g. TencentDB for MySQL-memory
     */
    public $ItemCodeName;

    /**
     * @var string Component published price: original price of a resource component with the original granularity
     */
    public $SinglePrice;

    /**
     * @var string Specified price of the component
     */
    public $SpecifiedPrice;

    /**
     * @var string Price unit
     */
    public $PriceUnit;

    /**
     * @var string Component usage
     */
    public $UsedAmount;

    /**
     * @var string Component usage unit
     */
    public $UsedAmountUnit;

    /**
     * @var string Usage period
     */
    public $TimeSpan;

    /**
     * @var string Time unit
     */
    public $TimeUnitName;

    /**
     * @var string Original price of the component
     */
    public $Cost;

    /**
     * @var string Discount rate
     */
    public $Discount;

    /**
     * @var string Offer type
     */
    public $ReduceType;

    /**
     * @var string Total discounted price
     */
    public $RealCost;

    /**
     * @var string Amount paid in voucher
     */
    public $VoucherPayAmount;

    /**
     * @var string Amount paid in cash
     */
    public $CashPayAmount;

    /**
     * @var string Amount paid in trial credit
     */
    public $IncentivePayAmount;

    /**
     * @var string Component type code
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ItemCode;

    /**
     * @var string Component code
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ComponentCode;

    /**
     * @var string Contract price
     */
    public $ContractPrice;

    /**
     * @var string The special instance (resource pack, reserved instance, savings plan, or spot instance) that is applied to deduction. Valid values:
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $InstanceType;

    /**
     * @var string The usage duration deducted by a reserved instance. The unit of measurement for deduction is the same as that for usage duration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RiTimeSpan;

    /**
     * @var string The amount deducted by a reserved instance based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginalCostWithRI;

    /**
     * @var string The discount multiplier that applies to the component based on the remaining commitment of the savings plan.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SPDeductionRate;

    /**
     * @var string The savings plan deduction amount.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SPDeduction;

    /**
     * @var string The amount deducted by a savings plan based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginalCostWithSP;

    /**
     * @var string The blended discount multiplier that combines the official website discount, reserved instance discount, and savings plan discount. If no reserved instance and savings plan discounts are available, the blended discount multiplier equals the discount multiplier.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BlendedDiscount;

    /**
     * @param string $ComponentCodeName Component type: type of a resource component, e.g. memory, disk, etc.
     * @param string $ItemCodeName Component name: name of a resource component, e.g. TencentDB for MySQL-memory
     * @param string $SinglePrice Component published price: original price of a resource component with the original granularity
     * @param string $SpecifiedPrice Specified price of the component
     * @param string $PriceUnit Price unit
     * @param string $UsedAmount Component usage
     * @param string $UsedAmountUnit Component usage unit
     * @param string $TimeSpan Usage period
     * @param string $TimeUnitName Time unit
     * @param string $Cost Original price of the component
     * @param string $Discount Discount rate
     * @param string $ReduceType Offer type
     * @param string $RealCost Total discounted price
     * @param string $VoucherPayAmount Amount paid in voucher
     * @param string $CashPayAmount Amount paid in cash
     * @param string $IncentivePayAmount Amount paid in trial credit
     * @param string $ItemCode Component type code
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ComponentCode Component code
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ContractPrice Contract price
     * @param string $InstanceType The special instance (resource pack, reserved instance, savings plan, or spot instance) that is applied to deduction. Valid values:
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RiTimeSpan The usage duration deducted by a reserved instance. The unit of measurement for deduction is the same as that for usage duration.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginalCostWithRI The amount deducted by a reserved instance based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SPDeductionRate The discount multiplier that applies to the component based on the remaining commitment of the savings plan.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SPDeduction The savings plan deduction amount.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginalCostWithSP The amount deducted by a savings plan based on the original component cost.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $BlendedDiscount The blended discount multiplier that combines the official website discount, reserved instance discount, and savings plan discount. If no reserved instance and savings plan discounts are available, the blended discount multiplier equals the discount multiplier.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ComponentCodeName",$param) and $param["ComponentCodeName"] !== null) {
            $this->ComponentCodeName = $param["ComponentCodeName"];
        }

        if (array_key_exists("ItemCodeName",$param) and $param["ItemCodeName"] !== null) {
            $this->ItemCodeName = $param["ItemCodeName"];
        }

        if (array_key_exists("SinglePrice",$param) and $param["SinglePrice"] !== null) {
            $this->SinglePrice = $param["SinglePrice"];
        }

        if (array_key_exists("SpecifiedPrice",$param) and $param["SpecifiedPrice"] !== null) {
            $this->SpecifiedPrice = $param["SpecifiedPrice"];
        }

        if (array_key_exists("PriceUnit",$param) and $param["PriceUnit"] !== null) {
            $this->PriceUnit = $param["PriceUnit"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("UsedAmountUnit",$param) and $param["UsedAmountUnit"] !== null) {
            $this->UsedAmountUnit = $param["UsedAmountUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnitName",$param) and $param["TimeUnitName"] !== null) {
            $this->TimeUnitName = $param["TimeUnitName"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ContractPrice",$param) and $param["ContractPrice"] !== null) {
            $this->ContractPrice = $param["ContractPrice"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("RiTimeSpan",$param) and $param["RiTimeSpan"] !== null) {
            $this->RiTimeSpan = $param["RiTimeSpan"];
        }

        if (array_key_exists("OriginalCostWithRI",$param) and $param["OriginalCostWithRI"] !== null) {
            $this->OriginalCostWithRI = $param["OriginalCostWithRI"];
        }

        if (array_key_exists("SPDeductionRate",$param) and $param["SPDeductionRate"] !== null) {
            $this->SPDeductionRate = $param["SPDeductionRate"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("OriginalCostWithSP",$param) and $param["OriginalCostWithSP"] !== null) {
            $this->OriginalCostWithSP = $param["OriginalCostWithSP"];
        }

        if (array_key_exists("BlendedDiscount",$param) and $param["BlendedDiscount"] !== null) {
            $this->BlendedDiscount = $param["BlendedDiscount"];
        }
    }
}
