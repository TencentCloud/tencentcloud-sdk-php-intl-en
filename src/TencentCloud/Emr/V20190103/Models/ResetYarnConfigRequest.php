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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetYarnConfig request structure.
 *
 * @method string getInstanceId() Obtain English ID of the EMR cluster.
 * @method void setInstanceId(string $InstanceId) Set English ID of the EMR cluster.
 * @method string getKey() Obtain Alias of the configuration to be reset. The options are as follows:

- capacityLabel: Reset the tag management configuration.
- fair: Reset the fair scheduling configuration.
- capacity: Reset the capacity scheduling configuration.
 * @method void setKey(string $Key) Set Alias of the configuration to be reset. The options are as follows:

- capacityLabel: Reset the tag management configuration.
- fair: Reset the fair scheduling configuration.
- capacity: Reset the capacity scheduling configuration.
 */
class ResetYarnConfigRequest extends AbstractModel
{
    /**
     * @var string English ID of the EMR cluster.
     */
    public $InstanceId;

    /**
     * @var string Alias of the configuration to be reset. The options are as follows:

- capacityLabel: Reset the tag management configuration.
- fair: Reset the fair scheduling configuration.
- capacity: Reset the capacity scheduling configuration.
     */
    public $Key;

    /**
     * @param string $InstanceId English ID of the EMR cluster.
     * @param string $Key Alias of the configuration to be reset. The options are as follows:

- capacityLabel: Reset the tag management configuration.
- fair: Reset the fair scheduling configuration.
- capacity: Reset the capacity scheduling configuration.
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
