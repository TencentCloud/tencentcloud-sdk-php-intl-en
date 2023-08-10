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
 * CreateRabbitMQVirtualHost request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getVirtualHost() Obtain Vhost name
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method boolean getTraceFlag() Obtain Message trace flag. Valid values: `true` (Enabled), `false` (Disabled, which is the default value).
 * @method void setTraceFlag(boolean $TraceFlag) Set Message trace flag. Valid values: `true` (Enabled), `false` (Disabled, which is the default value).
 */
class CreateRabbitMQVirtualHostRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost name
     */
    public $VirtualHost;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var boolean Message trace flag. Valid values: `true` (Enabled), `false` (Disabled, which is the default value).
     */
    public $TraceFlag;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $VirtualHost Vhost name
     * @param string $Description Description
     * @param boolean $TraceFlag Message trace flag. Valid values: `true` (Enabled), `false` (Disabled, which is the default value).
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TraceFlag",$param) and $param["TraceFlag"] !== null) {
            $this->TraceFlag = $param["TraceFlag"];
        }
    }
}
