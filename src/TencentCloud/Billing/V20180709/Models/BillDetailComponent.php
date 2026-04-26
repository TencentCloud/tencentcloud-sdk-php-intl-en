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
 * @method string getRealTotalMeasure() Obtain Original usage/duration: The original usage of the component before deduction by resource packages.
 * @method void setRealTotalMeasure(string $RealTotalMeasure) Set Original usage/duration: The original usage of the component before deduction by resource packages.
 * @method string getDeductedMeasure() Obtain Deduction of usage/duration (including resource packages): The amount of usage/duration deducted by resource packages
 * @method void setDeductedMeasure(string $DeductedMeasure) Set Deduction of usage/duration (including resource packages): The amount of usage/duration deducted by resource packages
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

 * @method string getTransferPayAmount() Obtain Royalty account expenditure: The amount paid through the royalty account
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty account expenditure: The amount paid through the royalty account
 * @method string getItemCode() Obtain Component type code
 * @method void setItemCode(string $ItemCode) Set Component type code
 * @method string getComponentCode() Obtain Component name code
 * @method void setComponentCode(string $ComponentCode) Set Component name code
 * @method string getContractPrice() Obtain Component unit price: Discounted unit price of the component. Component unit price = list price * discount.
 * @method void setContractPrice(string $ContractPrice) Set Component unit price: Discounted unit price of the component. Component unit price = list price * discount.
 * @method string getInstanceType() Obtain Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. Normal instance display is not displayed by default.
 * @method void setInstanceType(string $InstanceType) Set Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. Normal instance display is not displayed by default.
 * @method string getRiTimeSpan() Obtain RI deduction duration: The duration of use deducted by reserved instances for this product or service.
 * @method void setRiTimeSpan(string $RiTimeSpan) Set RI deduction duration: The duration of use deducted by reserved instances for this product or service.
 * @method string getOriginalCostWithRI() Obtain Reserved Instance Deduction Component Original Price: The original price of a component deducted by reserved instances for this product or service
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) Set Reserved Instance Deduction Component Original Price: The original price of a component deducted by reserved instances for this product or service
 * @method string getSPDeductionRate() Obtain Savings plan deduction rate: The discount rate for this component within the available balance limit of the savings plan
 * @method void setSPDeductionRate(string $SPDeductionRate) Set Savings plan deduction rate: The discount rate for this component within the available balance limit of the savings plan
 * @method string getSPDeduction() Obtain Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSPDeduction(string $SPDeduction) Set Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCostWithSP() Obtain Original Price of Savings Plan Deduction Component: Savings Plan Deduction from Original Price = Deduction Amount of Savings Plan Package / Savings Plan Deduction Rate
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) Set Original Price of Savings Plan Deduction Component: Savings Plan Deduction from Original Price = Deduction Amount of Savings Plan Package / Savings Plan Deduction Rate
 * @method string getBlendedDiscount() Obtain Mixed discount rate: The final discount rate after integrating various discount deductions. Mixed Discount Rate = Discounted total price/Component original price.
 * @method void setBlendedDiscount(string $BlendedDiscount) Set Mixed discount rate: The final discount rate after integrating various discount deductions. Mixed Discount Rate = Discounted total price/Component original price.
 * @method array getComponentConfig() Obtain Configuration description: Information on specification of resource configuration
 * @method void setComponentConfig(array $ComponentConfig) Set Configuration description: Information on specification of resource configuration
 * @method string getTaxRate() Obtain tax rate
 * @method void setTaxRate(string $TaxRate) Set tax rate
 * @method string getTaxAmount() Obtain Tax.
 * @method void setTaxAmount(string $TaxAmount) Set Tax.
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
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
     * @var string Original usage/duration: The original usage of the component before deduction by resource packages.
     */
    public $RealTotalMeasure;

    /**
     * @var string Deduction of usage/duration (including resource packages): The amount of usage/duration deducted by resource packages
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
     * @var string Royalty account expenditure: The amount paid through the royalty account
     */
    public $TransferPayAmount;

    /**
     * @var string Component type code
     */
    public $ItemCode;

    /**
     * @var string Component name code
     */
    public $ComponentCode;

    /**
     * @var string Component unit price: Discounted unit price of the component. Component unit price = list price * discount.
     */
    public $ContractPrice;

    /**
     * @var string Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. Normal instance display is not displayed by default.
     */
    public $InstanceType;

    /**
     * @var string RI deduction duration: The duration of use deducted by reserved instances for this product or service.
     */
    public $RiTimeSpan;

    /**
     * @var string Reserved Instance Deduction Component Original Price: The original price of a component deducted by reserved instances for this product or service
     */
    public $OriginalCostWithRI;

    /**
     * @var string Savings plan deduction rate: The discount rate for this component within the available balance limit of the savings plan
     */
    public $SPDeductionRate;

    /**
     * @var string Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SPDeduction;

    /**
     * @var string Original Price of Savings Plan Deduction Component: Savings Plan Deduction from Original Price = Deduction Amount of Savings Plan Package / Savings Plan Deduction Rate
     */
    public $OriginalCostWithSP;

    /**
     * @var string Mixed discount rate: The final discount rate after integrating various discount deductions. Mixed Discount Rate = Discounted total price/Component original price.
     */
    public $BlendedDiscount;

    /**
     * @var array Configuration description: Information on specification of resource configuration
     */
    public $ComponentConfig;

    /**
     * @var string tax rate
     */
    public $TaxRate;

    /**
     * @var string Tax.
     */
    public $TaxAmount;

    /**
     * @var string Currency.
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
     * @param string $RealTotalMeasure Original usage/duration: The original usage of the component before deduction by resource packages.
     * @param string $DeductedMeasure Deduction of usage/duration (including resource packages): The amount of usage/duration deducted by resource packages
     * @param string $TimeSpan Usage duration: The resource usage duration
     * @param string $TimeUnitName Duration unit: The unit of measurement for usage duration
     * @param string $Cost Original cost: The original cost of a resource, which is "List price x Usage x Usage duration". If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     * @param string $Discount Discount multiplier: The discount multiplier applied to the cost of the resource. If a customer has applied for a fixed preferential price or contract price or is in a refund scenario, this parameter will not be displayed by default.
     * @param string $ReduceType Offer type
     * @param string $RealCost Total amount after discount: Total amount after discount = (Original cost - RI deduction (cost) - SP deduction (cost)) x Discount multiplier
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount
     * @param string $CashPayAmount Cash credit: The amount paid from the user's cash account

     * @param string $IncentivePayAmount Free credit: The amount paid with the user's free credit

     * @param string $TransferPayAmount Royalty account expenditure: The amount paid through the royalty account
     * @param string $ItemCode Component type code
     * @param string $ComponentCode Component name code
     * @param string $ContractPrice Component unit price: Discounted unit price of the component. Component unit price = list price * discount.
     * @param string $InstanceType Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. Normal instance display is not displayed by default.
     * @param string $RiTimeSpan RI deduction duration: The duration of use deducted by reserved instances for this product or service.
     * @param string $OriginalCostWithRI Reserved Instance Deduction Component Original Price: The original price of a component deducted by reserved instances for this product or service
     * @param string $SPDeductionRate Savings plan deduction rate: The discount rate for this component within the available balance limit of the savings plan
     * @param string $SPDeduction Cost deduction by SP. This parameter has been deprecated. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCostWithSP Original Price of Savings Plan Deduction Component: Savings Plan Deduction from Original Price = Deduction Amount of Savings Plan Package / Savings Plan Deduction Rate
     * @param string $BlendedDiscount Mixed discount rate: The final discount rate after integrating various discount deductions. Mixed Discount Rate = Discounted total price/Component original price.
     * @param array $ComponentConfig Configuration description: Information on specification of resource configuration
     * @param string $TaxRate tax rate
     * @param string $TaxAmount Tax.
     * @param string $Currency Currency.
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
