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
 * DescribePaymentDataLineChart request structure.
 *
 * @method string getPlatformId() Obtain Tenant ID
 * @method void setPlatformId(string $PlatformId) Set Tenant ID
 * @method string getReportId() Obtain Fixed value: payment_data_analysis
 * @method void setReportId(string $ReportId) Set Fixed value: payment_data_analysis
 * @method string getIndexId() Obtain IndexId (optional):
order_user_num: Number of users placing orders
order_num: Total orders
total_amount: Total amount
order_unpaid_num: Total unpaid orders
unpaid_amount: Unpaid amount
order_paid_num: Total paid orders
paid_amount: Amount paid
order_refund_num: Total refunded orders
refund_amount: Total amount refunded
 * @method void setIndexId(string $IndexId) Set IndexId (optional):
order_user_num: Number of users placing orders
order_num: Total orders
total_amount: Total amount
order_unpaid_num: Total unpaid orders
unpaid_amount: Unpaid amount
order_paid_num: Total paid orders
paid_amount: Amount paid
order_refund_num: Total refunded orders
refund_amount: Total amount refunded
 * @method string getQueryData() Obtain Input parameter base64 string: {"Platform":0,"MnpIds":["mp9e7qluz4i3z3km"],"BeginDate":20251031,"EndDate":20251129,"DataType":"1","PaymentType":1}
 * @method void setQueryData(string $QueryData) Set Input parameter base64 string: {"Platform":0,"MnpIds":["mp9e7qluz4i3z3km"],"BeginDate":20251031,"EndDate":20251129,"DataType":"1","PaymentType":1}
 */
class DescribePaymentDataLineChartRequest extends AbstractModel
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
     * @var string IndexId (optional):
order_user_num: Number of users placing orders
order_num: Total orders
total_amount: Total amount
order_unpaid_num: Total unpaid orders
unpaid_amount: Unpaid amount
order_paid_num: Total paid orders
paid_amount: Amount paid
order_refund_num: Total refunded orders
refund_amount: Total amount refunded
     */
    public $IndexId;

    /**
     * @var string Input parameter base64 string: {"Platform":0,"MnpIds":["mp9e7qluz4i3z3km"],"BeginDate":20251031,"EndDate":20251129,"DataType":"1","PaymentType":1}
     */
    public $QueryData;

    /**
     * @param string $PlatformId Tenant ID
     * @param string $ReportId Fixed value: payment_data_analysis
     * @param string $IndexId IndexId (optional):
order_user_num: Number of users placing orders
order_num: Total orders
total_amount: Total amount
order_unpaid_num: Total unpaid orders
unpaid_amount: Unpaid amount
order_paid_num: Total paid orders
paid_amount: Amount paid
order_refund_num: Total refunded orders
refund_amount: Total amount refunded
     * @param string $QueryData Input parameter base64 string: {"Platform":0,"MnpIds":["mp9e7qluz4i3z3km"],"BeginDate":20251031,"EndDate":20251129,"DataType":"1","PaymentType":1}
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
