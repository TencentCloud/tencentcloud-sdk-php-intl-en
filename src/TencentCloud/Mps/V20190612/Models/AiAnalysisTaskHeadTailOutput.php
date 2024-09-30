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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Opening and closing segments recognition result.
 *
 * @method float getHeadTimeOffset() Obtain Opening segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHeadTimeOffset(float $HeadTimeOffset) Set Opening segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getTailTimeOffset() Obtain Closing segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTailTimeOffset(float $TailTimeOffset) Set Closing segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskHeadTailOutput extends AbstractModel
{
    /**
     * @var float Opening segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HeadTimeOffset;

    /**
     * @var float Closing segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TailTimeOffset;

    /**
     * @param float $HeadTimeOffset Opening segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $TailTimeOffset Closing segment PTS.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("HeadTimeOffset",$param) and $param["HeadTimeOffset"] !== null) {
            $this->HeadTimeOffset = $param["HeadTimeOffset"];
        }

        if (array_key_exists("TailTimeOffset",$param) and $param["TailTimeOffset"] !== null) {
            $this->TailTimeOffset = $param["TailTimeOffset"];
        }
    }
}
