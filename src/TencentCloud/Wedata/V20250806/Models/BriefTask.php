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
 * Display task id and task name info.
 *
 * @method string getTaskId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getOwnerUinList() Obtain Task owner id. a task may have multiple responsible persons.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUinList(array $OwnerUinList) Set Task owner id. a task may have multiple responsible persons.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BriefTask extends AbstractModel
{
    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var array Task owner id. a task may have multiple responsible persons.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUinList;

    /**
     * @param string $TaskId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Task creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $OwnerUinList Task owner id. a task may have multiple responsible persons.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("OwnerUinList",$param) and $param["OwnerUinList"] !== null) {
            $this->OwnerUinList = $param["OwnerUinList"];
        }
    }
}
