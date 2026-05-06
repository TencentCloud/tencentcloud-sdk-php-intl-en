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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric scaling behavior
 *
 * @method AutoScalerRules getScaleUp() Obtain Scale-out behavior configuration
 * @method void setScaleUp(AutoScalerRules $ScaleUp) Set Scale-out behavior configuration
 * @method AutoScalerRules getScaleDown() Obtain Behavior configuration for scale-in
 * @method void setScaleDown(AutoScalerRules $ScaleDown) Set Behavior configuration for scale-in
 */
class AutoScalerBehavior extends AbstractModel
{
    /**
     * @var AutoScalerRules Scale-out behavior configuration
     */
    public $ScaleUp;

    /**
     * @var AutoScalerRules Behavior configuration for scale-in
     */
    public $ScaleDown;

    /**
     * @param AutoScalerRules $ScaleUp Scale-out behavior configuration
     * @param AutoScalerRules $ScaleDown Behavior configuration for scale-in
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
        if (array_key_exists("ScaleUp",$param) and $param["ScaleUp"] !== null) {
            $this->ScaleUp = new AutoScalerRules();
            $this->ScaleUp->deserialize($param["ScaleUp"]);
        }

        if (array_key_exists("ScaleDown",$param) and $param["ScaleDown"] !== null) {
            $this->ScaleDown = new AutoScalerRules();
            $this->ScaleDown->deserialize($param["ScaleDown"]);
        }
    }
}
