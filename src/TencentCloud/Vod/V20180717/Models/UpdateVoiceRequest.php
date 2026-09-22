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
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method VoiceUpdateFields getVoiceFields() Obtain <p>Fields of the updated voice.</p>
 * @method void setVoiceFields(VoiceUpdateFields $VoiceFields) Set <p>Fields of the updated voice.</p>
 * @method string getSubAppId() Obtain <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID to access resources in on-demand applications, whether in the default application or a newly created application.</p>
 * @method void setSubAppId(string $SubAppId) Set <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID to access resources in on-demand applications, whether in the default application or a newly created application.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string.</p>
 */
class UpdateVoiceRequest extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var VoiceUpdateFields <p>Fields of the updated voice.</p>
     */
    public $VoiceFields;

    /**
     * @var string <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID to access resources in on-demand applications, whether in the default application or a newly created application.</p>
     */
    public $SubAppId;

    /**
     * @var string <p>Extended parameters in the format of a JSON string.</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param VoiceUpdateFields $VoiceFields <p>Fields of the updated voice.</p>
     * @param string $SubAppId <p>VOD application ID. From December 25, 2023, customers who activate on-demand services must fill in this field with the app ID to access resources in on-demand applications, whether in the default application or a newly created application.</p>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string.</p>
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
