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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Gateway group information of policy binding
 *
 * @method string getGroupId() Obtain gateway group ID
 * @method void setGroupId(string $GroupId) Set gateway group ID
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Node configuration
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Node configuration
 * @method string getBindTime() Obtain Binding time
 * @method void setBindTime(string $BindTime) Set Binding time
 * @method string getGroupName() Obtain gateway group name
 * @method void setGroupName(string $GroupName) Set gateway group name
 * @method string getStatus() Obtain Binding status
 * @method void setStatus(string $Status) Set Binding status
 */
class CloudNativeAPIGatewayStrategyBindingGroupInfo extends AbstractModel
{
    /**
     * @var string gateway group ID
     */
    public $GroupId;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Node configuration
     */
    public $NodeConfig;

    /**
     * @var string Binding time
     */
    public $BindTime;

    /**
     * @var string gateway group name
     */
    public $GroupName;

    /**
     * @var string Binding status
     */
    public $Status;

    /**
     * @param string $GroupId gateway group ID
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Node configuration
     * @param string $BindTime Binding time
     * @param string $GroupName gateway group name
     * @param string $Status Binding status
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("BindTime",$param) and $param["BindTime"] !== null) {
            $this->BindTime = $param["BindTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
