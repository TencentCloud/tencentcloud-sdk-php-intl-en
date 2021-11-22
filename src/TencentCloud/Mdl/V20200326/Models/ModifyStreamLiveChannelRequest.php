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
 * ModifyStreamLiveChannel request structure.
 *
 * @method string getId() Obtain Channel ID
 * @method void setId(string $Id) Set Channel ID
 * @method string getName() Obtain Channel name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method void setName(string $Name) Set Channel name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
 * @method array getAttachedInputs() Obtain Inputs to attach. You can attach 1 to 5 inputs.
 * @method void setAttachedInputs(array $AttachedInputs) Set Inputs to attach. You can attach 1 to 5 inputs.
 * @method array getOutputGroups() Obtain Configuration information of the channel’s output groups. Quantity: [1, 10]
 * @method void setOutputGroups(array $OutputGroups) Set Configuration information of the channel’s output groups. Quantity: [1, 10]
 * @method array getAudioTemplates() Obtain Audio transcoding templates. Quantity: [1, 20]
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding templates. Quantity: [1, 20]
 * @method array getVideoTemplates() Obtain Video transcoding templates. Quantity: [1, 10]
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding templates. Quantity: [1, 10]
 * @method array getAVTemplates() Obtain Audio/Video transcoding templates. Quantity: [1, 10]
 * @method void setAVTemplates(array $AVTemplates) Set Audio/Video transcoding templates. Quantity: [1, 10]
 * @method PlanSettings getPlanSettings() Obtain Event settings
 * @method void setPlanSettings(PlanSettings $PlanSettings) Set Event settings
 */
class ModifyStreamLiveChannelRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $Id;

    /**
     * @var string Channel name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
     */
    public $Name;

    /**
     * @var array Inputs to attach. You can attach 1 to 5 inputs.
     */
    public $AttachedInputs;

    /**
     * @var array Configuration information of the channel’s output groups. Quantity: [1, 10]
     */
    public $OutputGroups;

    /**
     * @var array Audio transcoding templates. Quantity: [1, 20]
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding templates. Quantity: [1, 10]
     */
    public $VideoTemplates;

    /**
     * @var array Audio/Video transcoding templates. Quantity: [1, 10]
     */
    public $AVTemplates;

    /**
     * @var PlanSettings Event settings
     */
    public $PlanSettings;

    /**
     * @param string $Id Channel ID
     * @param string $Name Channel name, which can contain 1-32 case-sensitive letters, digits, and underscores and must be unique at the region level
     * @param array $AttachedInputs Inputs to attach. You can attach 1 to 5 inputs.
     * @param array $OutputGroups Configuration information of the channel’s output groups. Quantity: [1, 10]
     * @param array $AudioTemplates Audio transcoding templates. Quantity: [1, 20]
     * @param array $VideoTemplates Video transcoding templates. Quantity: [1, 10]
     * @param array $AVTemplates Audio/Video transcoding templates. Quantity: [1, 10]
     * @param PlanSettings $PlanSettings Event settings
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AttachedInputs",$param) and $param["AttachedInputs"] !== null) {
            $this->AttachedInputs = [];
            foreach ($param["AttachedInputs"] as $key => $value){
                $obj = new AttachedInput();
                $obj->deserialize($value);
                array_push($this->AttachedInputs, $obj);
            }
        }

        if (array_key_exists("OutputGroups",$param) and $param["OutputGroups"] !== null) {
            $this->OutputGroups = [];
            foreach ($param["OutputGroups"] as $key => $value){
                $obj = new StreamLiveOutputGroupsInfo();
                $obj->deserialize($value);
                array_push($this->OutputGroups, $obj);
            }
        }

        if (array_key_exists("AudioTemplates",$param) and $param["AudioTemplates"] !== null) {
            $this->AudioTemplates = [];
            foreach ($param["AudioTemplates"] as $key => $value){
                $obj = new AudioTemplateInfo();
                $obj->deserialize($value);
                array_push($this->AudioTemplates, $obj);
            }
        }

        if (array_key_exists("VideoTemplates",$param) and $param["VideoTemplates"] !== null) {
            $this->VideoTemplates = [];
            foreach ($param["VideoTemplates"] as $key => $value){
                $obj = new VideoTemplateInfo();
                $obj->deserialize($value);
                array_push($this->VideoTemplates, $obj);
            }
        }

        if (array_key_exists("AVTemplates",$param) and $param["AVTemplates"] !== null) {
            $this->AVTemplates = [];
            foreach ($param["AVTemplates"] as $key => $value){
                $obj = new AVTemplate();
                $obj->deserialize($value);
                array_push($this->AVTemplates, $obj);
            }
        }

        if (array_key_exists("PlanSettings",$param) and $param["PlanSettings"] !== null) {
            $this->PlanSettings = new PlanSettings();
            $this->PlanSettings->deserialize($param["PlanSettings"]);
        }
    }
}
