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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAigcAudioTask request structure.
 *
 * @method string getTaskId() Obtain The task ID returned when creating the AIGC audio generation task.Example value: 24000145-****d**-cb46b8040b684b539bbd46****e*e2fd
 * @method void setTaskId(string $TaskId) Set The task ID returned when creating the AIGC audio generation task.Example value: 24000145-****d**-cb46b8040b684b539bbd46****e*e2fd
 */
class DescribeAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var string The task ID returned when creating the AIGC audio generation task.Example value: 24000145-****d**-cb46b8040b684b539bbd46****e*e2fd
     */
    public $TaskId;

    /**
     * @param string $TaskId The task ID returned when creating the AIGC audio generation task.Example value: 24000145-****d**-cb46b8040b684b539bbd46****e*e2fd
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
    }
}
