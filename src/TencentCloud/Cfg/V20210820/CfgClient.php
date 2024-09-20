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

namespace TencentCloud\Cfg\V20210820;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cfg\V20210820\Models as Models;

/**
 * @method Models\CreateTaskFromActionResponse CreateTaskFromAction(Models\CreateTaskFromActionRequest $req) This API is used to create an experiment with an action.
 * @method Models\CreateTaskFromTemplateResponse CreateTaskFromTemplate(Models\CreateTaskFromTemplateRequest $req) This API is used to create an experiment using a template.
 * @method Models\DeleteTaskResponse DeleteTask(Models\DeleteTaskRequest $req) This API is used to delete a task.
 * @method Models\DescribeActionFieldConfigListResponse DescribeActionFieldConfigList(Models\DescribeActionFieldConfigListRequest $req) This API is used to obtain the dynamic configuration parameters of the action field based on action ID, including action-specific parameters and common parameters.
 * @method Models\DescribeActionLibraryListResponse DescribeActionLibraryList(Models\DescribeActionLibraryListRequest $req) This API is used to obtain the action list of Chaotic Fault Generator.
 * @method Models\DescribeObjectTypeListResponse DescribeObjectTypeList(Models\DescribeObjectTypeListRequest $req) This API is used to query the object type list.
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) This API is used to query a task.
 * @method Models\DescribeTaskExecuteLogsResponse DescribeTaskExecuteLogs(Models\DescribeTaskExecuteLogsRequest $req) This API is used to obtain all logs generated during an experiment.
 * @method Models\DescribeTaskListResponse DescribeTaskList(Models\DescribeTaskListRequest $req) This API is used to query the task list.
 * @method Models\DescribeTaskPolicyTriggerLogResponse DescribeTaskPolicyTriggerLog(Models\DescribeTaskPolicyTriggerLogRequest $req) This API is used to obtain the guardrail triggering logs.
 * @method Models\DescribeTemplateResponse DescribeTemplate(Models\DescribeTemplateRequest $req) This API is used to query a template library.
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) This API is used to query the template list.
 * @method Models\ExecuteTaskResponse ExecuteTask(Models\ExecuteTaskRequest $req) This API is used to run a task.
 * @method Models\ExecuteTaskInstanceResponse ExecuteTaskInstance(Models\ExecuteTaskInstanceRequest $req) This API is used to trigger the action of the chaos engineering experiment and perform an experiment on the instance.
 * @method Models\ModifyTaskRunStatusResponse ModifyTaskRunStatus(Models\ModifyTaskRunStatusRequest $req) This API is used to change the task running status.
 * @method Models\TriggerPolicyResponse TriggerPolicy(Models\TriggerPolicyRequest $req) This API is used to trigger the chaos engineering experiment guardrail (two types: trigger and recovery).
 */

class CfgClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cfg.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cfg";

    /**
     * @var string
     */
    protected $version = "2021-08-20";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cfg")."\\"."V20210820\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
