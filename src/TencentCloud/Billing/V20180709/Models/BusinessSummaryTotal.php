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
 * @method string getRealTotalCost() Obtain Total cost
 * @method void setRealTotalCost(string $RealTotalCost) Set Total cost
 * @method string getVoucherPayAmount() Obtain Voucher amount
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher amount
 * @method string getIncentivePayAmount() Obtain Trial credit amount
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Trial credit amount
 * @method string getCashPayAmount() Obtain Cash amount
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash amount
 */

/**
 *Summarize total cost by product
 */
class BusinessSummaryTotal extends AbstractModel
{
    /**
     * @var string Total cost
     */
    public $RealTotalCost;

    /**
     * @var string Voucher amount
     */
    public $VoucherPayAmount;

    /**
     * @var string Trial credit amount
     */
    public $IncentivePayAmount;

    /**
     * @var string Cash amount
     */
    public $CashPayAmount;
    /**
     * @param string $RealTotalCost Total cost
     * @param string $VoucherPayAmount Voucher amount
     * @param string $IncentivePayAmount Trial credit amount
     * @param string $CashPayAmount Cash amount
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

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }
    }
}
