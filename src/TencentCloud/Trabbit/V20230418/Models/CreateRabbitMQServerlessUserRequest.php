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
 * CreateRabbitMQServerlessUser request structure.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getUser() Obtain Specifies the username used when logging in.
 * @method void setUser(string $User) Set Specifies the username used when logging in.
 * @method string getPassword() Obtain Password. specifies the password used when logging in.
 * @method void setPassword(string $Password) Set Password. specifies the password used when logging in.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method array getTags() Obtain The serverless instance field is invalid.
 * @method void setTags(array $Tags) Set The serverless instance field is invalid.
 * @method integer getMaxConnections() Obtain Specifies the maximum number of connections for this user. if not specified, there is no limit.
 * @method void setMaxConnections(integer $MaxConnections) Set Specifies the maximum number of connections for this user. if not specified, there is no limit.
 * @method integer getMaxChannels() Obtain Specifies the maximum number of channels for the user. if not specified, there is no limit.
 * @method void setMaxChannels(integer $MaxChannels) Set Specifies the maximum number of channels for the user. if not specified, there is no limit.
 */
class CreateRabbitMQServerlessUserRequest extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the username used when logging in.
     */
    public $User;

    /**
     * @var string Password. specifies the password used when logging in.
     */
    public $Password;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var array The serverless instance field is invalid.
     */
    public $Tags;

    /**
     * @var integer Specifies the maximum number of connections for this user. if not specified, there is no limit.
     */
    public $MaxConnections;

    /**
     * @var integer Specifies the maximum number of channels for the user. if not specified, there is no limit.
     */
    public $MaxChannels;

    /**
     * @param string $InstanceId instance ID
     * @param string $User Specifies the username used when logging in.
     * @param string $Password Password. specifies the password used when logging in.
     * @param string $Description Description
     * @param array $Tags The serverless instance field is invalid.
     * @param integer $MaxConnections Specifies the maximum number of connections for this user. if not specified, there is no limit.
     * @param integer $MaxChannels Specifies the maximum number of channels for the user. if not specified, there is no limit.
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
