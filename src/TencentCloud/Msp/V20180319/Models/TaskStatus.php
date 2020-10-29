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
 * Migration details list
 *
 * @method string getStatus() Obtain Migration status
 * @method void setStatus(string $Status) Set Migration status
 * @method string getProgress() Obtain Migration progress
 * @method void setProgress(string $Progress) Set Migration progress
 * @method string getUpdateTime() Obtain Migration date
 * @method void setUpdateTime(string $UpdateTime) Set Migration date
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string Migration status
     */
    public $Status;

    /**
     * @var string Migration progress
     */
    public $Progress;

    /**
     * @var string Migration date
     */
    public $UpdateTime;

    /**
     * @param string $Status Migration status
     * @param string $Progress Migration progress
     * @param string $UpdateTime Migration date
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

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
