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
 * CreateTaskVersionDs request structure.
 *
 * @method BatchCreateTaskVersionDTO getTask() Obtain Task ID
 * @method void setTask(BatchCreateTaskVersionDTO $Task) Set Task ID
 * @method boolean getNeedCheckParentSubmitted() Obtain Whether to verify that the parent task has been submitted for scheduling
 * @method void setNeedCheckParentSubmitted(boolean $NeedCheckParentSubmitted) Set Whether to verify that the parent task has been submitted for scheduling
 * @method boolean getAutoRun() Obtain Automatic Execution
 * @method void setAutoRun(boolean $AutoRun) Set Automatic Execution
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getRequestFromSource() Obtain Request Source, WEB frontend; CLIENT client
 * @method void setRequestFromSource(string $RequestFromSource) Set Request Source, WEB frontend; CLIENT client
 * @method string getAlarmWays() Obtain Alert Method: email-Email; sms-SMS; wecom-WeCom
 * @method void setAlarmWays(string $AlarmWays) Set Alert Method: email-Email; sms-SMS; wecom-WeCom
 * @method string getAlarmRecipientTypes() Obtain Alert Object: 1-Project Administrator, 2-Task Owner
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) Set Alert Object: 1-Project Administrator, 2-Task Owner
 * @method boolean getEnableCheckTaskCycleLink() Obtain Whether to verify circular dependencies, default is true. If false is passed after successful validation using CheckTaskCycleLink and CheckTaskCycleConfiguration interfaces, the back-end server will not perform validation
 * @method void setEnableCheckTaskCycleLink(boolean $EnableCheckTaskCycleLink) Set Whether to verify circular dependencies, default is true. If false is passed after successful validation using CheckTaskCycleLink and CheckTaskCycleConfiguration interfaces, the back-end server will not perform validation
 */
class CreateTaskVersionDsRequest extends AbstractModel
{
    /**
     * @var BatchCreateTaskVersionDTO Task ID
     */
    public $Task;

    /**
     * @var boolean Whether to verify that the parent task has been submitted for scheduling
     */
    public $NeedCheckParentSubmitted;

    /**
     * @var boolean Automatic Execution
     */
    public $AutoRun;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Request Source, WEB frontend; CLIENT client
     */
    public $RequestFromSource;

    /**
     * @var string Alert Method: email-Email; sms-SMS; wecom-WeCom
     */
    public $AlarmWays;

    /**
     * @var string Alert Object: 1-Project Administrator, 2-Task Owner
     */
    public $AlarmRecipientTypes;

    /**
     * @var boolean Whether to verify circular dependencies, default is true. If false is passed after successful validation using CheckTaskCycleLink and CheckTaskCycleConfiguration interfaces, the back-end server will not perform validation
     */
    public $EnableCheckTaskCycleLink;

    /**
     * @param BatchCreateTaskVersionDTO $Task Task ID
     * @param boolean $NeedCheckParentSubmitted Whether to verify that the parent task has been submitted for scheduling
     * @param boolean $AutoRun Automatic Execution
     * @param string $ProjectId Project ID
     * @param string $RequestFromSource Request Source, WEB frontend; CLIENT client
     * @param string $AlarmWays Alert Method: email-Email; sms-SMS; wecom-WeCom
     * @param string $AlarmRecipientTypes Alert Object: 1-Project Administrator, 2-Task Owner
     * @param boolean $EnableCheckTaskCycleLink Whether to verify circular dependencies, default is true. If false is passed after successful validation using CheckTaskCycleLink and CheckTaskCycleConfiguration interfaces, the back-end server will not perform validation
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new BatchCreateTaskVersionDTO();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("NeedCheckParentSubmitted",$param) and $param["NeedCheckParentSubmitted"] !== null) {
            $this->NeedCheckParentSubmitted = $param["NeedCheckParentSubmitted"];
        }

        if (array_key_exists("AutoRun",$param) and $param["AutoRun"] !== null) {
            $this->AutoRun = $param["AutoRun"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientTypes",$param) and $param["AlarmRecipientTypes"] !== null) {
            $this->AlarmRecipientTypes = $param["AlarmRecipientTypes"];
        }

        if (array_key_exists("EnableCheckTaskCycleLink",$param) and $param["EnableCheckTaskCycleLink"] !== null) {
            $this->EnableCheckTaskCycleLink = $param["EnableCheckTaskCycleLink"];
        }
    }
}
