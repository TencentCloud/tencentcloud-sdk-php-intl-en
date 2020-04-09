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
 * @method string getItemCode() Obtain 
 * @method void setItemCode(string $ItemCode) Set 
 * @method string getComponentCode() Obtain 
 * @method void setComponentCode(string $ComponentCode) Set 
 * @method string getContractPrice() Obtain 
 * @method void setContractPrice(string $ContractPrice) Set 
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
     * @var string 
     */
    public $ItemCode;

    /**
     * @var string 
     */
    public $ComponentCode;

    /**
     * @var string 
     */
    public $ContractPrice;

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
     * @param string $ItemCode 
     * @param string $ComponentCode 
     * @param string $ContractPrice 
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
    }
}
