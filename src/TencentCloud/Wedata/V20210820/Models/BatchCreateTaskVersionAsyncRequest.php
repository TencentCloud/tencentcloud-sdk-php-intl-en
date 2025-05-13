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
 * BatchCreateTaskVersionAsync request structure.
 *
 * @method array getTasks() Obtain Task information
 * @method void setTasks(array $Tasks) Set Task information
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getAutoRun() Obtain Specifies whether to run automatically
 * @method void setAutoRun(boolean $AutoRun) Set Specifies whether to run automatically
 * @method string getAlarmWays() Obtain Alert method: email-email; sms-sms; wecom-wecom
 * @method void setAlarmWays(string $AlarmWays) Set Alert method: email-email; sms-sms; wecom-wecom
 * @method string getAlarmRecipientTypes() Obtain Alarm object: 1. Project Administrator. 2. Task Owner
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) Set Alarm object: 1. Project Administrator. 2. Task Owner
 * @method boolean getNeedCheckParentSubmitted() Obtain Whether validation is required to check if the parent task has been submitted to scheduling
 * @method void setNeedCheckParentSubmitted(boolean $NeedCheckParentSubmitted) Set Whether validation is required to check if the parent task has been submitted to scheduling
 */
class BatchCreateTaskVersionAsyncRequest extends AbstractModel
{
    /**
     * @var array Task information
     */
    public $Tasks;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Specifies whether to run automatically
     */
    public $AutoRun;

    /**
     * @var string Alert method: email-email; sms-sms; wecom-wecom
     */
    public $AlarmWays;

    /**
     * @var string Alarm object: 1. Project Administrator. 2. Task Owner
     */
    public $AlarmRecipientTypes;

    /**
     * @var boolean Whether validation is required to check if the parent task has been submitted to scheduling
     */
    public $NeedCheckParentSubmitted;

    /**
     * @param array $Tasks Task information
     * @param string $ProjectId Project ID
     * @param boolean $AutoRun Specifies whether to run automatically
     * @param string $AlarmWays Alert method: email-email; sms-sms; wecom-wecom
     * @param string $AlarmRecipientTypes Alarm object: 1. Project Administrator. 2. Task Owner
     * @param boolean $NeedCheckParentSubmitted Whether validation is required to check if the parent task has been submitted to scheduling
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new BatchCreateTaskVersionDTO();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRun",$param) and $param["AutoRun"] !== null) {
            $this->AutoRun = $param["AutoRun"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientTypes",$param) and $param["AlarmRecipientTypes"] !== null) {
            $this->AlarmRecipientTypes = $param["AlarmRecipientTypes"];
        }

        if (array_key_exists("NeedCheckParentSubmitted",$param) and $param["NeedCheckParentSubmitted"] !== null) {
            $this->NeedCheckParentSubmitted = $param["NeedCheckParentSubmitted"];
        }
    }
}
