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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the audio segment
 *
 * @method string getOffsetTime() Obtain Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffsetTime(string $OffsetTime) Set Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AudioResult getResult() Obtain Result set
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(AudioResult $Result) Set Result set
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AudioSegments extends AbstractModel
{
    /**
     * @var string Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OffsetTime;

    /**
     * @var AudioResult Result set
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @param string $OffsetTime Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AudioResult $Result Result set
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
        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new AudioResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
