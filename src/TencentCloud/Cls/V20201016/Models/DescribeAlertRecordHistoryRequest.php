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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRecordHistory request structure.
 *
 * @method integer getFrom() Obtain Start time of the query range, which is a Unix timestamp in ms
 * @method void setFrom(integer $From) Set Start time of the query range, which is a Unix timestamp in ms
 * @method integer getTo() Obtain End time of the query range, which is a Unix timestamp in ms
 * @method void setTo(integer $To) Set End time of the query range, which is a Unix timestamp in ms
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Maximum value: 100
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Maximum value: 100
 * @method array getFilters() Obtain - alertId: Filter by alarm policy ID. Type: String; optional
- topicId: Filter by ID of monitored object. Type: String; optional
- status: Filter by alarm status. Type: String, optional. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
- alarmLevel: Filter by alarm severity. Type: String, optional. Valid values: `0` (Warn), `1` (Info), `2` (Critical)

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
 * @method void setFilters(array $Filters) Set - alertId: Filter by alarm policy ID. Type: String; optional
- topicId: Filter by ID of monitored object. Type: String; optional
- status: Filter by alarm status. Type: String, optional. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
- alarmLevel: Filter by alarm severity. Type: String, optional. Valid values: `0` (Warn), `1` (Info), `2` (Critical)

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
 */
class DescribeAlertRecordHistoryRequest extends AbstractModel
{
    /**
     * @var integer Start time of the query range, which is a Unix timestamp in ms
     */
    public $From;

    /**
     * @var integer End time of the query range, which is a Unix timestamp in ms
     */
    public $To;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Maximum value: 100
     */
    public $Limit;

    /**
     * @var array - alertId: Filter by alarm policy ID. Type: String; optional
- topicId: Filter by ID of monitored object. Type: String; optional
- status: Filter by alarm status. Type: String, optional. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
- alarmLevel: Filter by alarm severity. Type: String, optional. Valid values: `0` (Warn), `1` (Info), `2` (Critical)

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
     */
    public $Filters;

    /**
     * @param integer $From Start time of the query range, which is a Unix timestamp in ms
     * @param integer $To End time of the query range, which is a Unix timestamp in ms
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Maximum value: 100
     * @param array $Filters - alertId: Filter by alarm policy ID. Type: String; optional
- topicId: Filter by ID of monitored object. Type: String; optional
- status: Filter by alarm status. Type: String, optional. Valid values: `0` (uncleared), `1` (cleared), `2` (expired)
- alarmLevel: Filter by alarm severity. Type: String, optional. Valid values: `0` (Warn), `1` (Info), `2` (Critical)

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
