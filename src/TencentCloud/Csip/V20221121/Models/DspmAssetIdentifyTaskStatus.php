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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Status of the dspm data identification task
 *
 * @method integer getTaskId() Obtain <p>Task ID.</p>
 * @method void setTaskId(integer $TaskId) Set <p>Task ID.</p>
 * @method integer getStatus() Obtain <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Unrecognized</li><li>1: Recognizing</li><li>2: Recognition terminated</li><li>3: Recognition successful</li><li>4: Recognition failed</li><li>5: Suspended</li></ul>
 * @method void setStatus(integer $Status) Set <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Unrecognized</li><li>1: Recognizing</li><li>2: Recognition terminated</li><li>3: Recognition successful</li><li>4: Recognition failed</li><li>5: Suspended</li></ul>
 */
class DspmAssetIdentifyTaskStatus extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Unrecognized</li><li>1: Recognizing</li><li>2: Recognition terminated</li><li>3: Recognition successful</li><li>4: Recognition failed</li><li>5: Suspended</li></ul>
     */
    public $Status;

    /**
     * @param integer $TaskId <p>Task ID.</p>
     * @param integer $Status <p>Task status.</p><p>Enumeration values: </p><ul><li>0: Unrecognized</li><li>1: Recognizing</li><li>2: Recognition terminated</li><li>3: Recognition successful</li><li>4: Recognition failed</li><li>5: Suspended</li></ul>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
