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
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getUser() Obtain Username, which is used for login.
 * @method void setUser(string $User) Set Username, which is used for login.
 * @method string getPassword() Obtain Password, which is used for login.
 * @method void setPassword(string $Password) Set Password, which is used for login.
 * @method string getDescription() Obtain User description
 * @method void setDescription(string $Description) Set User description
 * @method array getTags() Obtain User tags, which determine the scope of permissions of this user to access RabbitMQ Management.
 * @method void setTags(array $Tags) Set User tags, which determine the scope of permissions of this user to access RabbitMQ Management.
 * @method string getCreateTime() Obtain User creation time
 * @method void setCreateTime(string $CreateTime) Set User creation time
 * @method string getModifyTime() Obtain Last user modification time
 * @method void setModifyTime(string $ModifyTime) Set Last user modification time
 * @method string getType() Obtain User type. Valid values: `System` (Created by system), `User` (Created by user).
 * @method void setType(string $Type) Set User type. Valid values: `System` (Created by system), `User` (Created by user).
 * @method integer getMaxConnections() Obtain Maximum number of available connections per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxConnections(integer $MaxConnections) Set Maximum number of available connections per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxChannels() Obtain Maximum number of available channels per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxChannels(integer $MaxChannels) Set Maximum number of available channels per user.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTs() Obtain Creation timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation timestamp.
 * @method integer getModifyTs() Obtain Modification timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification timestamp.
 */
class RabbitMQUser extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string Username, which is used for login.
     */
    public $User;

    /**
     * @var string Password, which is used for login.
     */
    public $Password;

    /**
     * @var string User description
     */
    public $Description;

    /**
     * @var array User tags, which determine the scope of permissions of this user to access RabbitMQ Management.
     */
    public $Tags;

    /**
     * @var string User creation time
     */
    public $CreateTime;

    /**
     * @var string Last user modification time
     */
    public $ModifyTime;

    /**
     * @var string User type. Valid values: `System` (Created by system), `User` (Created by user).
     */
    public $Type;

    /**
     * @var integer Maximum number of available connections per user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxConnections;

    /**
     * @var integer Maximum number of available channels per user.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxChannels;

    /**
     * @var integer Creation timestamp.
     */
    public $CreateTs;

    /**
     * @var integer Modification timestamp.
     */
    public $ModifyTs;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $User Username, which is used for login.
     * @param string $Password Password, which is used for login.
     * @param string $Description User description
     * @param array $Tags User tags, which determine the scope of permissions of this user to access RabbitMQ Management.
     * @param string $CreateTime User creation time
     * @param string $ModifyTime Last user modification time
     * @param string $Type User type. Valid values: `System` (Created by system), `User` (Created by user).
     * @param integer $MaxConnections Maximum number of available connections per user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxChannels Maximum number of available channels per user.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTs Creation timestamp.
     * @param integer $ModifyTs Modification timestamp.
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
    }
}
