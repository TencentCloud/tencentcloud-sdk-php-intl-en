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
 * Detailed summary of the cost allocation bill by business
 *
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a cost allocation unit
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a cost allocation unit
 * @method string getTreeNodeUniqKeyName() Obtain Name of a cost allocation unit
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) Set Name of a cost allocation unit
 * @method string getBillDate() Obtain Date: Settlement date
 * @method void setBillDate(string $BillDate) Set Date: Settlement date
 * @method string getGatherCashPayAmount() Obtain Collected fees (cash): Cash directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherCashPayAmount(string $GatherCashPayAmount) Set Collected fees (cash): Cash directly collected to the cost allocation unit based on the collection rules
 * @method string getGatherVoucherPayAmount() Obtain Collected fees (voucher): Resource vouchers directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherVoucherPayAmount(string $GatherVoucherPayAmount) Set Collected fees (voucher): Resource vouchers directly collected to the cost allocation unit based on the collection rules
 * @method string getGatherIncentivePayAmount() Obtain Collected fees (free credit): Resource free credit directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherIncentivePayAmount(string $GatherIncentivePayAmount) Set Collected fees (free credit): Resource free credit directly collected to the cost allocation unit based on the collection rules
 * @method string getGatherTransferPayAmount() Obtain Collected fees (royalty amount): Resource royalty amount directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherTransferPayAmount(string $GatherTransferPayAmount) Set Collected fees (royalty amount): Resource royalty amount directly collected to the cost allocation unit based on the collection rules
 * @method string getAllocateCashPayAmount() Obtain Allocated fees (cash): Resource cash allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateCashPayAmount(string $AllocateCashPayAmount) Set Allocated fees (cash): Resource cash allocated to the cost allocation unit based on the allocation rules
 * @method string getAllocateVoucherPayAmount() Obtain Allocated fees (voucher): Resource vouchers allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateVoucherPayAmount(string $AllocateVoucherPayAmount) Set Allocated fees (voucher): Resource vouchers allocated to the cost allocation unit based on the allocation rules
 * @method string getAllocateIncentivePayAmount() Obtain Allocated fees (free credit): Resource free credit allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateIncentivePayAmount(string $AllocateIncentivePayAmount) Set Allocated fees (free credit): Resource free credit allocated to the cost allocation unit based on the allocation rules
 * @method string getAllocateTransferPayAmount() Obtain Allocated fees (royalty amount): Resource royalty amount allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateTransferPayAmount(string $AllocateTransferPayAmount) Set Allocated fees (royalty amount): Resource royalty amount allocated to the cost allocation unit based on the allocation rules
 * @method string getTotalCashPayAmount() Obtain Total fees (cash): Total fees of the cost allocation unit, Collected Fees (Cash) + Allocated fees (Cash)
 * @method void setTotalCashPayAmount(string $TotalCashPayAmount) Set Total fees (cash): Total fees of the cost allocation unit, Collected Fees (Cash) + Allocated fees (Cash)
 * @method string getTotalVoucherPayAmount() Obtain Total fees (voucher): Total fees of the cost allocation unit, Collected Fees (Vouchers) + Allocated fees (Vouchers)
 * @method void setTotalVoucherPayAmount(string $TotalVoucherPayAmount) Set Total fees (voucher): Total fees of the cost allocation unit, Collected Fees (Vouchers) + Allocated fees (Vouchers)
 * @method string getTotalIncentivePayAmount() Obtain Total fees (free credit): Total fees of the cost allocation unit, Collected Fees (Free Credit) + Allocated fees (Free Credit)
 * @method void setTotalIncentivePayAmount(string $TotalIncentivePayAmount) Set Total fees (free credit): Total fees of the cost allocation unit, Collected Fees (Free Credit) + Allocated fees (Free Credit)
 * @method string getTotalTransferPayAmount() Obtain Total fees (royalty amount): Total fees of the cost allocation unit, Collected Fees (Royalty Amount) + Allocated fees (Royalty Amount)
 * @method void setTotalTransferPayAmount(string $TotalTransferPayAmount) Set Total fees (royalty amount): Total fees of the cost allocation unit, Collected Fees (Royalty Amount) + Allocated fees (Royalty Amount)
 * @method string getGatherRealCost() Obtain Collected fees (discounted total): Total resource amount after discount directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherRealCost(string $GatherRealCost) Set Collected fees (discounted total): Total resource amount after discount directly collected to the cost allocation unit based on the collection rules
 * @method string getAllocateRealCost() Obtain Allocated fees (discounted total): Total resource amount after discount allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateRealCost(string $AllocateRealCost) Set Allocated fees (discounted total): Total resource amount after discount allocated to the cost allocation unit based on the allocation rules
 * @method string getRealTotalCost() Obtain Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated fees (discounted total)
 * @method void setRealTotalCost(string $RealTotalCost) Set Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated fees (discounted total)
 * @method string getRatio() Obtain Proportion (discounted total): Total fees (discounted total) of the Cost Allocation Unit/Total Fees (discounted total) * 100%
 * @method void setRatio(string $Ratio) Set Proportion (discounted total): Total fees (discounted total) of the Cost Allocation Unit/Total Fees (discounted total) * 100%
 * @method string getTrend() Obtain Month-on-month ratio (discounted total): [Total fees (discounted total) of the cost allocation unit in this month - Total fees (discounted total) of the cost allocation unit in the previous month]/Total fees (discounted total) of the cost allocation unit in the previous month * 100%
 * @method void setTrend(string $Trend) Set Month-on-month ratio (discounted total): [Total fees (discounted total) of the cost allocation unit in this month - Total fees (discounted total) of the cost allocation unit in the previous month]/Total fees (discounted total) of the cost allocation unit in the previous month * 100%
 * @method string getTrendType() Obtain Sequential Comparison Arrow
upward - Upward
downward - Downward
none - Stable
 * @method void setTrendType(string $TrendType) Set Sequential Comparison Arrow
upward - Upward
downward - Downward
none - Stable
 * @method string getBusinessCode() Obtain Product code
 * @method void setBusinessCode(string $BusinessCode) Set Product code
 * @method string getBusinessCodeName() Obtain Product name: Various cloud products purchased by users
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: Various cloud products purchased by users
 * @method string getTotalCost() Obtain Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
 * @method void setTotalCost(string $TotalCost) Set Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
 * @method string getRICost() Obtain Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
 * @method void setRICost(string $RICost) Set Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
 * @method string getSPCost() Obtain Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
 * @method void setSPCost(string $SPCost) Set Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
 * @method string getCashPayAmount() Obtain Cash account expenditure (CNY): The amount paid through the cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash account expenditure (CNY): The amount paid through the cash account
 * @method string getVoucherPayAmount() Obtain Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)

 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)

 * @method string getIncentivePayAmount() Obtain Gift account expenditure (CNY): The amount paid using free credits
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Gift account expenditure (CNY): The amount paid using free credits
 * @method string getTransferPayAmount() Obtain Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method string getAllocationRealTotalCost() Obtain Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method void setAllocationRealTotalCost(string $AllocationRealTotalCost) Set Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method string getGatherTax() Obtain Collected fees (tax): Tax directly collected to the cost allocation unit based on the collection rules
 * @method void setGatherTax(string $GatherTax) Set Collected fees (tax): Tax directly collected to the cost allocation unit based on the collection rules
 * @method string getAllocateTax() Obtain Allocated fees (tax): Resource tax allocated to the cost allocation unit based on the allocation rules
 * @method void setAllocateTax(string $AllocateTax) Set Allocated fees (tax): Resource tax allocated to the cost allocation unit based on the allocation rules
 * @method string getTotalTax() Obtain Total fees (tax): Total fees of the cost allocation unit, Collected Fees (Tax) + Allocated fees (Tax)
 * @method void setTotalTax(string $TotalTax) Set Total fees (tax): Total fees of the cost allocation unit, Collected Fees (Tax) + Allocated fees (Tax)
 * @method string getGatherCostBeforeTax() Obtain GatherCostBeforeTax
 * @method void setGatherCostBeforeTax(string $GatherCostBeforeTax) Set GatherCostBeforeTax
 * @method string getAllocateCostBeforeTax() Obtain AllocateCostBeforeTax
 * @method void setAllocateCostBeforeTax(string $AllocateCostBeforeTax) Set AllocateCostBeforeTax
 * @method string getTotalCostBeforeTax() Obtain TotalCostBeforeTax
 * @method void setTotalCostBeforeTax(string $TotalCostBeforeTax) Set TotalCostBeforeTax
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getCostBeforeTax() Obtain CostBeforeTax
 * @method void setCostBeforeTax(string $CostBeforeTax) Set CostBeforeTax
 */
class AllocationSummaryByBusiness extends AbstractModel
{
    /**
     * @var string Unique identifier of a cost allocation unit
     */
    public $TreeNodeUniqKey;

    /**
     * @var string Name of a cost allocation unit
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var string Date: Settlement date
     */
    public $BillDate;

    /**
     * @var string Collected fees (cash): Cash directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherCashPayAmount;

    /**
     * @var string Collected fees (voucher): Resource vouchers directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherVoucherPayAmount;

    /**
     * @var string Collected fees (free credit): Resource free credit directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherIncentivePayAmount;

    /**
     * @var string Collected fees (royalty amount): Resource royalty amount directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherTransferPayAmount;

    /**
     * @var string Allocated fees (cash): Resource cash allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateCashPayAmount;

    /**
     * @var string Allocated fees (voucher): Resource vouchers allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateVoucherPayAmount;

    /**
     * @var string Allocated fees (free credit): Resource free credit allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateIncentivePayAmount;

    /**
     * @var string Allocated fees (royalty amount): Resource royalty amount allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateTransferPayAmount;

    /**
     * @var string Total fees (cash): Total fees of the cost allocation unit, Collected Fees (Cash) + Allocated fees (Cash)
     */
    public $TotalCashPayAmount;

    /**
     * @var string Total fees (voucher): Total fees of the cost allocation unit, Collected Fees (Vouchers) + Allocated fees (Vouchers)
     */
    public $TotalVoucherPayAmount;

    /**
     * @var string Total fees (free credit): Total fees of the cost allocation unit, Collected Fees (Free Credit) + Allocated fees (Free Credit)
     */
    public $TotalIncentivePayAmount;

    /**
     * @var string Total fees (royalty amount): Total fees of the cost allocation unit, Collected Fees (Royalty Amount) + Allocated fees (Royalty Amount)
     */
    public $TotalTransferPayAmount;

    /**
     * @var string Collected fees (discounted total): Total resource amount after discount directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherRealCost;

    /**
     * @var string Allocated fees (discounted total): Total resource amount after discount allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateRealCost;

    /**
     * @var string Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated fees (discounted total)
     */
    public $RealTotalCost;

    /**
     * @var string Proportion (discounted total): Total fees (discounted total) of the Cost Allocation Unit/Total Fees (discounted total) * 100%
     */
    public $Ratio;

    /**
     * @var string Month-on-month ratio (discounted total): [Total fees (discounted total) of the cost allocation unit in this month - Total fees (discounted total) of the cost allocation unit in the previous month]/Total fees (discounted total) of the cost allocation unit in the previous month * 100%
     */
    public $Trend;

    /**
     * @var string Sequential Comparison Arrow
upward - Upward
downward - Downward
none - Stable
     */
    public $TrendType;

    /**
     * @var string Product code
     */
    public $BusinessCode;

    /**
     * @var string Product name: Various cloud products purchased by users
     */
    public $BusinessCodeName;

    /**
     * @var string Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
     */
    public $TotalCost;

    /**
     * @var string Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
     */
    public $RICost;

    /**
     * @var string Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
     */
    public $SPCost;

    /**
     * @var string Cash account expenditure (CNY): The amount paid through the cash account
     */
    public $CashPayAmount;

    /**
     * @var string Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)

     */
    public $VoucherPayAmount;

    /**
     * @var string Gift account expenditure (CNY): The amount paid using free credits
     */
    public $IncentivePayAmount;

    /**
     * @var string Royalty account expenditure (CNY): The amount paid through the royalty account
     */
    public $TransferPayAmount;

    /**
     * @var string Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     */
    public $AllocationRealTotalCost;

    /**
     * @var string Collected fees (tax): Tax directly collected to the cost allocation unit based on the collection rules
     */
    public $GatherTax;

    /**
     * @var string Allocated fees (tax): Resource tax allocated to the cost allocation unit based on the allocation rules
     */
    public $AllocateTax;

    /**
     * @var string Total fees (tax): Total fees of the cost allocation unit, Collected Fees (Tax) + Allocated fees (Tax)
     */
    public $TotalTax;

    /**
     * @var string GatherCostBeforeTax
     */
    public $GatherCostBeforeTax;

    /**
     * @var string AllocateCostBeforeTax
     */
    public $AllocateCostBeforeTax;

    /**
     * @var string TotalCostBeforeTax
     */
    public $TotalCostBeforeTax;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string CostBeforeTax
     */
    public $CostBeforeTax;

    /**
     * @param string $TreeNodeUniqKey Unique identifier of a cost allocation unit
     * @param string $TreeNodeUniqKeyName Name of a cost allocation unit
     * @param string $BillDate Date: Settlement date
     * @param string $GatherCashPayAmount Collected fees (cash): Cash directly collected to the cost allocation unit based on the collection rules
     * @param string $GatherVoucherPayAmount Collected fees (voucher): Resource vouchers directly collected to the cost allocation unit based on the collection rules
     * @param string $GatherIncentivePayAmount Collected fees (free credit): Resource free credit directly collected to the cost allocation unit based on the collection rules
     * @param string $GatherTransferPayAmount Collected fees (royalty amount): Resource royalty amount directly collected to the cost allocation unit based on the collection rules
     * @param string $AllocateCashPayAmount Allocated fees (cash): Resource cash allocated to the cost allocation unit based on the allocation rules
     * @param string $AllocateVoucherPayAmount Allocated fees (voucher): Resource vouchers allocated to the cost allocation unit based on the allocation rules
     * @param string $AllocateIncentivePayAmount Allocated fees (free credit): Resource free credit allocated to the cost allocation unit based on the allocation rules
     * @param string $AllocateTransferPayAmount Allocated fees (royalty amount): Resource royalty amount allocated to the cost allocation unit based on the allocation rules
     * @param string $TotalCashPayAmount Total fees (cash): Total fees of the cost allocation unit, Collected Fees (Cash) + Allocated fees (Cash)
     * @param string $TotalVoucherPayAmount Total fees (voucher): Total fees of the cost allocation unit, Collected Fees (Vouchers) + Allocated fees (Vouchers)
     * @param string $TotalIncentivePayAmount Total fees (free credit): Total fees of the cost allocation unit, Collected Fees (Free Credit) + Allocated fees (Free Credit)
     * @param string $TotalTransferPayAmount Total fees (royalty amount): Total fees of the cost allocation unit, Collected Fees (Royalty Amount) + Allocated fees (Royalty Amount)
     * @param string $GatherRealCost Collected fees (discounted total): Total resource amount after discount directly collected to the cost allocation unit based on the collection rules
     * @param string $AllocateRealCost Allocated fees (discounted total): Total resource amount after discount allocated to the cost allocation unit based on the allocation rules
     * @param string $RealTotalCost Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated fees (discounted total)
     * @param string $Ratio Proportion (discounted total): Total fees (discounted total) of the Cost Allocation Unit/Total Fees (discounted total) * 100%
     * @param string $Trend Month-on-month ratio (discounted total): [Total fees (discounted total) of the cost allocation unit in this month - Total fees (discounted total) of the cost allocation unit in the previous month]/Total fees (discounted total) of the cost allocation unit in the previous month * 100%
     * @param string $TrendType Sequential Comparison Arrow
upward - Upward
downward - Downward
none - Stable
     * @param string $BusinessCode Product code
     * @param string $BusinessCodeName Product name: Various cloud products purchased by users
     * @param string $TotalCost Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
     * @param string $RICost Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
     * @param string $SPCost Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
     * @param string $CashPayAmount Cash account expenditure (CNY): The amount paid through the cash account
     * @param string $VoucherPayAmount Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)

     * @param string $IncentivePayAmount Gift account expenditure (CNY): The amount paid using free credits
     * @param string $TransferPayAmount Royalty account expenditure (CNY): The amount paid through the royalty account
     * @param string $AllocationRealTotalCost Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     * @param string $GatherTax Collected fees (tax): Tax directly collected to the cost allocation unit based on the collection rules
     * @param string $AllocateTax Allocated fees (tax): Resource tax allocated to the cost allocation unit based on the allocation rules
     * @param string $TotalTax Total fees (tax): Total fees of the cost allocation unit, Collected Fees (Tax) + Allocated fees (Tax)
     * @param string $GatherCostBeforeTax GatherCostBeforeTax
     * @param string $AllocateCostBeforeTax AllocateCostBeforeTax
     * @param string $TotalCostBeforeTax TotalCostBeforeTax
     * @param string $Tax Tax
     * @param string $CostBeforeTax CostBeforeTax
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
        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("GatherCashPayAmount",$param) and $param["GatherCashPayAmount"] !== null) {
            $this->GatherCashPayAmount = $param["GatherCashPayAmount"];
        }

        if (array_key_exists("GatherVoucherPayAmount",$param) and $param["GatherVoucherPayAmount"] !== null) {
            $this->GatherVoucherPayAmount = $param["GatherVoucherPayAmount"];
        }

        if (array_key_exists("GatherIncentivePayAmount",$param) and $param["GatherIncentivePayAmount"] !== null) {
            $this->GatherIncentivePayAmount = $param["GatherIncentivePayAmount"];
        }

        if (array_key_exists("GatherTransferPayAmount",$param) and $param["GatherTransferPayAmount"] !== null) {
            $this->GatherTransferPayAmount = $param["GatherTransferPayAmount"];
        }

        if (array_key_exists("AllocateCashPayAmount",$param) and $param["AllocateCashPayAmount"] !== null) {
            $this->AllocateCashPayAmount = $param["AllocateCashPayAmount"];
        }

        if (array_key_exists("AllocateVoucherPayAmount",$param) and $param["AllocateVoucherPayAmount"] !== null) {
            $this->AllocateVoucherPayAmount = $param["AllocateVoucherPayAmount"];
        }

        if (array_key_exists("AllocateIncentivePayAmount",$param) and $param["AllocateIncentivePayAmount"] !== null) {
            $this->AllocateIncentivePayAmount = $param["AllocateIncentivePayAmount"];
        }

        if (array_key_exists("AllocateTransferPayAmount",$param) and $param["AllocateTransferPayAmount"] !== null) {
            $this->AllocateTransferPayAmount = $param["AllocateTransferPayAmount"];
        }

        if (array_key_exists("TotalCashPayAmount",$param) and $param["TotalCashPayAmount"] !== null) {
            $this->TotalCashPayAmount = $param["TotalCashPayAmount"];
        }

        if (array_key_exists("TotalVoucherPayAmount",$param) and $param["TotalVoucherPayAmount"] !== null) {
            $this->TotalVoucherPayAmount = $param["TotalVoucherPayAmount"];
        }

        if (array_key_exists("TotalIncentivePayAmount",$param) and $param["TotalIncentivePayAmount"] !== null) {
            $this->TotalIncentivePayAmount = $param["TotalIncentivePayAmount"];
        }

        if (array_key_exists("TotalTransferPayAmount",$param) and $param["TotalTransferPayAmount"] !== null) {
            $this->TotalTransferPayAmount = $param["TotalTransferPayAmount"];
        }

        if (array_key_exists("GatherRealCost",$param) and $param["GatherRealCost"] !== null) {
            $this->GatherRealCost = $param["GatherRealCost"];
        }

        if (array_key_exists("AllocateRealCost",$param) and $param["AllocateRealCost"] !== null) {
            $this->AllocateRealCost = $param["AllocateRealCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = $param["Trend"];
        }

        if (array_key_exists("TrendType",$param) and $param["TrendType"] !== null) {
            $this->TrendType = $param["TrendType"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RICost",$param) and $param["RICost"] !== null) {
            $this->RICost = $param["RICost"];
        }

        if (array_key_exists("SPCost",$param) and $param["SPCost"] !== null) {
            $this->SPCost = $param["SPCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("AllocationRealTotalCost",$param) and $param["AllocationRealTotalCost"] !== null) {
            $this->AllocationRealTotalCost = $param["AllocationRealTotalCost"];
        }

        if (array_key_exists("GatherTax",$param) and $param["GatherTax"] !== null) {
            $this->GatherTax = $param["GatherTax"];
        }

        if (array_key_exists("AllocateTax",$param) and $param["AllocateTax"] !== null) {
            $this->AllocateTax = $param["AllocateTax"];
        }

        if (array_key_exists("TotalTax",$param) and $param["TotalTax"] !== null) {
            $this->TotalTax = $param["TotalTax"];
        }

        if (array_key_exists("GatherCostBeforeTax",$param) and $param["GatherCostBeforeTax"] !== null) {
            $this->GatherCostBeforeTax = $param["GatherCostBeforeTax"];
        }

        if (array_key_exists("AllocateCostBeforeTax",$param) and $param["AllocateCostBeforeTax"] !== null) {
            $this->AllocateCostBeforeTax = $param["AllocateCostBeforeTax"];
        }

        if (array_key_exists("TotalCostBeforeTax",$param) and $param["TotalCostBeforeTax"] !== null) {
            $this->TotalCostBeforeTax = $param["TotalCostBeforeTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("CostBeforeTax",$param) and $param["CostBeforeTax"] !== null) {
            $this->CostBeforeTax = $param["CostBeforeTax"];
        }
    }
}
