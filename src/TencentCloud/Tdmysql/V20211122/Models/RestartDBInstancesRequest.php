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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain <p>Array of instance IDs that must be restarted</p>
 * @method void setInstanceIds(array $InstanceIds) Set <p>Array of instance IDs that must be restarted</p>
 * @method string getRestartTime() Obtain <p>Restart time. Leave it blank to restart now.</p>
 * @method void setRestartTime(string $RestartTime) Set <p>Restart time. Leave it blank to restart now.</p>
 */
class RestartDBInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Array of instance IDs that must be restarted</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>Restart time. Leave it blank to restart now.</p>
     */
    public $RestartTime;

    /**
     * @param array $InstanceIds <p>Array of instance IDs that must be restarted</p>
     * @param string $RestartTime <p>Restart time. Leave it blank to restart now.</p>
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RestartTime",$param) and $param["RestartTime"] !== null) {
            $this->RestartTime = $param["RestartTime"];
        }
    }
}
