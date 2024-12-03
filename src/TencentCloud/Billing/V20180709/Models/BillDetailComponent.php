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
 * @method string getComponentCodeName() Obtain Component type: The component type of a product or service purchased, such as CVM instance components including CPU and memory.
 * @method void setComponentCodeName(string $ComponentCodeName) Set Component type: The component type of a product or service purchased, such as CVM instance components including CPU and memory.
 * @method string getItemCodeName() Obtain Component name: The specific component of a product or service purchased
 * @method void setItemCodeName(string $ItemCodeName) Set Component name: The specific component of a product or service purchased
 * @method string getSinglePrice() Obtain Component list price: The listed unit price of a component. If a customer has applied for a fixed preferential price or contract price, this parameter will not be displayed by default.
 * @method void setSinglePrice(string $SinglePrice) Set Component list price: The listed unit price of a component. If a customer has applied for a fixed preferential price or contract price, this parameter will not be displayed by default.
 * @method string getSpecifiedPrice() Obtain Specified price of a component. This parameter has been deprecated.
 * @method void setSpecifiedPrice(string $SpecifiedPrice) Set Specified price of a component. This parameter has been deprecated.
 * @method string getPriceUnit() Obtain Component price measurement unit: The unit of measurement for a component price, which is composed of USD, usage unit, and duration unit.
 * @method void setPriceUnit(string $PriceUnit) Set Component price measurement unit: The unit of measurement for a component price, which is composed of USD, usage unit, and duration unit.
 * @method string getUsedAmount() Obtain Component usage: The actually settled usage of a component, which is "Raw usage - Deducted usage (including packages)".
 * @method void setUsedAmount(string $UsedAmount) Set Component usage: The actually settled usage of a component, which is "Raw usage - Deducted usage (including packages)".
 * @method string getUsedAmountUnit() Obtain Component usage unit: The unit of measurement for component usage
 * @method void setUsedAmountUnit(string $UsedAmountUnit) Set Component usage unit: The unit of measurement for component usage
 * @method string getRealTotalMeasure() Obtain Raw usage/duration: The raw usage/duration of a component before deduction. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealTotalMeasure(string $RealTotalMeasure) Set Raw usage/duration: The raw usage/duration of a component before deduction. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeductedMeasure() Obtain Deducted usage/duration (including packages): The usage/duration deducted with a package. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeductedMeasure(string $DeductedMeasure) Set Deducted usage/duration (including packages): The usage/duration deducted with a package. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeSpan() Obtain Usage duration: The resource usage duration
 * @method void setTimeSpan(string $TimeSpan) Set Usage duration: The resource usage duration
 * @method string getTimeUnitName() Obtain Duration unit: The unit of measurement for usage duration
 * @method void setTimeUnitName(string $TimeUnitName) Set Duration unit: The unit of measurement for usage duration
 * @method string getCost() Obtain Original cost: The original cost of a resource, which is "List price x Usage x Usage duration". If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
 * @method void setCost(string $Cost) Set Original cost: The original cost of a resource, which is "List price x Usage x Usage duration". If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
 * @method string getDiscount() Obtain Discount multiplier: The discount multiplier applied to the cost of the resource. If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
 * @method void setDiscount(string $Discount) Set Discount multiplier: The discount multiplier applied to the cost of the resource. If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
 * @method string getReduceType() Obtain Offer type
 * @method void setReduceType(string $ReduceType) Set Offer type
 * @method string getRealCost() Obtain Total amount after discount: Total amount after discount = (Original cost - RI deduction (cost) - SP deduction (cost)) x Discount multiplier
 * @method void setRealCost(string $RealCost) Set Total amount after discount: Total amount after discount = (Original cost - RI deduction (cost) - SP deduction (cost)) x Discount multiplier
 * @method string getVoucherPayAmount() Obtain Voucher payment: The voucher deduction amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment: The voucher deduction amount
 * @method string getCashPayAmount() Obtain Cash credit: The amount paid from the user's cash account

 * @method void setCashPayAmount(string $CashPayAmount) Set Cash credit: The amount paid from the user's cash account

 * @method string getIncentivePayAmount() Obtain Free credit: The amount paid with the user's free credit

 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit: The amount paid with the user's free credit

 * @method string getTransferPayAmount() Obtain Commission credit: The amount paid with the user's commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit: The amount paid with the user's commission credit. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getItemCode() Obtain Component type code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemCode(string $ItemCode) Set Component type code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentCode() Obtain Component name code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentCode(string $ComponentCode) Set Component name code. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContractPrice() Obtain Component contracted price: The contracted unit price of a component, which is "List price x Discount". Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContractPrice(string $ContractPrice) Set Component contracted price: The contracted unit price of a component, which is "List price x Discount". Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRiTimeSpan() Obtain RI deduction (duration): The usage duration deducted by RI. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiTimeSpan(string $RiTimeSpan) Set RI deduction (duration): The usage duration deducted by RI. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCostWithRI() Obtain RI deduction (cost): The amount deducted from the original cost by RI. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) Set RI deduction (cost): The amount deducted from the original cost by RI. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSPDeductionRate() Obtain Savings plan deduction rate: The discount multiplier that applies to the component based on the remaining commitment of the savings plan. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSPDeductionRate(string $SPDeductionRate) Set Savings plan deduction rate: The discount multiplier that applies to the component based on the remaining commitment of the savings plan. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSPDeduction() Obtain Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSPDeduction(string $SPDeduction) Set Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCostWithSP() Obtain SP deduction (cost): SP deduction (cost) = Cost deduction by SP / SP deduction rate. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) Set SP deduction (cost): SP deduction (cost) = Cost deduction by SP / SP deduction rate. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBlendedDiscount() Obtain Blended discount multiplier: The final discount multiplier that is applied after combining multiple discount types, which is "Total amount after discount / Original cost". Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBlendedDiscount(string $BlendedDiscount) Set Blended discount multiplier: The final discount multiplier that is applied after combining multiple discount types, which is "Total amount after discount / Original cost". Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getComponentConfig() Obtain Configuration description: The specification configuration of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentConfig(array $ComponentConfig) Set Configuration description: The specification configuration of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaxRate() Obtain The tax rate.
 * @method void setTaxRate(string $TaxRate) Set The tax rate.
 * @method string getTaxAmount() Obtain The tax amount.
 * @method void setTaxAmount(string $TaxAmount) Set The tax amount.
 * @method string getCurrency() Obtain The currency used for the settlement of a component.
 * @method void setCurrency(string $Currency) Set The currency used for the settlement of a component.
 */
class BillDetailComponent extends AbstractModel
{
    /**
     * @var string Component type: The component type of a product or service purchased, such as CVM instance components including CPU and memory.
     */
    public $ComponentCodeName;

    /**
     * @var string Component name: The specific component of a product or service purchased
     */
    public $ItemCodeName;

    /**
     * @var string Component list price: The listed unit price of a component. If a customer has applied for a fixed preferential price or contract price, this parameter will not be displayed by default.
     */
    public $SinglePrice;

    /**
     * @var string Specified price of a component. This parameter has been deprecated.
     * @deprecated
     */
    public $SpecifiedPrice;

    /**
     * @var string Component price measurement unit: The unit of measurement for a component price, which is composed of USD, usage unit, and duration unit.
     */
    public $PriceUnit;

    /**
     * @var string Component usage: The actually settled usage of a component, which is "Raw usage - Deducted usage (including packages)".
     */
    public $UsedAmount;

    /**
     * @var string Component usage unit: The unit of measurement for component usage
     */
    public $UsedAmountUnit;

    /**
     * @var string Raw usage/duration: The raw usage/duration of a component before deduction. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealTotalMeasure;

    /**
     * @var string Deducted usage/duration (including packages): The usage/duration deducted with a package. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeductedMeasure;

    /**
     * @var string Usage duration: The resource usage duration
     */
    public $TimeSpan;

    /**
     * @var string Duration unit: The unit of measurement for usage duration
     */
    public $TimeUnitName;

    /**
     * @var string Original cost: The original cost of a resource, which is "List price x Usage x Usage duration". If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     */
    public $Cost;

    /**
     * @var string Discount multiplier: The discount multiplier applied to the cost of the resource. If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     */
    public $Discount;

    /**
     * @var string Offer type
     */
    public $ReduceType;

    /**
     * @var string Total amount after discount: Total amount after discount = (Original cost - RI deduction (cost) - SP deduction (cost)) x Discount multiplier
     */
    public $RealCost;

    /**
     * @var string Voucher payment: The voucher deduction amount
     */
    public $VoucherPayAmount;

    /**
     * @var string Cash credit: The amount paid from the user's cash account

     */
    public $CashPayAmount;

    /**
     * @var string Free credit: The amount paid with the user's free credit

     */
    public $IncentivePayAmount;

    /**
     * @var string Commission credit: The amount paid with the user's commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var string Component type code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemCode;

    /**
     * @var string Component name code. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentCode;

    /**
     * @var string Component contracted price: The contracted unit price of a component, which is "List price x Discount". Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContractPrice;

    /**
     * @var string Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string RI deduction (duration): The usage duration deducted by RI. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiTimeSpan;

    /**
     * @var string RI deduction (cost): The amount deducted from the original cost by RI. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCostWithRI;

    /**
     * @var string Savings plan deduction rate: The discount multiplier that applies to the component based on the remaining commitment of the savings plan. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SPDeductionRate;

    /**
     * @var string Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SPDeduction;

    /**
     * @var string SP deduction (cost): SP deduction (cost) = Cost deduction by SP / SP deduction rate. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCostWithSP;

    /**
     * @var string Blended discount multiplier: The final discount multiplier that is applied after combining multiple discount types, which is "Total amount after discount / Original cost". Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BlendedDiscount;

    /**
     * @var array Configuration description: The specification configuration of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentConfig;

    /**
     * @var string The tax rate.
     */
    public $TaxRate;

    /**
     * @var string The tax amount.
     */
    public $TaxAmount;

    /**
     * @var string The currency used for the settlement of a component.
     */
    public $Currency;

    /**
     * @param string $ComponentCodeName Component type: The component type of a product or service purchased, such as CVM instance components including CPU and memory.
     * @param string $ItemCodeName Component name: The specific component of a product or service purchased
     * @param string $SinglePrice Component list price: The listed unit price of a component. If a customer has applied for a fixed preferential price or contract price, this parameter will not be displayed by default.
     * @param string $SpecifiedPrice Specified price of a component. This parameter has been deprecated.
     * @param string $PriceUnit Component price measurement unit: The unit of measurement for a component price, which is composed of USD, usage unit, and duration unit.
     * @param string $UsedAmount Component usage: The actually settled usage of a component, which is "Raw usage - Deducted usage (including packages)".
     * @param string $UsedAmountUnit Component usage unit: The unit of measurement for component usage
     * @param string $RealTotalMeasure Raw usage/duration: The raw usage/duration of a component before deduction. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeductedMeasure Deducted usage/duration (including packages): The usage/duration deducted with a package. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeSpan Usage duration: The resource usage duration
     * @param string $TimeUnitName Duration unit: The unit of measurement for usage duration
     * @param string $Cost Original cost: The original cost of a resource, which is "List price x Usage x Usage duration". If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     * @param string $Discount Discount multiplier: The discount multiplier applied to the cost of the resource. If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     * @param string $ReduceType Offer type
     * @param string $RealCost Total amount after discount: Total amount after discount = (Original cost - RI deduction (cost) - SP deduction (cost)) x Discount multiplier
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount
     * @param string $CashPayAmount Cash credit: The amount paid from the user's cash account

     * @param string $IncentivePayAmount Free credit: The amount paid with the user's free credit

     * @param string $TransferPayAmount Commission credit: The amount paid with the user's commission credit. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ItemCode Component type code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentCode Component name code. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ContractPrice Component contracted price: The contracted unit price of a component, which is "List price x Discount". Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RiTimeSpan RI deduction (duration): The usage duration deducted by RI. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCostWithRI RI deduction (cost): The amount deducted from the original cost by RI. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SPDeductionRate Savings plan deduction rate: The discount multiplier that applies to the component based on the remaining commitment of the savings plan. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SPDeduction Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCostWithSP SP deduction (cost): SP deduction (cost) = Cost deduction by SP / SP deduction rate. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BlendedDiscount Blended discount multiplier: The final discount multiplier that is applied after combining multiple discount types, which is "Total amount after discount / Original cost". Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ComponentConfig Configuration description: The specification configuration of an instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaxRate The tax rate.
     * @param string $TaxAmount The tax amount.
     * @param string $Currency The currency used for the settlement of a component.
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

        if (array_key_exists("RealTotalMeasure",$param) and $param["RealTotalMeasure"] !== null) {
            $this->RealTotalMeasure = $param["RealTotalMeasure"];
        }

        if (array_key_exists("DeductedMeasure",$param) and $param["DeductedMeasure"] !== null) {
            $this->DeductedMeasure = $param["DeductedMeasure"];
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

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
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

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = [];
            foreach ($param["ComponentConfig"] as $key => $value){
                $obj = new BillDetailComponentConfig();
                $obj->deserialize($value);
                array_push($this->ComponentConfig, $obj);
            }
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("TaxAmount",$param) and $param["TaxAmount"] !== null) {
            $this->TaxAmount = $param["TaxAmount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
