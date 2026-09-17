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
 * UpdateVoice request structure.
 *
 * @method string getVoiceId() Obtain 
 * @method void setVoiceId(string $VoiceId) Set 
 * @method VoiceUpdateFields getVoiceFields() Obtain 
 * @method void setVoiceFields(VoiceUpdateFields $VoiceFields) Set 
 * @method string getSubAppId() Obtain 
 * @method void setSubAppId(string $SubAppId) Set 
 * @method string getExtParam() Obtain 
 * @method void setExtParam(string $ExtParam) Set 
 */
class UpdateVoiceRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $VoiceId;

    /**
     * @var VoiceUpdateFields 
     */
    public $VoiceFields;

    /**
     * @var string 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $ExtParam;

    /**
     * @param string $VoiceId 
     * @param VoiceUpdateFields $VoiceFields 
     * @param string $SubAppId 
     * @param string $ExtParam 
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("VoiceFields",$param) and $param["VoiceFields"] !== null) {
            $this->VoiceFields = new VoiceUpdateFields();
            $this->VoiceFields->deserialize($param["VoiceFields"]);
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
