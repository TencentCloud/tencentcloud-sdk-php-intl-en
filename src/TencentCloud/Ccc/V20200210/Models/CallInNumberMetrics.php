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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Inbound line dimension metrics.
 *
 * @method string getNumber() Obtain Line number.
 * @method void setNumber(string $Number) Set Line number.
 * @method CallInMetrics getMetrics() Obtain Line-Related metrics.
 * @method void setMetrics(CallInMetrics $Metrics) Set Line-Related metrics.
 * @method array getSkillGroupMetrics() Obtain Bound skill group metrics.
 * @method void setSkillGroupMetrics(array $SkillGroupMetrics) Set Bound skill group metrics.
 */
class CallInNumberMetrics extends AbstractModel
{
    /**
     * @var string Line number.
     */
    public $Number;

    /**
     * @var CallInMetrics Line-Related metrics.
     */
    public $Metrics;

    /**
     * @var array Bound skill group metrics.
     */
    public $SkillGroupMetrics;

    /**
     * @param string $Number Line number.
     * @param CallInMetrics $Metrics Line-Related metrics.
     * @param array $SkillGroupMetrics Bound skill group metrics.
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new CallInMetrics();
            $this->Metrics->deserialize($param["Metrics"]);
        }

        if (array_key_exists("SkillGroupMetrics",$param) and $param["SkillGroupMetrics"] !== null) {
            $this->SkillGroupMetrics = [];
            foreach ($param["SkillGroupMetrics"] as $key => $value){
                $obj = new CallInSkillGroupMetrics();
                $obj->deserialize($value);
                array_push($this->SkillGroupMetrics, $obj);
            }
        }
    }
}
