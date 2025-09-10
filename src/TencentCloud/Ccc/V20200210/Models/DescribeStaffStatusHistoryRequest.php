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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStaffStatusHistory request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
 * @method string getStaffUserId() Obtain Agent account.
 * @method void setStaffUserId(string $StaffUserId) Set Agent account.
 * @method integer getStartTimestamp() Obtain Start timestamp. Unix second-level timestamp. supports up to nearly 180 days.
 * @method void setStartTimestamp(integer $StartTimestamp) Set Start timestamp. Unix second-level timestamp. supports up to nearly 180 days.
 * @method integer getEndTimestamp() Obtain End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 7 days.
 * @method void setEndTimestamp(integer $EndTimestamp) Set End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 7 days.
 * @method string getCursor() Obtain Specifies the cursor used during paginated retrieval.
 * @method void setCursor(string $Cursor) Set Specifies the cursor used during paginated retrieval.
 * @method integer getPageSize() Obtain Specifies the pagination size.
 * @method void setPageSize(integer $PageSize) Set Specifies the pagination size.
 */
class DescribeStaffStatusHistoryRequest extends AbstractModel
{
    /**
     * @var integer App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Agent account.
     */
    public $StaffUserId;

    /**
     * @var integer Start timestamp. Unix second-level timestamp. supports up to nearly 180 days.
     */
    public $StartTimestamp;

    /**
     * @var integer End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 7 days.
     */
    public $EndTimestamp;

    /**
     * @var string Specifies the cursor used during paginated retrieval.
     */
    public $Cursor;

    /**
     * @var integer Specifies the pagination size.
     */
    public $PageSize;

    /**
     * @param integer $SdkAppId App ID (required). can be used to view https://console.cloud.tencent.com/ccc.
     * @param string $StaffUserId Agent account.
     * @param integer $StartTimestamp Start timestamp. Unix second-level timestamp. supports up to nearly 180 days.
     * @param integer $EndTimestamp End timestamp, Unix second-level timestamp. the interval range between end time and start time is less than 7 days.
     * @param string $Cursor Specifies the cursor used during paginated retrieval.
     * @param integer $PageSize Specifies the pagination size.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StaffUserId",$param) and $param["StaffUserId"] !== null) {
            $this->StaffUserId = $param["StaffUserId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
