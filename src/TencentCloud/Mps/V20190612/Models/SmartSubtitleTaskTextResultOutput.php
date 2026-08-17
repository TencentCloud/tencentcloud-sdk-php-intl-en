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
 * @method array getSegmentSet() Obtain 
 * @method void setSegmentSet(array $SegmentSet) Set 
 * @method array getRecognizeSubtitleResult() Obtain 
 * @method void setRecognizeSubtitleResult(array $RecognizeSubtitleResult) Set 
 * @method array getTransSubtitleResult() Obtain 
 * @method void setTransSubtitleResult(array $TransSubtitleResult) Set 
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 */
class SmartSubtitleTaskTextResultOutput extends AbstractModel
{
    /**
     * @var array 
     */
    public $SegmentSet;

    /**
     * @var array 
     */
    public $RecognizeSubtitleResult;

    /**
     * @var array 
     */
    public $TransSubtitleResult;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet 
     * @param array $RecognizeSubtitleResult 
     * @param array $TransSubtitleResult 
     * @param TaskOutputStorage $OutputStorage 
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
