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
 * DescribeRabbitMQUser request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getSearchUser() Obtain Username search by prefix or suffix
 * @method void setSearchUser(string $SearchUser) Set Username search by prefix or suffix
 * @method integer getOffset() Obtain Specifies the page Offset. default is 0.
 * @method void setOffset(integer $Offset) Set Specifies the page Offset. default is 0.
 * @method integer getLimit() Obtain Page Limit. default value: 20.
 * @method void setLimit(integer $Limit) Set Page Limit. default value: 20.
 * @method string getUser() Obtain Username, which is queried by exact match.
 * @method void setUser(string $User) Set Username, which is queried by exact match.
 * @method array getTags() Obtain User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
 * @method void setTags(array $Tags) Set User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
 */
class DescribeRabbitMQUserRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string Username search by prefix or suffix
     */
    public $SearchUser;

    /**
     * @var integer Specifies the page Offset. default is 0.
     */
    public $Offset;

    /**
     * @var integer Page Limit. default value: 20.
     */
    public $Limit;

    /**
     * @var string Username, which is queried by exact match.
     */
    public $User;

    /**
     * @var array User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
     */
    public $Tags;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $SearchUser Username search by prefix or suffix
     * @param integer $Offset Specifies the page Offset. default is 0.
     * @param integer $Limit Page Limit. default value: 20.
     * @param string $User Username, which is queried by exact match.
     * @param array $Tags User tag, used to determine the access permission of the user for RabbitMQ Management.
management: ordinary console user. monitoring: administrative console user. other value: non-console user.
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

        if (array_key_exists("SearchUser",$param) and $param["SearchUser"] !== null) {
            $this->SearchUser = $param["SearchUser"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
