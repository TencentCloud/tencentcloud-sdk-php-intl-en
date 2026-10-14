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
 * Smart subtitle recognition result.
 *
 * @method array getSegmentSet() Obtain <p>List of segments for smart subtitle recognition.</p>
 * @method void setSegmentSet(array $SegmentSet) Set <p>List of segments for smart subtitle recognition.</p>
 * @method array getRecognizeSubtitleResult() Obtain <p>Subtitle recognition result</p>
 * @method void setRecognizeSubtitleResult(array $RecognizeSubtitleResult) Set <p>Subtitle recognition result</p>
 * @method array getTransSubtitleResult() Obtain <p>Translated subtitles</p>
 * @method void setTransSubtitleResult(array $TransSubtitleResult) Set <p>Translated subtitles</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of the subtitle file</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of the subtitle file</p>
 */
class SmartSubtitleTaskTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>List of segments for smart subtitle recognition.</p>
     */
    public $SegmentSet;

    /**
     * @var array <p>Subtitle recognition result</p>
     */
    public $RecognizeSubtitleResult;

    /**
     * @var array <p>Translated subtitles</p>
     */
    public $TransSubtitleResult;

    /**
     * @var TaskOutputStorage <p>Storage location of the subtitle file</p>
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet <p>List of segments for smart subtitle recognition.</p>
     * @param array $RecognizeSubtitleResult <p>Subtitle recognition result</p>
     * @param array $TransSubtitleResult <p>Translated subtitles</p>
     * @param TaskOutputStorage $OutputStorage <p>Storage location of the subtitle file</p>
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
        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new SmartSubtitleTaskFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("RecognizeSubtitleResult",$param) and $param["RecognizeSubtitleResult"] !== null) {
            $this->RecognizeSubtitleResult = [];
            foreach ($param["RecognizeSubtitleResult"] as $key => $value){
                $obj = new SubtitleResult();
                $obj->deserialize($value);
                array_push($this->RecognizeSubtitleResult, $obj);
            }
        }

        if (array_key_exists("TransSubtitleResult",$param) and $param["TransSubtitleResult"] !== null) {
            $this->TransSubtitleResult = [];
            foreach ($param["TransSubtitleResult"] as $key => $value){
                $obj = new SubtitleResult();
                $obj->deserialize($value);
                array_push($this->TransSubtitleResult, $obj);
            }
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
