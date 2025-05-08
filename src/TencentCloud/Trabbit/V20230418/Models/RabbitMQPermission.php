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
 * RabbitMQ permission details.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getUser() Obtain Specifies the username, which is the user associated with the permission.
 * @method void setUser(string $User) Set Specifies the username, which is the user associated with the permission.
 * @method string getVirtualHost() Obtain vhost name.
 * @method void setVirtualHost(string $VirtualHost) Set vhost name.
 * @method string getConfigRegexp() Obtain Types of permissions. declare related operations. for the user, it is operable to perform operations on the resource name under the vhost that matches the regular expression.
 * @method void setConfigRegexp(string $ConfigRegexp) Set Types of permissions. declare related operations. for the user, it is operable to perform operations on the resource name under the vhost that matches the regular expression.
 * @method string getWriteRegexp() Obtain Types of permissions. message write related operations. the user can operate on the resource names under the vhost that match the regular expression.
 * @method void setWriteRegexp(string $WriteRegexp) Set Types of permissions. message write related operations. the user can operate on the resource names under the vhost that match the regular expression.
 * @method string getReadRegexp() Obtain Types of permissions. message read related operations. the user can operate on the resource name under the vhost that matches the regular expression.
 * @method void setReadRegexp(string $ReadRegexp) Set Types of permissions. message read related operations. the user can operate on the resource name under the vhost that matches the regular expression.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getModifyTime() Obtain Modification time
 * @method void setModifyTime(string $ModifyTime) Set Modification time
 */
class RabbitMQPermission extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the username, which is the user associated with the permission.
     */
    public $User;

    /**
     * @var string vhost name.
     */
    public $VirtualHost;

    /**
     * @var string Types of permissions. declare related operations. for the user, it is operable to perform operations on the resource name under the vhost that matches the regular expression.
     */
    public $ConfigRegexp;

    /**
     * @var string Types of permissions. message write related operations. the user can operate on the resource names under the vhost that match the regular expression.
     */
    public $WriteRegexp;

    /**
     * @var string Types of permissions. message read related operations. the user can operate on the resource name under the vhost that matches the regular expression.
     */
    public $ReadRegexp;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $ModifyTime;

    /**
     * @param string $InstanceId instance ID
     * @param string $User Specifies the username, which is the user associated with the permission.
     * @param string $VirtualHost vhost name.
     * @param string $ConfigRegexp Types of permissions. declare related operations. for the user, it is operable to perform operations on the resource name under the vhost that matches the regular expression.
     * @param string $WriteRegexp Types of permissions. message write related operations. the user can operate on the resource names under the vhost that match the regular expression.
     * @param string $ReadRegexp Types of permissions. message read related operations. the user can operate on the resource name under the vhost that matches the regular expression.
     * @param string $CreateTime Creation time
     * @param string $ModifyTime Modification time
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("ConfigRegexp",$param) and $param["ConfigRegexp"] !== null) {
            $this->ConfigRegexp = $param["ConfigRegexp"];
        }

        if (array_key_exists("WriteRegexp",$param) and $param["WriteRegexp"] !== null) {
            $this->WriteRegexp = $param["WriteRegexp"];
        }

        if (array_key_exists("ReadRegexp",$param) and $param["ReadRegexp"] !== null) {
            $this->ReadRegexp = $param["ReadRegexp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
