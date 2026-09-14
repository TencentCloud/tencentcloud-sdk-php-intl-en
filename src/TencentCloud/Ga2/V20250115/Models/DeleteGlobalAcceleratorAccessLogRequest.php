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
 * DeleteGlobalAcceleratorAccessLog request structure.
 *
 * @method string getLogPushTaskId() Obtain <p>Log Unique Id</p>
 * @method void setLogPushTaskId(string $LogPushTaskId) Set <p>Log Unique Id</p>
 * @method string getGlobalAcceleratorId() Obtain <p>Unique Id of the GA instance</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) Set <p>Unique Id of the GA instance</p>
 */
class DeleteGlobalAcceleratorAccessLogRequest extends AbstractModel
{
    /**
     * @var string <p>Log Unique Id</p>
     */
    public $LogPushTaskId;

    /**
     * @var string <p>Unique Id of the GA instance</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @param string $LogPushTaskId <p>Log Unique Id</p>
     * @param string $GlobalAcceleratorId <p>Unique Id of the GA instance</p>
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

        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }
    }
}
