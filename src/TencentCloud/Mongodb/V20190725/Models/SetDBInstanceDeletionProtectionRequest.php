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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetDBInstanceDeletionProtection request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID list, in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID list, in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
 * @method integer getEnableDeletionProtection() Obtain Instance termination protection switch. Valid values: 0 - disabled; 1 - enabled.
 * @method void setEnableDeletionProtection(integer $EnableDeletionProtection) Set Instance termination protection switch. Valid values: 0 - disabled; 1 - enabled.
 */
class SetDBInstanceDeletionProtectionRequest extends AbstractModel
{
    /**
     * @var array Instance ID list, in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     */
    public $InstanceIds;

    /**
     * @var integer Instance termination protection switch. Valid values: 0 - disabled; 1 - enabled.
     */
    public $EnableDeletionProtection;

    /**
     * @param array $InstanceIds Instance ID list, in the format of cmgo-p8vnipr5. It is the same as the format of the instance ID displayed on the TencentDB for MongoDB console page.
     * @param integer $EnableDeletionProtection Instance termination protection switch. Valid values: 0 - disabled; 1 - enabled.
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

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }
    }
}
