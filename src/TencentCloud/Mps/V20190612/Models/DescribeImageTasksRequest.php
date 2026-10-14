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
 * DescribeImageTasks request structure.
 *
 * @method string getStatus() Obtain <p>Task status filter condition.</p>
 * @method void setStatus(string $Status) Set <p>Task status filter condition.</p>
 * @method integer getLimit() Obtain <p>Number of returned records.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of returned records.</p>
 * @method string getScrollToken() Obtain <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 * @method void setScrollToken(string $ScrollToken) Set <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
 * @method string getStartTime() Obtain <p>Task start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setStartTime(string $StartTime) Set <p>Task start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getEndTime() Obtain <p>Task end time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setEndTime(string $EndTime) Set <p>Task end time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method boolean getSubTaskHasFailed() Obtain <p>Filter subtask status.</p>
 * @method void setSubTaskHasFailed(boolean $SubTaskHasFailed) Set <p>Filter subtask status.</p>
 */
class DescribeImageTasksRequest extends AbstractModel
{
    /**
     * @var string <p>Task status filter condition.</p>
     */
    public $Status;

    /**
     * @var integer <p>Number of returned records.</p>
     */
    public $Limit;

    /**
     * @var string <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
     */
    public $ScrollToken;

    /**
     * @var string <p>Task start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $StartTime;

    /**
     * @var string <p>Task end time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $EndTime;

    /**
     * @var boolean <p>Filter subtask status.</p>
     */
    public $SubTaskHasFailed;

    /**
     * @param string $Status <p>Task status filter condition.</p>
     * @param integer $Limit <p>Number of returned records.</p>
     * @param string $ScrollToken <p>Scrolling identifier which is used for pulling in batches. If a single request cannot pull all the data entries, the API will return `ScrollToken`, and if the next request carries it, the next pull will start from the next entry.</p>
     * @param string $StartTime <p>Task start time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $EndTime <p>Task end time.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param boolean $SubTaskHasFailed <p>Filter subtask status.</p>
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

        if (array_key_exists("SubTaskHasFailed",$param) and $param["SubTaskHasFailed"] !== null) {
            $this->SubTaskHasFailed = $param["SubTaskHasFailed"];
        }
    }
}
