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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getLanguage() Obtain 
 * @method void setLanguage(string $Language) Set 
 * @method string getDefault() Obtain 
 * @method void setDefault(string $Default) Set 
 * @method integer getAudioTrackIdx() Obtain 
 * @method void setAudioTrackIdx(integer $AudioTrackIdx) Set 
 */
class ComplexAdaptiveDynamicStreamingTaskAudioInput extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $Language;

    /**
     * @var string 
     */
    public $Default;

    /**
     * @var integer 
     */
    public $AudioTrackIdx;

    /**
     * @param string $FileId 
     * @param string $Name 
     * @param string $Language 
     * @param string $Default 
     * @param integer $AudioTrackIdx 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("AudioTrackIdx",$param) and $param["AudioTrackIdx"] !== null) {
            $this->AudioTrackIdx = $param["AudioTrackIdx"];
        }
    }
}
