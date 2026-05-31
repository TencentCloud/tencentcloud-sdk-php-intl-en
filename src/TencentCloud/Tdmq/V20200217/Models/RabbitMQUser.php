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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TDMQ for RabbitMQ user entity details
 *
 * @method string getInstanceId() Obtain <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
 * @method string getUser() Obtain <p>Username, used when logging in</p>
 * @method void setUser(string $User) Set <p>Username, used when logging in</p>
 * @method string getPassword() Obtain <p>Password, used when logging in</p>
 * @method void setPassword(string $Password) Set <p>Password, used when logging in</p>
 * @method string getDescription() Obtain <p>user description</p>
 * @method void setDescription(string $Description) Set <p>user description</p>
 * @method array getTags() Obtain <p>User tag, used to determine the access permission of the user to RabbitMQ Management</p>
 * @method void setTags(array $Tags) Set <p>User tag, used to determine the access permission of the user to RabbitMQ Management</p>
 * @method string getCreateTime() Obtain <p>User creation time</p>
 * @method void setCreateTime(string $CreateTime) Set <p>User creation time</p>
 * @method string getModifyTime() Obtain <p>User last modification time</p>
 * @method void setModifyTime(string $ModifyTime) Set <p>User last modification time</p>
 * @method string getType() Obtain <p>Type of user, System: system creation, User: user creation</p>
 * @method void setType(string $Type) Set <p>Type of user, System: system creation, User: user creation</p>
 * @method integer getMaxConnections() Obtain <p>Maximum available connections per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxConnections(integer $MaxConnections) Set <p>Maximum available connections per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxChannels() Obtain <p>Maximum available channels per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxChannels(integer $MaxChannels) Set <p>Maximum available channels per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTs() Obtain <p>Creation time timestamp</p>
 * @method void setCreateTs(integer $CreateTs) Set <p>Creation time timestamp</p>
 * @method integer getModifyTs() Obtain <p>Modification time timestamp</p>
 * @method void setModifyTs(integer $ModifyTs) Set <p>Modification time timestamp</p>
 * @method boolean getCamAuthEnabled() Obtain <p>Whether cam authentication is enabled</p><p>Default value: false</p>
 * @method void setCamAuthEnabled(boolean $CamAuthEnabled) Set <p>Whether cam authentication is enabled</p><p>Default value: false</p>
 * @method string getCamCredentialName() Obtain <p>cam credential name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCamCredentialName(string $CamCredentialName) Set <p>cam credential name</p>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RabbitMQUser extends AbstractModel
{
    /**
     * @var string <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Username, used when logging in</p>
     */
    public $User;

    /**
     * @var string <p>Password, used when logging in</p>
     */
    public $Password;

    /**
     * @var string <p>user description</p>
     */
    public $Description;

    /**
     * @var array <p>User tag, used to determine the access permission of the user to RabbitMQ Management</p>
     */
    public $Tags;

    /**
     * @var string <p>User creation time</p>
     */
    public $CreateTime;

    /**
     * @var string <p>User last modification time</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>Type of user, System: system creation, User: user creation</p>
     */
    public $Type;

    /**
     * @var integer <p>Maximum available connections per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxConnections;

    /**
     * @var integer <p>Maximum available channels per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxChannels;

    /**
     * @var integer <p>Creation time timestamp</p>
     */
    public $CreateTs;

    /**
     * @var integer <p>Modification time timestamp</p>
     */
    public $ModifyTs;

    /**
     * @var boolean <p>Whether cam authentication is enabled</p><p>Default value: false</p>
     */
    public $CamAuthEnabled;

    /**
     * @var string <p>cam credential name</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CamCredentialName;

    /**
     * @param string $InstanceId <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
     * @param string $User <p>Username, used when logging in</p>
     * @param string $Password <p>Password, used when logging in</p>
     * @param string $Description <p>user description</p>
     * @param array $Tags <p>User tag, used to determine the access permission of the user to RabbitMQ Management</p>
     * @param string $CreateTime <p>User creation time</p>
     * @param string $ModifyTime <p>User last modification time</p>
     * @param string $Type <p>Type of user, System: system creation, User: user creation</p>
     * @param integer $MaxConnections <p>Maximum available connections per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxChannels <p>Maximum available channels per user</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTs <p>Creation time timestamp</p>
     * @param integer $ModifyTs <p>Modification time timestamp</p>
     * @param boolean $CamAuthEnabled <p>Whether cam authentication is enabled</p><p>Default value: false</p>
     * @param string $CamCredentialName <p>cam credential name</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MaxConnections",$param) and $param["MaxConnections"] !== null) {
            $this->MaxConnections = $param["MaxConnections"];
        }

        if (array_key_exists("MaxChannels",$param) and $param["MaxChannels"] !== null) {
            $this->MaxChannels = $param["MaxChannels"];
        }

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }

        if (array_key_exists("CamAuthEnabled",$param) and $param["CamAuthEnabled"] !== null) {
            $this->CamAuthEnabled = $param["CamAuthEnabled"];
        }

        if (array_key_exists("CamCredentialName",$param) and $param["CamCredentialName"] !== null) {
            $this->CamCredentialName = $param["CamCredentialName"];
        }
    }
}
