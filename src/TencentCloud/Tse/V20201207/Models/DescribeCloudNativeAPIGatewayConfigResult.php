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
 * Retrieve the configuration result of the cloud native API gateway instance network.
 *
 * @method string getGatewayId() Obtain Gateway Instance ID
 * @method void setGatewayId(string $GatewayId) Set Gateway Instance ID
 * @method array getConfigList() Obtain Grouped network configuration list.
 * @method void setConfigList(array $ConfigList) Set Grouped network configuration list.
 * @method string getGroupSubnetId() Obtain Grouped subnet info
 * @method void setGroupSubnetId(string $GroupSubnetId) Set Grouped subnet info
 * @method string getGroupVpcId() Obtain Grouped VPC info
 * @method void setGroupVpcId(string $GroupVpcId) Set Grouped VPC info
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 */
class DescribeCloudNativeAPIGatewayConfigResult extends AbstractModel
{
    /**
     * @var string Gateway Instance ID
     */
    public $GatewayId;

    /**
     * @var array Grouped network configuration list.
     */
    public $ConfigList;

    /**
     * @var string Grouped subnet info
     */
    public $GroupSubnetId;

    /**
     * @var string Grouped VPC info
     */
    public $GroupVpcId;

    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @param string $GatewayId Gateway Instance ID
     * @param array $ConfigList Grouped network configuration list.
     * @param string $GroupSubnetId Grouped subnet info
     * @param string $GroupVpcId Grouped VPC info
     * @param string $GroupId group ID
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

        if (array_key_exists("ConfigList",$param) and $param["ConfigList"] !== null) {
            $this->ConfigList = [];
            foreach ($param["ConfigList"] as $key => $value){
                $obj = new CloudNativeAPIGatewayConfig();
                $obj->deserialize($value);
                array_push($this->ConfigList, $obj);
            }
        }

        if (array_key_exists("GroupSubnetId",$param) and $param["GroupSubnetId"] !== null) {
            $this->GroupSubnetId = $param["GroupSubnetId"];
        }

        if (array_key_exists("GroupVpcId",$param) and $param["GroupVpcId"] !== null) {
            $this->GroupVpcId = $param["GroupVpcId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
