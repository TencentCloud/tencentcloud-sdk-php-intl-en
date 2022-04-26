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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInvoker request structure.
 *
 * @method string getName() Obtain Invoker name.
 * @method void setName(string $Name) Set Invoker name.
 * @method string getType() Obtain Invoker type. It can only be `SCHEDULE` (recurring invokers).
 * @method void setType(string $Type) Set Invoker type. It can only be `SCHEDULE` (recurring invokers).
 * @method string getCommandId() Obtain Remote command ID.
 * @method void setCommandId(string $CommandId) Set Remote command ID.
 * @method array getInstanceIds() Obtain ID of the instance bound to the trigger. Up to 100 IDs are allowed.
 * @method void setInstanceIds(array $InstanceIds) Set ID of the instance bound to the trigger. Up to 100 IDs are allowed.
 * @method string getUsername() Obtain The user who executes the command.
 * @method void setUsername(string $Username) Set The user who executes the command.
 * @method string getParameters() Obtain Custom parameters of the command.
 * @method void setParameters(string $Parameters) Set Custom parameters of the command.
 * @method ScheduleSettings getScheduleSettings() Obtain Settings required for a recurring invoker.
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) Set Settings required for a recurring invoker.
 */
class CreateInvokerRequest extends AbstractModel
{
    /**
     * @var string Invoker name.
     */
    public $Name;

    /**
     * @var string Invoker type. It can only be `SCHEDULE` (recurring invokers).
     */
    public $Type;

    /**
     * @var string Remote command ID.
     */
    public $CommandId;

    /**
     * @var array ID of the instance bound to the trigger. Up to 100 IDs are allowed.
     */
    public $InstanceIds;

    /**
     * @var string The user who executes the command.
     */
    public $Username;

    /**
     * @var string Custom parameters of the command.
     */
    public $Parameters;

    /**
     * @var ScheduleSettings Settings required for a recurring invoker.
     */
    public $ScheduleSettings;

    /**
     * @param string $Name Invoker name.
     * @param string $Type Invoker type. It can only be `SCHEDULE` (recurring invokers).
     * @param string $CommandId Remote command ID.
     * @param array $InstanceIds ID of the instance bound to the trigger. Up to 100 IDs are allowed.
     * @param string $Username The user who executes the command.
     * @param string $Parameters Custom parameters of the command.
     * @param ScheduleSettings $ScheduleSettings Settings required for a recurring invoker.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }
    }
}
