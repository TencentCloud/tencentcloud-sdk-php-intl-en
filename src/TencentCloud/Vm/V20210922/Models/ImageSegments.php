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
 * Image segment information
 *
 * @method string getOffsetTime() Obtain Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
 * @method void setOffsetTime(string $OffsetTime) Set Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
 * @method ImageResult getResult() Obtain Image capture result
 * @method void setResult(ImageResult $Result) Set Image capture result
 */
class ImageSegments extends AbstractModel
{
    /**
     * @var string Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
     */
    public $OffsetTime;

    /**
     * @var ImageResult Image capture result
     */
    public $Result;

    /**
     * @param string $OffsetTime Capture time.
For VOD files, it indicates the video offset time given in seconds (e.g., 0, 5, 10).
For live files, it indicates a timestamp (e.g., 1594650717).
     * @param ImageResult $Result Image capture result
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
            $this->Result = new ImageResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
