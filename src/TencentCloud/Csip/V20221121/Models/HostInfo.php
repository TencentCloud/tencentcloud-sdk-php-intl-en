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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Add the host information entity of the log-in audit allowlist.
 *
 * @method string getQuuid() Obtain <p>Host Quuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Host Quuid</p>
 * @method string getUuid() Obtain <p>Uuid host</p>
 * @method void setUuid(string $Uuid) Set <p>Uuid host</p>
 */
class HostInfo extends AbstractModel
{
    /**
     * @var string <p>Host Quuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Uuid host</p>
     */
    public $Uuid;

    /**
     * @param string $Quuid <p>Host Quuid</p>
     * @param string $Uuid <p>Uuid host</p>
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }
    }
}
