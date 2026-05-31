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
 * ModifyRabbitMQUser request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
 * @method string getUser() Obtain <p>Username, such as rabbitmq. To find an effective userName, log in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a>, click a cluster in the list, enter cluster details, and locate the list of users under the user and permission management tab so as to find the username. Modification of the admin password is not supported currently.</p>
 * @method void setUser(string $User) Set <p>Username, such as rabbitmq. To find an effective userName, log in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a>, click a cluster in the list, enter cluster details, and locate the list of users under the user and permission management tab so as to find the username. Modification of the admin password is not supported currently.</p>
 * @method string getPassword() Obtain <p>Password, used when logging in. Requirements: Cannot be empty, 8-64 characters, must contain at least two of the following: lowercase letter, uppercase letter, digit, special character [()`~!@#$%^&*_=|{}[]:;',.?/].</p>
 * @method void setPassword(string $Password) Set <p>Password, used when logging in. Requirements: Cannot be empty, 8-64 characters, must contain at least two of the following: lowercase letter, uppercase letter, digit, special character [()`~!@#$%^&*_=|{}[]:;',.?/].</p>
 * @method string getDescription() Obtain <p>Description. Leave it empty to keep it unchanged.</p>
 * @method void setDescription(string $Description) Set <p>Description. Leave it empty to keep it unchanged.</p>
 * @method array getTags() Obtain <p>User tag, used to determine the access permission of the user to RabbitMQ Management<br>management: ordinary console user, monitoring: console user with management privileges, other value: non-console user</p>
 * @method void setTags(array $Tags) Set <p>User tag, used to determine the access permission of the user to RabbitMQ Management<br>management: ordinary console user, monitoring: console user with management privileges, other value: non-console user</p>
 * @method integer getMaxConnections() Obtain <p>Maximum number of connections for this user. Leave it blank to keep unchanged.</p>
 * @method void setMaxConnections(integer $MaxConnections) Set <p>Maximum number of connections for this user. Leave it blank to keep unchanged.</p>
 * @method integer getMaxChannels() Obtain <p>Maximum number of channels for the user's. Leave blank to keep unchanged.</p>
 * @method void setMaxChannels(integer $MaxChannels) Set <p>Maximum number of channels for the user's. Leave blank to keep unchanged.</p>
 * @method boolean getEnableCamAuth() Obtain <p>Whether cam authentication is enabled</p>
 * @method void setEnableCamAuth(boolean $EnableCamAuth) Set <p>Whether cam authentication is enabled</p>
 */
class ModifyRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Username, such as rabbitmq. To find an effective userName, log in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a>, click a cluster in the list, enter cluster details, and locate the list of users under the user and permission management tab so as to find the username. Modification of the admin password is not supported currently.</p>
     */
    public $User;

    /**
     * @var string <p>Password, used when logging in. Requirements: Cannot be empty, 8-64 characters, must contain at least two of the following: lowercase letter, uppercase letter, digit, special character [()`~!@#$%^&*_=|{}[]:;',.?/].</p>
     */
    public $Password;

    /**
     * @var string <p>Description. Leave it empty to keep it unchanged.</p>
     */
    public $Description;

    /**
     * @var array <p>User tag, used to determine the access permission of the user to RabbitMQ Management<br>management: ordinary console user, monitoring: console user with management privileges, other value: non-console user</p>
     */
    public $Tags;

    /**
     * @var integer <p>Maximum number of connections for this user. Leave it blank to keep unchanged.</p>
     */
    public $MaxConnections;

    /**
     * @var integer <p>Maximum number of channels for the user's. Leave blank to keep unchanged.</p>
     */
    public $MaxChannels;

    /**
     * @var boolean <p>Whether cam authentication is enabled</p>
     */
    public $EnableCamAuth;

    /**
     * @param string $InstanceId <p>Instance ID, such as amqp-xxxxxxxx. Effective InstanceId can be obtained by logging in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a> for querying.</p>
     * @param string $User <p>Username, such as rabbitmq. To find an effective userName, log in to the <a href="https://console.cloud.tencent.com/trabbitmq/cluster?rid=1">TDMQ RabbitMQ Console</a>, click a cluster in the list, enter cluster details, and locate the list of users under the user and permission management tab so as to find the username. Modification of the admin password is not supported currently.</p>
     * @param string $Password <p>Password, used when logging in. Requirements: Cannot be empty, 8-64 characters, must contain at least two of the following: lowercase letter, uppercase letter, digit, special character [()`~!@#$%^&*_=|{}[]:;',.?/].</p>
     * @param string $Description <p>Description. Leave it empty to keep it unchanged.</p>
     * @param array $Tags <p>User tag, used to determine the access permission of the user to RabbitMQ Management<br>management: ordinary console user, monitoring: console user with management privileges, other value: non-console user</p>
     * @param integer $MaxConnections <p>Maximum number of connections for this user. Leave it blank to keep unchanged.</p>
     * @param integer $MaxChannels <p>Maximum number of channels for the user's. Leave blank to keep unchanged.</p>
     * @param boolean $EnableCamAuth <p>Whether cam authentication is enabled</p>
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

        if (array_key_exists("MaxConnections",$param) and $param["MaxConnections"] !== null) {
            $this->MaxConnections = $param["MaxConnections"];
        }

        if (array_key_exists("MaxChannels",$param) and $param["MaxChannels"] !== null) {
            $this->MaxChannels = $param["MaxChannels"];
        }

        if (array_key_exists("EnableCamAuth",$param) and $param["EnableCamAuth"] !== null) {
            $this->EnableCamAuth = $param["EnableCamAuth"];
        }
    }
}
