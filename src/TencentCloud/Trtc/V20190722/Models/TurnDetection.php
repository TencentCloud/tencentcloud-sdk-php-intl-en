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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sentence segmentation configuration.
 *
 * @method string getSemanticEagerness() Obtain This parameter is valid only when TurnDetectionMode is 3, indicating the sensitivity of sentence segmentation.


Feature description: determines whether the user has finished speaking to separate the audio.


Optional: "low" | "medium" | "high" | "auto".


auto is the default value, same as medium.
low will give users sufficient time to speak.
high will perform audio chunking as soon as possible.


If you wish the model to respond more frequently in conversation mode, you can set SemanticEagerness to high.
If you wish the AI to wait a moment when the user pauses, set SemanticEagerness to low.
Regardless of the mode, it will eventually split and send to a large model for reply.

 * @method void setSemanticEagerness(string $SemanticEagerness) Set This parameter is valid only when TurnDetectionMode is 3, indicating the sensitivity of sentence segmentation.


Feature description: determines whether the user has finished speaking to separate the audio.


Optional: "low" | "medium" | "high" | "auto".


auto is the default value, same as medium.
low will give users sufficient time to speak.
high will perform audio chunking as soon as possible.


If you wish the model to respond more frequently in conversation mode, you can set SemanticEagerness to high.
If you wish the AI to wait a moment when the user pauses, set SemanticEagerness to low.
Regardless of the mode, it will eventually split and send to a large model for reply.
 */
class TurnDetection extends AbstractModel
{
    /**
     * @var string This parameter is valid only when TurnDetectionMode is 3, indicating the sensitivity of sentence segmentation.


Feature description: determines whether the user has finished speaking to separate the audio.


Optional: "low" | "medium" | "high" | "auto".


auto is the default value, same as medium.
low will give users sufficient time to speak.
high will perform audio chunking as soon as possible.


If you wish the model to respond more frequently in conversation mode, you can set SemanticEagerness to high.
If you wish the AI to wait a moment when the user pauses, set SemanticEagerness to low.
Regardless of the mode, it will eventually split and send to a large model for reply.

     */
    public $SemanticEagerness;

    /**
     * @param string $SemanticEagerness This parameter is valid only when TurnDetectionMode is 3, indicating the sensitivity of sentence segmentation.


Feature description: determines whether the user has finished speaking to separate the audio.


Optional: "low" | "medium" | "high" | "auto".


auto is the default value, same as medium.
low will give users sufficient time to speak.
high will perform audio chunking as soon as possible.


If you wish the model to respond more frequently in conversation mode, you can set SemanticEagerness to high.
If you wish the AI to wait a moment when the user pauses, set SemanticEagerness to low.
Regardless of the mode, it will eventually split and send to a large model for reply.
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
        if (array_key_exists("SemanticEagerness",$param) and $param["SemanticEagerness"] !== null) {
            $this->SemanticEagerness = $param["SemanticEagerness"];
        }
    }
}
