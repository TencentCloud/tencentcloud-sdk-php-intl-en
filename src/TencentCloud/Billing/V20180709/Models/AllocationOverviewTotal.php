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
 * Total amount of a cost allocation bill
 *
 * @method string getRealTotalCost() Obtain Total fees: Total Fees (Cash) + Total Fees (Royalty Amount) + Total Fees (Free Credit) + Total Fees (Voucher)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealTotalCost(string $RealTotalCost) Set Total fees: Total Fees (Cash) + Total Fees (Royalty Amount) + Total Fees (Free Credit) + Total Fees (Voucher)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCashPayAmount() Obtain Cash: Total fees of cash
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash: Total fees of cash
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncentivePayAmount() Obtain Free credit: Total fees of free credit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit: Total fees of free credit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain Voucher: Total fees of voucher
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher: Total fees of voucher
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferPayAmount() Obtain Royalty amount: Total fees of royalty amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty amount: Total fees of royalty amount
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCostBeforeTax() Obtain Pre-tax price after discount
 * @method void setCostBeforeTax(string $CostBeforeTax) Set Pre-tax price after discount
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 */
class AllocationOverviewTotal extends AbstractModel
{
    /**
     * @var string Total fees: Total Fees (Cash) + Total Fees (Royalty Amount) + Total Fees (Free Credit) + Total Fees (Voucher)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealTotalCost;

    /**
     * @var string Cash: Total fees of cash
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CashPayAmount;

    /**
     * @var string Free credit: Total fees of free credit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncentivePayAmount;

    /**
     * @var string Voucher: Total fees of voucher
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Royalty amount: Total fees of royalty amount
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var string Pre-tax price after discount
     */
    public $CostBeforeTax;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @param string $RealTotalCost Total fees: Total Fees (Cash) + Total Fees (Royalty Amount) + Total Fees (Free Credit) + Total Fees (Voucher)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CashPayAmount Cash: Total fees of cash
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncentivePayAmount Free credit: Total fees of free credit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount Voucher: Total fees of voucher
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferPayAmount Royalty amount: Total fees of royalty amount
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CostBeforeTax Pre-tax price after discount
     * @param string $Tax Tax
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
        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
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

        if (array_key_exists("CostBeforeTax",$param) and $param["CostBeforeTax"] !== null) {
            $this->CostBeforeTax = $param["CostBeforeTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }
    }
}
