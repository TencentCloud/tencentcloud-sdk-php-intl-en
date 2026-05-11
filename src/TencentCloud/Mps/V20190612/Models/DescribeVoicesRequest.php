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
 * DescribeVoices request structure.
 *
 * @method string getVoiceType() Obtain <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
 * @method void setVoiceType(string $VoiceType) Set <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
 */
class DescribeVoicesRequest extends AbstractModel
{
    /**
     * @var string <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
     */
    public $VoiceType;

    /**
     * @var string <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceType <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
     * @param string $ExtParam <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
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
        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
