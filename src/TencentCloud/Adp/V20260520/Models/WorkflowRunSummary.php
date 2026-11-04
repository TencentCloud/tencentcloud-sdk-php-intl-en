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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the workflow running instance
 *
 * @method integer getDomain() Obtain <p>Runtime environment. 1: Development domain, 2: Production domain</p>
 * @method void setDomain(integer $Domain) Set <p>Runtime environment. 1: Development domain, 2: Production domain</p>
 * @method WorkflowRunProfile getWorkflowRunProfile() Obtain <p>Basic information of workflow operation instance</p>
 * @method void setWorkflowRunProfile(WorkflowRunProfile $WorkflowRunProfile) Set <p>Basic information of workflow operation instance</p>
 * @method WorkflowRunResult getWorkflowRunResult() Obtain <p>Workflow operation instance result</p>
 * @method void setWorkflowRunResult(WorkflowRunResult $WorkflowRunResult) Set <p>Workflow operation instance result</p>
 * @method WorkflowRunTime getWorkflowRunTime() Obtain <p>Time information of workflow running instance</p>
 * @method void setWorkflowRunTime(WorkflowRunTime $WorkflowRunTime) Set <p>Time information of workflow running instance</p>
 */
class WorkflowRunSummary extends AbstractModel
{
    /**
     * @var integer <p>Runtime environment. 1: Development domain, 2: Production domain</p>
     */
    public $Domain;

    /**
     * @var WorkflowRunProfile <p>Basic information of workflow operation instance</p>
     */
    public $WorkflowRunProfile;

    /**
     * @var WorkflowRunResult <p>Workflow operation instance result</p>
     */
    public $WorkflowRunResult;

    /**
     * @var WorkflowRunTime <p>Time information of workflow running instance</p>
     */
    public $WorkflowRunTime;

    /**
     * @param integer $Domain <p>Runtime environment. 1: Development domain, 2: Production domain</p>
     * @param WorkflowRunProfile $WorkflowRunProfile <p>Basic information of workflow operation instance</p>
     * @param WorkflowRunResult $WorkflowRunResult <p>Workflow operation instance result</p>
     * @param WorkflowRunTime $WorkflowRunTime <p>Time information of workflow running instance</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("WorkflowRunProfile",$param) and $param["WorkflowRunProfile"] !== null) {
            $this->WorkflowRunProfile = new WorkflowRunProfile();
            $this->WorkflowRunProfile->deserialize($param["WorkflowRunProfile"]);
        }

        if (array_key_exists("WorkflowRunResult",$param) and $param["WorkflowRunResult"] !== null) {
            $this->WorkflowRunResult = new WorkflowRunResult();
            $this->WorkflowRunResult->deserialize($param["WorkflowRunResult"]);
        }

        if (array_key_exists("WorkflowRunTime",$param) and $param["WorkflowRunTime"] !== null) {
            $this->WorkflowRunTime = new WorkflowRunTime();
            $this->WorkflowRunTime->deserialize($param["WorkflowRunTime"]);
        }
    }
}
