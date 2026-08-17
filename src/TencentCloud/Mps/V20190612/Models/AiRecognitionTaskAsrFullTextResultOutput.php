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
 * Full speech recognition result.
 *
 * @method array getSegmentSet() Obtain Full speech recognition segment list.
 * @method void setSegmentSet(array $SegmentSet) Set Full speech recognition segment list.
 * @method string getSubtitlePath() Obtain Subtitle file path.
 * @method void setSubtitlePath(string $SubtitlePath) Set Subtitle file path.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the subtitle file.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the subtitle file.
 */
class AiRecognitionTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array Full speech recognition segment list.
     */
    public $SegmentSet;

    /**
     * @var string Subtitle file path.
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage Storage location of the subtitle file.
     * @deprecated
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet Full speech recognition segment list.
     * @param string $SubtitlePath Subtitle file path.
     * @param TaskOutputStorage $OutputStorage Storage location of the subtitle file.
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
                $obj = new AiRecognitionTaskAsrFullTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
