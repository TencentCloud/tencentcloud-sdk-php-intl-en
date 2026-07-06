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
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getVoiceType() Obtain <p>Voice type.</p><p>Enumeration values:</p><ul><li>system: system audio.</li><li>clone: cloned audio.</li><li>design: designed audio.</li><li>all: All voices (default).</li></ul>
 * @method void setVoiceType(string $VoiceType) Set <p>Voice type.</p><p>Enumeration values:</p><ul><li>system: system audio.</li><li>clone: cloned audio.</li><li>design: designed audio.</li><li>all: All voices (default).</li></ul>
 * @method string getVoiceName() Obtain <p>Voice name.</p>
 * @method void setVoiceName(string $VoiceName) Set <p>Voice name.</p>
 * @method string getDescription() Obtain <p>Voice description.</p>
 * @method void setDescription(string $Description) Set <p>Voice description.</p>
 * @method string getGender() Obtain <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
 * @method void setGender(string $Gender) Set <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
 * @method string getAge() Obtain <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
 * @method void setAge(string $Age) Set <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
 * @method array getLanguages() Obtain <p>Language.</p>
 * @method void setLanguages(array $Languages) Set <p>Language.</p>
 * @method array getLabels() Obtain <p>Tag.</p>
 * @method void setLabels(array $Labels) Set <p>Tag.</p>
 * @method array getScenes() Obtain <p>Scenario.</p>
 * @method void setScenes(array $Scenes) Set <p>Scenario.</p>
 * @method string getExtParam() Obtain <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
 * @method void setExtParam(string $ExtParam) Set <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
 */
class DescribeVoicesRequest extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Voice type.</p><p>Enumeration values:</p><ul><li>system: system audio.</li><li>clone: cloned audio.</li><li>design: designed audio.</li><li>all: All voices (default).</li></ul>
     */
    public $VoiceType;

    /**
     * @var string <p>Voice name.</p>
     */
    public $VoiceName;

    /**
     * @var string <p>Voice description.</p>
     */
    public $Description;

    /**
     * @var string <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
     */
    public $Gender;

    /**
     * @var string <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
     */
    public $Age;

    /**
     * @var array <p>Language.</p>
     */
    public $Languages;

    /**
     * @var array <p>Tag.</p>
     */
    public $Labels;

    /**
     * @var array <p>Scenario.</p>
     */
    public $Scenes;

    /**
     * @var string <p>Extended parameters in the format of a JSON string. </p><p>Other filter criteria:
voiceName (String): Voice name, fuzzy matching. labels (Array of String): Tags. Matches voices that contain these tags.</p>
     */
    public $ExtParam;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $VoiceType <p>Voice type.</p><p>Enumeration values:</p><ul><li>system: system audio.</li><li>clone: cloned audio.</li><li>design: designed audio.</li><li>all: All voices (default).</li></ul>
     * @param string $VoiceName <p>Voice name.</p>
     * @param string $Description <p>Voice description.</p>
     * @param string $Gender <p>Gender.</p><p>Enumeration values:</p><ul><li>male: male</li><li>female: female</li><li>unknown: unknown</li></ul>
     * @param string $Age <p>Age.</p><p>Enumeration values:</p><ul><li>child: child</li><li>teenager: teenager</li><li>youth: youth</li><li>middle_aged: middle-aged</li><li>senior: senior</li><li>unknown: unknown</li></ul>
     * @param array $Languages <p>Language.</p>
     * @param array $Labels <p>Tag.</p>
     * @param array $Scenes <p>Scenario.</p>
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
        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("VoiceName",$param) and $param["VoiceName"] !== null) {
            $this->VoiceName = $param["VoiceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Age",$param) and $param["Age"] !== null) {
            $this->Age = $param["Age"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }

        if (array_key_exists("ExtParam",$param) and $param["ExtParam"] !== null) {
            $this->ExtParam = $param["ExtParam"];
        }
    }
}
