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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleInInstances request structure.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID
 * @method integer getScaleInNumber() Obtain Number of instances to be reduced
 * @method void setScaleInNumber(integer $ScaleInNumber) Set Number of instances to be reduced
 */
class ScaleInInstancesRequest extends AbstractModel
{
    /**
     * @var string Scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var integer Number of instances to be reduced
     */
    public $ScaleInNumber;

    /**
     * @param string $AutoScalingGroupId Scaling group ID
     * @param integer $ScaleInNumber Number of instances to be reduced
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

        if (array_key_exists("ScaleInNumber",$param) and $param["ScaleInNumber"] !== null) {
            $this->ScaleInNumber = $param["ScaleInNumber"];
        }
    }
}
