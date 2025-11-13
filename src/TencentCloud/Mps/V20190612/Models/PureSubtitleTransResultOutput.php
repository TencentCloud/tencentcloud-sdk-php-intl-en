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
 * Detailed output result of translation.
 *
 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubtitleResults() Obtain Result set of multilingual translation.
 * @method void setSubtitleResults(array $SubtitleResults) Set Result set of multilingual translation.
 */
class PureSubtitleTransResultOutput extends AbstractModel
{
    /**
     * @var TaskOutputStorage Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var array Result set of multilingual translation.
     */
    public $SubtitleResults;

    /**
     * @param TaskOutputStorage $OutputStorage Storage location of the subtitle file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubtitleResults Result set of multilingual translation.
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
        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
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
