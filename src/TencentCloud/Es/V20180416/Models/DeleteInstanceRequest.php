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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInstance request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method boolean getLockEnabled() Obtain <p>Recycle bin lock settings. If true, it cannot be manually terminated and will be automatically destroyed after the preset time.</p><p>Default value: false</p>
 * @method void setLockEnabled(boolean $LockEnabled) Set <p>Recycle bin lock settings. If true, it cannot be manually terminated and will be automatically destroyed after the preset time.</p><p>Default value: false</p>
 * @method integer getLockDuration() Obtain <p>Lock time after being put into the recycle bin</p><p>Value range: [1, 7]</p><p>Unit: day</p><p>Default value: 1</p>
 * @method void setLockDuration(integer $LockDuration) Set <p>Lock time after being put into the recycle bin</p><p>Value range: [1, 7]</p><p>Unit: day</p><p>Default value: 1</p>
 */
class DeleteInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>Recycle bin lock settings. If true, it cannot be manually terminated and will be automatically destroyed after the preset time.</p><p>Default value: false</p>
     */
    public $LockEnabled;

    /**
     * @var integer <p>Lock time after being put into the recycle bin</p><p>Value range: [1, 7]</p><p>Unit: day</p><p>Default value: 1</p>
     */
    public $LockDuration;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param boolean $LockEnabled <p>Recycle bin lock settings. If true, it cannot be manually terminated and will be automatically destroyed after the preset time.</p><p>Default value: false</p>
     * @param integer $LockDuration <p>Lock time after being put into the recycle bin</p><p>Value range: [1, 7]</p><p>Unit: day</p><p>Default value: 1</p>
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

        if (array_key_exists("LockEnabled",$param) and $param["LockEnabled"] !== null) {
            $this->LockEnabled = $param["LockEnabled"];
        }

        if (array_key_exists("LockDuration",$param) and $param["LockDuration"] !== null) {
            $this->LockDuration = $param["LockDuration"];
        }
    }
}
