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
 * ModifyRemoteWriteTask request structure.
 *
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getTopicId() Obtain Log topic id
 * @method void setTopicId(string $TopicId) Set Log topic id
 * @method integer getEnable() Obtain Task status.
0: disabled, 1: enabled.
 * @method void setEnable(integer $Enable) Set Task status.
0: disabled, 1: enabled.
 * @method string getName() Obtain RemoteWrite task name.
 * @method void setName(string $Name) Set RemoteWrite task name.
 * @method integer getNetType() Obtain Valid values: 1: private network; 2: public network.
 * @method void setNetType(integer $NetType) Set Valid values: 1: private network; 2: public network.
 * @method string getVpcId() Obtain VPC id
 * @method void setVpcId(string $VpcId) Set VPC id
 * @method string getTarget() Obtain Target service name.
 * @method void setTarget(string $Target) Set Target service name.
 * @method string getRemoteWriteURL() Obtain Destination address
 * @method void setRemoteWriteURL(string $RemoteWriteURL) Set Destination address
 * @method integer getAuthType() Obtain Valid values: 0: no authentication; 1: basic_auth; 2: token.	
 * @method void setAuthType(integer $AuthType) Set Valid values: 0: no authentication; 1: basic_auth; 2: token.	
 * @method RemoteWriteAuthInfo getAuthInfo() Obtain Authentication information
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) Set Authentication information
 * @method integer getVirtualGatewayType() Obtain Backend service type
-1 No
0 CVM
1025 CLB
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) Set Backend service type
-1 No
0 CVM
1025 CLB
 */
class ModifyRemoteWriteTaskRequest extends AbstractModel
{
    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Log topic id
     */
    public $TopicId;

    /**
     * @var integer Task status.
0: disabled, 1: enabled.
     */
    public $Enable;

    /**
     * @var string RemoteWrite task name.
     */
    public $Name;

    /**
     * @var integer Valid values: 1: private network; 2: public network.
     */
    public $NetType;

    /**
     * @var string VPC id
     */
    public $VpcId;

    /**
     * @var string Target service name.
     */
    public $Target;

    /**
     * @var string Destination address
     */
    public $RemoteWriteURL;

    /**
     * @var integer Valid values: 0: no authentication; 1: basic_auth; 2: token.	
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo Authentication information
     */
    public $AuthInfo;

    /**
     * @var integer Backend service type
-1 No
0 CVM
1025 CLB
     */
    public $VirtualGatewayType;

    /**
     * @param string $TaskId Task ID
     * @param string $TopicId Log topic id
     * @param integer $Enable Task status.
0: disabled, 1: enabled.
     * @param string $Name RemoteWrite task name.
     * @param integer $NetType Valid values: 1: private network; 2: public network.
     * @param string $VpcId VPC id
     * @param string $Target Target service name.
     * @param string $RemoteWriteURL Destination address
     * @param integer $AuthType Valid values: 0: no authentication; 1: basic_auth; 2: token.	
     * @param RemoteWriteAuthInfo $AuthInfo Authentication information
     * @param integer $VirtualGatewayType Backend service type
-1 No
0 CVM
1025 CLB
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
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

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }
    }
}
