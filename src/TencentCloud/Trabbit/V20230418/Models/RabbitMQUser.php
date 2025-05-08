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
 * RabbitMQ user info detail.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getUser() Obtain Specifies the username used when logging in.
 * @method void setUser(string $User) Set Specifies the username used when logging in.
 * @method string getPassword() Obtain Password. specifies the password used when logging in.
 * @method void setPassword(string $Password) Set Password. specifies the password used when logging in.
 * @method string getDescription() Obtain User description
 * @method void setDescription(string $Description) Set User description
 * @method array getTags() Obtain User tag. specifies to determine the access permission scope of this user to RabbitMQ Management.
 * @method void setTags(array $Tags) Set User tag. specifies to determine the access permission scope of this user to RabbitMQ Management.
 * @method string getCreateTime() Obtain User creation time
 * @method void setCreateTime(string $CreateTime) Set User creation time
 * @method string getModifyTime() Obtain Last modification time of the user.
 * @method void setModifyTime(string $ModifyTime) Set Last modification time of the user.
 * @method string getType() Obtain Type of User. specifies that "System" indicates System creation and "User" indicates User-created.
 * @method void setType(string $Type) Set Type of User. specifies that "System" indicates System creation and "User" indicates User-created.
 * @method integer getMaxConnections() Obtain Specifies the maximum number of connections allowed for this user.
 * @method void setMaxConnections(integer $MaxConnections) Set Specifies the maximum number of connections allowed for this user.
 * @method integer getMaxChannels() Obtain The maximum number of channels allowed for this user.
 * @method void setMaxChannels(integer $MaxChannels) Set The maximum number of channels allowed for this user.
 */
class RabbitMQUser extends AbstractModel
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
     * @var string User description
     */
    public $Description;

    /**
     * @var array User tag. specifies to determine the access permission scope of this user to RabbitMQ Management.
     */
    public $Tags;

    /**
     * @var string User creation time
     */
    public $CreateTime;

    /**
     * @var string Last modification time of the user.
     */
    public $ModifyTime;

    /**
     * @var string Type of User. specifies that "System" indicates System creation and "User" indicates User-created.
     */
    public $Type;

    /**
     * @var integer Specifies the maximum number of connections allowed for this user.
     */
    public $MaxConnections;

    /**
     * @var integer The maximum number of channels allowed for this user.
     */
    public $MaxChannels;

    /**
     * @param string $InstanceId instance ID
     * @param string $User Specifies the username used when logging in.
     * @param string $Password Password. specifies the password used when logging in.
     * @param string $Description User description
     * @param array $Tags User tag. specifies to determine the access permission scope of this user to RabbitMQ Management.
     * @param string $CreateTime User creation time
     * @param string $ModifyTime Last modification time of the user.
     * @param string $Type Type of User. specifies that "System" indicates System creation and "User" indicates User-created.
     * @param integer $MaxConnections Specifies the maximum number of connections allowed for this user.
     * @param integer $MaxChannels The maximum number of channels allowed for this user.
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
    }
}
