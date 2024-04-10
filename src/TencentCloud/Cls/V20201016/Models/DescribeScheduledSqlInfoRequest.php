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
 * DescribeScheduledSqlInfo request structure.
 *
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method string getName() Obtain Task name.
 * @method void setName(string $Name) Set Task name.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method array getFilters() Obtain <li>srcTopicName: Filter by Source Log Topic Name, fuzzy match. Type: String. Required: No</li><li>dstTopicName: Filter by Destination Log Topic Name, fuzzy match. Type: String. Required: No</li><li>srcTopicId: Filter by Source Log Topic ID. Type: String. Required: No</li><li>dstTopicId: Filter by Destination Log Topic ID. Type: String. Required: No</li><li>bizType: Filter by Topic Type, 0: log topic; 1: metric topic. Type: String. Required: No</li><li>status: Filter by Task Status, 1: running; 2: stopped. Type: String. Required: No</li><li>taskName: Filter by Task Name, fuzzy match. Type: String. Required: No</li><li>taskId: Filter by Task ID, fuzzy match. Type: String. Required: No</li>
 * @method void setFilters(array $Filters) Set <li>srcTopicName: Filter by Source Log Topic Name, fuzzy match. Type: String. Required: No</li><li>dstTopicName: Filter by Destination Log Topic Name, fuzzy match. Type: String. Required: No</li><li>srcTopicId: Filter by Source Log Topic ID. Type: String. Required: No</li><li>dstTopicId: Filter by Destination Log Topic ID. Type: String. Required: No</li><li>bizType: Filter by Topic Type, 0: log topic; 1: metric topic. Type: String. Required: No</li><li>status: Filter by Task Status, 1: running; 2: stopped. Type: String. Required: No</li><li>taskName: Filter by Task Name, fuzzy match. Type: String. Required: No</li><li>taskId: Filter by Task ID, fuzzy match. Type: String. Required: No</li>
 */
class DescribeScheduledSqlInfoRequest extends AbstractModel
{
    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var string Task name.
     */
    public $Name;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var array <li>srcTopicName: Filter by Source Log Topic Name, fuzzy match. Type: String. Required: No</li><li>dstTopicName: Filter by Destination Log Topic Name, fuzzy match. Type: String. Required: No</li><li>srcTopicId: Filter by Source Log Topic ID. Type: String. Required: No</li><li>dstTopicId: Filter by Destination Log Topic ID. Type: String. Required: No</li><li>bizType: Filter by Topic Type, 0: log topic; 1: metric topic. Type: String. Required: No</li><li>status: Filter by Task Status, 1: running; 2: stopped. Type: String. Required: No</li><li>taskName: Filter by Task Name, fuzzy match. Type: String. Required: No</li><li>taskId: Filter by Task ID, fuzzy match. Type: String. Required: No</li>
     */
    public $Filters;

    /**
     * @param integer $Offset Page offset. Default value: 0
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param string $Name Task name.
     * @param string $TaskId Task ID.
     * @param array $Filters <li>srcTopicName: Filter by Source Log Topic Name, fuzzy match. Type: String. Required: No</li><li>dstTopicName: Filter by Destination Log Topic Name, fuzzy match. Type: String. Required: No</li><li>srcTopicId: Filter by Source Log Topic ID. Type: String. Required: No</li><li>dstTopicId: Filter by Destination Log Topic ID. Type: String. Required: No</li><li>bizType: Filter by Topic Type, 0: log topic; 1: metric topic. Type: String. Required: No</li><li>status: Filter by Task Status, 1: running; 2: stopped. Type: String. Required: No</li><li>taskName: Filter by Task Name, fuzzy match. Type: String. Required: No</li><li>taskId: Filter by Task ID, fuzzy match. Type: String. Required: No</li>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
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
