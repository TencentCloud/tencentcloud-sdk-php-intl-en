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
 * Voice information.
 *
 * @method string getVoiceId() Obtain <p>Voice ID.</p>
 * @method void setVoiceId(string $VoiceId) Set <p>Voice ID.</p>
 * @method string getName() Obtain <p>Voice name.</p>
 * @method void setName(string $Name) Set <p>Voice name.</p>
 * @method string getDescription() Obtain <p>Voice description.</p>
 * @method void setDescription(string $Description) Set <p>Voice description.</p>
 * @method string getCategory() Obtain <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
 * @method void setCategory(string $Category) Set <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
 * @method string getGender() Obtain <p>Gender. </p><p>Enumeration values: </p><ul><li>male: Male, </li><li>female: Female.</li></ul>
 * @method void setGender(string $Gender) Set <p>Gender. </p><p>Enumeration values: </p><ul><li>male: Male, </li><li>female: Female.</li></ul>
 * @method array getLanguages() Obtain <p>List of supported languages. </p><p>For example: en.</p>
 * @method void setLanguages(array $Languages) Set <p>List of supported languages. </p><p>For example: en.</p>
 * @method string getAudioUrl() Obtain <p>Audition audio URL.</p>
 * @method void setAudioUrl(string $AudioUrl) Set <p>Audition audio URL.</p>
 * @method array getLabels() Obtain <p>List of tags. </p><p>For example: gentle.</p>
 * @method void setLabels(array $Labels) Set <p>List of tags. </p><p>For example: gentle.</p>
 * @method array getScenes() Obtain <p>Recommended scenarios. </p><p>For example: education.</p>
 * @method void setScenes(array $Scenes) Set <p>Recommended scenarios. </p><p>For example: education.</p>
 */
class VoiceInfo extends AbstractModel
{
    /**
     * @var string <p>Voice ID.</p>
     */
    public $VoiceId;

    /**
     * @var string <p>Voice name.</p>
     */
    public $Name;

    /**
     * @var string <p>Voice description.</p>
     */
    public $Description;

    /**
     * @var string <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
     */
    public $Category;

    /**
     * @var string <p>Gender. </p><p>Enumeration values: </p><ul><li>male: Male, </li><li>female: Female.</li></ul>
     */
    public $Gender;

    /**
     * @var array <p>List of supported languages. </p><p>For example: en.</p>
     */
    public $Languages;

    /**
     * @var string <p>Audition audio URL.</p>
     */
    public $AudioUrl;

    /**
     * @var array <p>List of tags. </p><p>For example: gentle.</p>
     */
    public $Labels;

    /**
     * @var array <p>Recommended scenarios. </p><p>For example: education.</p>
     */
    public $Scenes;

    /**
     * @param string $VoiceId <p>Voice ID.</p>
     * @param string $Name <p>Voice name.</p>
     * @param string $Description <p>Voice description.</p>
     * @param string $Category <p>Voice type. </p><p>Enumeration value: </p><ul><li>system: System audio.</li></ul>
     * @param string $Gender <p>Gender. </p><p>Enumeration values: </p><ul><li>male: Male, </li><li>female: Female.</li></ul>
     * @param array $Languages <p>List of supported languages. </p><p>For example: en.</p>
     * @param string $AudioUrl <p>Audition audio URL.</p>
     * @param array $Labels <p>List of tags. </p><p>For example: gentle.</p>
     * @param array $Scenes <p>Recommended scenarios. </p><p>For example: education.</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Languages",$param) and $param["Languages"] !== null) {
            $this->Languages = $param["Languages"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Scenes",$param) and $param["Scenes"] !== null) {
            $this->Scenes = $param["Scenes"];
        }
    }
}
