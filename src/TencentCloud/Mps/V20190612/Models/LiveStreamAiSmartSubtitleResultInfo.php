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
 * Smart subtitle result of the live stream.
 *
 * @method array getSmartSubtitleResult() Obtain List of live stream smart subtitle task results.
 * @method void setSmartSubtitleResult(array $SmartSubtitleResult) Set List of live stream smart subtitle task results.
 */
class LiveStreamAiSmartSubtitleResultInfo extends AbstractModel
{
    /**
     * @var array List of live stream smart subtitle task results.
     */
    public $SmartSubtitleResult;

    /**
     * @param array $SmartSubtitleResult List of live stream smart subtitle task results.
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
        if (array_key_exists("SmartSubtitleResult",$param) and $param["SmartSubtitleResult"] !== null) {
            $this->SmartSubtitleResult = [];
            foreach ($param["SmartSubtitleResult"] as $key => $value){
                $obj = new LiveSmartSubtitleResult();
                $obj->deserialize($value);
                array_push($this->SmartSubtitleResult, $obj);
            }
        }
    }
}
