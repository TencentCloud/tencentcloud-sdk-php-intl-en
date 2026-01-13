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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthorizationPolicyItem
 *
 * @method integer getId() Obtain Policy rule ID.
 * @method void setId(integer $Id) Set Policy rule ID.
 * @method string getInstanceId() Obtain MQTT cluster ID.
 * @method void setInstanceId(string $InstanceId) Set MQTT cluster ID.
 * @method string getPolicyName() Obtain Specifies the policy rule name.
 * @method void setPolicyName(string $PolicyName) Set Specifies the policy rule name.
 * @method integer getVersion() Obtain Rule syntax version. currently only support 1. defaults to 1.
 * @method void setVersion(integer $Version) Set Rule syntax version. currently only support 1. defaults to 1.
 * @method integer getPriority() Obtain Policy priority. a smaller priority ID indicates the policy takes effect with higher priority. see [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setPriority(integer $Priority) Set Policy priority. a smaller priority ID indicates the policy takes effect with higher priority. see [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getEffect() Obtain Specifies the decision.
allow specifies permission for access requests from devices that match this policy.
deny: denies access requests to the device that override the policy.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setEffect(string $Effect) Set Specifies the decision.
allow specifies permission for access requests from devices that match this policy.
deny: denies access requests to the device that override the policy.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getActions() Obtain Operation.
Specifies the connection.
Publishes an mqtt message.
Sub. specifies the subscription to mqtt messages.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setActions(string $Actions) Set Operation.
Specifies the connection.
Publishes an mqtt message.
Sub. specifies the subscription to mqtt messages.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getResources() Obtain Resource. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setResources(string $Resources) Set Resource. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getClientId() Obtain Specifies the device ID for connection. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setClientId(string $ClientId) Set Specifies the device ID for connection. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getUsername() Obtain Condition - username. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setUsername(string $Username) Set Condition - username. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getIp() Obtain Specifies the client IP address. see the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setIp(string $Ip) Set Specifies the client IP address. see the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method string getQos() Obtain Condition - service quality. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method void setQos(string $Qos) Set Condition - service quality. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
 * @method integer getRetain() Obtain Condition - message retention. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Indicates the match of retain messages.
2: indicates non-retain messages.
3: indicates matching retain and non-retain messages.
 * @method void setRetain(integer $Retain) Set Condition - message retention. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Indicates the match of retain messages.
2: indicates non-retain messages.
3: indicates matching retain and non-retain messages.
 * @method string getRemark() Obtain Specifies the remark with length not exceeding 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark with length not exceeding 128 characters.
 * @method integer getCreatedTime() Obtain Creation time. millisecond-level timestamp.
 * @method void setCreatedTime(integer $CreatedTime) Set Creation time. millisecond-level timestamp.
 * @method integer getUpdateTime() Obtain Update time. millisecond-level timestamp.
 * @method void setUpdateTime(integer $UpdateTime) Set Update time. millisecond-level timestamp.
 */
class AuthorizationPolicyItem extends AbstractModel
{
    /**
     * @var integer Policy rule ID.
     */
    public $Id;

    /**
     * @var string MQTT cluster ID.
     */
    public $InstanceId;

    /**
     * @var string Specifies the policy rule name.
     */
    public $PolicyName;

    /**
     * @var integer Rule syntax version. currently only support 1. defaults to 1.
     */
    public $Version;

    /**
     * @var integer Policy priority. a smaller priority ID indicates the policy takes effect with higher priority. see [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Priority;

    /**
     * @var string Specifies the decision.
allow specifies permission for access requests from devices that match this policy.
deny: denies access requests to the device that override the policy.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Effect;

    /**
     * @var string Operation.
Specifies the connection.
Publishes an mqtt message.
Sub. specifies the subscription to mqtt messages.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Actions;

    /**
     * @var string Resource. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Resources;

    /**
     * @var string Specifies the device ID for connection. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $ClientId;

    /**
     * @var string Condition - username. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Username;

    /**
     * @var string Specifies the client IP address. see the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Ip;

    /**
     * @var string Condition - service quality. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     */
    public $Qos;

    /**
     * @var integer Condition - message retention. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Indicates the match of retain messages.
2: indicates non-retain messages.
3: indicates matching retain and non-retain messages.
     */
    public $Retain;

    /**
     * @var string Specifies the remark with length not exceeding 128 characters.
     */
    public $Remark;

    /**
     * @var integer Creation time. millisecond-level timestamp.
     */
    public $CreatedTime;

    /**
     * @var integer Update time. millisecond-level timestamp.
     */
    public $UpdateTime;

    /**
     * @param integer $Id Policy rule ID.
     * @param string $InstanceId MQTT cluster ID.
     * @param string $PolicyName Specifies the policy rule name.
     * @param integer $Version Rule syntax version. currently only support 1. defaults to 1.
     * @param integer $Priority Policy priority. a smaller priority ID indicates the policy takes effect with higher priority. see [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Effect Specifies the decision.
allow specifies permission for access requests from devices that match this policy.
deny: denies access requests to the device that override the policy.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Actions Operation.
Specifies the connection.
Publishes an mqtt message.
Sub. specifies the subscription to mqtt messages.
Refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Resources Resource. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $ClientId Specifies the device ID for connection. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Username Condition - username. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Ip Specifies the client IP address. see the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param string $Qos Condition - service quality. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
     * @param integer $Retain Condition - message retention. refer to the [data plane authorization policy description](https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Indicates the match of retain messages.
2: indicates non-retain messages.
3: indicates matching retain and non-retain messages.
     * @param string $Remark Specifies the remark with length not exceeding 128 characters.
     * @param integer $CreatedTime Creation time. millisecond-level timestamp.
     * @param integer $UpdateTime Update time. millisecond-level timestamp.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
