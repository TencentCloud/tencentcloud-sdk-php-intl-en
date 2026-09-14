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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessLogStatus request structure.
 *
 * @method string getLogPushTaskId() Obtain <p>Log Unique Id</p>
 * @method void setLogPushTaskId(string $LogPushTaskId) Set <p>Log Unique Id</p>
 * @method string getStatus() Obtain <p>Status (Start START, Stop STOP)</p><p>Enumeration values:</p><ul><li>START: Start</li><li>STOP: Stop</li></ul>
 * @method void setStatus(string $Status) Set <p>Status (Start START, Stop STOP)</p><p>Enumeration values:</p><ul><li>START: Start</li><li>STOP: Stop</li></ul>
 * @method string getGlobalAcceleratorId() Obtain <p>Unique Id of the GA instance.</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Unique Id of the GA instance.</p>
 */
class ModifyAccessLogStatusRequest extends AbstractModel
{
    /**
     * @var string <p>Log Unique Id</p>
     */
    public $LogPushTaskId;

    /**
     * @var string <p>Status (Start START, Stop STOP)</p><p>Enumeration values:</p><ul><li>START: Start</li><li>STOP: Stop</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Unique Id of the GA instance.</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @param string $LogPushTaskId <p>Log Unique Id</p>
     * @param string $Status <p>Status (Start START, Stop STOP)</p><p>Enumeration values:</p><ul><li>START: Start</li><li>STOP: Stop</li></ul>
     * @param string $GlobalAcceleratorId <p>Unique Id of the GA instance.</p>
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
        if (array_key_exists("LogPushTaskId",$param) and $param["LogPushTaskId"] !== null) {
            $this->LogPushTaskId = $param["LogPushTaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }
    }
}
