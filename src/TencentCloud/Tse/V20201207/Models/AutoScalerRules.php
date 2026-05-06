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
 * Metric scaling rule
 *
 * @method integer getStabilizationWindowSeconds() Obtain Stability window time. Default is 0 during scaling and 300 during descaling.
 * @method void setStabilizationWindowSeconds(integer $StabilizationWindowSeconds) Set Stability window time. Default is 0 during scaling and 300 during descaling.
 * @method string getSelectPolicy() Obtain Selection policy basis
 * @method void setSelectPolicy(string $SelectPolicy) Set Selection policy basis
 * @method array getPolicies() Obtain Scaling policy
 * @method void setPolicies(array $Policies) Set Scaling policy
 */
class AutoScalerRules extends AbstractModel
{
    /**
     * @var integer Stability window time. Default is 0 during scaling and 300 during descaling.
     */
    public $StabilizationWindowSeconds;

    /**
     * @var string Selection policy basis
     */
    public $SelectPolicy;

    /**
     * @var array Scaling policy
     */
    public $Policies;

    /**
     * @param integer $StabilizationWindowSeconds Stability window time. Default is 0 during scaling and 300 during descaling.
     * @param string $SelectPolicy Selection policy basis
     * @param array $Policies Scaling policy
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
        if (array_key_exists("StabilizationWindowSeconds",$param) and $param["StabilizationWindowSeconds"] !== null) {
            $this->StabilizationWindowSeconds = $param["StabilizationWindowSeconds"];
        }

        if (array_key_exists("SelectPolicy",$param) and $param["SelectPolicy"] !== null) {
            $this->SelectPolicy = $param["SelectPolicy"];
        }

        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            $this->Policies = [];
            foreach ($param["Policies"] as $key => $value){
                $obj = new AutoScalerPolicy();
                $obj->deserialize($value);
                array_push($this->Policies, $obj);
            }
        }
    }
}
