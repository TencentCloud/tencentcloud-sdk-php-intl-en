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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrationTaskStatus request structure.
 *
 * @method string getStatus() Obtain Task status, valid values include `unstart` (migration has not started), `migrating` (migration in progress), `finish` (migration completed) or `fail` (migration failed).
 * @method void setStatus(string $Status) Set Task status, valid values include `unstart` (migration has not started), `migrating` (migration in progress), `finish` (migration completed) or `fail` (migration failed).
 * @method string getTaskId() Obtain Task ID, such as msp-jitoh33n
 * @method void setTaskId(string $TaskId) Set Task ID, such as msp-jitoh33n
 */
class ModifyMigrationTaskStatusRequest extends AbstractModel
{
    /**
     * @var string Task status, valid values include `unstart` (migration has not started), `migrating` (migration in progress), `finish` (migration completed) or `fail` (migration failed).
     */
    public $Status;

    /**
     * @var string Task ID, such as msp-jitoh33n
     */
    public $TaskId;

    /**
     * @param string $Status Task status, valid values include `unstart` (migration has not started), `migrating` (migration in progress), `finish` (migration completed) or `fail` (migration failed).
     * @param string $TaskId Task ID, such as msp-jitoh33n
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
