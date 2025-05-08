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
 * CreateRabbitMQServerlessVirtualHost request structure.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getVirtualHost() Obtain Vhost name
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name
 * @method string getDescription() Obtain Description information
 * @method void setDescription(string $Description) Set Description information
 * @method boolean getTraceFlag() Obtain Message trace switch. specifies that the value "true" turns it on, "false" turns it off. indicates that it is off by default.
 * @method void setTraceFlag(boolean $TraceFlag) Set Message trace switch. specifies that the value "true" turns it on, "false" turns it off. indicates that it is off by default.
 * @method boolean getMirrorQueuePolicyFlag() Obtain Specifies whether to create a mirrored queue policy. the default value is true.
 * @method void setMirrorQueuePolicyFlag(boolean $MirrorQueuePolicyFlag) Set Specifies whether to create a mirrored queue policy. the default value is true.
 */
class CreateRabbitMQServerlessVirtualHostRequest extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost name
     */
    public $VirtualHost;

    /**
     * @var string Description information
     */
    public $Description;

    /**
     * @var boolean Message trace switch. specifies that the value "true" turns it on, "false" turns it off. indicates that it is off by default.
     */
    public $TraceFlag;

    /**
     * @var boolean Specifies whether to create a mirrored queue policy. the default value is true.
     */
    public $MirrorQueuePolicyFlag;

    /**
     * @param string $InstanceId instance ID
     * @param string $VirtualHost Vhost name
     * @param string $Description Description information
     * @param boolean $TraceFlag Message trace switch. specifies that the value "true" turns it on, "false" turns it off. indicates that it is off by default.
     * @param boolean $MirrorQueuePolicyFlag Specifies whether to create a mirrored queue policy. the default value is true.
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

        if (array_key_exists("MirrorQueuePolicyFlag",$param) and $param["MirrorQueuePolicyFlag"] !== null) {
            $this->MirrorQueuePolicyFlag = $param["MirrorQueuePolicyFlag"];
        }
    }
}
