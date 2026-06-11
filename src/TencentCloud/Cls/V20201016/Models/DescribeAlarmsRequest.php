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
 * DescribeAlarms request structure.
 *
 * @method array getFilters() Obtain name
-Filter by [alarm policy name].
-Type: String
-Optional: No.
-Example: test-alarm

alarmId
-Filter by [alert policy ID].
-Type: String
-Optional: No.
-Example: alarm-b60cf034-c3d6-4b01-xxxx-4e877ebb4751

topicId
-Filter by [log topic ID of the monitored object].
-Type: String
-Optional: No.
-Example: 6766f83d-659e-xxxx-a8f7-9104a1012743

enable
-Filter by [Enabled status].
-Type: String
-Remark: The parameter value range for enable is 1, t, T, TRUE, true, True, 0, f, F, FALSE, false, False. Other values will return error information.
-Optional: No.
-Example: true

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method void setFilters(array $Filters) Set name
-Filter by [alarm policy name].
-Type: String
-Optional: No.
-Example: test-alarm

alarmId
-Filter by [alert policy ID].
-Type: String
-Optional: No.
-Example: alarm-b60cf034-c3d6-4b01-xxxx-4e877ebb4751

topicId
-Filter by [log topic ID of the monitored object].
-Type: String
-Optional: No.
-Example: 6766f83d-659e-xxxx-a8f7-9104a1012743

enable
-Filter by [Enabled status].
-Type: String
-Remark: The parameter value range for enable is 1, t, T, TRUE, true, True, 0, f, F, FALSE, false, False. Other values will return error information.
-Optional: No.
-Example: true

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 */
class DescribeAlarmsRequest extends AbstractModel
{
    /**
     * @var array name
-Filter by [alarm policy name].
-Type: String
-Optional: No.
-Example: test-alarm

alarmId
-Filter by [alert policy ID].
-Type: String
-Optional: No.
-Example: alarm-b60cf034-c3d6-4b01-xxxx-4e877ebb4751

topicId
-Filter by [log topic ID of the monitored object].
-Type: String
-Optional: No.
-Example: 6766f83d-659e-xxxx-a8f7-9104a1012743

enable
-Filter by [Enabled status].
-Type: String
-Remark: The parameter value range for enable is 1, t, T, TRUE, true, True, 0, f, F, FALSE, false, False. Other values will return error information.
-Optional: No.
-Example: true

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
     * @param array $Filters name
-Filter by [alarm policy name].
-Type: String
-Optional: No.
-Example: test-alarm

alarmId
-Filter by [alert policy ID].
-Type: String
-Optional: No.
-Example: alarm-b60cf034-c3d6-4b01-xxxx-4e877ebb4751

topicId
-Filter by [log topic ID of the monitored object].
-Type: String
-Optional: No.
-Example: 6766f83d-659e-xxxx-a8f7-9104a1012743

enable
-Filter by [Enabled status].
-Type: String
-Remark: The parameter value range for enable is 1, t, T, TRUE, true, True, 0, f, F, FALSE, false, False. Other values will return error information.
-Optional: No.
-Example: true

The maximum number of Filters per request is 10, and the maximum for Filter.Values is 5.
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
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
    }
}
