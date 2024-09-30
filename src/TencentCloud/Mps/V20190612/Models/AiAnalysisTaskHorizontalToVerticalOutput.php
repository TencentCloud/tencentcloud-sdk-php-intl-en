<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Intelligent landscape-to-portrait result.
 *
 * @method string getPath() Obtain Intelligent landscape-to-portrait video list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPath(string $Path) Set Intelligent landscape-to-portrait video list.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of intelligent landscape-to-portrait videos.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of intelligent landscape-to-portrait videos.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getConfidence() Obtain Confidence.	
	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfidence(float $Confidence) Set Confidence.	
	
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AiAnalysisTaskHorizontalToVerticalOutput extends AbstractModel
{
    /**
     * @var string Intelligent landscape-to-portrait video list.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Path;

    /**
     * @var TaskOutputStorage Storage location of intelligent landscape-to-portrait videos.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var float Confidence.	
	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Confidence;

    /**
     * @param string $Path Intelligent landscape-to-portrait video list.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage Storage location of intelligent landscape-to-portrait videos.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Confidence Confidence.	
	
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}
