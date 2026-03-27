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
 * ModifyInvoker request structure.
 *
 * @method string getInvokerId() Obtain Executor ID to be modified.

Call the [DescribeInvokers](https://www.tencentcloud.com/document/api/1340/61759?from_cn_redirect=1) api to query execution.
 * @method void setInvokerId(string $InvokerId) Set Executor ID to be modified.

Call the [DescribeInvokers](https://www.tencentcloud.com/document/api/1340/61759?from_cn_redirect=1) api to query execution.
 * @method string getName() Obtain Executor name to be modified. length not exceeding 120 characters.
 * @method void setName(string $Name) Set Executor name to be modified. length not exceeding 120 characters.
 * @method string getType() Obtain Executor type to be modified.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
 * @method void setType(string $Type) Set Executor type to be modified.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
 * @method string getCommandId() Obtain Command ID to be modified.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 * @method void setCommandId(string $CommandId) Set Command ID to be modified.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
 * @method string getUsername() Obtain Username to be modified. length not exceeding 256 characters.
 * @method void setUsername(string $Username) Set Username to be modified. length not exceeding 256 characters.
 * @method string getParameters() Obtain Custom parameters to be modified. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
 * @method void setParameters(string $Parameters) Set Custom parameters to be modified. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
 * @method array getInstanceIds() Obtain List of instance ids to be modified. list length limit 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
 * @method void setInstanceIds(array $InstanceIds) Set List of instance ids to be modified. list length limit 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
 * @method ScheduleSettings getScheduleSettings() Obtain Recurring invoker settings to be modified.

Change the executor type to `SCHEDULE` and specify this parameter.
 * @method void setScheduleSettings(ScheduleSettings $ScheduleSettings) Set Recurring invoker settings to be modified.

Change the executor type to `SCHEDULE` and specify this parameter.
 */
class ModifyInvokerRequest extends AbstractModel
{
    /**
     * @var string Executor ID to be modified.

Call the [DescribeInvokers](https://www.tencentcloud.com/document/api/1340/61759?from_cn_redirect=1) api to query execution.
     */
    public $InvokerId;

    /**
     * @var string Executor name to be modified. length not exceeding 120 characters.
     */
    public $Name;

    /**
     * @var string Executor type to be modified.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
     */
    public $Type;

    /**
     * @var string Command ID to be modified.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
     */
    public $CommandId;

    /**
     * @var string Username to be modified. length not exceeding 256 characters.
     */
    public $Username;

    /**
     * @var string Custom parameters to be modified. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
     */
    public $Parameters;

    /**
     * @var array List of instance ids to be modified. list length limit 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
     */
    public $InstanceIds;

    /**
     * @var ScheduleSettings Recurring invoker settings to be modified.

Change the executor type to `SCHEDULE` and specify this parameter.
     */
    public $ScheduleSettings;

    /**
     * @param string $InvokerId Executor ID to be modified.

Call the [DescribeInvokers](https://www.tencentcloud.com/document/api/1340/61759?from_cn_redirect=1) api to query execution.
     * @param string $Name Executor name to be modified. length not exceeding 120 characters.
     * @param string $Type Executor type to be modified.

Selectable values (currently only support one):.

-`SCHEDULE`: period type executor.
     * @param string $CommandId Command ID to be modified.

Call the [DescribeCommands](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api to query command details.
     * @param string $Username Username to be modified. length not exceeding 256 characters.
     * @param string $Parameters Custom parameters to be modified. field type is JSON encode string.

This parameter can be set only when EnableParameter of the command specified by CommandId is true. obtain the EnableParameter settings through the [DescribeCommands (query command details)](https://www.tencentcloud.com/document/api/1340/52681?from_cn_redirect=1) api.
     * @param array $InstanceIds List of instance ids to be modified. list length limit 100.

You can get the instance ID through the query instance interface of corresponding cloud services. currently supports instance types: CVM, Lighthouse, and TAT managed instances.

The instance needs to have the TAT client installed, and the client must be in Online status. you can query client status via the [DescribeAutomationAgentStatus](https://www.tencentcloud.com/document/api/1340/52682?from_cn_redirect=1) api.
     * @param ScheduleSettings $ScheduleSettings Recurring invoker settings to be modified.

Change the executor type to `SCHEDULE` and specify this parameter.
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
