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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMachineAutoClearConfig request structure.
 *
 * @method integer getClearRule() Obtain <p>Cleanup rule retention period. 0: Disabled. Unit: day. Maximum: 30 days</p>
 * @method void setClearRule(integer $ClearRule) Set <p>Cleanup rule retention period. 0: Disabled. Unit: day. Maximum: 30 days</p>
 */
class ModifyMachineAutoClearConfigRequest extends AbstractModel
{
    /**
     * @var integer <p>Cleanup rule retention period. 0: Disabled. Unit: day. Maximum: 30 days</p>
     */
    public $ClearRule;

    /**
     * @param integer $ClearRule <p>Cleanup rule retention period. 0: Disabled. Unit: day. Maximum: 30 days</p>
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
        if (array_key_exists("ClearRule",$param) and $param["ClearRule"] !== null) {
            $this->ClearRule = $param["ClearRule"];
        }
    }
}
