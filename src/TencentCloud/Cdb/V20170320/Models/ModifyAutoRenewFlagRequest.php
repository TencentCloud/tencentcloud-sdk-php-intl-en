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
 * ModifyAutoRenewFlag request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method integer getAutoRenew() Obtain Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled).
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled).
 */
class ModifyAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var array Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceIds;

    /**
     * @var integer Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled).
     */
    public $AutoRenew;

    /**
     * @param array $InstanceIds Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param integer $AutoRenew Auto-renewal flag. Value range: 0 (auto-renewal not enabled), 1 (auto-renewal enabled).
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

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }
    }
}
