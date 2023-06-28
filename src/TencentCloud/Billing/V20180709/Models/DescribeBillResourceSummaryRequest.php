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
 * DescribeBillResourceSummary request structure.
 *
 * @method integer getOffset() Obtain Pagination offset. If `Offset` is `0`, it indicates the first page. If `Limit` is `100`, "`Offset` = `100`" indicates the second page, then "`Offset` = `200`" indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. If `Offset` is `0`, it indicates the first page. If `Limit` is `100`, "`Offset` = `100`" indicates the second page, then "`Offset` = `200`" indicates the third page, and so on.
 * @method integer getLimit() Obtain Quantity, maximum is 1000
 * @method void setLimit(integer $Limit) Set Quantity, maximum is 1000
 * @method string getMonth() Obtain Bill month in the format of "yyyy-mm".  This value must be no earlier than March 2019, when Bill 2.0 was launched.
 * @method void setMonth(string $Month) Set Bill month in the format of "yyyy-mm".  This value must be no earlier than March 2019, when Bill 2.0 was launched.
 * @method string getPeriodType() Obtain The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method void setPeriodType(string $PeriodType) Set The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method integer getNeedRecordNum() Obtain Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
 * @method string getActionType() Obtain Action type to query. Valid values:
Purchase
Renewal
Modify
Refund
Deduction
Hourly settlement
Daily settlement
Monthly settlement
Offline project deduction
Offline deduction
adjust-CR
adjust-DR
One-off RI Fee
Spot
Hourly RI fee
New monthly subscription
Monthly subscription renewal
Monthly subscription specification adjustment
Monthly subscription refund
 * @method void setActionType(string $ActionType) Set Action type to query. Valid values:
Purchase
Renewal
Modify
Refund
Deduction
Hourly settlement
Daily settlement
Monthly settlement
Offline project deduction
Offline deduction
adjust-CR
adjust-DR
One-off RI Fee
Spot
Hourly RI fee
New monthly subscription
Monthly subscription renewal
Monthly subscription specification adjustment
Monthly subscription refund
 * @method string getResourceId() Obtain ID of the instance to be queried
 * @method void setResourceId(string $ResourceId) Set ID of the instance to be queried
 * @method string getPayMode() Obtain Billing mode. Valid values: `prePay` (prepaid), `postPay` (postpaid)
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `prePay` (prepaid), `postPay` (postpaid)
 * @method string getBusinessCode() Obtain Product code
Note: To query the product codes used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
 * @method void setBusinessCode(string $BusinessCode) Set Product code
Note: To query the product codes used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
 * @method string getPayerUin() Obtain 
 * @method void setPayerUin(string $PayerUin) Set 
 */
class DescribeBillResourceSummaryRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset. If `Offset` is `0`, it indicates the first page. If `Limit` is `100`, "`Offset` = `100`" indicates the second page, then "`Offset` = `200`" indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var integer Quantity, maximum is 1000
     */
    public $Limit;

    /**
     * @var string Bill month in the format of "yyyy-mm".  This value must be no earlier than March 2019, when Bill 2.0 was launched.
     */
    public $Month;

    /**
     * @var string The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     */
    public $PeriodType;

    /**
     * @var integer Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
     */
    public $NeedRecordNum;

    /**
     * @var string Action type to query. Valid values:
Purchase
Renewal
Modify
Refund
Deduction
Hourly settlement
Daily settlement
Monthly settlement
Offline project deduction
Offline deduction
adjust-CR
adjust-DR
One-off RI Fee
Spot
Hourly RI fee
New monthly subscription
Monthly subscription renewal
Monthly subscription specification adjustment
Monthly subscription refund
     */
    public $ActionType;

    /**
     * @var string ID of the instance to be queried
     */
    public $ResourceId;

    /**
     * @var string Billing mode. Valid values: `prePay` (prepaid), `postPay` (postpaid)
     */
    public $PayMode;

    /**
     * @var string Product code
Note: To query the product codes used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
     */
    public $BusinessCode;

    /**
     * @var string 
     */
    public $PayerUin;

    /**
     * @param integer $Offset Pagination offset. If `Offset` is `0`, it indicates the first page. If `Limit` is `100`, "`Offset` = `100`" indicates the second page, then "`Offset` = `200`" indicates the third page, and so on.
     * @param integer $Limit Quantity, maximum is 1000
     * @param string $Month Bill month in the format of "yyyy-mm".  This value must be no earlier than March 2019, when Bill 2.0 was launched.
     * @param string $PeriodType The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     * @param integer $NeedRecordNum Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
     * @param string $ActionType Action type to query. Valid values:
Purchase
Renewal
Modify
Refund
Deduction
Hourly settlement
Daily settlement
Monthly settlement
Offline project deduction
Offline deduction
adjust-CR
adjust-DR
One-off RI Fee
Spot
Hourly RI fee
New monthly subscription
Monthly subscription renewal
Monthly subscription specification adjustment
Monthly subscription refund
     * @param string $ResourceId ID of the instance to be queried
     * @param string $PayMode Billing mode. Valid values: `prePay` (prepaid), `postPay` (postpaid)
     * @param string $BusinessCode Product code
Note: To query the product codes used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
     * @param string $PayerUin 
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
