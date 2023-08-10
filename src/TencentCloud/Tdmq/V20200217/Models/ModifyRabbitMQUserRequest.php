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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQUser request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getUser() Obtain Username, which is used for login.
 * @method void setUser(string $User) Set Username, which is used for login.
 * @method string getPassword() Obtain Password, which is used for login.
 * @method void setPassword(string $Password) Set Password, which is used for login.
 * @method string getDescription() Obtain Description. If this parameter is not passed in, it won't be modified.
 * @method void setDescription(string $Description) Set Description. If this parameter is not passed in, it won't be modified.
 * @method array getTags() Obtain User tag, which defines a user's permission scope for accessing RabbitMQ Management. If this parameter is not passed in, it won't be modified.
 * @method void setTags(array $Tags) Set User tag, which defines a user's permission scope for accessing RabbitMQ Management. If this parameter is not passed in, it won't be modified.
 * @method integer getMaxConnections() Obtain The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
 * @method void setMaxConnections(integer $MaxConnections) Set The maximum number of connections for the user. If this parameter is not passed in, it won't be modified.
 * @method integer getMaxChannels() Obtain The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
 * @method void setMaxChannels(integer $MaxChannels) Set The maximum number of channels for the user. If this parameter is not passed in, it won't be modified.
 */
class ModifyRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
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
     * @var string Description. If this parameter is not passed in, it won't be modified.
     */
    public $Description;

    /**
     * @var array User tag, which defines a user's permission scope for accessing RabbitMQ Management. If this parameter is not passed in, it won't be modified.
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
     * @param string $InstanceId Cluster instance ID
     * @param string $User Username, which is used for login.
     * @param string $Password Password, which is used for login.
     * @param string $Description Description. If this parameter is not passed in, it won't be modified.
     * @param array $Tags User tag, which defines a user's permission scope for accessing RabbitMQ Management. If this parameter is not passed in, it won't be modified.
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
