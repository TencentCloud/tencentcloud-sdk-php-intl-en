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
 * RabbitMQ permission details
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getUser() Obtain Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
 * @method void setUser(string $User) Set Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
 * @method string getVirtualHost() Obtain VirtualHost name, such as testvhost. valid VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method void setVirtualHost(string $VirtualHost) Set VirtualHost name, such as testvhost. valid VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method string getConfigRegexp() Obtain Type of permissions related to declare operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method void setConfigRegexp(string $ConfigRegexp) Set Type of permissions related to declare operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method string getWriteRegexp() Obtain Type of permissions related to message write operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method void setWriteRegexp(string $WriteRegexp) Set Type of permissions related to message write operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method string getReadRegexp() Obtain Type of permissions related to message read operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method void setReadRegexp(string $ReadRegexp) Set Type of permissions related to message read operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getModifyTime() Obtain Modification time.
 * @method void setModifyTime(string $ModifyTime) Set Modification time.
 * @method integer getCreateTs() Obtain Creation timestamp.
 * @method void setCreateTs(integer $CreateTs) Set Creation timestamp.
 * @method integer getModifyTs() Obtain Modification timestamp.
 * @method void setModifyTs(integer $ModifyTs) Set Modification timestamp.
 */
class RabbitMQPermission extends AbstractModel
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
     * @var string VirtualHost name, such as testvhost. valid VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     */
    public $VirtualHost;

    /**
     * @var string Type of permissions related to declare operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     */
    public $ConfigRegexp;

    /**
     * @var string Type of permissions related to message write operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     */
    public $WriteRegexp;

    /**
     * @var string Type of permissions related to message read operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     */
    public $ReadRegexp;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Modification time.
     */
    public $ModifyTime;

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
     * @param string $User Username, such as admin. effective User names can be found by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and locating the list of users under the User and permission management tab, thereby finding the username.
     * @param string $VirtualHost VirtualHost name, such as testvhost. valid VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     * @param string $ConfigRegexp Type of permissions related to declare operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     * @param string $WriteRegexp Type of permissions related to message write operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     * @param string $ReadRegexp Type of permissions related to message read operations. This regular expression controls resource creation and deletion permissions of users in this vhost.
     * @param string $CreateTime Creation time.
     * @param string $ModifyTime Modification time.
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

        if (array_key_exists("CreateTs",$param) and $param["CreateTs"] !== null) {
            $this->CreateTs = $param["CreateTs"];
        }

        if (array_key_exists("ModifyTs",$param) and $param["ModifyTs"] !== null) {
            $this->ModifyTs = $param["ModifyTs"];
        }
    }
}
