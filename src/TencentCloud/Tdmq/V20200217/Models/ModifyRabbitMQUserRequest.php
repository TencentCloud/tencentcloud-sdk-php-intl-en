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
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getUser() Obtain Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
 * @method void setUser(string $User) Set Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
 * @method string getPassword() Obtain Password, used when logging in. requirement: cannot be empty, 8-64 characters, must contain at least two items from lowercase letters, uppercase letters, digits, and special characters [`()~!@#$%^&*_=|{}[]:;',.?/].
 * @method void setPassword(string $Password) Set Password, used when logging in. requirement: cannot be empty, 8-64 characters, must contain at least two items from lowercase letters, uppercase letters, digits, and special characters [`()~!@#$%^&*_=|{}[]:;',.?/].
 * @method string getDescription() Obtain Description. If this parameter is not passed in, it won't be modified.
 * @method void setDescription(string $Description) Set Description. If this parameter is not passed in, it won't be modified.
 * @method array getTags() Obtain User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
 * @method void setTags(array $Tags) Set User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
 * @method integer getMaxConnections() Obtain The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
 * @method void setMaxConnections(integer $MaxConnections) Set The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
 * @method integer getMaxChannels() Obtain The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
 * @method void setMaxChannels(integer $MaxChannels) Set The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
 */
class ModifyRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
     */
    public $User;

    /**
     * @var string Password, used when logging in. requirement: cannot be empty, 8-64 characters, must contain at least two items from lowercase letters, uppercase letters, digits, and special characters [`()~!@#$%^&*_=|{}[]:;',.?/].
     */
    public $Password;

    /**
     * @var string Description. If this parameter is not passed in, it won't be modified.
     */
    public $Description;

    /**
     * @var array User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
     */
    public $Tags;

    /**
     * @var integer The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
     */
    public $MaxConnections;

    /**
     * @var integer The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
     */
    public $MaxChannels;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $User Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
     * @param string $Password Password, used when logging in. requirement: cannot be empty, 8-64 characters, must contain at least two items from lowercase letters, uppercase letters, digits, and special characters [`()~!@#$%^&*_=|{}[]:;',.?/].
     * @param string $Description Description. If this parameter is not passed in, it won't be modified.
     * @param array $Tags User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
     * @param integer $MaxConnections The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
     * @param integer $MaxChannels The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
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
    }
}
