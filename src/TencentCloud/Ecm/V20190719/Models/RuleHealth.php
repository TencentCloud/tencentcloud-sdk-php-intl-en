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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of forwarding rules and health status
 *
 * @method array getTargets() Obtain Health check status of the real server bound to the rule
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTargets(array $Targets) Set Health check status of the real server bound to the rule
Note: this field may return null, indicating that no valid values can be obtained.
 */
class RuleHealth extends AbstractModel
{
    /**
     * @var array Health check status of the real server bound to the rule
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Targets;

    /**
     * @param array $Targets Health check status of the real server bound to the rule
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new TargetHealth();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
