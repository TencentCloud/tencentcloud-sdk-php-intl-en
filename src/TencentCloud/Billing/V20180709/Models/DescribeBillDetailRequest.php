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
 * DescribeBillDetail request structure.
 *
 * @method integer getOffset() Obtain Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
 * @method integer getLimit() Obtain The number of entries returned at a time. The maximum value is `300`.
 * @method void setLimit(integer $Limit) Set The number of entries returned at a time. The maximum value is `300`.
 * @method string getPeriodType() Obtain Period type, byUsedTime by billing period/byPayTime by fee deduction cycle. It should be consistent with the billing cycle for the month in the expense center. You can go to the top of the [bill overview](https://console.cloud.tencent.com/expense/bill/overview) page to view and confirm your billing cycle type.
 * @method void setPeriodType(string $PeriodType) Set Period type, byUsedTime by billing period/byPayTime by fee deduction cycle. It should be consistent with the billing cycle for the month in the expense center. You can go to the top of the [bill overview](https://console.cloud.tencent.com/expense/bill/overview) page to view and confirm your billing cycle type.
 * @method string getMonth() Obtain The month is in the format of yyyy-mm. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. Data within the last 18 months can be pulled at most.
 * @method void setMonth(string $Month) Set The month is in the format of yyyy-mm. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. Data within the last 18 months can be pulled at most.
 * @method string getBeginTime() Obtain The start time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
 * @method void setBeginTime(string $BeginTime) Set The start time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
 * @method string getEndTime() Obtain The end time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
 * @method void setEndTime(string $EndTime) Set The end time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
 * @method integer getNeedRecordNum() Obtain Total number of records for access list needed for frontend pagination
1: needed, 0: not needed
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Total number of records for access list needed for frontend pagination
1: needed, 0: not needed
 * @method string getProductCode() Obtain Queries information on a specified product
 * @method void setProductCode(string $ProductCode) Set Queries information on a specified product
 * @method string getPayMode() Obtain Billing mode: prePay/postPay
 * @method void setPayMode(string $PayMode) Set Billing mode: prePay/postPay
 * @method string getResourceId() Obtain Queries information on a specified resource
 * @method void setResourceId(string $ResourceId) Set Queries information on a specified resource
 * @method string getActionType() Obtain Hourly settlement
Daily settlement
Yearly/monthly subscription
Spot
New yearly/monthly subscription
Yearly/monthly subscription renewal
Yearly/monthly subscription specification adjustment
Yearly/monthly subscription refund
Adjustment - deduction
Adjustment - refund
Hourly RI fee
One-off RI Fee
Hourly Savings Plan fee
Offline project deduction
Offline product deduction
 * @method void setActionType(string $ActionType) Set Hourly settlement
Daily settlement
Yearly/monthly subscription
Spot
New yearly/monthly subscription
Yearly/monthly subscription renewal
Yearly/monthly subscription specification adjustment
Yearly/monthly subscription refund
Adjustment - deduction
Adjustment - refund
Hourly RI fee
One-off RI Fee
Hourly Savings Plan fee
Offline project deduction
Offline product deduction
 * @method integer getProjectId() Obtain Project ID: Project ID of the resource
 * @method void setProjectId(integer $ProjectId) Set Project ID: Project ID of the resource
 * @method string getBusinessCode() Obtain Product name code
Remark: If needed to obtain BusinessCode used in current month, invoke API: <a href="https://www.tencentcloud.com/document/product/555/35761?from_cn_redirect=1">Get fee distribution by product</a>
 * @method void setBusinessCode(string $BusinessCode) Set Product name code
Remark: If needed to obtain BusinessCode used in current month, invoke API: <a href="https://www.tencentcloud.com/document/product/555/35761?from_cn_redirect=1">Get fee distribution by product</a>
 * @method string getContext() Obtain Context information returned from the last request. Paginated query of data for months with Month>=2023-05 can speed up query speed. Recommended for users with data volume at tens of thousands level. Query speed can be improved by 2-10x.
 * @method void setContext(string $Context) Set Context information returned from the last request. Paginated query of data for months with Month>=2023-05 can speed up query speed. Recommended for users with data volume at tens of thousands level. Query speed can be improved by 2-10x.
 * @method string getPayerUin() Obtain Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.
 * @method void setPayerUin(string $PayerUin) Set Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.
 */
class DescribeBillDetailRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var integer The number of entries returned at a time. The maximum value is `300`.
     */
    public $Limit;

    /**
     * @var string Period type, byUsedTime by billing period/byPayTime by fee deduction cycle. It should be consistent with the billing cycle for the month in the expense center. You can go to the top of the [bill overview](https://console.cloud.tencent.com/expense/bill/overview) page to view and confirm your billing cycle type.
     * @deprecated
     */
    public $PeriodType;

    /**
     * @var string The month is in the format of yyyy-mm. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. Data within the last 18 months can be pulled at most.
     */
    public $Month;

    /**
     * @var string The start time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
     */
    public $BeginTime;

    /**
     * @var string The end time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
     */
    public $EndTime;

    /**
     * @var integer Total number of records for access list needed for frontend pagination
1: needed, 0: not needed
     */
    public $NeedRecordNum;

    /**
     * @var string Queries information on a specified product
     * @deprecated
     */
    public $ProductCode;

    /**
     * @var string Billing mode: prePay/postPay
     */
    public $PayMode;

    /**
     * @var string Queries information on a specified resource
     */
    public $ResourceId;

    /**
     * @var string Hourly settlement
Daily settlement
Yearly/monthly subscription
Spot
New yearly/monthly subscription
Yearly/monthly subscription renewal
Yearly/monthly subscription specification adjustment
Yearly/monthly subscription refund
Adjustment - deduction
Adjustment - refund
Hourly RI fee
One-off RI Fee
Hourly Savings Plan fee
Offline project deduction
Offline product deduction
     */
    public $ActionType;

    /**
     * @var integer Project ID: Project ID of the resource
     */
    public $ProjectId;

    /**
     * @var string Product name code
Remark: If needed to obtain BusinessCode used in current month, invoke API: <a href="https://www.tencentcloud.com/document/product/555/35761?from_cn_redirect=1">Get fee distribution by product</a>
     */
    public $BusinessCode;

    /**
     * @var string Context information returned from the last request. Paginated query of data for months with Month>=2023-05 can speed up query speed. Recommended for users with data volume at tens of thousands level. Query speed can be improved by 2-10x.
     */
    public $Context;

    /**
     * @var string Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.
     */
    public $PayerUin;

    /**
     * @param integer $Offset Pagination offset. Offset=0 indicates the first page. If Limit=100, Offset=100 indicates the second page, Offset=200 indicates the third page, and so on.
     * @param integer $Limit The number of entries returned at a time. The maximum value is `300`.
     * @param string $PeriodType Period type, byUsedTime by billing period/byPayTime by fee deduction cycle. It should be consistent with the billing cycle for the month in the expense center. You can go to the top of the [bill overview](https://console.cloud.tencent.com/expense/bill/overview) page to view and confirm your billing cycle type.
     * @param string $Month The month is in the format of yyyy-mm. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. Data within the last 18 months can be pulled at most.
     * @param string $BeginTime The start time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
     * @param string $EndTime The end time of the period in the format of yyyy-mm-dd hh:ii:ss. Either Month or BeginTime&EndTime must be specified. If BeginTime&EndTime is specified, the Month field is invalid. BeginTime and EndTime must be specified together and must be in the same month. Cross-month queries are not supported and the query results are data for the entire month. Data within the last 18 months can be pulled at most.
     * @param integer $NeedRecordNum Total number of records for access list needed for frontend pagination
1: needed, 0: not needed
     * @param string $ProductCode Queries information on a specified product
     * @param string $PayMode Billing mode: prePay/postPay
     * @param string $ResourceId Queries information on a specified resource
     * @param string $ActionType Hourly settlement
Daily settlement
Yearly/monthly subscription
Spot
New yearly/monthly subscription
Yearly/monthly subscription renewal
Yearly/monthly subscription specification adjustment
Yearly/monthly subscription refund
Adjustment - deduction
Adjustment - refund
Hourly RI fee
One-off RI Fee
Hourly Savings Plan fee
Offline project deduction
Offline product deduction
     * @param integer $ProjectId Project ID: Project ID of the resource
     * @param string $BusinessCode Product name code
Remark: If needed to obtain BusinessCode used in current month, invoke API: <a href="https://www.tencentcloud.com/document/product/555/35761?from_cn_redirect=1">Get fee distribution by product</a>
     * @param string $Context Context information returned from the last request. Paginated query of data for months with Month>=2023-05 can speed up query speed. Recommended for users with data volume at tens of thousands level. Query speed can be improved by 2-10x.
     * @param string $PayerUin Account ID of the payer (Account ID is the unique account identifier for the user in Tencent Cloud). By default, the query returns the account statement of the current account. If the group management account needs to query the self-pay bills of member accounts, enter the member account UIN in this field.
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

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
