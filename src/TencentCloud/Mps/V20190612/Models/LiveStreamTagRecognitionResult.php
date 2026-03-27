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
 * Live streaming AI tagging recognition results
 *
 * @method string getId() Obtain Tagging events.
 * @method void setId(string $Id) Set Tagging events.
 * @method float getStartPtsTime() Obtain Start PTS time of the recognition segment, unit: seconds.
 * @method void setStartPtsTime(float $StartPtsTime) Set Start PTS time of the recognition segment, unit: seconds.
 * @method float getEndPtsTime() Obtain Termination PTS time of the recognition segment, unit: seconds.
 * @method void setEndPtsTime(float $EndPtsTime) Set Termination PTS time of the recognition segment, unit: seconds.
 * @method float getConfidence() Obtain Recognition segment confidence. Range: 0-100.
 * @method void setConfidence(float $Confidence) Set Recognition segment confidence. Range: 0-100.
 */
class LiveStreamTagRecognitionResult extends AbstractModel
{
    /**
     * @var string Tagging events.
     */
    public $Id;

    /**
     * @var float Start PTS time of the recognition segment, unit: seconds.
     */
    public $StartPtsTime;

    /**
     * @var float Termination PTS time of the recognition segment, unit: seconds.
     */
    public $EndPtsTime;

    /**
     * @var float Recognition segment confidence. Range: 0-100.
     */
    public $Confidence;

    /**
     * @param string $Id Tagging events.
     * @param float $StartPtsTime Start PTS time of the recognition segment, unit: seconds.
     * @param float $EndPtsTime Termination PTS time of the recognition segment, unit: seconds.
     * @param float $Confidence Recognition segment confidence. Range: 0-100.
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
