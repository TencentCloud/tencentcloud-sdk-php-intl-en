<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetInstancesProtection request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Auto scaling group ID.
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Auto scaling group ID.
 * @method array getInstanceIds() Obtain Instance ID.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID.
 * @method boolean getProtectedFromScaleIn() Obtain Whether to enable scale-in protection for this instance
 * @method void setProtectedFromScaleIn(boolean $ProtectedFromScaleIn) Set Whether to enable scale-in protection for this instance
 */
class SetInstancesProtectionRequest extends AbstractModel
{
    /**
     * @var string Auto scaling group ID.
     */
    public $AutoScalingGroupId;

    /**
     * @var array Instance ID.
     */
    public $InstanceIds;

    /**
     * @var boolean Whether to enable scale-in protection for this instance
     */
    public $ProtectedFromScaleIn;

    /**
     * @param string $AutoScalingGroupId Auto scaling group ID.
     * @param array $InstanceIds Instance ID.
     * @param boolean $ProtectedFromScaleIn Whether to enable scale-in protection for this instance
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProtectedFromScaleIn",$param) and $param["ProtectedFromScaleIn"] !== null) {
            $this->ProtectedFromScaleIn = $param["ProtectedFromScaleIn"];
        }
    }
}
