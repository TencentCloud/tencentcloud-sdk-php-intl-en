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
 * @method array getSegmentSet() Obtain <p>List of segments for full speech recognition.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSegmentSet(array $SegmentSet) Set <p>List of segments for full speech recognition.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPath() Obtain <p>Subtitle file path</p>
 * @method void setPath(string $Path) Set <p>Subtitle file path</p>
 * @method string getSubtitlePath() Obtain <p>Subtitle file URL.</p>
 * @method void setSubtitlePath(string $SubtitlePath) Set <p>Subtitle file URL.</p>
 * @method SubtitleResult getSubtitleInfo() Obtain <p>Subtitle recognition result info.</p>
 * @method void setSubtitleInfo(SubtitleResult $SubtitleInfo) Set <p>Subtitle recognition result info.</p>
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Storage location of the subtitle file.</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Storage location of the subtitle file.</p>
 */
class SmartSubtitleTaskAsrFullTextResultOutput extends AbstractModel
{
    /**
     * @var array <p>List of segments for full speech recognition.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SegmentSet;

    /**
     * @var string <p>Subtitle file path</p>
     */
    public $Path;

    /**
     * @var string <p>Subtitle file URL.</p>
     */
    public $SubtitlePath;

    /**
     * @var SubtitleResult <p>Subtitle recognition result info.</p>
     */
    public $SubtitleInfo;

    /**
     * @var TaskOutputStorage <p>Storage location of the subtitle file.</p>
     */
    public $OutputStorage;

    /**
     * @param array $SegmentSet <p>List of segments for full speech recognition.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Path <p>Subtitle file path</p>
     * @param string $SubtitlePath <p>Subtitle file URL.</p>
     * @param SubtitleResult $SubtitleInfo <p>Subtitle recognition result info.</p>
     * @param TaskOutputStorage $OutputStorage <p>Storage location of the subtitle file.</p>
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitlePath",$param) and $param["SubtitlePath"] !== null) {
            $this->SubtitlePath = $param["SubtitlePath"];
        }

        if (array_key_exists("SubtitleInfo",$param) and $param["SubtitleInfo"] !== null) {
            $this->SubtitleInfo = new SubtitleResult();
            $this->SubtitleInfo->deserialize($param["SubtitleInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
