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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Maximum and minimum number of pods in cluster-associated scaling groups
 *
 * @method integer getMinSize() Obtain Minimum number of pods in a scaling group
 * @method void setMinSize(integer $MinSize) Set Minimum number of pods in a scaling group
 * @method integer getMaxSize() Obtain Maximum number of pods in a scaling group
 * @method void setMaxSize(integer $MaxSize) Set Maximum number of pods in a scaling group
 */
class AutoScalingGroupRange extends AbstractModel
{
    /**
     * @var integer Minimum number of pods in a scaling group
     */
    public $MinSize;

    /**
     * @var integer Maximum number of pods in a scaling group
     */
    public $MaxSize;

    /**
     * @param integer $MinSize Minimum number of pods in a scaling group
     * @param integer $MaxSize Maximum number of pods in a scaling group
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
        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
