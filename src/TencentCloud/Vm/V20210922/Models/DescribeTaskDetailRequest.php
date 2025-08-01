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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail request structure.
 *
 * @method string getTaskId() Obtain Task ID, which is returned after a task is created
 * @method void setTaskId(string $TaskId) Set Task ID, which is returned after a task is created
 * @method boolean getShowAllSegments() Obtain Whether to show all segments. If it’s not specified, only hit segments are shown.
 * @method void setShowAllSegments(boolean $ShowAllSegments) Set Whether to show all segments. If it’s not specified, only hit segments are shown.
 */
class DescribeTaskDetailRequest extends AbstractModel
{
    /**
     * @var string Task ID, which is returned after a task is created
     */
    public $TaskId;

    /**
     * @var boolean Whether to show all segments. If it’s not specified, only hit segments are shown.
     */
    public $ShowAllSegments;

    /**
     * @param string $TaskId Task ID, which is returned after a task is created
     * @param boolean $ShowAllSegments Whether to show all segments. If it’s not specified, only hit segments are shown.
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

        if (array_key_exists("ShowAllSegments",$param) and $param["ShowAllSegments"] !== null) {
            $this->ShowAllSegments = $param["ShowAllSegments"];
        }
    }
}
