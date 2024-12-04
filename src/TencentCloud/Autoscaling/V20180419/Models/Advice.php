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
 * @method string getProblem() Obtain Problem Description
 * @method void setProblem(string $Problem) Set Problem Description
 * @method string getDetail() Obtain Problem Details
 * @method void setDetail(string $Detail) Set Problem Details
 * @method string getSolution() Obtain Recommended resolutions
 * @method void setSolution(string $Solution) Set Recommended resolutions
 * @method string getLevel() Obtain Scaling suggestion warning level. Valid values:
<li>WARNING: warning.</li>
<li>CRITICAL: critical.</li>
 * @method void setLevel(string $Level) Set Scaling suggestion warning level. Valid values:
<li>WARNING: warning.</li>
<li>CRITICAL: critical.</li>
 */
class Advice extends AbstractModel
{
    /**
     * @var string Problem Description
     */
    public $Problem;

    /**
     * @var string Problem Details
     */
    public $Detail;

    /**
     * @var string Recommended resolutions
     */
    public $Solution;

    /**
     * @var string Scaling suggestion warning level. Valid values:
<li>WARNING: warning.</li>
<li>CRITICAL: critical.</li>
     */
    public $Level;

    /**
     * @param string $Problem Problem Description
     * @param string $Detail Problem Details
     * @param string $Solution Recommended resolutions
     * @param string $Level Scaling suggestion warning level. Valid values:
<li>WARNING: warning.</li>
<li>CRITICAL: critical.</li>
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
        if (array_key_exists("Problem",$param) and $param["Problem"] !== null) {
            $this->Problem = $param["Problem"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
