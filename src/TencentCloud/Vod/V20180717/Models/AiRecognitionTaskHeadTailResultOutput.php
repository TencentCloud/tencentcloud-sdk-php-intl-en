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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method float getHeadConfidence() Obtain 
 * @method void setHeadConfidence(float $HeadConfidence) Set 
 * @method float getHeadTimeOffset() Obtain 
 * @method void setHeadTimeOffset(float $HeadTimeOffset) Set 
 * @method float getTailConfidence() Obtain 
 * @method void setTailConfidence(float $TailConfidence) Set 
 * @method float getTailTimeOffset() Obtain 
 * @method void setTailTimeOffset(float $TailTimeOffset) Set 
 */
class AiRecognitionTaskHeadTailResultOutput extends AbstractModel
{
    /**
     * @var float 
     */
    public $HeadConfidence;

    /**
     * @var float 
     */
    public $HeadTimeOffset;

    /**
     * @var float 
     */
    public $TailConfidence;

    /**
     * @var float 
     */
    public $TailTimeOffset;

    /**
     * @param float $HeadConfidence 
     * @param float $HeadTimeOffset 
     * @param float $TailConfidence 
     * @param float $TailTimeOffset 
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
        if (array_key_exists("HeadConfidence",$param) and $param["HeadConfidence"] !== null) {
            $this->HeadConfidence = $param["HeadConfidence"];
        }

        if (array_key_exists("HeadTimeOffset",$param) and $param["HeadTimeOffset"] !== null) {
            $this->HeadTimeOffset = $param["HeadTimeOffset"];
        }

        if (array_key_exists("TailConfidence",$param) and $param["TailConfidence"] !== null) {
            $this->TailConfidence = $param["TailConfidence"];
        }

        if (array_key_exists("TailTimeOffset",$param) and $param["TailTimeOffset"] !== null) {
            $this->TailTimeOffset = $param["TailTimeOffset"];
        }
    }
}
