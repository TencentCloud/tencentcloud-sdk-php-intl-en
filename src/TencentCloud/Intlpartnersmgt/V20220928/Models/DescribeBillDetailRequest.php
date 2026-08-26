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
 * DescribeBillDetail request structure.
 *
 * @method string getMonth() Obtain <p>Query month, in the format of YYYY-MM, such as 2023-01</p>
 * @method void setMonth(string $Month) Set <p>Query month, in the format of YYYY-MM, such as 2023-01</p>
 * @method integer getPageSize() Obtain <p>Page parameter: number of entries per page. Value range: [1, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Page parameter: number of entries per page. Value range: [1, 200]</p>
 * @method integer getPage() Obtain <p>Page parameter: current page number. The minimum value is 1.</p>
 * @method void setPage(integer $Page) Set <p>Page parameter: current page number. The minimum value is 1.</p>
 * @method string getPayMode() Obtain <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
 * @method void setPayMode(string $PayMode) Set <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
 * @method string getActionType() Obtain <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew:  Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>recon_increase: Adjustment - compensation</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li><li>preDowngrade: Upgrade/Downgrade</li><li>svp_hour_pay: Hourly Savings Plan fee</li><li>recon_guarantee: Minimum spend deduction</li><li>pre_purchase: New yearly/monthly subscription</li><li>pre_renew: yearly/monthly subscription renewal</li><li>pre_upgrade: Upgrade/Downgrade</li><li>pre_downgrade: Upgrade/Downgrade</li></ul>
 * @method void setActionType(string $ActionType) Set <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew:  Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>recon_increase: Adjustment - compensation</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li><li>preDowngrade: Upgrade/Downgrade</li><li>svp_hour_pay: Hourly Savings Plan fee</li><li>recon_guarantee: Minimum spend deduction</li><li>pre_purchase: New yearly/monthly subscription</li><li>pre_renew: yearly/monthly subscription renewal</li><li>pre_upgrade: Upgrade/Downgrade</li><li>pre_downgrade: Upgrade/Downgrade</li></ul>
 */
class DescribeBillDetailRequest extends AbstractModel
{
    /**
     * @var string <p>Query month, in the format of YYYY-MM, such as 2023-01</p>
     */
    public $Month;

    /**
     * @var integer <p>Page parameter: number of entries per page. Value range: [1, 200]</p>
     */
    public $PageSize;

    /**
     * @var integer <p>Page parameter: current page number. The minimum value is 1.</p>
     */
    public $Page;

    /**
     * @var string <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
     */
    public $PayMode;

    /**
     * @var string <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew:  Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>recon_increase: Adjustment - compensation</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li><li>preDowngrade: Upgrade/Downgrade</li><li>svp_hour_pay: Hourly Savings Plan fee</li><li>recon_guarantee: Minimum spend deduction</li><li>pre_purchase: New yearly/monthly subscription</li><li>pre_renew: yearly/monthly subscription renewal</li><li>pre_upgrade: Upgrade/Downgrade</li><li>pre_downgrade: Upgrade/Downgrade</li></ul>
     */
    public $ActionType;

    /**
     * @param string $Month <p>Query month, in the format of YYYY-MM, such as 2023-01</p>
     * @param integer $PageSize <p>Page parameter: number of entries per page. Value range: [1, 200]</p>
     * @param integer $Page <p>Page parameter: current page number. The minimum value is 1.</p>
     * @param string $PayMode <p>Billing mode</p><p>Enumeration values:</p><ul><li>prePay: yearly/monthly subscription</li><li>postPay: Pay-As-You-Go resources</li></ul>
     * @param string $ActionType <p>Transaction type</p><p>Enumeration values:</p><ul><li>prepay_purchase: Purchase</li><li>prepay_renew:  Renewal</li><li>prepay_modify: Upgrade/Downgrade</li><li>prepay_return: yearly/monthly subscription refund</li><li>postpay_deduct: Pay-as-you-go</li><li>postpay_deduct_h: Hourly settlement</li><li>postpay_deduct_d: Daily settlement</li><li>postpay_deduct_m: Monthly settlement</li><li>offline_deduct: Offline project deduction</li><li>online_deduct: Offline product deduction</li><li>recon_deduct: Adjustment - deduction</li><li>recon_increase: Adjustment - compensation</li><li>ripay_purchase: One-off RI Fee</li><li>postpay_deduct_s: Spot</li><li>ri_hour_pay: Hourly RI fee</li><li>prePurchase: New yearly/monthly subscription</li><li>preRenew: yearly/monthly subscription renewal</li><li>preUpgrade: Upgrade/Downgrade</li><li>preDowngrade: Upgrade/Downgrade</li><li>svp_hour_pay: Hourly Savings Plan fee</li><li>recon_guarantee: Minimum spend deduction</li><li>pre_purchase: New yearly/monthly subscription</li><li>pre_renew: yearly/monthly subscription renewal</li><li>pre_upgrade: Upgrade/Downgrade</li><li>pre_downgrade: Upgrade/Downgrade</li></ul>
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
