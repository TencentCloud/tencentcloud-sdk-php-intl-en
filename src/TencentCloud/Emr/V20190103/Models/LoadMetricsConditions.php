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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Load metric.
 *
 * @method array getLoadMetrics() Obtain Rule trigger condition.
 * @method void setLoadMetrics(array $LoadMetrics) Set Rule trigger condition.
 * @method integer getMatch() Obtain 0: All conditions are met.
1: Any one of the conditions is met.
 * @method void setMatch(integer $Match) Set 0: All conditions are met.
1: Any one of the conditions is met.
 */
class LoadMetricsConditions extends AbstractModel
{
    /**
     * @var array Rule trigger condition.
     */
    public $LoadMetrics;

    /**
     * @var integer 0: All conditions are met.
1: Any one of the conditions is met.
     */
    public $Match;

    /**
     * @param array $LoadMetrics Rule trigger condition.
     * @param integer $Match 0: All conditions are met.
1: Any one of the conditions is met.
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
        if (array_key_exists("LoadMetrics",$param) and $param["LoadMetrics"] !== null) {
            $this->LoadMetrics = [];
            foreach ($param["LoadMetrics"] as $key => $value){
                $obj = new LoadMetricsCondition();
                $obj->deserialize($value);
                array_push($this->LoadMetrics, $obj);
            }
        }

        if (array_key_exists("Match",$param) and $param["Match"] !== null) {
            $this->Match = $param["Match"];
        }
    }
}
