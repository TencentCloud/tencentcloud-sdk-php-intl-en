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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC usage data display
 *
 * @method integer getInputImageCount() Obtain <p>Number of input images</p><p>Unit: count</p>
 * @method void setInputImageCount(integer $InputImageCount) Set <p>Number of input images</p><p>Unit: count</p>
 * @method integer getInputSeconds() Obtain <p>Input seconds</p><p>Unit: seconds</p>
 * @method void setInputSeconds(integer $InputSeconds) Set <p>Input seconds</p><p>Unit: seconds</p>
 * @method integer getOutputSeconds() Obtain <p>Output seconds</p><p>Measurement unit: seconds</p>
 * @method void setOutputSeconds(integer $OutputSeconds) Set <p>Output seconds</p><p>Measurement unit: seconds</p>
 * @method integer getTotalSeconds() Obtain <p>Total number of seconds</p><p>Unit: seconds</p>
 * @method void setTotalSeconds(integer $TotalSeconds) Set <p>Total number of seconds</p><p>Unit: seconds</p>
 */
class MediaUsageItem extends AbstractModel
{
    /**
     * @var integer <p>Number of input images</p><p>Unit: count</p>
     */
    public $InputImageCount;

    /**
     * @var integer <p>Input seconds</p><p>Unit: seconds</p>
     */
    public $InputSeconds;

    /**
     * @var integer <p>Output seconds</p><p>Measurement unit: seconds</p>
     */
    public $OutputSeconds;

    /**
     * @var integer <p>Total number of seconds</p><p>Unit: seconds</p>
     */
    public $TotalSeconds;

    /**
     * @param integer $InputImageCount <p>Number of input images</p><p>Unit: count</p>
     * @param integer $InputSeconds <p>Input seconds</p><p>Unit: seconds</p>
     * @param integer $OutputSeconds <p>Output seconds</p><p>Measurement unit: seconds</p>
     * @param integer $TotalSeconds <p>Total number of seconds</p><p>Unit: seconds</p>
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
        if (array_key_exists("InputImageCount",$param) and $param["InputImageCount"] !== null) {
            $this->InputImageCount = $param["InputImageCount"];
        }

        if (array_key_exists("InputSeconds",$param) and $param["InputSeconds"] !== null) {
            $this->InputSeconds = $param["InputSeconds"];
        }

        if (array_key_exists("OutputSeconds",$param) and $param["OutputSeconds"] !== null) {
            $this->OutputSeconds = $param["OutputSeconds"];
        }

        if (array_key_exists("TotalSeconds",$param) and $param["TotalSeconds"] !== null) {
            $this->TotalSeconds = $param["TotalSeconds"];
        }
    }
}
