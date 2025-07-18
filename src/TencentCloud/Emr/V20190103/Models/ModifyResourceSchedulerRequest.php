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
 * ModifyResourceScheduler request structure.
 *
 * @method string getInstanceId() Obtain EMR cluster ID
 * @method void setInstanceId(string $InstanceId) Set EMR cluster ID
 * @method string getOldValue() Obtain The original scheduler: `fair`
 * @method void setOldValue(string $OldValue) Set The original scheduler: `fair`
 * @method string getNewValue() Obtain The new scheduler: `capacity`
 * @method void setNewValue(string $NewValue) Set The new scheduler: `capacity`
 */
class ModifyResourceSchedulerRequest extends AbstractModel
{
    /**
     * @var string EMR cluster ID
     */
    public $InstanceId;

    /**
     * @var string The original scheduler: `fair`
     */
    public $OldValue;

    /**
     * @var string The new scheduler: `capacity`
     */
    public $NewValue;

    /**
     * @param string $InstanceId EMR cluster ID
     * @param string $OldValue The original scheduler: `fair`
     * @param string $NewValue The new scheduler: `capacity`
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

        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }
    }
}
