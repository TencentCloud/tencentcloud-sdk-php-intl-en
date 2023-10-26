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
 * DescribeBillResourceSummaryForOrganization request structure.
 *
 * @method integer getOffset() Obtain Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
 * @method void setOffset(integer $Offset) Set Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
 * @method integer getLimit() Obtain The number of entries returned at a time. The maximum value is `1000`.
 * @method void setLimit(integer $Limit) Set The number of entries returned at a time. The maximum value is `1000`.
 * @method string getMonth() Obtain Bill month in the format of "yyyy-mm". This value must be no earlier than the month when Bill 2.0 is activated.
 * @method void setMonth(string $Month) Set Bill month in the format of "yyyy-mm". This value must be no earlier than the month when Bill 2.0 is activated.
 * @method string getPeriodType() Obtain Cycle type, which can be `byUsedTime` (by billing cycle) or `byPayTime` (by deduction time). This value must be the same as the billing period type in Billing Center for that particular month. You can check your billing cycle at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method void setPeriodType(string $PeriodType) Set Cycle type, which can be `byUsedTime` (by billing cycle) or `byPayTime` (by deduction time). This value must be the same as the billing period type in Billing Center for that particular month. You can check your billing cycle at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method integer getNeedRecordNum() Obtain Indicates whether the total number of records is required, used for pagination.
Valid values: `1` (required), `0` (not required).
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Indicates whether the total number of records is required, used for pagination.
Valid values: `1` (required), `0` (not required).
 * @method string getActionType() Obtain Transaction type. This parameter needs to be input using the `ActionTypeName` value. Valid values:
Monthly subscription purchase
Monthly subscription renewal
Monthly subscription upgrade/downgrade
Monthly subscription refund 
Pay-as-you-go deduction 
Offline project deduction 
Offline product deduction 
Adjustment deduction 
Adjustment compensation 
Hourly pay-as-you-go 
Daily pay-as-you-go 
Monthly pay-as-you-go 
Hourly spot instance 
Offline project adjustment compensation 
Offline product adjustment compensation 
Offer deduction 
Offer compensation 
Pay-as-you-go resource migration in 
Pay-as-you-go resource migration out 
Monthly subscription resource migration in 
Monthly subscription resource migration out 
Prepaid 
Hourly 
RI refund 
Pay-as-you-go reversal 
Monthly subscription to pay-as-you-go 
Minimum spend deduction 
Hourly savings plan fee
 * @method void setActionType(string $ActionType) Set Transaction type. This parameter needs to be input using the `ActionTypeName` value. Valid values:
Monthly subscription purchase
Monthly subscription renewal
Monthly subscription upgrade/downgrade
Monthly subscription refund 
Pay-as-you-go deduction 
Offline project deduction 
Offline product deduction 
Adjustment deduction 
Adjustment compensation 
Hourly pay-as-you-go 
Daily pay-as-you-go 
Monthly pay-as-you-go 
Hourly spot instance 
Offline project adjustment compensation 
Offline product adjustment compensation 
Offer deduction 
Offer compensation 
Pay-as-you-go resource migration in 
Pay-as-you-go resource migration out 
Monthly subscription resource migration in 
Monthly subscription resource migration out 
Prepaid 
Hourly 
RI refund 
Pay-as-you-go reversal 
Monthly subscription to pay-as-you-go 
Minimum spend deduction 
Hourly savings plan fee
 * @method string getResourceId() Obtain ID of the instance to be queried.
 * @method void setResourceId(string $ResourceId) Set ID of the instance to be queried.
 * @method string getPayMode() Obtain Billing mode. Valid values: `prePay`, `postPay`.
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `prePay`, `postPay`.
 * @method string getBusinessCode() Obtain Product code
Note: To query the product codes (`BusinessCode`) used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
 * @method void setBusinessCode(string $BusinessCode) Set Product code
Note: To query the product codes (`BusinessCode`) used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
 * @method string getTagKey() Obtain Cost allocation tag key, which can be customized. This parameter can be used for querying bills after January 2021.
 * @method void setTagKey(string $TagKey) Set Cost allocation tag key, which can be customized. This parameter can be used for querying bills after January 2021.
 * @method string getTagValue() Obtain Resource tag value. If it is left empty, there are no records with tag values set under this tag key.
This parameter can be used for querying bills after January 2021.
 * @method void setTagValue(string $TagValue) Set Resource tag value. If it is left empty, there are no records with tag values set under this tag key.
This parameter can be used for querying bills after January 2021.
 */
class DescribeBillResourceSummaryForOrganizationRequest extends AbstractModel
{
    /**
     * @var integer Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
     */
    public $Offset;

    /**
     * @var integer The number of entries returned at a time. The maximum value is `1000`.
     */
    public $Limit;

    /**
     * @var string Bill month in the format of "yyyy-mm". This value must be no earlier than the month when Bill 2.0 is activated.
     */
    public $Month;

    /**
     * @var string Cycle type, which can be `byUsedTime` (by billing cycle) or `byPayTime` (by deduction time). This value must be the same as the billing period type in Billing Center for that particular month. You can check your billing cycle at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     */
    public $PeriodType;

    /**
     * @var integer Indicates whether the total number of records is required, used for pagination.
Valid values: `1` (required), `0` (not required).
     */
    public $NeedRecordNum;

    /**
     * @var string Transaction type. This parameter needs to be input using the `ActionTypeName` value. Valid values:
Monthly subscription purchase
Monthly subscription renewal
Monthly subscription upgrade/downgrade
Monthly subscription refund 
Pay-as-you-go deduction 
Offline project deduction 
Offline product deduction 
Adjustment deduction 
Adjustment compensation 
Hourly pay-as-you-go 
Daily pay-as-you-go 
Monthly pay-as-you-go 
Hourly spot instance 
Offline project adjustment compensation 
Offline product adjustment compensation 
Offer deduction 
Offer compensation 
Pay-as-you-go resource migration in 
Pay-as-you-go resource migration out 
Monthly subscription resource migration in 
Monthly subscription resource migration out 
Prepaid 
Hourly 
RI refund 
Pay-as-you-go reversal 
Monthly subscription to pay-as-you-go 
Minimum spend deduction 
Hourly savings plan fee
     */
    public $ActionType;

    /**
     * @var string ID of the instance to be queried.
     */
    public $ResourceId;

    /**
     * @var string Billing mode. Valid values: `prePay`, `postPay`.
     */
    public $PayMode;

    /**
     * @var string Product code
Note: To query the product codes (`BusinessCode`) used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
     */
    public $BusinessCode;

    /**
     * @var string Cost allocation tag key, which can be customized. This parameter can be used for querying bills after January 2021.
     */
    public $TagKey;

    /**
     * @var string Resource tag value. If it is left empty, there are no records with tag values set under this tag key.
This parameter can be used for querying bills after January 2021.
     */
    public $TagValue;

    /**
     * @param integer $Offset Pagination offset. If `Offset` is `0`, it indicates the first page. When `Limit` is `100`, if `Offset` is `100`, it indicates the second page; if `Offset` is `200`, it indicates the third page, and so on.
     * @param integer $Limit The number of entries returned at a time. The maximum value is `1000`.
     * @param string $Month Bill month in the format of "yyyy-mm". This value must be no earlier than the month when Bill 2.0 is activated.
     * @param string $PeriodType Cycle type, which can be `byUsedTime` (by billing cycle) or `byPayTime` (by deduction time). This value must be the same as the billing period type in Billing Center for that particular month. You can check your billing cycle at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     * @param integer $NeedRecordNum Indicates whether the total number of records is required, used for pagination.
Valid values: `1` (required), `0` (not required).
     * @param string $ActionType Transaction type. This parameter needs to be input using the `ActionTypeName` value. Valid values:
Monthly subscription purchase
Monthly subscription renewal
Monthly subscription upgrade/downgrade
Monthly subscription refund 
Pay-as-you-go deduction 
Offline project deduction 
Offline product deduction 
Adjustment deduction 
Adjustment compensation 
Hourly pay-as-you-go 
Daily pay-as-you-go 
Monthly pay-as-you-go 
Hourly spot instance 
Offline project adjustment compensation 
Offline product adjustment compensation 
Offer deduction 
Offer compensation 
Pay-as-you-go resource migration in 
Pay-as-you-go resource migration out 
Monthly subscription resource migration in 
Monthly subscription resource migration out 
Prepaid 
Hourly 
RI refund 
Pay-as-you-go reversal 
Monthly subscription to pay-as-you-go 
Minimum spend deduction 
Hourly savings plan fee
     * @param string $ResourceId ID of the instance to be queried.
     * @param string $PayMode Billing mode. Valid values: `prePay`, `postPay`.
     * @param string $BusinessCode Product code
Note: To query the product codes (`BusinessCode`) used in the current month, call <a href="https://intl.cloud.tencent.com/document/product/555/35761?from_cn_redirect=1">DescribeBillSummaryByProduct</a>.
     * @param string $TagKey Cost allocation tag key, which can be customized. This parameter can be used for querying bills after January 2021.
     * @param string $TagValue Resource tag value. If it is left empty, there are no records with tag values set under this tag key.
This parameter can be used for querying bills after January 2021.
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

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
