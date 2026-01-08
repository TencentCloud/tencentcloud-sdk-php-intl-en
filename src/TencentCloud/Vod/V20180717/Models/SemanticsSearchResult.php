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
 * Semantic search result.
 *
 * @method string getFileId() Obtain Specifies the unique identifier of the media file.
 * @method void setFileId(string $FileId) Set Specifies the unique identifier of the media file.
 * @method float getScore() Obtain Score of the video in this retrieval. higher score indicates greater similarity to the retrieval value. value ranges from 0 to 1.
 * @method void setScore(float $Score) Set Score of the video in this retrieval. higher score indicates greater similarity to the retrieval value. value ranges from 0 to 1.
 * @method float getStartTimeOffset() Obtain Specifies the start time of the video clip, in seconds.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Specifies the start time of the video clip, in seconds.
 * @method float getEndTimeOffset() Obtain Specifies the end time of the video clip, in seconds.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set Specifies the end time of the video clip, in seconds.
 */
class SemanticsSearchResult extends AbstractModel
{
    /**
     * @var string Specifies the unique identifier of the media file.
     */
    public $FileId;

    /**
     * @var float Score of the video in this retrieval. higher score indicates greater similarity to the retrieval value. value ranges from 0 to 1.
     */
    public $Score;

    /**
     * @var float Specifies the start time of the video clip, in seconds.
     */
    public $StartTimeOffset;

    /**
     * @var float Specifies the end time of the video clip, in seconds.
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId Specifies the unique identifier of the media file.
     * @param float $Score Score of the video in this retrieval. higher score indicates greater similarity to the retrieval value. value ranges from 0 to 1.
     * @param float $StartTimeOffset Specifies the start time of the video clip, in seconds.
     * @param float $EndTimeOffset Specifies the end time of the video clip, in seconds.
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
