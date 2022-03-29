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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image segment information
 *
 * @method string getOffsetTime() Obtain This field is used to return the frame capturing time of a video segment in seconds. For video on demand files, this parameter indicates the time offset of the captured image from the video, such as 0 (no offset), 5 (5 seconds after the start of the video), and 10 (10 seconds after the start of the video). For live video stream files, this parameter returns the Unix timestamp of the image, such as `1594650717`.
 * @method void setOffsetTime(string $OffsetTime) Set This field is used to return the frame capturing time of a video segment in seconds. For video on demand files, this parameter indicates the time offset of the captured image from the video, such as 0 (no offset), 5 (5 seconds after the start of the video), and 10 (10 seconds after the start of the video). For live video stream files, this parameter returns the Unix timestamp of the image, such as `1594650717`.
 * @method ImageResult getResult() Obtain This field is used to return the specific moderation result of a frame captured from a video segment. For details, see the description of the `ImageResult` data structure.
 * @method void setResult(ImageResult $Result) Set This field is used to return the specific moderation result of a frame captured from a video segment. For details, see the description of the `ImageResult` data structure.
 */
class ImageSegments extends AbstractModel
{
    /**
     * @var string This field is used to return the frame capturing time of a video segment in seconds. For video on demand files, this parameter indicates the time offset of the captured image from the video, such as 0 (no offset), 5 (5 seconds after the start of the video), and 10 (10 seconds after the start of the video). For live video stream files, this parameter returns the Unix timestamp of the image, such as `1594650717`.
     */
    public $OffsetTime;

    /**
     * @var ImageResult This field is used to return the specific moderation result of a frame captured from a video segment. For details, see the description of the `ImageResult` data structure.
     */
    public $Result;

    /**
     * @param string $OffsetTime This field is used to return the frame capturing time of a video segment in seconds. For video on demand files, this parameter indicates the time offset of the captured image from the video, such as 0 (no offset), 5 (5 seconds after the start of the video), and 10 (10 seconds after the start of the video). For live video stream files, this parameter returns the Unix timestamp of the image, such as `1594650717`.
     * @param ImageResult $Result This field is used to return the specific moderation result of a frame captured from a video segment. For details, see the description of the `ImageResult` data structure.
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
