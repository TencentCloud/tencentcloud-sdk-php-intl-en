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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDetail request structure.
 *
 * @method string getMonth() Obtain Inquiry month, in the format of YYYY-MM, such as 2023-01
 * @method void setMonth(string $Month) Set Inquiry month, in the format of YYYY-MM, such as 2023-01
 * @method integer getPageSize() Obtain Page parameter: number of entries per page. Value range: [1, 200]
 * @method void setPageSize(integer $PageSize) Set Page parameter: number of entries per page. Value range: [1, 200]
 * @method integer getPage() Obtain Page parameter: current page number. The minimum value is 1.
 * @method void setPage(integer $Page) Set Page parameter: current page number. The minimum value is 1.
 * @method string getPayMode() Obtain Billing mode. Valid values: prePay (Monthly subscription) and postPay (Pay-As-You-Go resources)
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: prePay (Monthly subscription) and postPay (Pay-As-You-Go resources)
 * @method string getActionType() Obtain Transaction type. Valid values: prepay_purchase (Purchase), prepay_renew (Renewal), prepay_modify (Upgrade/Downgrade), prepay_return ( Monthly subscription refund), postpay_deduct (Pay-as-you-go), postpay_deduct_h (Hourly settlement), postpay_deduct_d (Daily settlement), postpay_deduct_m (Monthly settlement), offline_deduct (Offline project deduction), online_deduct (Offline product deduction), recon_deduct (Adjustment - deduction), recon_increase (Adjustment - compensation), ripay_purchase (One-off RI Fee), postpay_deduct_s (Spot), ri_hour_pay (Hourly RI fee), prePurchase (New monthly subscription), preRenew (Monthly subscription renewal), preUpgrade (Upgrade/Downgrade), preDowngrade (Upgrade/Downgrade), svp_hour_pay (Hourly Savings Plan fee), recon_guarantee (Minimum spend deduction), pre_purchase (New monthly subscription), pre_renew (Monthly subscription renewal), pre_upgrade (Upgrade/Downgrade), pre_downgrade (Upgrade/Downgrade)
 * @method void setActionType(string $ActionType) Set Transaction type. Valid values: prepay_purchase (Purchase), prepay_renew (Renewal), prepay_modify (Upgrade/Downgrade), prepay_return ( Monthly subscription refund), postpay_deduct (Pay-as-you-go), postpay_deduct_h (Hourly settlement), postpay_deduct_d (Daily settlement), postpay_deduct_m (Monthly settlement), offline_deduct (Offline project deduction), online_deduct (Offline product deduction), recon_deduct (Adjustment - deduction), recon_increase (Adjustment - compensation), ripay_purchase (One-off RI Fee), postpay_deduct_s (Spot), ri_hour_pay (Hourly RI fee), prePurchase (New monthly subscription), preRenew (Monthly subscription renewal), preUpgrade (Upgrade/Downgrade), preDowngrade (Upgrade/Downgrade), svp_hour_pay (Hourly Savings Plan fee), recon_guarantee (Minimum spend deduction), pre_purchase (New monthly subscription), pre_renew (Monthly subscription renewal), pre_upgrade (Upgrade/Downgrade), pre_downgrade (Upgrade/Downgrade)
 */
class DescribeBillDetailRequest extends AbstractModel
{
    /**
     * @var string Inquiry month, in the format of YYYY-MM, such as 2023-01
     */
    public $Month;

    /**
     * @var integer Page parameter: number of entries per page. Value range: [1, 200]
     */
    public $PageSize;

    /**
     * @var integer Page parameter: current page number. The minimum value is 1.
     */
    public $Page;

    /**
     * @var string Billing mode. Valid values: prePay (Monthly subscription) and postPay (Pay-As-You-Go resources)
     */
    public $PayMode;

    /**
     * @var string Transaction type. Valid values: prepay_purchase (Purchase), prepay_renew (Renewal), prepay_modify (Upgrade/Downgrade), prepay_return ( Monthly subscription refund), postpay_deduct (Pay-as-you-go), postpay_deduct_h (Hourly settlement), postpay_deduct_d (Daily settlement), postpay_deduct_m (Monthly settlement), offline_deduct (Offline project deduction), online_deduct (Offline product deduction), recon_deduct (Adjustment - deduction), recon_increase (Adjustment - compensation), ripay_purchase (One-off RI Fee), postpay_deduct_s (Spot), ri_hour_pay (Hourly RI fee), prePurchase (New monthly subscription), preRenew (Monthly subscription renewal), preUpgrade (Upgrade/Downgrade), preDowngrade (Upgrade/Downgrade), svp_hour_pay (Hourly Savings Plan fee), recon_guarantee (Minimum spend deduction), pre_purchase (New monthly subscription), pre_renew (Monthly subscription renewal), pre_upgrade (Upgrade/Downgrade), pre_downgrade (Upgrade/Downgrade)
     */
    public $ActionType;

    /**
     * @param string $Month Inquiry month, in the format of YYYY-MM, such as 2023-01
     * @param integer $PageSize Page parameter: number of entries per page. Value range: [1, 200]
     * @param integer $Page Page parameter: current page number. The minimum value is 1.
     * @param string $PayMode Billing mode. Valid values: prePay (Monthly subscription) and postPay (Pay-As-You-Go resources)
     * @param string $ActionType Transaction type. Valid values: prepay_purchase (Purchase), prepay_renew (Renewal), prepay_modify (Upgrade/Downgrade), prepay_return ( Monthly subscription refund), postpay_deduct (Pay-as-you-go), postpay_deduct_h (Hourly settlement), postpay_deduct_d (Daily settlement), postpay_deduct_m (Monthly settlement), offline_deduct (Offline project deduction), online_deduct (Offline product deduction), recon_deduct (Adjustment - deduction), recon_increase (Adjustment - compensation), ripay_purchase (One-off RI Fee), postpay_deduct_s (Spot), ri_hour_pay (Hourly RI fee), prePurchase (New monthly subscription), preRenew (Monthly subscription renewal), preUpgrade (Upgrade/Downgrade), preDowngrade (Upgrade/Downgrade), svp_hour_pay (Hourly Savings Plan fee), recon_guarantee (Minimum spend deduction), pre_purchase (New monthly subscription), pre_renew (Monthly subscription renewal), pre_upgrade (Upgrade/Downgrade), pre_downgrade (Upgrade/Downgrade)
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
