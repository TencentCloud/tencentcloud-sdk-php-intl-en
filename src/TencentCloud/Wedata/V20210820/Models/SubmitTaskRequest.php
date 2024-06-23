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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTask request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getVersionRemark() Obtain Version Notes
 * @method void setVersionRemark(string $VersionRemark) Set Version Notes
 * @method boolean getStartScheduling() Obtain Whether to Enable Scheduling
 * @method void setStartScheduling(boolean $StartScheduling) Set Whether to Enable Scheduling
 */
class SubmitTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Version Notes
     */
    public $VersionRemark;

    /**
     * @var boolean Whether to Enable Scheduling
     */
    public $StartScheduling;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskId Task ID
     * @param string $VersionRemark Version Notes
     * @param boolean $StartScheduling Whether to Enable Scheduling
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VersionRemark",$param) and $param["VersionRemark"] !== null) {
            $this->VersionRemark = $param["VersionRemark"];
        }

        if (array_key_exists("StartScheduling",$param) and $param["StartScheduling"] !== null) {
            $this->StartScheduling = $param["StartScheduling"];
        }
    }
}
