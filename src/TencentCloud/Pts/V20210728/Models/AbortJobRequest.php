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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AbortJob request structure.
 *
 * @method string getJobId() Obtain Job ID.
 * @method void setJobId(string $JobId) Set Job ID.
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getScenarioId() Obtain Scenario ID.
 * @method void setScenarioId(string $ScenarioId) Set Scenario ID.
 * @method integer getAbortReason() Obtain Reason for stopping.
 * @method void setAbortReason(integer $AbortReason) Set Reason for stopping.
 */
class AbortJobRequest extends AbstractModel
{
    /**
     * @var string Job ID.
     */
    public $JobId;

    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Scenario ID.
     */
    public $ScenarioId;

    /**
     * @var integer Reason for stopping.
     */
    public $AbortReason;

    /**
     * @param string $JobId Job ID.
     * @param string $ProjectId Project ID.
     * @param string $ScenarioId Scenario ID.
     * @param integer $AbortReason Reason for stopping.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ScenarioId",$param) and $param["ScenarioId"] !== null) {
            $this->ScenarioId = $param["ScenarioId"];
        }

        if (array_key_exists("AbortReason",$param) and $param["AbortReason"] !== null) {
            $this->AbortReason = $param["AbortReason"];
        }
    }
}
