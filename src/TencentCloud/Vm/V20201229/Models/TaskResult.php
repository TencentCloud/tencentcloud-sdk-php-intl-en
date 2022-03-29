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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The result returned during task creation
 *
 * @method string getDataId() Obtain This field is used to return the `DataId` passed in within the `TaskInput` structure when a video moderation task is created. It is used to identify the specific moderation task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set This field is used to return the `DataId` passed in within the `TaskInput` structure when a video moderation task is created. It is used to identify the specific moderation task.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain This field is used to return the ID of a video moderation task for identification, query, and management of moderation tasks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set This field is used to return the ID of a video moderation task for identification, query, and management of moderation tasks.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCode() Obtain This field is used to return the task creation status. If `OK` is returned, the task has been created successfully; if another value is returned, refer to the common error codes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCode(string $Code) Set This field is used to return the task creation status. If `OK` is returned, the task has been created successfully; if another value is returned, refer to the common error codes.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain **This field will take effect only when the returned value of `Code` is an error code**. It is used to return the error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set **This field will take effect only when the returned value of `Code` is an error code**. It is used to return the error message.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string This field is used to return the `DataId` passed in within the `TaskInput` structure when a video moderation task is created. It is used to identify the specific moderation task.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string This field is used to return the ID of a video moderation task for identification, query, and management of moderation tasks.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string This field is used to return the task creation status. If `OK` is returned, the task has been created successfully; if another value is returned, refer to the common error codes.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Code;

    /**
     * @var string **This field will take effect only when the returned value of `Code` is an error code**. It is used to return the error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param string $DataId This field is used to return the `DataId` passed in within the `TaskInput` structure when a video moderation task is created. It is used to identify the specific moderation task.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId This field is used to return the ID of a video moderation task for identification, query, and management of moderation tasks.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Code This field is used to return the task creation status. If `OK` is returned, the task has been created successfully; if another value is returned, refer to the common error codes.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message **This field will take effect only when the returned value of `Code` is an error code**. It is used to return the error message.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
