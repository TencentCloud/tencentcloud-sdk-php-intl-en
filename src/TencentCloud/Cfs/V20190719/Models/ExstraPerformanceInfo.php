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
 * Value after purchasing additional performance.
 *
 * @method string getType() Obtain Fixed: final value is fixed.
 * @method void setType(string $Type) Set Fixed: final value is fixed.
 * @method integer getPerformance() Obtain Additional purchase CFS performance value in MB/s.
 * @method void setPerformance(integer $Performance) Set Additional purchase CFS performance value in MB/s.
 */
class ExstraPerformanceInfo extends AbstractModel
{
    /**
     * @var string Fixed: final value is fixed.
     */
    public $Type;

    /**
     * @var integer Additional purchase CFS performance value in MB/s.
     */
    public $Performance;

    /**
     * @param string $Type Fixed: final value is fixed.
     * @param integer $Performance Additional purchase CFS performance value in MB/s.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Performance",$param) and $param["Performance"] !== null) {
            $this->Performance = $param["Performance"];
        }
    }
}
