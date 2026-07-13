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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRabbitMQServerlessQueue request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method string getQueueName() Obtain Queue name.
 * @method void setQueueName(string $QueueName) Set Queue name.
 * @method string getRemark() Obtain Newly modified remark.
 * @method void setRemark(string $Remark) Set Newly modified remark.
 * @method integer getMessageTTL() Obtain MessageTTL parameter in milliseconds, dedicated to classic event type	
 * @method void setMessageTTL(integer $MessageTTL) Set MessageTTL parameter in milliseconds, dedicated to classic event type	
 * @method string getDeadLetterExchange() Obtain DeadLetterExchange parameter. It specifies that expired or rejected messages can be delivered to the specified dead letter exchange.
 * @method void setDeadLetterExchange(string $DeadLetterExchange) Set DeadLetterExchange parameter. It specifies that expired or rejected messages can be delivered to the specified dead letter exchange.
 * @method string getDeadLetterRoutingKey() Obtain DeadLetterRoutingKey parameter. The value can only contain letters, digits, periods (.), hyphens (-), at signs (@), and underscores (_).
 * @method void setDeadLetterRoutingKey(string $DeadLetterRoutingKey) Set DeadLetterRoutingKey parameter. The value can only contain letters, digits, periods (.), hyphens (-), at signs (@), and underscores (_).
 */
class ModifyRabbitMQServerlessQueueRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var string Queue name.
     */
    public $QueueName;

    /**
     * @var string Newly modified remark.
     */
    public $Remark;

    /**
     * @var integer MessageTTL parameter in milliseconds, dedicated to classic event type	
     */
    public $MessageTTL;

    /**
     * @var string DeadLetterExchange parameter. It specifies that expired or rejected messages can be delivered to the specified dead letter exchange.
     */
    public $DeadLetterExchange;

    /**
     * @var string DeadLetterRoutingKey parameter. The value can only contain letters, digits, periods (.), hyphens (-), at signs (@), and underscores (_).
     */
    public $DeadLetterRoutingKey;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost Vhost parameter.
     * @param string $QueueName Queue name.
     * @param string $Remark Newly modified remark.
     * @param integer $MessageTTL MessageTTL parameter in milliseconds, dedicated to classic event type	
     * @param string $DeadLetterExchange DeadLetterExchange parameter. It specifies that expired or rejected messages can be delivered to the specified dead letter exchange.
     * @param string $DeadLetterRoutingKey DeadLetterRoutingKey parameter. The value can only contain letters, digits, periods (.), hyphens (-), at signs (@), and underscores (_).
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageTTL",$param) and $param["MessageTTL"] !== null) {
            $this->MessageTTL = $param["MessageTTL"];
        }

        if (array_key_exists("DeadLetterExchange",$param) and $param["DeadLetterExchange"] !== null) {
            $this->DeadLetterExchange = $param["DeadLetterExchange"];
        }

        if (array_key_exists("DeadLetterRoutingKey",$param) and $param["DeadLetterRoutingKey"] !== null) {
            $this->DeadLetterRoutingKey = $param["DeadLetterRoutingKey"];
        }
    }
}
