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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * It is used for the health check status of the target group backend RS.
 *
 * @method string getInstanceIp() Obtain IP of backend RS
 * @method void setInstanceIp(string $InstanceIp) Set IP of backend RS
 * @method string getStatus() Obtain Health check status, with parameter values and meanings as follows:● on: indicates being under detection.● off: indicates that the health check is disabled.● health: indicates being healthy.● unhealth: indicates being abnormal.
 * @method void setStatus(string $Status) Set Health check status, with parameter values and meanings as follows:● on: indicates being under detection.● off: indicates that the health check is disabled.● health: indicates being healthy.● unhealth: indicates being abnormal.
 */
class TargetGroupInstanceStatus extends AbstractModel
{
    /**
     * @var string IP of backend RS
     */
    public $InstanceIp;

    /**
     * @var string Health check status, with parameter values and meanings as follows:● on: indicates being under detection.● off: indicates that the health check is disabled.● health: indicates being healthy.● unhealth: indicates being abnormal.
     */
    public $Status;

    /**
     * @param string $InstanceIp IP of backend RS
     * @param string $Status Health check status, with parameter values and meanings as follows:● on: indicates being under detection.● off: indicates that the health check is disabled.● health: indicates being healthy.● unhealth: indicates being abnormal.
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
        if (array_key_exists("InstanceIp",$param) and $param["InstanceIp"] !== null) {
            $this->InstanceIp = $param["InstanceIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
