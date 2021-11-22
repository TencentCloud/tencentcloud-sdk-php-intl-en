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
 * Channel information
 *
 * @method string getId() Obtain Channel ID
 * @method void setId(string $Id) Set Channel ID
 * @method string getState() Obtain Channel status
 * @method void setState(string $State) Set Channel status
 * @method array getAttachedInputs() Obtain Information of attached inputs
 * @method void setAttachedInputs(array $AttachedInputs) Set Information of attached inputs
 * @method array getOutputGroups() Obtain Information of output groups
 * @method void setOutputGroups(array $OutputGroups) Set Information of output groups
 * @method string getName() Obtain Channel name
 * @method void setName(string $Name) Set Channel name
 * @method array getAudioTemplates() Obtain Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getVideoTemplates() Obtain Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getAVTemplates() Obtain Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setAVTemplates(array $AVTemplates) Set Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
 * @method PlanSettings getPlanSettings() Obtain Event settings
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setPlanSettings(PlanSettings $PlanSettings) Set Event settings
Note: This field may return `null`, indicating that no valid value was found.
 */
class StreamLiveChannelInfo extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $Id;

    /**
     * @var string Channel status
     */
    public $State;

    /**
     * @var array Information of attached inputs
     */
    public $AttachedInputs;

    /**
     * @var array Information of output groups
     */
    public $OutputGroups;

    /**
     * @var string Channel name
     */
    public $Name;

    /**
     * @var array Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $VideoTemplates;

    /**
     * @var array Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $AVTemplates;

    /**
     * @var PlanSettings Event settings
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $PlanSettings;

    /**
     * @param string $Id Channel ID
     * @param string $State Channel status
     * @param array $AttachedInputs Information of attached inputs
     * @param array $OutputGroups Information of output groups
     * @param string $Name Channel name
     * @param array $AudioTemplates Audio transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $VideoTemplates Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $AVTemplates Audio/Video transcoding templates
Note: this field may return `null`, indicating that no valid value was found.
     * @param PlanSettings $PlanSettings Event settings
Note: This field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
