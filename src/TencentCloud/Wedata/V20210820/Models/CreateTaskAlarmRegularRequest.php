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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTaskAlarmRegular request structure.
 *
 * @method TaskAlarmInfo getTaskAlarmInfo() Obtain Alert Configuration Information
 * @method void setTaskAlarmInfo(TaskAlarmInfo $TaskAlarmInfo) Set Alert Configuration Information
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 */
class CreateTaskAlarmRegularRequest extends AbstractModel
{
    /**
     * @var TaskAlarmInfo Alert Configuration Information
     */
    public $TaskAlarmInfo;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @param TaskAlarmInfo $TaskAlarmInfo Alert Configuration Information
     * @param string $ProjectId Project ID
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
        if (array_key_exists("TaskAlarmInfo",$param) and $param["TaskAlarmInfo"] !== null) {
            $this->TaskAlarmInfo = new TaskAlarmInfo();
            $this->TaskAlarmInfo->deserialize($param["TaskAlarmInfo"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
