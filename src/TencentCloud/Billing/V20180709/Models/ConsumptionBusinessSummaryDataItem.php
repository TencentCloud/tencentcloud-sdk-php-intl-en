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
 * Consumption details summarized by product
 *
 * @method string getBusinessCode() Obtain Product name code
 * @method void setBusinessCode(string $BusinessCode) Set Product name code
 * @method string getBusinessCodeName() Obtain Product name
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name
 * @method string getRealTotalCost() Obtain Discounted total price
 * @method void setRealTotalCost(string $RealTotalCost) Set Discounted total price
 * @method ConsumptionSummaryTrend getTrend() Obtain Cost trend
 * @method void setTrend(ConsumptionSummaryTrend $Trend) Set Cost trend
 * @method string getCashPayAmount() Obtain Cash
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash
 * @method string getIncentivePayAmount() Obtain Bonus
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Bonus
 * @method string getVoucherPayAmount() Obtain Voucher
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher
 * @method string getTransferPayAmount() Obtain Royalty amount
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty amount
 * @method string getAmountBeforeTax() Obtain Cash payment (pre-tax)
 * @method void setAmountBeforeTax(string $AmountBeforeTax) Set Cash payment (pre-tax)
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getRegionName() Obtain Region name (only shown in regional summary)
 * @method void setRegionName(string $RegionName) Set Region name (only shown in regional summary)
 */
class ConsumptionBusinessSummaryDataItem extends AbstractModel
{
    /**
     * @var string Product name code
     */
    public $BusinessCode;

    /**
     * @var string Product name
     */
    public $BusinessCodeName;

    /**
     * @var string Discounted total price
     */
    public $RealTotalCost;

    /**
     * @var ConsumptionSummaryTrend Cost trend
     */
    public $Trend;

    /**
     * @var string Cash
     */
    public $CashPayAmount;

    /**
     * @var string Bonus
     */
    public $IncentivePayAmount;

    /**
     * @var string Voucher
     */
    public $VoucherPayAmount;

    /**
     * @var string Royalty amount
     */
    public $TransferPayAmount;

    /**
     * @var string Cash payment (pre-tax)
     */
    public $AmountBeforeTax;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string Region name (only shown in regional summary)
     */
    public $RegionName;

    /**
     * @param string $BusinessCode Product name code
     * @param string $BusinessCodeName Product name
     * @param string $RealTotalCost Discounted total price
     * @param ConsumptionSummaryTrend $Trend Cost trend
     * @param string $CashPayAmount Cash
     * @param string $IncentivePayAmount Bonus
     * @param string $VoucherPayAmount Voucher
     * @param string $TransferPayAmount Royalty amount
     * @param string $AmountBeforeTax Cash payment (pre-tax)
     * @param string $Tax Tax
     * @param string $RegionName Region name (only shown in regional summary)
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new ConsumptionSummaryTrend();
            $this->Trend->deserialize($param["Trend"]);
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
