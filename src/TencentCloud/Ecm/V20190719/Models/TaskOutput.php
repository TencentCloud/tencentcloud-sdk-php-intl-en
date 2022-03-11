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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output parameter of the task query
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getMessage() Obtain Status description
 * @method void setMessage(string $Message) Set Status description
 * @method string getStatus() Obtain Status value. Valid values: SUCCESS, FAILED, OPERATING
 * @method void setStatus(string $Status) Set Status value. Valid values: SUCCESS, FAILED, OPERATING
 * @method string getAddTime() Obtain Task submission time
 * @method void setAddTime(string $AddTime) Set Task submission time
 * @method string getEndTime() Obtain Task end time
 * @method void setEndTime(string $EndTime) Set Task end time
 * @method string getOperation() Obtain Operation name
 * @method void setOperation(string $Operation) Set Operation name
 */
class TaskOutput extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Status description
     */
    public $Message;

    /**
     * @var string Status value. Valid values: SUCCESS, FAILED, OPERATING
     */
    public $Status;

    /**
     * @var string Task submission time
     */
    public $AddTime;

    /**
     * @var string Task end time
     */
    public $EndTime;

    /**
     * @var string Operation name
     */
    public $Operation;

    /**
     * @param string $TaskId Task ID
     * @param string $Message Status description
     * @param string $Status Status value. Valid values: SUCCESS, FAILED, OPERATING
     * @param string $AddTime Task submission time
     * @param string $EndTime Task end time
     * @param string $Operation Operation name
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
