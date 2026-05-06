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
 * Cloud-Native Gateway Group Information
 *
 * @method string getGroupId() Obtain Cloud-Native Gateway Group Unique id
 * @method void setGroupId(string $GroupId) Set Cloud-Native Gateway Group Unique id
 * @method string getName() Obtain Group name
 * @method void setName(string $Name) Set Group name
 * @method string getDescription() Obtain Description information
 * @method void setDescription(string $Description) Set Description information
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Node specification, number of nodes info
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Node specification, number of nodes info
 * @method string getStatus() Obtain Gateway group status.
 * @method void setStatus(string $Status) Set Gateway group status.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method integer getIsFirstGroup() Obtain Whether it is the default group.
0: No.
1: Yes.
 * @method void setIsFirstGroup(integer $IsFirstGroup) Set Whether it is the default group.
0: No.
1: Yes.
 * @method CloudNativeAPIGatewayStrategy getBindingStrategy() Obtain Associate policy information
 * @method void setBindingStrategy(CloudNativeAPIGatewayStrategy $BindingStrategy) Set Associate policy information
 * @method string getGatewayId() Obtain Gateway instance ID.
 * @method void setGatewayId(string $GatewayId) Set Gateway instance ID.
 * @method integer getInternetMaxBandwidthOut() Obtain Bandwidth
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Bandwidth
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method string getSubnetIds() Obtain Subnet ID
 * @method void setSubnetIds(string $SubnetIds) Set Subnet ID
 * @method integer getDefaultWeight() Obtain Default weight of the group
 * @method void setDefaultWeight(integer $DefaultWeight) Set Default weight of the group
 * @method integer getElasticNumber() Obtain elastic node
 * @method void setElasticNumber(integer $ElasticNumber) Set elastic node
 * @method boolean getSupportTOA() Obtain Whether TOA is supported
 * @method void setSupportTOA(boolean $SupportTOA) Set Whether TOA is supported
 * @method boolean getSupportIPV6() Obtain Whether IPV6 is supported
 * @method void setSupportIPV6(boolean $SupportIPV6) Set Whether IPV6 is supported
 */
class NativeGatewayServerGroup extends AbstractModel
{
    /**
     * @var string Cloud-Native Gateway Group Unique id
     */
    public $GroupId;

    /**
     * @var string Group name
     */
    public $Name;

    /**
     * @var string Description information
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Node specification, number of nodes info
     */
    public $NodeConfig;

    /**
     * @var string Gateway group status.
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var integer Whether it is the default group.
0: No.
1: Yes.
     */
    public $IsFirstGroup;

    /**
     * @var CloudNativeAPIGatewayStrategy Associate policy information
     */
    public $BindingStrategy;

    /**
     * @var string Gateway instance ID.
     */
    public $GatewayId;

    /**
     * @var integer Bandwidth
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

    /**
     * @var string Subnet ID
     */
    public $SubnetIds;

    /**
     * @var integer Default weight of the group
     */
    public $DefaultWeight;

    /**
     * @var integer elastic node
     */
    public $ElasticNumber;

    /**
     * @var boolean Whether TOA is supported
     */
    public $SupportTOA;

    /**
     * @var boolean Whether IPV6 is supported
     */
    public $SupportIPV6;

    /**
     * @param string $GroupId Cloud-Native Gateway Group Unique id
     * @param string $Name Group name
     * @param string $Description Description information
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Node specification, number of nodes info
     * @param string $Status Gateway group status.
     * @param string $CreateTime Creation time.
     * @param integer $IsFirstGroup Whether it is the default group.
0: No.
1: Yes.
     * @param CloudNativeAPIGatewayStrategy $BindingStrategy Associate policy information
     * @param string $GatewayId Gateway instance ID.
     * @param integer $InternetMaxBandwidthOut Bandwidth
     * @param string $ModifyTime Modification time.
     * @param string $SubnetIds Subnet ID
     * @param integer $DefaultWeight Default weight of the group
     * @param integer $ElasticNumber elastic node
     * @param boolean $SupportTOA Whether TOA is supported
     * @param boolean $SupportIPV6 Whether IPV6 is supported
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsFirstGroup",$param) and $param["IsFirstGroup"] !== null) {
            $this->IsFirstGroup = $param["IsFirstGroup"];
        }

        if (array_key_exists("BindingStrategy",$param) and $param["BindingStrategy"] !== null) {
            $this->BindingStrategy = new CloudNativeAPIGatewayStrategy();
            $this->BindingStrategy->deserialize($param["BindingStrategy"]);
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("DefaultWeight",$param) and $param["DefaultWeight"] !== null) {
            $this->DefaultWeight = $param["DefaultWeight"];
        }

        if (array_key_exists("ElasticNumber",$param) and $param["ElasticNumber"] !== null) {
            $this->ElasticNumber = $param["ElasticNumber"];
        }

        if (array_key_exists("SupportTOA",$param) and $param["SupportTOA"] !== null) {
            $this->SupportTOA = $param["SupportTOA"];
        }

        if (array_key_exists("SupportIPV6",$param) and $param["SupportIPV6"] !== null) {
            $this->SupportIPV6 = $param["SupportIPV6"];
        }
    }
}
