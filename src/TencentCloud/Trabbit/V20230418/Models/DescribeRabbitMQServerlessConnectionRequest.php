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
 * DescribeRabbitMQServerlessConnection request structure.
 *
 * @method string getInstanceId() Obtain instance ID		
 * @method void setInstanceId(string $InstanceId) Set instance ID		
 * @method string getVirtualHost() Obtain Specifies the vhost name.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the vhost name.
 */
class DescribeRabbitMQServerlessConnectionRequest extends AbstractModel
{
    /**
     * @var string instance ID		
     */
    public $InstanceId;

    /**
     * @var string Specifies the vhost name.
     */
    public $VirtualHost;

    /**
     * @param string $InstanceId instance ID		
     * @param string $VirtualHost Specifies the vhost name.
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
    }
}
