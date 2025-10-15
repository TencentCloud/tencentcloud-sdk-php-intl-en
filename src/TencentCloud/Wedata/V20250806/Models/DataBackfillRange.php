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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Backfill plan date range.
 *
 * @method string getStartDate() Obtain Start date in yyyy-MM-dd format. indicates the start from 00:00:00 on the specified date.

 * @method void setStartDate(string $StartDate) Set Start date in yyyy-MM-dd format. indicates the start from 00:00:00 on the specified date.

 * @method string getEndDate() Obtain End date in the format yyyy-MM-dd, indicates ending at 23:59:59 of the specified date.

 * @method void setEndDate(string $EndDate) Set End date in the format yyyy-MM-dd, indicates ending at 23:59:59 of the specified date.

 * @method string getExecutionStartTime() Obtain Start time of each day between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Start time of each day between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

 * @method string getExecutionEndTime() Obtain End time point between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

 * @method void setExecutionEndTime(string $ExecutionEndTime) Set End time point between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.
 */
class DataBackfillRange extends AbstractModel
{
    /**
     * @var string Start date in yyyy-MM-dd format. indicates the start from 00:00:00 on the specified date.

     */
    public $StartDate;

    /**
     * @var string End date in the format yyyy-MM-dd, indicates ending at 23:59:59 of the specified date.

     */
    public $EndDate;

    /**
     * @var string Start time of each day between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

     */
    public $ExecutionStartTime;

    /**
     * @var string End time point between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

     */
    public $ExecutionEndTime;

    /**
     * @param string $StartDate Start date in yyyy-MM-dd format. indicates the start from 00:00:00 on the specified date.

     * @param string $EndDate End date in the format yyyy-MM-dd, indicates ending at 23:59:59 of the specified date.

     * @param string $ExecutionStartTime Start time of each day between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.

     * @param string $ExecutionEndTime End time point between [StartDate, EndDate] in HH:mm format. effective for tasks with a period of hours or less.
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
        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }
    }
}
