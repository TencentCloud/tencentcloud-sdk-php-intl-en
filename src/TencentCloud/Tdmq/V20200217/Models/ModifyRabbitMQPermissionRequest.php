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
 * ModifyRabbitMQPermission request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getUser() Obtain Username, such as admin. valid User names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and finding the list of users in the User and permission management tab, thereby locating the username.
 * @method void setUser(string $User) Set Username, such as admin. valid User names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and finding the list of users in the User and permission management tab, thereby locating the username.
 * @method string getVirtualHost() Obtain VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method void setVirtualHost(string $VirtualHost) Set VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method string getConfigRegexp() Obtain Permission types, declare-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 * @method void setConfigRegexp(string $ConfigRegexp) Set Permission types, declare-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 * @method string getWriteRegexp() Obtain Permission types, message write-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 * @method void setWriteRegexp(string $WriteRegexp) Set Permission types, message write-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 * @method string getReadRegexp() Obtain Permission types, message read-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 * @method void setReadRegexp(string $ReadRegexp) Set Permission types, message read-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
 */
class ModifyRabbitMQPermissionRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string Username, such as admin. valid User names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and finding the list of users in the User and permission management tab, thereby locating the username.
     */
    public $User;

    /**
     * @var string VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     */
    public $VirtualHost;

    /**
     * @var string Permission types, declare-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
     */
    public $ConfigRegexp;

    /**
     * @var string Permission types, message write-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
     */
    public $WriteRegexp;

    /**
     * @var string Permission types, message read-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
     */
    public $ReadRegexp;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $User Username, such as admin. valid User names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking a cluster in the cluster list, entering cluster details, and finding the list of users in the User and permission management tab, thereby locating the username.
     * @param string $VirtualHost VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     * @param string $ConfigRegexp Permission types, declare-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
     * @param string $WriteRegexp Permission types, message write-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
     * @param string $ReadRegexp Permission types, message read-related operations, specifies the regular expression for resource names that the user can operate on under the vhost.
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
    }
}
