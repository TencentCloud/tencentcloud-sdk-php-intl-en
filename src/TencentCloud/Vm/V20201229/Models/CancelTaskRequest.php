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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CancelTask request structure.
 *
 * @method string getTaskId() Obtain This field indicates the task ID (in the `Results` parameter) returned after a video moderation task is created. It is used to identify the moderation task to be canceled.
 * @method void setTaskId(string $TaskId) Set This field indicates the task ID (in the `Results` parameter) returned after a video moderation task is created. It is used to identify the moderation task to be canceled.
 */
class CancelTaskRequest extends AbstractModel
{
    /**
     * @var string This field indicates the task ID (in the `Results` parameter) returned after a video moderation task is created. It is used to identify the moderation task to be canceled.
     */
    public $TaskId;

    /**
     * @param string $TaskId This field indicates the task ID (in the `Results` parameter) returned after a video moderation task is created. It is used to identify the moderation task to be canceled.
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
