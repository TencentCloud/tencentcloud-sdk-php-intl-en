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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IVR Key Information.
 *
 * @method string getKey() Obtain Hit keyword or press.
 * @method void setKey(string $Key) Set Hit keyword or press.
 * @method string getLabel() Obtain Tag associated with the key.
 * @method void setLabel(string $Label) Set Tag associated with the key.
 * @method integer getTimestamp() Obtain UNIX millisecond timestamp.
 * @method void setTimestamp(integer $Timestamp) Set UNIX millisecond timestamp.
 * @method string getNodeLabel() Obtain Node tags.
 * @method void setNodeLabel(string $NodeLabel) Set Node tags.
 * @method string getOriginalContent() Obtain User'S original input.
 * @method void setOriginalContent(string $OriginalContent) Set User'S original input.
 * @method string getTTSPrompt() Obtain TTS prompt content.
 * @method void setTTSPrompt(string $TTSPrompt) Set TTS prompt content.
 */
class IVRKeyPressedElement extends AbstractModel
{
    /**
     * @var string Hit keyword or press.
     */
    public $Key;

    /**
     * @var string Tag associated with the key.
     */
    public $Label;

    /**
     * @var integer UNIX millisecond timestamp.
     */
    public $Timestamp;

    /**
     * @var string Node tags.
     */
    public $NodeLabel;

    /**
     * @var string User'S original input.
     */
    public $OriginalContent;

    /**
     * @var string TTS prompt content.
     */
    public $TTSPrompt;

    /**
     * @param string $Key Hit keyword or press.
     * @param string $Label Tag associated with the key.
     * @param integer $Timestamp UNIX millisecond timestamp.
     * @param string $NodeLabel Node tags.
     * @param string $OriginalContent User'S original input.
     * @param string $TTSPrompt TTS prompt content.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("NodeLabel",$param) and $param["NodeLabel"] !== null) {
            $this->NodeLabel = $param["NodeLabel"];
        }

        if (array_key_exists("OriginalContent",$param) and $param["OriginalContent"] !== null) {
            $this->OriginalContent = $param["OriginalContent"];
        }

        if (array_key_exists("TTSPrompt",$param) and $param["TTSPrompt"] !== null) {
            $this->TTSPrompt = $param["TTSPrompt"];
        }
    }
}
