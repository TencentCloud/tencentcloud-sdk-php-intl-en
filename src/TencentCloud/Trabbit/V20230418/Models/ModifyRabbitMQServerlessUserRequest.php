<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQServerlessUser request structure.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getUser() Obtain Specifies the username.
 * @method void setUser(string $User) Set Specifies the username.
 * @method string getPassword() Obtain Password. specifies the password.
 * @method void setPassword(string $Password) Set Password. specifies the password.
 * @method string getDescription() Obtain Description. if not provided, no modification will be made.
 * @method void setDescription(string $Description) Set Description. if not provided, no modification will be made.
 * @method array getTags() Obtain User tag. specifies to determine the access permission scope of this user to RabbitMQ Management. if it is not passed in, no modification will be made.
 * @method void setTags(array $Tags) Set User tag. specifies to determine the access permission scope of this user to RabbitMQ Management. if it is not passed in, no modification will be made.
 * @method integer getMaxConnections() Obtain Specifies the maximum number of connections for this user. if not provided, it will not be modified.
 * @method void setMaxConnections(integer $MaxConnections) Set Specifies the maximum number of connections for this user. if not provided, it will not be modified.
 * @method integer getMaxChannels() Obtain Specifies the maximum number of channels for this user. if not provided, it will not be modified.
 * @method void setMaxChannels(integer $MaxChannels) Set Specifies the maximum number of channels for this user. if not provided, it will not be modified.
 */
class ModifyRabbitMQServerlessUserRequest extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the username.
     */
    public $User;

    /**
     * @var string Password. specifies the password.
     */
    public $Password;

    /**
     * @var string Description. if not provided, no modification will be made.
     */
    public $Description;

    /**
     * @var array User tag. specifies to determine the access permission scope of this user to RabbitMQ Management. if it is not passed in, no modification will be made.
     */
    public $Tags;

    /**
     * @var integer Specifies the maximum number of connections for this user. if not provided, it will not be modified.
     */
    public $MaxConnections;

    /**
     * @var integer Specifies the maximum number of channels for this user. if not provided, it will not be modified.
     */
    public $MaxChannels;

    /**
     * @param string $InstanceId instance ID
     * @param string $User Specifies the username.
     * @param string $Password Password. specifies the password.
     * @param string $Description Description. if not provided, no modification will be made.
     * @param array $Tags User tag. specifies to determine the access permission scope of this user to RabbitMQ Management. if it is not passed in, no modification will be made.
     * @param integer $MaxConnections Specifies the maximum number of connections for this user. if not provided, it will not be modified.
     * @param integer $MaxChannels Specifies the maximum number of channels for this user. if not provided, it will not be modified.
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
