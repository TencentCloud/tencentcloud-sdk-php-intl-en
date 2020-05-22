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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output information.
 *
 * @method string getName() Obtain Output name.
 * @method void setName(string $Name) Set Output name.
 * @method array getAudioTemplateNames() Obtain Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioTemplateNames(array $AudioTemplateNames) Set Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getVideoTemplateNames() Obtain Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoTemplateNames(array $VideoTemplateNames) Set Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Scte35SettingsInfo getScte35Settings() Obtain SCTE-35 information configuration.
 * @method void setScte35Settings(Scte35SettingsInfo $Scte35Settings) Set SCTE-35 information configuration.
 */
class OutputInfo extends AbstractModel
{
    /**
     * @var string Output name.
     */
    public $Name;

    /**
     * @var array Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioTemplateNames;

    /**
     * @var array Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoTemplateNames;

    /**
     * @var Scte35SettingsInfo SCTE-35 information configuration.
     */
    public $Scte35Settings;

    /**
     * @param string $Name Output name.
     * @param array $AudioTemplateNames Audio transcoding template name array.
Quantity limit: [0,1] for RTMP; [0,20] for others.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $VideoTemplateNames Video transcoding template name array. Quantity limit: [0,1].
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Scte35SettingsInfo $Scte35Settings SCTE-35 information configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AudioTemplateNames",$param) and $param["AudioTemplateNames"] !== null) {
            $this->AudioTemplateNames = $param["AudioTemplateNames"];
        }

        if (array_key_exists("VideoTemplateNames",$param) and $param["VideoTemplateNames"] !== null) {
            $this->VideoTemplateNames = $param["VideoTemplateNames"];
        }

        if (array_key_exists("Scte35Settings",$param) and $param["Scte35Settings"] !== null) {
            $this->Scte35Settings = new Scte35SettingsInfo();
            $this->Scte35Settings->deserialize($param["Scte35Settings"]);
        }
    }
}
