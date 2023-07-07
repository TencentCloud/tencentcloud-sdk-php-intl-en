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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApp request structure.
 *
 * @method string getAppName() Obtain Application name
 * @method void setAppName(string $AppName) Set Application name
 * @method integer getProjectId() Obtain Tencent Cloud project ID. Default value: 0, which means that the default project is used.
 * @method void setProjectId(integer $ProjectId) Set Tencent Cloud project ID. Default value: 0, which means that the default project is used.
 * @method array getEngineList() Obtain List of engines to be supported.
Valid values: `android`, `ios`, `unity`, `cocos`, `unreal`, `windows`. All values are selected by default.
 * @method void setEngineList(array $EngineList) Set List of engines to be supported.
Valid values: `android`, `ios`, `unity`, `cocos`, `unreal`, `windows`. All values are selected by default.
 * @method array getRegionList() Obtain List of regions.
Valid values: `mainland` (Chinese mainland), `hmt` (Hong Kong, Macao and Taiwan (China)), `sea` (Southeast Asia), `na` (North America), `eu` (Europe), `jpkr` (Japan, Korea and Asia Pacific), `sa` (South America), `oc` (Oceania), `me` (Middle East). All values are selected by default.
 * @method void setRegionList(array $RegionList) Set List of regions.
Valid values: `mainland` (Chinese mainland), `hmt` (Hong Kong, Macao and Taiwan (China)), `sea` (Southeast Asia), `na` (North America), `eu` (Europe), `jpkr` (Japan, Korea and Asia Pacific), `sa` (South America), `oc` (Oceania), `me` (Middle East). All values are selected by default.
 * @method RealtimeSpeechConf getRealtimeSpeechConf() Obtain Configuration information of Voice Chat
 * @method void setRealtimeSpeechConf(RealtimeSpeechConf $RealtimeSpeechConf) Set Configuration information of Voice Chat
 * @method VoiceMessageConf getVoiceMessageConf() Obtain Configuration information of Voice Messaging
 * @method void setVoiceMessageConf(VoiceMessageConf $VoiceMessageConf) Set Configuration information of Voice Messaging
 * @method VoiceFilterConf getVoiceFilterConf() Obtain Configuration information of Voice Analysis Service
 * @method void setVoiceFilterConf(VoiceFilterConf $VoiceFilterConf) Set Configuration information of Voice Analysis Service
 * @method AsrConf getAsrConf() Obtain Configuration information of Speech-to-Text
 * @method void setAsrConf(AsrConf $AsrConf) Set Configuration information of Speech-to-Text
 * @method array getTags() Obtain List of tags to be added
 * @method void setTags(array $Tags) Set List of tags to be added
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $AppName;

    /**
     * @var integer Tencent Cloud project ID. Default value: 0, which means that the default project is used.
     */
    public $ProjectId;

    /**
     * @var array List of engines to be supported.
Valid values: `android`, `ios`, `unity`, `cocos`, `unreal`, `windows`. All values are selected by default.
     */
    public $EngineList;

    /**
     * @var array List of regions.
Valid values: `mainland` (Chinese mainland), `hmt` (Hong Kong, Macao and Taiwan (China)), `sea` (Southeast Asia), `na` (North America), `eu` (Europe), `jpkr` (Japan, Korea and Asia Pacific), `sa` (South America), `oc` (Oceania), `me` (Middle East). All values are selected by default.
     */
    public $RegionList;

    /**
     * @var RealtimeSpeechConf Configuration information of Voice Chat
     */
    public $RealtimeSpeechConf;

    /**
     * @var VoiceMessageConf Configuration information of Voice Messaging
     */
    public $VoiceMessageConf;

    /**
     * @var VoiceFilterConf Configuration information of Voice Analysis Service
     */
    public $VoiceFilterConf;

    /**
     * @var AsrConf Configuration information of Speech-to-Text
     */
    public $AsrConf;

    /**
     * @var array List of tags to be added
     */
    public $Tags;

    /**
     * @param string $AppName Application name
     * @param integer $ProjectId Tencent Cloud project ID. Default value: 0, which means that the default project is used.
     * @param array $EngineList List of engines to be supported.
Valid values: `android`, `ios`, `unity`, `cocos`, `unreal`, `windows`. All values are selected by default.
     * @param array $RegionList List of regions.
Valid values: `mainland` (Chinese mainland), `hmt` (Hong Kong, Macao and Taiwan (China)), `sea` (Southeast Asia), `na` (North America), `eu` (Europe), `jpkr` (Japan, Korea and Asia Pacific), `sa` (South America), `oc` (Oceania), `me` (Middle East). All values are selected by default.
     * @param RealtimeSpeechConf $RealtimeSpeechConf Configuration information of Voice Chat
     * @param VoiceMessageConf $VoiceMessageConf Configuration information of Voice Messaging
     * @param VoiceFilterConf $VoiceFilterConf Configuration information of Voice Analysis Service
     * @param AsrConf $AsrConf Configuration information of Speech-to-Text
     * @param array $Tags List of tags to be added
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("EngineList",$param) and $param["EngineList"] !== null) {
            $this->EngineList = $param["EngineList"];
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("RealtimeSpeechConf",$param) and $param["RealtimeSpeechConf"] !== null) {
            $this->RealtimeSpeechConf = new RealtimeSpeechConf();
            $this->RealtimeSpeechConf->deserialize($param["RealtimeSpeechConf"]);
        }

        if (array_key_exists("VoiceMessageConf",$param) and $param["VoiceMessageConf"] !== null) {
            $this->VoiceMessageConf = new VoiceMessageConf();
            $this->VoiceMessageConf->deserialize($param["VoiceMessageConf"]);
        }

        if (array_key_exists("VoiceFilterConf",$param) and $param["VoiceFilterConf"] !== null) {
            $this->VoiceFilterConf = new VoiceFilterConf();
            $this->VoiceFilterConf->deserialize($param["VoiceFilterConf"]);
        }

        if (array_key_exists("AsrConf",$param) and $param["AsrConf"] !== null) {
            $this->AsrConf = new AsrConf();
            $this->AsrConf->deserialize($param["AsrConf"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
