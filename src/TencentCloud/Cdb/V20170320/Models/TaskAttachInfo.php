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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Some tasks in the task list support specific additional information
 *
 * @method string getAttachKey() Obtain Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - in-place upgrade; 0 - normal upgrade.
 * @method void setAttachKey(string $AttachKey) Set Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - in-place upgrade; 0 - normal upgrade.
 * @method string getAttachValue() Obtain Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - In-place upgrade; 0 - Normal upgrade.
 * @method void setAttachValue(string $AttachValue) Set Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - In-place upgrade; 0 - Normal upgrade.
 */
class TaskAttachInfo extends AbstractModel
{
    /**
     * @var string Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - in-place upgrade; 0 - normal upgrade.
     */
    public $AttachKey;

    /**
     * @var string Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - In-place upgrade; 0 - Normal upgrade.
     */
    public $AttachValue;

    /**
     * @param string $AttachKey Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - in-place upgrade; 0 - normal upgrade.
     * @param string $AttachValue Upgrade task
"FastUpgradeStatus": Indicates the upgrade type. 1 - In-place upgrade; 0 - Normal upgrade.
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
        if (array_key_exists("AttachKey",$param) and $param["AttachKey"] !== null) {
            $this->AttachKey = $param["AttachKey"];
        }

        if (array_key_exists("AttachValue",$param) and $param["AttachValue"] !== null) {
            $this->AttachValue = $param["AttachValue"];
        }
    }
}
