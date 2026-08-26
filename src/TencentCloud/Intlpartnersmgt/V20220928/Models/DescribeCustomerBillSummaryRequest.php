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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomerBillSummary request structure.
 *
 * @method integer getCustomerUin() Obtain <p>Sub-customer uin</p>
 * @method void setCustomerUin(integer $CustomerUin) Set <p>Sub-customer uin</p>
 * @method string getMonth() Obtain <p>Inquiry month, in the format of YYYY-MM, such as 2023-01</p>
 * @method void setMonth(string $Month) Set <p>Inquiry month, in the format of YYYY-MM, such as 2023-01</p>
 * @method string getPayMode() Obtain <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
 * @method void setPayMode(string $PayMode) Set <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
 * @method string getActionType() Obtain <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew: Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li></ul>
 * @method void setActionType(string $ActionType) Set <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew: Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li></ul>
 * @method string getIsConfirmed() Obtain <p>Payment Status<br>0: case-insensitive<br>1: paid<br>2: unpaid</p>
 * @method void setIsConfirmed(string $IsConfirmed) Set <p>Payment Status<br>0: case-insensitive<br>1: paid<br>2: unpaid</p>
 */
class DescribeCustomerBillSummaryRequest extends AbstractModel
{
    /**
     * @var integer <p>Sub-customer uin</p>
     */
    public $CustomerUin;

    /**
     * @var string <p>Inquiry month, in the format of YYYY-MM, such as 2023-01</p>
     */
    public $Month;

    /**
     * @var string <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew: Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li></ul>
     */
    public $ActionType;

    /**
     * @var string <p>Payment Status<br>0: case-insensitive<br>1: paid<br>2: unpaid</p>
     */
    public $IsConfirmed;

    /**
     * @param integer $CustomerUin <p>Sub-customer uin</p>
     * @param string $Month <p>Inquiry month, in the format of YYYY-MM, such as 2023-01</p>
     * @param string $PayMode <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
     * @param string $ActionType <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew: Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li></ul>
     * @param string $IsConfirmed <p>Payment Status<br>0: case-insensitive<br>1: paid<br>2: unpaid</p>
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
        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("IsConfirmed",$param) and $param["IsConfirmed"] !== null) {
            $this->IsConfirmed = $param["IsConfirmed"];
        }
    }
}
