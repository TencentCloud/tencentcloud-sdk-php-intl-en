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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node statistics list
 *
 * @method ManuallyAdded getManuallyAdded() Obtain Manually managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setManuallyAdded(ManuallyAdded $ManuallyAdded) Set Manually managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method AutoscalingAdded getAutoscalingAdded() Obtain Automatically managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setAutoscalingAdded(AutoscalingAdded $AutoscalingAdded) Set Automatically managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class NodeCountSummary extends AbstractModel
{
    /**
     * @var ManuallyAdded Manually managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ManuallyAdded;

    /**
     * @var AutoscalingAdded Automatically managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $AutoscalingAdded;

    /**
     * @param ManuallyAdded $ManuallyAdded Manually managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param AutoscalingAdded $AutoscalingAdded Automatically managed nodes
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("ManuallyAdded",$param) and $param["ManuallyAdded"] !== null) {
            $this->ManuallyAdded = new ManuallyAdded();
            $this->ManuallyAdded->deserialize($param["ManuallyAdded"]);
        }

        if (array_key_exists("AutoscalingAdded",$param) and $param["AutoscalingAdded"] !== null) {
            $this->AutoscalingAdded = new AutoscalingAdded();
            $this->AutoscalingAdded->deserialize($param["AutoscalingAdded"]);
        }
    }
}
