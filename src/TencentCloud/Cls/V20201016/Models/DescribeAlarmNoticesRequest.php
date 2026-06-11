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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmNotices request structure.
 *
 * @method array getFilters() Obtain name
Filter by [notification channel group name].
Type: String
"Filters":[{"Key":"name","Values":["test-notice"]}]
Required: No
alarmNoticeId
Filter by [notification channel group ID].
Type: String
"Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
Required: No
uid
Filter by [recipient user ID].
Type: String
"Filters": [{Key: "uid", Values: ["1137546"]}]
Required: No
groupId
Filter by [recipient user group ID].
Type: String
"Filters": [{Key: "groupId", Values: ["344098"]}]
Required: No

deliverFlag
Filter by [delivery status].
Type: String
Required: No
Available values: "1": disabled, "2": enabled, "3": delivery exception
"Filters":[{"Key":"deliverFlag","Values":["2"]}]
The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method void setFilters(array $Filters) Set name
Filter by [notification channel group name].
Type: String
"Filters":[{"Key":"name","Values":["test-notice"]}]
Required: No
alarmNoticeId
Filter by [notification channel group ID].
Type: String
"Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
Required: No
uid
Filter by [recipient user ID].
Type: String
"Filters": [{Key: "uid", Values: ["1137546"]}]
Required: No
groupId
Filter by [recipient user group ID].
Type: String
"Filters": [{Key: "groupId", Values: ["344098"]}]
Required: No

deliverFlag
Filter by [delivery status].
Type: String
Required: No
Available values: "1": disabled, "2": enabled, "3": delivery exception
"Filters":[{"Key":"deliverFlag","Values":["2"]}]
The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method boolean getHasAlarmShieldCount() Obtain Whether to return the quantity information of alarm silence statistics status in the configured notification channel group.
- true: Need to return.
- false: do not return (default false).
 * @method void setHasAlarmShieldCount(boolean $HasAlarmShieldCount) Set Whether to return the quantity information of alarm silence statistics status in the configured notification channel group.
- true: Need to return.
- false: do not return (default false).
 */
class DescribeAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var array name
Filter by [notification channel group name].
Type: String
"Filters":[{"Key":"name","Values":["test-notice"]}]
Required: No
alarmNoticeId
Filter by [notification channel group ID].
Type: String
"Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
Required: No
uid
Filter by [recipient user ID].
Type: String
"Filters": [{Key: "uid", Values: ["1137546"]}]
Required: No
groupId
Filter by [recipient user group ID].
Type: String
"Filters": [{Key: "groupId", Values: ["344098"]}]
Required: No

deliverFlag
Filter by [delivery status].
Type: String
Required: No
Available values: "1": disabled, "2": enabled, "3": delivery exception
"Filters":[{"Key":"deliverFlag","Values":["2"]}]
The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
     */
    public $Filters;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var boolean Whether to return the quantity information of alarm silence statistics status in the configured notification channel group.
- true: Need to return.
- false: do not return (default false).
     */
    public $HasAlarmShieldCount;

    /**
     * @param array $Filters name
Filter by [notification channel group name].
Type: String
"Filters":[{"Key":"name","Values":["test-notice"]}]
Required: No
alarmNoticeId
Filter by [notification channel group ID].
Type: String
"Filters": [{Key: "alarmNoticeId", Values: ["notice-5281f1d2-6275-4e56-9ec3-a1eb19d8bc2f"]}]
Required: No
uid
Filter by [recipient user ID].
Type: String
"Filters": [{Key: "uid", Values: ["1137546"]}]
Required: No
groupId
Filter by [recipient user group ID].
Type: String
"Filters": [{Key: "groupId", Values: ["344098"]}]
Required: No

deliverFlag
Filter by [delivery status].
Type: String
Required: No
Available values: "1": disabled, "2": enabled, "3": delivery exception
"Filters":[{"Key":"deliverFlag","Values":["2"]}]
The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param boolean $HasAlarmShieldCount Whether to return the quantity information of alarm silence statistics status in the configured notification channel group.
- true: Need to return.
- false: do not return (default false).
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HasAlarmShieldCount",$param) and $param["HasAlarmShieldCount"] !== null) {
            $this->HasAlarmShieldCount = $param["HasAlarmShieldCount"];
        }
    }
}
