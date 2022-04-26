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
 * ModifyInvoker request structure.
 *
 * @method string getInvokerId() Obtain ID of the invoker to be modified.
 * @method void setInvokerId(string $InvokerId) Set ID of the invoker to be modified.
 * @method string getName() Obtain Name of the invoker to be modified.
 * @method void setName(string $Name) Set Name of the invoker to be modified.
 * @method string getType() Obtain Invoker type. It can only be `SCHEDULE` (recurring invokers).
 * @method void setType(string $Type) Set Invoker type. It can only be `SCHEDULE` (recurring invokers).
 * @method string getCommandId() Obtain ID of the command to be modified.
 * @method void setCommandId(string $CommandId) Set ID of the command to be modified.
 * @method string getUsername() Obtain The username to be modified.
 * @method void setUsername(string $Username) Set The username to be modified.
 * @method string getParameters() Obtain Custom parameters to be modified.
 * @method void setParameters(string $Parameters) Set Custom parameters to be modified.
 * @method array getInstanceIds() Obtain List of instance IDs to be modified. Up to 100 IDs are allowed.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs to be modified. Up to 100 IDs are allowed.
 * @method ScheduleSettings getScheduleSettings() Obtain Scheduled invoker settings to be modified.
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) Set Scheduled invoker settings to be modified.
 */
class ModifyInvokerRequest extends AbstractModel
{
    /**
     * @var string ID of the invoker to be modified.
     */
    public $InvokerId;

    /**
     * @var string Name of the invoker to be modified.
     */
    public $Name;

    /**
     * @var string Invoker type. It can only be `SCHEDULE` (recurring invokers).
     */
    public $Type;

    /**
     * @var string ID of the command to be modified.
     */
    public $CommandId;

    /**
     * @var string The username to be modified.
     */
    public $Username;

    /**
     * @var string Custom parameters to be modified.
     */
    public $Parameters;

    /**
     * @var array List of instance IDs to be modified. Up to 100 IDs are allowed.
     */
    public $InstanceIds;

    /**
     * @var ScheduleSettings Scheduled invoker settings to be modified.
     */
    public $ScheduleSettings;

    /**
     * @param string $InvokerId ID of the invoker to be modified.
     * @param string $Name Name of the invoker to be modified.
     * @param string $Type Invoker type. It can only be `SCHEDULE` (recurring invokers).
     * @param string $CommandId ID of the command to be modified.
     * @param string $Username The username to be modified.
     * @param string $Parameters Custom parameters to be modified.
     * @param array $InstanceIds List of instance IDs to be modified. Up to 100 IDs are allowed.
     * @param ScheduleSettings $ScheduleSettings Scheduled invoker settings to be modified.
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
        if (array_key_exists("InvokerId",$param) and $param["InvokerId"] !== null) {
            $this->InvokerId = $param["InvokerId"];
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

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }
    }
}
