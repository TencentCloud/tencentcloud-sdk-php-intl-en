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
 * @method string getJobId() 获取Instance ID
 * @method void setJobId(string $JobId) 设置Instance ID
 * @method string getTaskName() 获取Job name
 * @method void setTaskName(string $TaskName) 设置Job name
 * @method array getTaskInstanceIndexes() 获取Set of task instances
 * @method void setTaskInstanceIndexes(array $TaskInstanceIndexes) 设置Set of task instances
 * @method integer getOffset() 获取Starting task instance
 * @method void setOffset(integer $Offset) 设置Starting task instance
 * @method integer getLimit() 获取Maximum number of task instances
 * @method void setLimit(integer $Limit) 设置Maximum number of task instances
 */

/**
 *DescribeTaskLogs request structure.
 */
class DescribeTaskLogsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $JobId;

    /**
     * @var string Job name
     */
    public $TaskName;

    /**
     * @var array Set of task instances
     */
    public $TaskInstanceIndexes;

    /**
     * @var integer Starting task instance
     */
    public $Offset;

    /**
     * @var integer Maximum number of task instances
     */
    public $Limit;
    /**
     * @param string $JobId Instance ID
     * @param string $TaskName Job name
     * @param array $TaskInstanceIndexes Set of task instances
     * @param integer $Offset Starting task instance
     * @param integer $Limit Maximum number of task instances
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
