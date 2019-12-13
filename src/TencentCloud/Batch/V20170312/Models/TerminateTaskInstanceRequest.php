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
 * @method string getTaskName() 获取Task name
 * @method void setTaskName(string $TaskName) 设置Task name
 * @method integer getTaskInstanceIndex() 获取Task instance index
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) 设置Task instance index
 */

/**
 *TerminateTaskInstance request structure.
 */
class TerminateTaskInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $JobId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var integer Task instance index
     */
    public $TaskInstanceIndex;
    /**
     * @param string $JobId Instance ID
     * @param string $TaskName Task name
     * @param integer $TaskInstanceIndex Task instance index
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

        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }
    }
}
