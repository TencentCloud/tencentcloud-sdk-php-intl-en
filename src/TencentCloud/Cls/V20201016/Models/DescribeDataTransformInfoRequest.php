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
 * DescribeDataTransformInfo request structure.
 *
 * @method array getFilters() Obtain <br><li>taskName

Filter by **processing task name**.
Type: String

Required: No

<br><li>taskId

Filter by **processing task ID**.
Type: String

Required: No

<br><li>srctopicId

Filter by **source topic ID**.
Type: String

Required: No

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
 * @method void setFilters(array $Filters) Set <br><li>taskName

Filter by **processing task name**.
Type: String

Required: No

<br><li>taskId

Filter by **processing task ID**.
Type: String

Required: No

<br><li>srctopicId

Filter by **source topic ID**.
Type: String

Required: No

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
 * @method integer getOffset() Obtain The pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Maximum number of entries per page. Default value: 20. Maximum value: 100.
 * @method integer getType() Obtain Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
 * @method void setType(integer $Type) Set Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
 * @method string getTaskId() Obtain Task ID, which is required when `Type` is set to `1`
 * @method void setTaskId(string $TaskId) Set Task ID, which is required when `Type` is set to `1`
 */
class DescribeDataTransformInfoRequest extends AbstractModel
{
    /**
     * @var array <br><li>taskName

Filter by **processing task name**.
Type: String

Required: No

<br><li>taskId

Filter by **processing task ID**.
Type: String

Required: No

<br><li>srctopicId

Filter by **source topic ID**.
Type: String

Required: No

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
     */
    public $Filters;

    /**
     * @var integer The pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of entries per page. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
     */
    public $Type;

    /**
     * @var string Task ID, which is required when `Type` is set to `1`
     */
    public $TaskId;

    /**
     * @param array $Filters <br><li>taskName

Filter by **processing task name**.
Type: String

Required: No

<br><li>taskId

Filter by **processing task ID**.
Type: String

Required: No

<br><li>srctopicId

Filter by **source topic ID**.
Type: String

Required: No

Each request can have up to 10 `Filters` and 100 `Filter.Values`.
     * @param integer $Offset The pagination offset. Default value: 0.
     * @param integer $Limit Maximum number of entries per page. Default value: 20. Maximum value: 100.
     * @param integer $Type Task type. Valid values: 1: Get the details of a single task. 2 (default): Get the task list.
     * @param string $TaskId Task ID, which is required when `Type` is set to `1`
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
