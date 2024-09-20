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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskList request structure.
 *
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method string getTaskTitle() Obtain Experiment name
 * @method void setTaskTitle(string $TaskTitle) Set Experiment name
 * @method array getTaskTag() Obtain Tag key
 * @method void setTaskTag(array $TaskTag) Set Tag key
 * @method integer getTaskStatus() Obtain Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 * @method void setTaskStatus(integer $TaskStatus) Set Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 * @method string getTaskStartTime() Obtain Start time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method void setTaskStartTime(string $TaskStartTime) Set Start time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method string getTaskEndTime() Obtain End time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method void setTaskEndTime(string $TaskEndTime) Set End time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method string getTaskUpdateTime() Obtain Update time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method void setTaskUpdateTime(string $TaskUpdateTime) Set Update time, in fixed format: %Y-%m-%d %H:%M:%S
 * @method array getTags() Obtain Tag pair
 * @method void setTags(array $Tags) Set Tag pair
 * @method array getFilters() Obtain Filtering criteria
 * @method void setFilters(array $Filters) Set Filtering criteria
 * @method array getTaskId() Obtain Experiment ID
 * @method void setTaskId(array $TaskId) Set Experiment ID
 * @method array getApplicationId() Obtain ID of the associated application for filtering
 * @method void setApplicationId(array $ApplicationId) Set ID of the associated application for filtering
 * @method array getApplicationName() Obtain Associated application for filtering
 * @method void setApplicationName(array $ApplicationName) Set Associated application for filtering
 * @method array getTaskStatusList() Obtain Task status for filtering, supporting multiple states (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 * @method void setTaskStatusList(array $TaskStatusList) Set Task status for filtering, supporting multiple states (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var string Experiment name
     */
    public $TaskTitle;

    /**
     * @var array Tag key
     */
    public $TaskTag;

    /**
     * @var integer Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
     */
    public $TaskStatus;

    /**
     * @var string Start time, in fixed format: %Y-%m-%d %H:%M:%S
     */
    public $TaskStartTime;

    /**
     * @var string End time, in fixed format: %Y-%m-%d %H:%M:%S
     */
    public $TaskEndTime;

    /**
     * @var string Update time, in fixed format: %Y-%m-%d %H:%M:%S
     */
    public $TaskUpdateTime;

    /**
     * @var array Tag pair
     */
    public $Tags;

    /**
     * @var array Filtering criteria
     */
    public $Filters;

    /**
     * @var array Experiment ID
     */
    public $TaskId;

    /**
     * @var array ID of the associated application for filtering
     */
    public $ApplicationId;

    /**
     * @var array Associated application for filtering
     */
    public $ApplicationName;

    /**
     * @var array Task status for filtering, supporting multiple states (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
     */
    public $TaskStatusList;

    /**
     * @param integer $Limit Pagination limit
     * @param integer $Offset Pagination offset
     * @param string $TaskTitle Experiment name
     * @param array $TaskTag Tag key
     * @param integer $TaskStatus Task status (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
     * @param string $TaskStartTime Start time, in fixed format: %Y-%m-%d %H:%M:%S
     * @param string $TaskEndTime End time, in fixed format: %Y-%m-%d %H:%M:%S
     * @param string $TaskUpdateTime Update time, in fixed format: %Y-%m-%d %H:%M:%S
     * @param array $Tags Tag pair
     * @param array $Filters Filtering criteria
     * @param array $TaskId Experiment ID
     * @param array $ApplicationId ID of the associated application for filtering
     * @param array $ApplicationName Associated application for filtering
     * @param array $TaskStatusList Task status for filtering, supporting multiple states (1001: not started; 1002: in progress; 1003: paused; 1004: ended)
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ActionFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("TaskStatusList",$param) and $param["TaskStatusList"] !== null) {
            $this->TaskStatusList = $param["TaskStatusList"];
        }
    }
}
