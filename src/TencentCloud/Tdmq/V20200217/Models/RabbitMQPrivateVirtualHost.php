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
 * TDMQ for RabbitMQ exclusive vhost
 *
 * @method string getVirtualHostName() Obtain Vhost name
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setVirtualHostName(string $VirtualHostName) Set Vhost name
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
 */
class RabbitMQPrivateVirtualHost extends AbstractModel
{
    /**
     * @var string Vhost name
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $VirtualHostName;

    /**
     * @var string Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param string $VirtualHostName Vhost name
Note: u200dThis field may return null, indicating that no valid values can be obtained.
     * @param string $Description Vhost description
Note: u200dThis field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("VirtualHostName",$param) and $param["VirtualHostName"] !== null) {
            $this->VirtualHostName = $param["VirtualHostName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
