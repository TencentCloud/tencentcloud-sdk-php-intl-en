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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content management task result
 *
 * @method string getJobId() Obtain Task ID
 * @method void setJobId(string $JobId) Set Task ID
 * @method string getStatus() Obtain Status of the task
 * @method void setStatus(string $Status) Set Status of the task
 * @method string getTarget() Obtain Resource
 * @method void setTarget(string $Target) Set Resource
 * @method string getType() Obtain Task type
 * @method void setType(string $Type) Set Task type
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getUpdateTime() Obtain Task completion time
 * @method void setUpdateTime(string $UpdateTime) Set Task completion time
 */
class Task extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $JobId;

    /**
     * @var string Status of the task
     */
    public $Status;

    /**
     * @var string Resource
     */
    public $Target;

    /**
     * @var string Task type
     */
    public $Type;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string Task completion time
     */
    public $UpdateTime;

    /**
     * @param string $JobId Task ID
     * @param string $Status Status of the task
     * @param string $Target Resource
     * @param string $Type Task type
     * @param string $CreateTime Task creation time
     * @param string $UpdateTime Task completion time
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
