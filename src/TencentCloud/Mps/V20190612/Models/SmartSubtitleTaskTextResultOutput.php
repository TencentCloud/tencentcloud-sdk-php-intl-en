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
 * @method array getRecognizeSubtitleResult() Obtain Subtitle recognition result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecognizeSubtitleResult(array $RecognizeSubtitleResult) Set Subtitle recognition result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTransSubtitleResult() Obtain Subtitle translation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransSubtitleResult(array $TransSubtitleResult) Set Subtitle translation result.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmartSubtitleTaskTextResultOutput extends AbstractModel
{
    /**
     * @var array Subtitle recognition result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecognizeSubtitleResult;

    /**
     * @var array Subtitle translation result.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransSubtitleResult;

    /**
     * @var TaskOutputStorage Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @param array $RecognizeSubtitleResult Subtitle recognition result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TransSubtitleResult Subtitle translation result.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
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
