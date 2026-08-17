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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Live streaming AI timestamp recognition result
 *
 * @method string getId() Obtain Timestamp events.
 * @method void setId(string $Id) Set Timestamp events.
 * @method float getStartPtsTime() Obtain Start PTS time of a recognized segment, in seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of a recognized segment, in seconds.
 * @method float getEndPtsTime() Obtain End PTS time of a recognized segment, in seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set End PTS time of a recognized segment, in seconds.
 * @method float getConfidence() Obtain Confidence of a recognized segment. Value range: 0-100.
 * @method void setConfidence(float $Confidence) Set Confidence of a recognized segment. Value range: 0-100.
 */
class LiveStreamTagRecognitionResult extends AbstractModel
{
    /**
     * @var string Timestamp events.
     */
    public $Id;

    /**
     * @var float Start PTS time of a recognized segment, in seconds.
     */
    public $StartPtsTime;

    /**
     * @var float End PTS time of a recognized segment, in seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Confidence of a recognized segment. Value range: 0-100.
     */
    public $Confidence;

    /**
     * @param string $Id Timestamp events.
     * @param float $StartPtsTime Start PTS time of a recognized segment, in seconds.
     * @param float $EndPtsTime End PTS time of a recognized segment, in seconds.
     * @param float $Confidence Confidence of a recognized segment. Value range: 0-100.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("StartPtsTime",$param) and $param["StartPtsTime"] !== null) {
            $this->StartPtsTime = $param["StartPtsTime"];
        }

        if (array_key_exists("EndPtsTime",$param) and $param["EndPtsTime"] !== null) {
            $this->EndPtsTime = $param["EndPtsTime"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
