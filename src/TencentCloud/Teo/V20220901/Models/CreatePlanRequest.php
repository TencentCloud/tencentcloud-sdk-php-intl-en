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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePlan request structure.
 *
 * @method string getPlanType() Obtain Type of plan subscribed to. Valid values:<li>personal: Personal Edition Plan, prepaid;</li><li>basic: Basic Edition Plan, prepaid;</li><li>standard: Standard Edition Plan, prepaid;</li><li>enterprise: Enterprise Edition Plan, post-paid. </li>When subscribing to a prepaid plan, ensure there is sufficient balance in the account, as insufficient balance will result in a pending payment order.
For an overview of billing, refer to [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/94156?from_cn_redirect=1).
For differences between plans, refer to [ Comparison of EdgeOne Plan](https://intl.cloud.tencent.com/document/product/1552/94165?from_cn_redirect=1).
 * @method void setPlanType(string $PlanType) Set Type of plan subscribed to. Valid values:<li>personal: Personal Edition Plan, prepaid;</li><li>basic: Basic Edition Plan, prepaid;</li><li>standard: Standard Edition Plan, prepaid;</li><li>enterprise: Enterprise Edition Plan, post-paid. </li>When subscribing to a prepaid plan, ensure there is sufficient balance in the account, as insufficient balance will result in a pending payment order.
For an overview of billing, refer to [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/94156?from_cn_redirect=1).
For differences between plans, refer to [ Comparison of EdgeOne Plan](https://intl.cloud.tencent.com/document/product/1552/94165?from_cn_redirect=1).
 * @method string getAutoUseVoucher() Obtain Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> This parameter is valid only when PlanType is personal, basic, or standard.
If this field is not specified, the default value 'false' will be used.
 * @method void setAutoUseVoucher(string $AutoUseVoucher) Set Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> This parameter is valid only when PlanType is personal, basic, or standard.
If this field is not specified, the default value 'false' will be used.
 * @method PrepaidPlanParam getPrepaidPlanParam() Obtain Parameters for subscribing to prepaid plans. When PlanType is personal, basic, or standard, this parameter can be optionally set to specify the subscription duration and whether to enable auto-renewal for the plan.
If this field is not specified, the default plan duration is 1 month, with auto-renewal disabled.
 * @method void setPrepaidPlanParam(PrepaidPlanParam $PrepaidPlanParam) Set Parameters for subscribing to prepaid plans. When PlanType is personal, basic, or standard, this parameter can be optionally set to specify the subscription duration and whether to enable auto-renewal for the plan.
If this field is not specified, the default plan duration is 1 month, with auto-renewal disabled.
 */
class CreatePlanRequest extends AbstractModel
{
    /**
     * @var string Type of plan subscribed to. Valid values:<li>personal: Personal Edition Plan, prepaid;</li><li>basic: Basic Edition Plan, prepaid;</li><li>standard: Standard Edition Plan, prepaid;</li><li>enterprise: Enterprise Edition Plan, post-paid. </li>When subscribing to a prepaid plan, ensure there is sufficient balance in the account, as insufficient balance will result in a pending payment order.
For an overview of billing, refer to [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/94156?from_cn_redirect=1).
For differences between plans, refer to [ Comparison of EdgeOne Plan](https://intl.cloud.tencent.com/document/product/1552/94165?from_cn_redirect=1).
     */
    public $PlanType;

    /**
     * @var string Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> This parameter is valid only when PlanType is personal, basic, or standard.
If this field is not specified, the default value 'false' will be used.
     */
    public $AutoUseVoucher;

    /**
     * @var PrepaidPlanParam Parameters for subscribing to prepaid plans. When PlanType is personal, basic, or standard, this parameter can be optionally set to specify the subscription duration and whether to enable auto-renewal for the plan.
If this field is not specified, the default plan duration is 1 month, with auto-renewal disabled.
     */
    public $PrepaidPlanParam;

    /**
     * @param string $PlanType Type of plan subscribed to. Valid values:<li>personal: Personal Edition Plan, prepaid;</li><li>basic: Basic Edition Plan, prepaid;</li><li>standard: Standard Edition Plan, prepaid;</li><li>enterprise: Enterprise Edition Plan, post-paid. </li>When subscribing to a prepaid plan, ensure there is sufficient balance in the account, as insufficient balance will result in a pending payment order.
For an overview of billing, refer to [Billing Overview](https://intl.cloud.tencent.com/document/product/1552/94156?from_cn_redirect=1).
For differences between plans, refer to [ Comparison of EdgeOne Plan](https://intl.cloud.tencent.com/document/product/1552/94165?from_cn_redirect=1).
     * @param string $AutoUseVoucher Whether to automatically use a voucher. Valid values: <li>true: Yes;</li><li>false: No. </li> This parameter is valid only when PlanType is personal, basic, or standard.
If this field is not specified, the default value 'false' will be used.
     * @param PrepaidPlanParam $PrepaidPlanParam Parameters for subscribing to prepaid plans. When PlanType is personal, basic, or standard, this parameter can be optionally set to specify the subscription duration and whether to enable auto-renewal for the plan.
If this field is not specified, the default plan duration is 1 month, with auto-renewal disabled.
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
        if (array_key_exists("PlanType",$param) and $param["PlanType"] !== null) {
            $this->PlanType = $param["PlanType"];
        }

        if (array_key_exists("AutoUseVoucher",$param) and $param["AutoUseVoucher"] !== null) {
            $this->AutoUseVoucher = $param["AutoUseVoucher"];
        }

        if (array_key_exists("PrepaidPlanParam",$param) and $param["PrepaidPlanParam"] !== null) {
            $this->PrepaidPlanParam = new PrepaidPlanParam();
            $this->PrepaidPlanParam->deserialize($param["PrepaidPlanParam"]);
        }
    }
}
