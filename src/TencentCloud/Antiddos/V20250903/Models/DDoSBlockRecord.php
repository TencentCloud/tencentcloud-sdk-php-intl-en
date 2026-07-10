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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Block history
 *
 * @method string getResource() Obtain <p>Blocked resources, public IP address, for example:</p><ul><li>Public IP address: 117.175.94.231.</li></ul>
 * @method void setResource(string $Resource) Set <p>Blocked resources, public IP address, for example:</p><ul><li>Public IP address: 117.175.94.231.</li></ul>
 * @method string getBlockTime() Obtain <p>The time when it was blocked.</p>
 * @method void setBlockTime(string $BlockTime) Set <p>The time when it was blocked.</p>
 * @method string getStatus() Obtain <p>Blocking and unblocking status.</p><p>Enumeration value:</p><ul><li>Blocked: Blocked;</li><li>Unblocking: Unblocking;</li><li>Unblocked: Unblocked.</li></ul>
 * @method void setStatus(string $Status) Set <p>Blocking and unblocking status.</p><p>Enumeration value:</p><ul><li>Blocked: Blocked;</li><li>Unblocking: Unblocking;</li><li>Unblocked: Unblocked.</li></ul>
 */
class DDoSBlockRecord extends AbstractModel
{
    /**
     * @var string <p>Blocked resources, public IP address, for example:</p><ul><li>Public IP address: 117.175.94.231.</li></ul>
     */
    public $Resource;

    /**
     * @var string <p>The time when it was blocked.</p>
     */
    public $BlockTime;

    /**
     * @var string <p>Blocking and unblocking status.</p><p>Enumeration value:</p><ul><li>Blocked: Blocked;</li><li>Unblocking: Unblocking;</li><li>Unblocked: Unblocked.</li></ul>
     */
    public $Status;

    /**
     * @param string $Resource <p>Blocked resources, public IP address, for example:</p><ul><li>Public IP address: 117.175.94.231.</li></ul>
     * @param string $BlockTime <p>The time when it was blocked.</p>
     * @param string $Status <p>Blocking and unblocking status.</p><p>Enumeration value:</p><ul><li>Blocked: Blocked;</li><li>Unblocking: Unblocking;</li><li>Unblocked: Unblocked.</li></ul>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
