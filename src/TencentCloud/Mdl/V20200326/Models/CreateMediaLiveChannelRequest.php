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
 * CreateMediaLiveChannel request structure.
 *
 * @method string getName() Obtain Channel name, which can contain 1–32 letters, digits, and underscores and must be unique at the region level.
 * @method void setName(string $Name) Set Channel name, which can contain 1–32 letters, digits, and underscores and must be unique at the region level.
 * @method array getAttachedInputs() Obtain Associated media input. Quantity limit: [1,1].
 * @method void setAttachedInputs(array $AttachedInputs) Set Associated media input. Quantity limit: [1,1].
 * @method array getOutputGroups() Obtain Configuration information of channel output groups. Quantity limit: [1,10].
 * @method void setOutputGroups(array $OutputGroups) Set Configuration information of channel output groups. Quantity limit: [1,10].
 * @method array getAudioTemplates() Obtain Audio transcoding template array. Quantity limit: [1,20].
 * @method void setAudioTemplates(array $AudioTemplates) Set Audio transcoding template array. Quantity limit: [1,20].
 * @method array getVideoTemplates() Obtain Video transcoding template array. Quantity limit: [1,10].
 * @method void setVideoTemplates(array $VideoTemplates) Set Video transcoding template array. Quantity limit: [1,10].
 */
class CreateMediaLiveChannelRequest extends AbstractModel
{
    /**
     * @var string Channel name, which can contain 1–32 letters, digits, and underscores and must be unique at the region level.
     */
    public $Name;

    /**
     * @var array Associated media input. Quantity limit: [1,1].
     */
    public $AttachedInputs;

    /**
     * @var array Configuration information of channel output groups. Quantity limit: [1,10].
     */
    public $OutputGroups;

    /**
     * @var array Audio transcoding template array. Quantity limit: [1,20].
     */
    public $AudioTemplates;

    /**
     * @var array Video transcoding template array. Quantity limit: [1,10].
     */
    public $VideoTemplates;

    /**
     * @param string $Name Channel name, which can contain 1–32 letters, digits, and underscores and must be unique at the region level.
     * @param array $AttachedInputs Associated media input. Quantity limit: [1,1].
     * @param array $OutputGroups Configuration information of channel output groups. Quantity limit: [1,10].
     * @param array $AudioTemplates Audio transcoding template array. Quantity limit: [1,20].
     * @param array $VideoTemplates Video transcoding template array. Quantity limit: [1,10].
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
