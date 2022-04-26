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
 * Invoker information.
 *
 * @method string getInvokerId() Obtain Invoker ID.
 * @method void setInvokerId(string $InvokerId) Set Invoker ID.
 * @method string getName() Obtain Invoker name.
 * @method void setName(string $Name) Set Invoker name.
 * @method string getType() Obtain Invoker type.
 * @method void setType(string $Type) Set Invoker type.
 * @method string getCommandId() Obtain Command ID.
 * @method void setCommandId(string $CommandId) Set Command ID.
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getParameters() Obtain Custom parameters.
 * @method void setParameters(string $Parameters) Set Custom parameters.
 * @method array getInstanceIds() Obtain Instance ID list.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list.
 * @method boolean getEnable() Obtain Whether to enable the invoker.
 * @method void setEnable(boolean $Enable) Set Whether to enable the invoker.
 * @method ScheduleSettings getScheduleSettings() Obtain Execution schedule of the invoker. This field is returned for recurring invokers.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) Set Execution schedule of the invoker. This field is returned for recurring invokers.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getUpdatedTime() Obtain Modification time.
 * @method void setUpdatedTime(string $UpdatedTime) Set Modification time.
 */
class Invoker extends AbstractModel
{
    /**
     * @var string Invoker ID.
     */
    public $InvokerId;

    /**
     * @var string Invoker name.
     */
    public $Name;

    /**
     * @var string Invoker type.
     */
    public $Type;

    /**
     * @var string Command ID.
     */
    public $CommandId;

    /**
     * @var string Username.
     */
    public $Username;

    /**
     * @var string Custom parameters.
     */
    public $Parameters;

    /**
     * @var array Instance ID list.
     */
    public $InstanceIds;

    /**
     * @var boolean Whether to enable the invoker.
     */
    public $Enable;

    /**
     * @var ScheduleSettings Execution schedule of the invoker. This field is returned for recurring invokers.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ScheduleSettings;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Modification time.
     */
    public $UpdatedTime;

    /**
     * @param string $InvokerId Invoker ID.
     * @param string $Name Invoker name.
     * @param string $Type Invoker type.
     * @param string $CommandId Command ID.
     * @param string $Username Username.
     * @param string $Parameters Custom parameters.
     * @param array $InstanceIds Instance ID list.
     * @param boolean $Enable Whether to enable the invoker.
     * @param ScheduleSettings $ScheduleSettings Execution schedule of the invoker. This field is returned for recurring invokers.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Creation time.
     * @param string $UpdatedTime Modification time.
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("ScheduleSettings",$param) and $param["ScheduleSettings"] !== null) {
            $this->ScheduleSettings = new ScheduleSettings();
            $this->ScheduleSettings->deserialize($param["ScheduleSettings"]);
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
