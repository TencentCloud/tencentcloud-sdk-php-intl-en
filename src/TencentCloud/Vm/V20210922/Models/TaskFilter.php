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
 * Cos TaskFilter 
 *
 * @method string getBizType() Obtain Task type
 * @method void setBizType(string $BizType) Set Task type
 * @method string getType() Obtain Task type. Values: `VIDEO`, `AUDIO`, `LIVE_VIDEO`, and `LIVE_AUDIO`.
 * @method void setType(string $Type) Set Task type. Values: `VIDEO`, `AUDIO`, `LIVE_VIDEO`, and `LIVE_AUDIO`.
 * @method string getSuggestion() Obtain Suggestion. Values: `Pass`, `Review`, and `Block`.
 * @method void setSuggestion(string $Suggestion) Set Suggestion. Values: `Pass`, `Review`, and `Block`.
 * @method string getTaskStatus() Obtain Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
 * @method void setTaskStatus(string $TaskStatus) Set Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
 */
class TaskFilter extends AbstractModel
{
    /**
     * @var string Task type
     */
    public $BizType;

    /**
     * @var string Task type. Values: `VIDEO`, `AUDIO`, `LIVE_VIDEO`, and `LIVE_AUDIO`.
     */
    public $Type;

    /**
     * @var string Suggestion. Values: `Pass`, `Review`, and `Block`.
     */
    public $Suggestion;

    /**
     * @var string Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
     */
    public $TaskStatus;

    /**
     * @param string $BizType Task type
     * @param string $Type Task type. Values: `VIDEO`, `AUDIO`, `LIVE_VIDEO`, and `LIVE_AUDIO`.
     * @param string $Suggestion Suggestion. Values: `Pass`, `Review`, and `Block`.
     * @param string $TaskStatus Task status. Values: `PENDING`, `RUNNING`, `ERROR`, `FINISH`, and `CANCELLED`.
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
