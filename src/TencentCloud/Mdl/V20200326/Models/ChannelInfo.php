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
 * Channel information.
 *
 * @method string getId() Obtain Channel ID.
 * @method void setId(string $Id) Set Channel ID.
 * @method string getState() Obtain Channel status.
 * @method void setState(string $State) Set Channel status.
 * @method array getAttachedInputs() Obtain Information of associated input.
 * @method void setAttachedInputs(array $AttachedInputs) Set Information of associated input.
 * @method array getOutputGroups() Obtain Information of output group.
 * @method void setOutputGroups(array $OutputGroups) Set Information of output group.
 * @method string getName() Obtain Channel name.
 * @method void setName(string $Name) Set Channel name.
 * @method array getAudioTemplates() Obtain Audio transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getVideoTemplates() Obtain Video transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ChannelInfo extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $Id;

    /**
     * @var string Channel status.
     */
    public $State;

    /**
     * @var array Information of associated input.
     */
    public $AttachedInputs;

    /**
     * @var array Information of output group.
     */
    public $OutputGroups;

    /**
     * @var string Channel name.
     */
    public $Name;

    /**
     * @var array Audio transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VideoTemplates;

    /**
     * @param string $Id Channel ID.
     * @param string $State Channel status.
     * @param array $AttachedInputs Information of associated input.
     * @param array $OutputGroups Information of output group.
     * @param string $Name Channel name.
     * @param array $AudioTemplates Audio transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $VideoTemplates Video transcoding template array.
Note: this field may return null, indicating that no valid values can be obtained.
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
                $obj = new AttachedInputInfo();
                $obj->deserialize($value);
                array_push($this->AttachedInputs, $obj);
            }
        }

        if (array_key_exists("OutputGroups",$param) and $param["OutputGroups"] !== null) {
            $this->OutputGroups = [];
            foreach ($param["OutputGroups"] as $key => $value){
                $obj = new OutputGroupsInfo();
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
    }
}
