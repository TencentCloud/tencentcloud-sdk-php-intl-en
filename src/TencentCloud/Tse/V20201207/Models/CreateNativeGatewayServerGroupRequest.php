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
 * CreateNativeGatewayServerGroup request structure.
 *
 * @method string getGatewayId() Obtain Gateway instance id.
Only supports postpaid instances
 * @method void setGatewayId(string $GatewayId) Set Gateway instance id.
Only supports postpaid instances
 * @method string getName() Obtain gateway group name
 * @method void setName(string $Name) Set gateway group name
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Node configuration
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Node configuration
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method string getDescription() Obtain Description information
 * @method void setDescription(string $Description) Set Description information
 * @method integer getInternetMaxBandwidthOut() Obtain Public network bandwidth information
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network bandwidth information
 * @method InternetConfig getInternetConfig() Obtain Public Network Configuration.
 * @method void setInternetConfig(InternetConfig $InternetConfig) Set Public Network Configuration.
 */
class CreateNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string Gateway instance id.
Only supports postpaid instances
     */
    public $GatewayId;

    /**
     * @var string gateway group name
     */
    public $Name;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Node configuration
     */
    public $NodeConfig;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var string Description information
     */
    public $Description;

    /**
     * @var integer Public network bandwidth information
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var InternetConfig Public Network Configuration.
     */
    public $InternetConfig;

    /**
     * @param string $GatewayId Gateway instance id.
Only supports postpaid instances
     * @param string $Name gateway group name
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Node configuration
     * @param string $SubnetId Subnet ID
     * @param string $Description Description information
     * @param integer $InternetMaxBandwidthOut Public network bandwidth information
     * @param InternetConfig $InternetConfig Public Network Configuration.
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }
    }
}
