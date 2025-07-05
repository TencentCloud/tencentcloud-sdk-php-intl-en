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
 * DescribeRabbitMQServerlessExchangeDetail request structure.
 *
 * @method string getInstanceId() Obtain Instance id.
 * @method void setInstanceId(string $InstanceId) Set Instance id.
 * @method string getVirtualHost() Obtain Specifies the vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the vhost parameter.
 * @method string getExchangeName() Obtain exchange name.
 * @method void setExchangeName(string $ExchangeName) Set exchange name.
 */
class DescribeRabbitMQServerlessExchangeDetailRequest extends AbstractModel
{
    /**
     * @var string Instance id.
     */
    public $InstanceId;

    /**
     * @var string Specifies the vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var string exchange name.
     */
    public $ExchangeName;

    /**
     * @param string $InstanceId Instance id.
     * @param string $VirtualHost Specifies the vhost parameter.
     * @param string $ExchangeName exchange name.
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

        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }
    }
}
