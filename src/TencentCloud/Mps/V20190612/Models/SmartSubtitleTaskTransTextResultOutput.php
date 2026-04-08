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
 * Translation result.
 *
 * @method array getSegmentSet() Obtain <p>List of segments for translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentSet(array $SegmentSet) Set <p>List of segments for translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubtitlePath() Obtain <p>Subtitle file URL.</p>
 * @method void setSubtitlePath(string $SubtitlePath) Set <p>Subtitle file URL.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Smart subtitling result storage information.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Smart subtitling result storage information.</p>
 * @method string getPath() Obtain <p>Subtitle file path</p>
 * @method void setPath(string $Path) Set <p>Subtitle file path</p>
 * @method array getSubtitleResults() Obtain <p>Returned translation result during multilingual translation.</p>
 * @method void setSubtitleResults(array $SubtitleResults) Set <p>Returned translation result during multilingual translation.</p>
 */
class SmartSubtitleTaskTransTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>List of segments for translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentSet;

    /**
     * @var string <p>Subtitle file URL.</p>
     */
    public $SubtitlePath;

    /**
     * @var TaskOutputStorage <p>Smart subtitling result storage information.</p>
     */
    public $OutputStorage;

    /**
     * @var string <p>Subtitle file path</p>
     */
    public $Path;

    /**
     * @var array <p>Returned translation result during multilingual translation.</p>
     */
    public $SubtitleResults;

    /**
     * @param array $SegmentSet <p>List of segments for translation.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubtitlePath <p>Subtitle file URL.</p>
     * @param TaskOutputStorage $OutputStorage <p>Smart subtitling result storage information.</p>
     * @param string $Path <p>Subtitle file path</p>
     * @param array $SubtitleResults <p>Returned translation result during multilingual translation.</p>
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
                $obj = new SmartSubtitleTaskTransTextSegmentItem();
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitleResults",$param) and $param["SubtitleResults"] !== null) {
            $this->SubtitleResults = [];
            foreach ($param["SubtitleResults"] as $key => $value){
                $obj = new SubtitleTransResultItem();
                $obj->deserialize($value);
                array_push($this->SubtitleResults, $obj);
            }
        }
    }
}
