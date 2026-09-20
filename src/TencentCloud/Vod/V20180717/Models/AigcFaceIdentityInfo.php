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
 * Human face identity information.
 *
 * @method string getFaceId() Obtain Face ID in the video. The same human face is treated as a different ID if it appears more than 1s apart in the middle of the video.
 * @method void setFaceId(string $FaceId) Set Face ID in the video. The same human face is treated as a different ID if it appears more than 1s apart in the middle of the video.
 * @method string getFaceImage() Obtain Schematic diagram of a human face captured from the video.
 * @method void setFaceImage(string $FaceImage) Set Schematic diagram of a human face captured from the video.
 * @method integer getStartTime() Obtain Starting time of the lip-sync interval for this face, which can be used as the best start time for lip-sync. Unit: ms.
 * @method void setStartTime(integer $StartTime) Set Starting time of the lip-sync interval for this face, which can be used as the best start time for lip-sync. Unit: ms.
 * @method integer getEndTime() Obtain End time of the lip-sync interval for the face. Note: This result has a millisecond-level error and will be later than the actual interval end. Unit: ms.
 * @method void setEndTime(integer $EndTime) Set End time of the lip-sync interval for the face. Note: This result has a millisecond-level error and will be later than the actual interval end. Unit: ms.
 */
class AigcFaceIdentityInfo extends AbstractModel
{
    /**
     * @var string Face ID in the video. The same human face is treated as a different ID if it appears more than 1s apart in the middle of the video.
     */
    public $FaceId;

    /**
     * @var string Schematic diagram of a human face captured from the video.
     */
    public $FaceImage;

    /**
     * @var integer Starting time of the lip-sync interval for this face, which can be used as the best start time for lip-sync. Unit: ms.
     */
    public $StartTime;

    /**
     * @var integer End time of the lip-sync interval for the face. Note: This result has a millisecond-level error and will be later than the actual interval end. Unit: ms.
     */
    public $EndTime;

    /**
     * @param string $FaceId Face ID in the video. The same human face is treated as a different ID if it appears more than 1s apart in the middle of the video.
     * @param string $FaceImage Schematic diagram of a human face captured from the video.
     * @param integer $StartTime Starting time of the lip-sync interval for this face, which can be used as the best start time for lip-sync. Unit: ms.
     * @param integer $EndTime End time of the lip-sync interval for the face. Note: This result has a millisecond-level error and will be later than the actual interval end. Unit: ms.
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
        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("FaceImage",$param) and $param["FaceImage"] !== null) {
            $this->FaceImage = $param["FaceImage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
