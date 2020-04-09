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
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Quantity, maximum is 1000
 * @method void setLimit(integer $Limit) Set Quantity, maximum is 1000
 * @method string getPeriodType() Obtain The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method void setPeriodType(string $PeriodType) Set The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
 * @method string getMonth() Obtain Month; format: yyyy-mm. This value cannot be earlier than the month when Bill 2.0 is enabled. Last 24 months data are available.
 * @method void setMonth(string $Month) Set Month; format: yyyy-mm. This value cannot be earlier than the month when Bill 2.0 is enabled. Last 24 months data are available.
 * @method integer getNeedRecordNum() Obtain Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
 */
class DescribeBillResourceSummaryRequest extends AbstractModel
{
    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Quantity, maximum is 1000
     */
    public $Limit;

    /**
     * @var string The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     */
    public $PeriodType;

    /**
     * @var string Month; format: yyyy-mm. This value cannot be earlier than the month when Bill 2.0 is enabled. Last 24 months data are available.
     */
    public $Month;

    /**
     * @var integer Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
     */
    public $NeedRecordNum;

    /**
     * @param integer $Offset Offset
     * @param integer $Limit Quantity, maximum is 1000
     * @param string $PeriodType The period type. byUsedTime: By usage period; byPayTime: by payment period. Must be the same as the period of the current monthly bill of the Billing Center. You can check your bill statistics period type at the top of the [Bill Overview](https://console.cloud.tencent.com/expense/bill/overview) page.
     * @param string $Month Month; format: yyyy-mm. This value cannot be earlier than the month when Bill 2.0 is enabled. Last 24 months data are available.
     * @param integer $NeedRecordNum Indicates whether or not the total number of records of accessing the list is required, used for frontend pages.
1 = yes, 0 = no
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

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }
    }
}
