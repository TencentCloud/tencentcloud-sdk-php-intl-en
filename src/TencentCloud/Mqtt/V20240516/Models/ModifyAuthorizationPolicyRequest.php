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
 * ModifyAuthorizationPolicy request structure.
 *
 * @method integer getId() Obtain Specifies the authorization policy ID, which can be obtained from the query authorization policy API (https://www.tencentcloud.com/document/product/1778/111074?from_cn_redirect=1).
 * @method void setId(integer $Id) Set Specifies the authorization policy ID, which can be obtained from the query authorization policy API (https://www.tencentcloud.com/document/product/1778/111074?from_cn_redirect=1).
 * @method string getInstanceId() Obtain tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

 * @method void setInstanceId(string $InstanceId) Set tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

 * @method string getPolicyName() Obtain Policy name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
 * @method void setPolicyName(string $PolicyName) Set Policy name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
 * @method integer getPolicyVersion() Obtain Policy version, defaults to 1. currently only support 1.
 * @method void setPolicyVersion(integer $PolicyVersion) Set Policy version, defaults to 1. currently only support 1.
 * @method integer getPriority() Obtain Policy priority. a smaller value indicates a higher priority. must be unique.
 * @method void setPriority(integer $Priority) Set Policy priority. a smaller value indicates a higher priority. must be unique.
 * @method string getEffect() Obtain Specifies the decision.
allow. specifies the permission.
Denies.
 * @method void setEffect(string $Effect) Set Specifies the decision.
allow. specifies the permission.
Denies.
 * @method string getActions() Obtain Operation, supports multiple selections separated by commas. see the data plane policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Specifies the connection.
Specifies the publish action.
Sub. specifies the subscription.
 * @method void setActions(string $Actions) Set Operation, supports multiple selections separated by commas. see the data plane policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Specifies the connection.
Specifies the publish action.
Sub. specifies the subscription.
 * @method string getResources() Obtain Specifies the resource and subscription to match. supports configuration of multiple match rules, separated by commas. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).

 * @method void setResources(string $Resources) Set Specifies the resource and subscription to match. supports configuration of multiple match rules, separated by commas. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).

 * @method string getUsername() Obtain Specifies the condition-username.
 * @method void setUsername(string $Username) Set Specifies the condition-username.
 * @method integer getRetain() Obtain Condition - message retention.
Matches message retention.
Matches non-retention messages.
3. match retained and non-retained messages.
 * @method void setRetain(integer $Retain) Set Condition - message retention.
Matches message retention.
Matches non-retention messages.
3. match retained and non-retained messages.
 * @method string getClientId() Obtain Client ID. supports regular expressions.
 * @method void setClientId(string $ClientId) Set Client ID. supports regular expressions.
 * @method string getIp() Obtain Condition: client IP address. supports IP or CIDR.
 * @method void setIp(string $Ip) Set Condition: client IP address. supports IP or CIDR.
 * @method string getQos() Obtain Condition: specifies the service quality.
0: at most once.
Minimum once.
2: exactly once.
 * @method void setQos(string $Qos) Set Condition: specifies the service quality.
0: at most once.
Minimum once.
2: exactly once.
 * @method string getRemark() Obtain Specifies the remark information with a maximum length of 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark information with a maximum length of 128 characters.
 */
class ModifyAuthorizationPolicyRequest extends AbstractModel
{
    /**
     * @var integer Specifies the authorization policy ID, which can be obtained from the query authorization policy API (https://www.tencentcloud.com/document/product/1778/111074?from_cn_redirect=1).
     */
    public $Id;

    /**
     * @var string tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

     */
    public $InstanceId;

    /**
     * @var string Policy name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
     */
    public $PolicyName;

    /**
     * @var integer Policy version, defaults to 1. currently only support 1.
     */
    public $PolicyVersion;

    /**
     * @var integer Policy priority. a smaller value indicates a higher priority. must be unique.
     */
    public $Priority;

    /**
     * @var string Specifies the decision.
allow. specifies the permission.
Denies.
     */
    public $Effect;

    /**
     * @var string Operation, supports multiple selections separated by commas. see the data plane policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Specifies the connection.
Specifies the publish action.
Sub. specifies the subscription.
     */
    public $Actions;

    /**
     * @var string Specifies the resource and subscription to match. supports configuration of multiple match rules, separated by commas. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).

     */
    public $Resources;

    /**
     * @var string Specifies the condition-username.
     */
    public $Username;

    /**
     * @var integer Condition - message retention.
Matches message retention.
Matches non-retention messages.
3. match retained and non-retained messages.
     */
    public $Retain;

    /**
     * @var string Client ID. supports regular expressions.
     */
    public $ClientId;

    /**
     * @var string Condition: client IP address. supports IP or CIDR.
     */
    public $Ip;

    /**
     * @var string Condition: specifies the service quality.
0: at most once.
Minimum once.
2: exactly once.
     */
    public $Qos;

    /**
     * @var string Specifies the remark information with a maximum length of 128 characters.
     */
    public $Remark;

    /**
     * @param integer $Id Specifies the authorization policy ID, which can be obtained from the query authorization policy API (https://www.tencentcloud.com/document/product/1778/111074?from_cn_redirect=1).
     * @param string $InstanceId tencent cloud MQTT instance ID, obtained from the [DescribeInstanceList](https://www.tencentcloud.com/document/api/1778/111029?from_cn_redirect=1) api or console.

     * @param string $PolicyName Policy name, which cannot be empty, contains 3 to 64 characters, and supports chinese, letters, digits, "-", and "_".
     * @param integer $PolicyVersion Policy version, defaults to 1. currently only support 1.
     * @param integer $Priority Policy priority. a smaller value indicates a higher priority. must be unique.
     * @param string $Effect Specifies the decision.
allow. specifies the permission.
Denies.
     * @param string $Actions Operation, supports multiple selections separated by commas. see the data plane policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).
Specifies the connection.
Specifies the publish action.
Sub. specifies the subscription.
     * @param string $Resources Specifies the resource and subscription to match. supports configuration of multiple match rules, separated by commas. see the data plane authorization policy description (https://www.tencentcloud.com/document/product/1778/109715?from_cn_redirect=1).

     * @param string $Username Specifies the condition-username.
     * @param integer $Retain Condition - message retention.
Matches message retention.
Matches non-retention messages.
3. match retained and non-retained messages.
     * @param string $ClientId Client ID. supports regular expressions.
     * @param string $Ip Condition: client IP address. supports IP or CIDR.
     * @param string $Qos Condition: specifies the service quality.
0: at most once.
Minimum once.
2: exactly once.
     * @param string $Remark Specifies the remark information with a maximum length of 128 characters.
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

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
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

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Retain",$param) and $param["Retain"] !== null) {
            $this->Retain = $param["Retain"];
        }

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Qos",$param) and $param["Qos"] !== null) {
            $this->Qos = $param["Qos"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
