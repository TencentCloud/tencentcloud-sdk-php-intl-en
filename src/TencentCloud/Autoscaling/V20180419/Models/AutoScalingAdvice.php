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
 * Suggestions for scaling group configurations.
 *
 * @method string getAutoScalingGroupId() Obtain Scaling group ID
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) Set Scaling group ID
 * @method array getAdvices() Obtain A collection of suggestions for scaling group configurations.
 * @method void setAdvices(array $Advices) Set A collection of suggestions for scaling group configurations.
 */
class AutoScalingAdvice extends AbstractModel
{
    /**
     * @var string Scaling group ID
     */
    public $AutoScalingGroupId;

    /**
     * @var array A collection of suggestions for scaling group configurations.
     */
    public $Advices;

    /**
     * @param string $AutoScalingGroupId Scaling group ID
     * @param array $Advices A collection of suggestions for scaling group configurations.
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

        if (array_key_exists("Advices",$param) and $param["Advices"] !== null) {
            $this->Advices = [];
            foreach ($param["Advices"] as $key => $value){
                $obj = new Advice();
                $obj->deserialize($value);
                array_push($this->Advices, $obj);
            }
        }
    }
}
