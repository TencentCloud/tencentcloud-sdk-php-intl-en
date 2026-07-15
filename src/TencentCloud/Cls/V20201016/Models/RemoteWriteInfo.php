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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoteWrite configuration information.
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain RemoteWrite task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set RemoteWrite task name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNetType() Obtain Network type.
Valid values: 1: private network
2: Public network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetType(integer $NetType) Set Network type.
Valid values: 1: private network
2: Public network
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain VPC id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Task running status
1: Running
2: Suspend
3: Failure
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Task running status
1: Running
2: Suspend
3: Failure
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTarget() Obtain Target service name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTarget(string $Target) Set Target service name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemoteWriteURL() Obtain Destination address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemoteWriteURL(string $RemoteWriteURL) Set Destination address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuthType() Obtain Authentication type
Valid values: 0: no authentication; 1: basic_auth; 2: token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthType(integer $AuthType) Set Authentication type
Valid values: 0: no authentication; 1: basic_auth; 2: token.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RemoteWriteAuthInfo getAuthInfo() Obtain Authentication information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) Set Authentication information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLogsetId() Obtain Logset
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogsetId(string $LogsetId) Set Logset
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEnable() Obtain Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(integer $Enable) Set Task status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVirtualGatewayType() Obtain Backend service type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) Set Backend service type
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RemoteWriteInfo extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string RemoteWrite task name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Network type.
Valid values: 1: private network
2: Public network
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetType;

    /**
     * @var string VPC id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer Task running status
1: Running
2: Suspend
3: Failure
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Target service name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Target;

    /**
     * @var string Destination address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RemoteWriteURL;

    /**
     * @var integer Authentication type
Valid values: 0: no authentication; 1: basic_auth; 2: token.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo Authentication information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthInfo;

    /**
     * @var string Logset
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogsetId;

    /**
     * @var integer Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @var integer Backend service type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualGatewayType;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicId Log topic ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name RemoteWrite task name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NetType Network type.
Valid values: 1: private network
2: Public network
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId VPC id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Task running status
1: Running
2: Suspend
3: Failure
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Target Target service name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RemoteWriteURL Destination address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuthType Authentication type
Valid values: 0: no authentication; 1: basic_auth; 2: token.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RemoteWriteAuthInfo $AuthInfo Authentication information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LogsetId Logset
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Enable Task status.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VirtualGatewayType Backend service type
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("RemoteWriteURL",$param) and $param["RemoteWriteURL"] !== null) {
            $this->RemoteWriteURL = $param["RemoteWriteURL"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new RemoteWriteAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }
    }
}
