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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSendTasks request structure.
 *
 * @method integer getOffset() Obtain Offset, starting from 0. The value is an integer. `0` means to skip 0 entries.
 * @method void setOffset(integer $Offset) Set Offset, starting from 0. The value is an integer. `0` means to skip 0 entries.
 * @method integer getLimit() Obtain Number of records to query. The value is an integer not exceeding 100.
 * @method void setLimit(integer $Limit) Set Number of records to query. The value is an integer not exceeding 100.
 * @method integer getStatus() Obtain Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent. To query tasks in all states, do not pass in this parameter.
 * @method void setStatus(integer $Status) Set Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent. To query tasks in all states, do not pass in this parameter.
 * @method integer getReceiverId() Obtain Recipient group ID
 * @method void setReceiverId(integer $ReceiverId) Set Recipient group ID
 * @method integer getTaskType() Obtain Task type. `1`: immediate; `2`: scheduled; `3`: recurring. To query tasks of all types, do not pass in this parameter.
 * @method void setTaskType(integer $TaskType) Set Task type. `1`: immediate; `2`: scheduled; `3`: recurring. To query tasks of all types, do not pass in this parameter.
 */
class ListSendTasksRequest extends AbstractModel
{
    /**
     * @var integer Offset, starting from 0. The value is an integer. `0` means to skip 0 entries.
     */
    public $Offset;

    /**
     * @var integer Number of records to query. The value is an integer not exceeding 100.
     */
    public $Limit;

    /**
     * @var integer Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent. To query tasks in all states, do not pass in this parameter.
     */
    public $Status;

    /**
     * @var integer Recipient group ID
     */
    public $ReceiverId;

    /**
     * @var integer Task type. `1`: immediate; `2`: scheduled; `3`: recurring. To query tasks of all types, do not pass in this parameter.
     */
    public $TaskType;

    /**
     * @param integer $Offset Offset, starting from 0. The value is an integer. `0` means to skip 0 entries.
     * @param integer $Limit Number of records to query. The value is an integer not exceeding 100.
     * @param integer $Status Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent. To query tasks in all states, do not pass in this parameter.
     * @param integer $ReceiverId Recipient group ID
     * @param integer $TaskType Task type. `1`: immediate; `2`: scheduled; `3`: recurring. To query tasks of all types, do not pass in this parameter.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
