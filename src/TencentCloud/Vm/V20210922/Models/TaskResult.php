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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The result returned during task creation
 *
 * @method string getDataId() Obtain Data ID passed when you request the data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataId(string $DataId) Set Data ID passed when you request the data
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCode() Obtain Error code. If `OK` is returned, it indicates the task is created successfully. You can see common error codes for more details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCode(string $Code) Set Error code. If `OK` is returned, it indicates the task is created successfully. You can see common error codes for more details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskResult extends AbstractModel
{
    /**
     * @var string Data ID passed when you request the data
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataId;

    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Error code. If `OK` is returned, it indicates the task is created successfully. You can see common error codes for more details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Code;

    /**
     * @var string Error message
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @param string $DataId Data ID passed when you request the data
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Code Error code. If `OK` is returned, it indicates the task is created successfully. You can see common error codes for more details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message
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
