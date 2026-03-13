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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLifecyclePolicy request structure.
 *
 * @method string getLifecyclePolicyName() Obtain Lifecycle management policy name, a combination of chinese/english/digits/underscores/hyphens, no more than 64 characters.
 * @method void setLifecyclePolicyName(string $LifecyclePolicyName) Set Lifecycle management policy name, a combination of chinese/english/digits/underscores/hyphens, no more than 64 characters.
 * @method array getLifecycleRules() Obtain List of management rules associated with the lifecycle management policy.
 * @method void setLifecycleRules(array $LifecycleRules) Set List of management rules associated with the lifecycle management policy.
 * @method string getLifecyclePolicyID() Obtain Lifecycle management policy ID.
 * @method void setLifecyclePolicyID(string $LifecyclePolicyID) Set Lifecycle management policy ID.
 */
class ModifyLifecyclePolicyRequest extends AbstractModel
{
    /**
     * @var string Lifecycle management policy name, a combination of chinese/english/digits/underscores/hyphens, no more than 64 characters.
     */
    public $LifecyclePolicyName;

    /**
     * @var array List of management rules associated with the lifecycle management policy.
     */
    public $LifecycleRules;

    /**
     * @var string Lifecycle management policy ID.
     */
    public $LifecyclePolicyID;

    /**
     * @param string $LifecyclePolicyName Lifecycle management policy name, a combination of chinese/english/digits/underscores/hyphens, no more than 64 characters.
     * @param array $LifecycleRules List of management rules associated with the lifecycle management policy.
     * @param string $LifecyclePolicyID Lifecycle management policy ID.
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
        if (array_key_exists("LifecyclePolicyName",$param) and $param["LifecyclePolicyName"] !== null) {
            $this->LifecyclePolicyName = $param["LifecyclePolicyName"];
        }

        if (array_key_exists("LifecycleRules",$param) and $param["LifecycleRules"] !== null) {
            $this->LifecycleRules = [];
            foreach ($param["LifecycleRules"] as $key => $value){
                $obj = new LifecycleRule();
                $obj->deserialize($value);
                array_push($this->LifecycleRules, $obj);
            }
        }

        if (array_key_exists("LifecyclePolicyID",$param) and $param["LifecyclePolicyID"] !== null) {
            $this->LifecyclePolicyID = $param["LifecyclePolicyID"];
        }
    }
}
