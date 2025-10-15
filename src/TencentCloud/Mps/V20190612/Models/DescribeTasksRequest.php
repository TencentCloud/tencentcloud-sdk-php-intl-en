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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasks request structure.
 *
 * @method string getStatus() Obtain Filters task status. available values:.
-WAITING.
-PROCESSING (processing).
-FINISH (completed).
 * @method void setStatus(string $Status) Set Filters task status. available values:.
-WAITING.
-PROCESSING (processing).
-FINISH (completed).
 * @method boolean getSubTaskHasFailed() Obtain Indicates whether there is a subtask failure when the task is complete.
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) Set Indicates whether there is a subtask failure when the task is complete.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 10. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 10. Maximum value: 100.
 * @method string getScrollToken() Obtain Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 * @method void setScrollToken(string $ScrollToken) Set Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
 * @method string getStartTime() Obtain Query task start time.
 * @method void setStartTime(string $StartTime) Set Query task start time.
 * @method string getEndTime() Obtain Query task end time.
 * @method void setEndTime(string $EndTime) Set Query task end time.
 */
class DescribeTasksRequest extends AbstractModel
{
    /**
     * @var string Filters task status. available values:.
-WAITING.
-PROCESSING (processing).
-FINISH (completed).
     */
    public $Status;

    /**
     * @var boolean Indicates whether there is a subtask failure when the task is complete.
     */
    public $SubTaskHasFailed;

    /**
     * @var integer Number of returned entries. Default value: 10. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
     */
    public $ScrollToken;

    /**
     * @var string Query task start time.
     */
    public $StartTime;

    /**
     * @var string Query task end time.
     */
    public $EndTime;

    /**
     * @param string $Status Filters task status. available values:.
-WAITING.
-PROCESSING (processing).
-FINISH (completed).
     * @param boolean $SubTaskHasFailed Indicates whether there is a subtask failure when the task is complete.
     * @param integer $Limit Number of returned entries. Default value: 10. Maximum value: 100.
     * @param string $ScrollToken Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.
     * @param string $StartTime Query task start time.
     * @param string $EndTime Query task end time.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
