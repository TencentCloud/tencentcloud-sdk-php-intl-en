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
 * @method string getFaceId() Obtain Face ID in the video. The same human face is considered a different ID when the interval in the middle of the video exceeds 1s.
 * @method void setFaceId(string $FaceId) Set Face ID in the video. The same human face is considered a different ID when the interval in the middle of the video exceeds 1s.
 * @method string getFaceImage() Obtain Schematic diagram of human face extracted from the video.
 * @method void setFaceImage(string $FaceImage) Set Schematic diagram of human face extracted from the video.
 * @method integer getStartTime() Obtain The starting time of the lip-sync interval can be used as the best start time for lip-sync. Unit: ms.
 * @method void setStartTime(integer $StartTime) Set The starting time of the lip-sync interval can be used as the best start time for lip-sync. Unit: ms.
 * @method integer getEndTime() Obtain The end time of the lip-sync interval for this face. Note: This result may have millisecond-level deviation and could be longer than the actual interval end. Unit: ms.
 * @method void setEndTime(integer $EndTime) Set The end time of the lip-sync interval for this face. Note: This result may have millisecond-level deviation and could be longer than the actual interval end. Unit: ms.
 */
class AigcFaceIdentityInfo extends AbstractModel
{
    /**
     * @var string Face ID in the video. The same human face is considered a different ID when the interval in the middle of the video exceeds 1s.
     */
    public $FaceId;

    /**
     * @var string Schematic diagram of human face extracted from the video.
     */
    public $FaceImage;

    /**
     * @var integer The starting time of the lip-sync interval can be used as the best start time for lip-sync. Unit: ms.
     */
    public $StartTime;

    /**
     * @var integer The end time of the lip-sync interval for this face. Note: This result may have millisecond-level deviation and could be longer than the actual interval end. Unit: ms.
     */
    public $EndTime;

    /**
     * @param string $FaceId Face ID in the video. The same human face is considered a different ID when the interval in the middle of the video exceeds 1s.
     * @param string $FaceImage Schematic diagram of human face extracted from the video.
     * @param integer $StartTime The starting time of the lip-sync interval can be used as the best start time for lip-sync. Unit: ms.
     * @param integer $EndTime The end time of the lip-sync interval for this face. Note: This result may have millisecond-level deviation and could be longer than the actual interval end. Unit: ms.
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
