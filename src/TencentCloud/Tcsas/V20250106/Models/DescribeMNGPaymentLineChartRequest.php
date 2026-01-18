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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMNGPaymentLineChart request structure.
 *
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getReportId() Obtain Fixed value: payment_data_analysis
 * @method void setReportId(string $ReportId) Set Fixed value: payment_data_analysis
 * @method string getIndexId() Obtain Valid values:
mng_paid_amount: Virtual payment amount,
paid_user_num: Number of paying users,
new_paid_user_num: Number of new paying users,
new_paid_user_amount: Revenue from new paying users,
new_paid_user_ratio: Percentage of new users who made payments,
arppu: Average revenue per paying user (ARPPU),
mng_refund_num: Number of refund orders
mng_refund_amount: Refund amount
 * @method void setIndexId(string $IndexId) Set Valid values:
mng_paid_amount: Virtual payment amount,
paid_user_num: Number of paying users,
new_paid_user_num: Number of new paying users,
new_paid_user_amount: Revenue from new paying users,
new_paid_user_ratio: Percentage of new users who made payments,
arppu: Average revenue per paying user (ARPPU),
mng_refund_num: Number of refund orders
mng_refund_amount: Refund amount
 * @method string getQueryData() Obtain Input parameter base64 string: {"Platform":0,"MnpId":"mgcp5xc2yzw8aixv","BeginDate":20251028,"EndDate":20251126,"DataType":"1","PaymentType":2}
 * @method void setQueryData(string $QueryData) Set Input parameter base64 string: {"Platform":0,"MnpId":"mgcp5xc2yzw8aixv","BeginDate":20251028,"EndDate":20251126,"DataType":"1","PaymentType":2}
 */
class DescribeMNGPaymentLineChartRequest extends AbstractModel
{
    /**
     * @var string Tenant ID
     */
    public $PlatformId;

    /**
     * @var string Fixed value: payment_data_analysis
     */
    public $ReportId;

    /**
     * @var string Valid values:
mng_paid_amount: Virtual payment amount,
paid_user_num: Number of paying users,
new_paid_user_num: Number of new paying users,
new_paid_user_amount: Revenue from new paying users,
new_paid_user_ratio: Percentage of new users who made payments,
arppu: Average revenue per paying user (ARPPU),
mng_refund_num: Number of refund orders
mng_refund_amount: Refund amount
     */
    public $IndexId;

    /**
     * @var string Input parameter base64 string: {"Platform":0,"MnpId":"mgcp5xc2yzw8aixv","BeginDate":20251028,"EndDate":20251126,"DataType":"1","PaymentType":2}
     */
    public $QueryData;

    /**
     * @param string $PlatformId Tenant ID
     * @param string $ReportId Fixed value: payment_data_analysis
     * @param string $IndexId Valid values:
mng_paid_amount: Virtual payment amount,
paid_user_num: Number of paying users,
new_paid_user_num: Number of new paying users,
new_paid_user_amount: Revenue from new paying users,
new_paid_user_ratio: Percentage of new users who made payments,
arppu: Average revenue per paying user (ARPPU),
mng_refund_num: Number of refund orders
mng_refund_amount: Refund amount
     * @param string $QueryData Input parameter base64 string: {"Platform":0,"MnpId":"mgcp5xc2yzw8aixv","BeginDate":20251028,"EndDate":20251126,"DataType":"1","PaymentType":2}
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("IndexId",$param) and $param["IndexId"] !== null) {
            $this->IndexId = $param["IndexId"];
        }

        if (array_key_exists("QueryData",$param) and $param["QueryData"] !== null) {
            $this->QueryData = $param["QueryData"];
        }
    }
}
