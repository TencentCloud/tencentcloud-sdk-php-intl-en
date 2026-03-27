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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInvoker request structure.
 *
 * @method string getName() Obtain Executor name. length not exceeding 120 characters.
 * @method void setName(string $Name) Set Executor name. length not exceeding 120 characters.
 * @method string getType() Obtain Executor type.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
 * @method void setType(string $Type) Set Executor type.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
 * @method string getCommandId() Obtain Remote command ID.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 * @method void setCommandId(string $CommandId) Set Remote command ID.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 * @method array getInstanceIds() Obtain Trigger associated instance ID. list cap 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
 * @method void setInstanceIds(array $InstanceIds) Set Trigger associated instance ID. list cap 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
 * @method string getUsername() Obtain Command execution user. length not exceeding 256 characters.
 * @method void setUsername(string $Username) Set Command execution user. length not exceeding 256 characters.
 * @method string getParameters() Obtain Command custom parameter. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
 * @method void setParameters(string $Parameters) Set Command custom parameter. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
 * @method ScheduleSettings getScheduleSettings() Obtain Recurring invoker settings.

When the executor type is `SCHEDULE`, specify this parameter.
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) Set Recurring invoker settings.

When the executor type is `SCHEDULE`, specify this parameter.
 * @method array getTags() Obtain Tag associated with the command. list length not exceeding 10.
 * @method void setTags(array $Tags) Set Tag associated with the command. list length not exceeding 10.
 */
class CreateInvokerRequest extends AbstractModel
{
    /**
     * @var string Executor name. length not exceeding 120 characters.
     */
    public $Name;

    /**
     * @var string Executor type.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
     */
    public $Type;

    /**
     * @var string Remote command ID.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
     */
    public $CommandId;

    /**
     * @var array Trigger associated instance ID. list cap 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
     */
    public $InstanceIds;

    /**
     * @var string Command execution user. length not exceeding 256 characters.
     */
    public $Username;

    /**
     * @var string Command custom parameter. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
     */
    public $Parameters;

    /**
     * @var ScheduleSettings Recurring invoker settings.

When the executor type is `SCHEDULE`, specify this parameter.
     */
    public $ScheduleSettings;

    /**
     * @var array Tag associated with the command. list length not exceeding 10.
     */
    public $Tags;

    /**
     * @param string $Name Executor name. length not exceeding 120 characters.
     * @param string $Type Executor type.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
     * @param string $CommandId Remote command ID.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
     * @param array $InstanceIds Trigger associated instance ID. list cap 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
     * @param string $Username Command execution user. length not exceeding 256 characters.
     * @param string $Parameters Command custom parameter. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
     * @param ScheduleSettings $ScheduleSettings Recurring invoker settings.

When the executor type is `SCHEDULE`, specify this parameter.
     * @param array $Tags Tag associated with the command. list length not exceeding 10.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
