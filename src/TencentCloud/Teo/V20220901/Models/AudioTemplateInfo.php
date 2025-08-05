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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio stream configuration parameters.
 *
 * @method string getCodec() Obtain Encoding format for audio streams. optional values:.
<li>libfdk_aac.</li>
 * @method void setCodec(string $Codec) Set Encoding format for audio streams. optional values:.
<li>libfdk_aac.</li>
 * @method integer getAudioChannel() Obtain Audio channel quantity. valid values: <li>2: dual-channel.</li> default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel quantity. valid values: <li>2: dual-channel.</li> default value: 2.
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string Encoding format for audio streams. optional values:.
<li>libfdk_aac.</li>
     */
    public $Codec;

    /**
     * @var integer Audio channel quantity. valid values: <li>2: dual-channel.</li> default value: 2.
     */
    public $AudioChannel;

    /**
     * @param string $Codec Encoding format for audio streams. optional values:.
<li>libfdk_aac.</li>
     * @param integer $AudioChannel Audio channel quantity. valid values: <li>2: dual-channel.</li> default value: 2.
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }
    }
}
