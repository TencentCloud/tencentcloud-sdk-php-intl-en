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
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getSegmentUrl() Obtain 
 * @method void setSegmentUrl(string $SegmentUrl) Set 
 * @method float getConfidence() Obtain 
 * @method void setConfidence(float $Confidence) Set 
 * @method float getStartTimeOffset() Obtain 
 * @method void setStartTimeOffset(float $StartTimeOffset) Set 
 * @method float getEndTimeOffset() Obtain 
 * @method void setEndTimeOffset(float $EndTimeOffset) Set 
 * @method string getCovImgUrl() Obtain 
 * @method void setCovImgUrl(string $CovImgUrl) Set 
 * @method string getSpecialInfo() Obtain 
 * @method void setSpecialInfo(string $SpecialInfo) Set 
 */
class AiRecognitionTaskSegmentSegmentItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $SegmentUrl;

    /**
     * @var float 
     */
    public $Confidence;

    /**
     * @var float 
     */
    public $StartTimeOffset;

    /**
     * @var float 
     */
    public $EndTimeOffset;

    /**
     * @var string 
     */
    public $CovImgUrl;

    /**
     * @var string 
     */
    public $SpecialInfo;

    /**
     * @param string $FileId 
     * @param string $SegmentUrl 
     * @param float $Confidence 
     * @param float $StartTimeOffset 
     * @param float $EndTimeOffset 
     * @param string $CovImgUrl 
     * @param string $SpecialInfo 
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
