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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Split video segment.
 *
 * @method string getFileId() Obtain File ID, which is valid only when a VOD file is processed and the subsegments generated through segmentation are also VOD files.
 * @method void setFileId(string $FileId) Set File ID, which is valid only when a VOD file is processed and the subsegments generated through segmentation are also VOD files.
 * @method string getSegmentUrl() Obtain Split video segment URL.
 * @method void setSegmentUrl(string $SegmentUrl) Set Split video segment URL.
 * @method float getConfidence() Obtain Confidence of split segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of split segment. Value range: 0-100.
 * @method float getStartTimeOffset() Obtain Start time offset of split segment in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of split segment in seconds.
 * @method float getEndTimeOffset() Obtain End time offset of split segment in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of split segment in seconds.
 * @method string getCovImgUrl() Obtain Split cover image URL.
 * @method void setCovImgUrl(string $CovImgUrl) Set Split cover image URL.
 * @method string getSpecialInfo() Obtain Special field, which should be ignored.
 * @method void setSpecialInfo(string $SpecialInfo) Set Special field, which should be ignored.
 */
class AiRecognitionTaskSegmentSegmentItem extends AbstractModel
{
    /**
     * @var string File ID, which is valid only when a VOD file is processed and the subsegments generated through segmentation are also VOD files.
     */
    public $FileId;

    /**
     * @var string Split video segment URL.
     */
    public $SegmentUrl;

    /**
     * @var float Confidence of split segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @var float Start time offset of split segment in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of split segment in seconds.
     */
    public $EndTimeOffset;

    /**
     * @var string Split cover image URL.
     */
    public $CovImgUrl;

    /**
     * @var string Special field, which should be ignored.
     */
    public $SpecialInfo;

    /**
     * @param string $FileId File ID, which is valid only when a VOD file is processed and the subsegments generated through segmentation are also VOD files.
     * @param string $SegmentUrl Split video segment URL.
     * @param float $Confidence Confidence of split segment. Value range: 0-100.
     * @param float $StartTimeOffset Start time offset of split segment in seconds.
     * @param float $EndTimeOffset End time offset of split segment in seconds.
     * @param string $CovImgUrl Split cover image URL.
     * @param string $SpecialInfo Special field, which should be ignored.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SegmentUrl",$param) and $param["SegmentUrl"] !== null) {
            $this->SegmentUrl = $param["SegmentUrl"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("CovImgUrl",$param) and $param["CovImgUrl"] !== null) {
            $this->CovImgUrl = $param["CovImgUrl"];
        }

        if (array_key_exists("SpecialInfo",$param) and $param["SpecialInfo"] !== null) {
            $this->SpecialInfo = $param["SpecialInfo"];
        }
    }
}
