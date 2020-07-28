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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotOperationLogs request structure.
 *
 * @method array getFilters() Obtain Filter conditions. The following conditions are supported:
<li>snapshot-id - Array of String - Required or not: Yes - Filter by snapshot ID, with maximum of 10 snapshot IDs able to be specified per request.
 * @method void setFilters(array $Filters) Set Filter conditions. The following conditions are supported:
<li>snapshot-id - Array of String - Required or not: Yes - Filter by snapshot ID, with maximum of 10 snapshot IDs able to be specified per request.
 * @method string getBeginTime() Obtain The start time of the operation logs to be queried, for example: '2019-11-22 00:00:00"
 * @method void setBeginTime(string $BeginTime) Set The start time of the operation logs to be queried, for example: '2019-11-22 00:00:00"
 * @method string getEndTime() Obtain The end time of the operation logs to be queried, for example: '2019-11-22 23:59:59"
 * @method void setEndTime(string $EndTime) Set The end time of the operation logs to be queried, for example: '2019-11-22 23:59:59"
 */
class DescribeSnapshotOperationLogsRequest extends AbstractModel
{
    /**
     * @var array Filter conditions. The following conditions are supported:
<li>snapshot-id - Array of String - Required or not: Yes - Filter by snapshot ID, with maximum of 10 snapshot IDs able to be specified per request.
     */
    public $Filters;

    /**
     * @var string The start time of the operation logs to be queried, for example: '2019-11-22 00:00:00"
     */
    public $BeginTime;

    /**
     * @var string The end time of the operation logs to be queried, for example: '2019-11-22 23:59:59"
     */
    public $EndTime;

    /**
     * @param array $Filters Filter conditions. The following conditions are supported:
<li>snapshot-id - Array of String - Required or not: Yes - Filter by snapshot ID, with maximum of 10 snapshot IDs able to be specified per request.
     * @param string $BeginTime The start time of the operation logs to be queried, for example: '2019-11-22 00:00:00"
     * @param string $EndTime The end time of the operation logs to be queried, for example: '2019-11-22 23:59:59"
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

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
