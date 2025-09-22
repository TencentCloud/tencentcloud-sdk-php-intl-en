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
 * @method array getSegmentSet() Obtain List of segments for full speech recognition.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSegmentSet(array $SegmentSet) Set List of segments for full speech recognition.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSubtitlePath() Obtain Subtitle file path.
 * @method void setSubtitlePath(string $SubtitlePath) Set Subtitle file path.
 * @method TaskOutputStorage getOutputStorage() Obtain Subtitle file storage location.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Subtitle file storage location.
 */
class SmartSubtitleTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array List of segments for full speech recognition.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SegmentSet;

    /**
     * @var string Subtitle file path.
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage Subtitle file storage location.
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet List of segments for full speech recognition.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SubtitlePath Subtitle file path.
     * @param TaskOutputStorage $OutputStorage Subtitle file storage location.
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
                $obj = new SmartSubtitleTaskAsrFullTextSegmentItem();
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
