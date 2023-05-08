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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskLogs request structure.
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method array getTaskInstanceIndexes() Obtain Set of task instances
 * @method void setTaskInstanceIndexes(array $TaskInstanceIndexes) Set Set of task instances
 * @method integer getOffset() Obtain The start point of query
 * @method void setOffset(integer $Offset) Set The start point of query
 * @method integer getLimit() Obtain Maximum number of task instances returned
 * @method void setLimit(integer $Limit) Set Maximum number of task instances returned
 */
class DescribeTaskLogsRequest extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var array Set of task instances
     */
    public $TaskInstanceIndexes;

    /**
     * @var integer The start point of query
     */
    public $Offset;

    /**
     * @var integer Maximum number of task instances returned
     */
    public $Limit;

    /**
     * @param string $JobId Job ID
     * @param string $TaskName Task name
     * @param array $TaskInstanceIndexes Set of task instances
     * @param integer $Offset The start point of query
     * @param integer $Limit Maximum number of task instances returned
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskInstanceIndexes",$param) and $param["TaskInstanceIndexes"] !== null) {
            $this->TaskInstanceIndexes = $param["TaskInstanceIndexes"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
