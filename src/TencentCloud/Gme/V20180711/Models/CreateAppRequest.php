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
 * @method string getAppName() 获取Application name
 * @method void setAppName(string $AppName) 设置Application name
 * @method integer getProjectId() 获取Tencent Cloud project ID. Default value: 0, which means that the default project is used
 * @method void setProjectId(integer $ProjectId) 设置Tencent Cloud project ID. Default value: 0, which means that the default project is used
 * @method array getEngineList() 获取List of engines to be supported. Valid values: android, ios, unity, cocos, unreal, windows. All values are selected by default.
 * @method void setEngineList(array $EngineList) 设置List of engines to be supported. Valid values: android, ios, unity, cocos, unreal, windows. All values are selected by default.
 * @method array getRegionList() 获取List of service regions. Valid values: mainland (Mainland China), sa (South America), eu (Europe), oc (Australia), me (Middle East). All values are selected by default.
 * @method void setRegionList(array $RegionList) 设置List of service regions. Valid values: mainland (Mainland China), sa (South America), eu (Europe), oc (Australia), me (Middle East). All values are selected by default.
 * @method RealtimeSpeechConf getRealtimeSpeechConf() 获取Configuration information of voice chat
 * @method void setRealtimeSpeechConf(RealtimeSpeechConf $RealtimeSpeechConf) 设置Configuration information of voice chat
 * @method VoiceMessageConf getVoiceMessageConf() 获取Configuration information of voice messaging and speech-to-text
 * @method void setVoiceMessageConf(VoiceMessageConf $VoiceMessageConf) 设置Configuration information of voice messaging and speech-to-text
 * @method VoiceFilterConf getVoiceFilterConf() 获取Configuration information of phrase analysis
 * @method void setVoiceFilterConf(VoiceFilterConf $VoiceFilterConf) 设置Configuration information of phrase analysis
 * @method array getTags() 获取List of tags to be added
 * @method void setTags(array $Tags) 设置List of tags to be added
 */

/**
 *CreateApp request structure.
 */
class CreateAppRequest extends AbstractModel
{
    /**
     * @var string Application name
     */
    public $AppName;

    /**
     * @var integer Tencent Cloud project ID. Default value: 0, which means that the default project is used
     */
    public $ProjectId;

    /**
     * @var array List of engines to be supported. Valid values: android, ios, unity, cocos, unreal, windows. All values are selected by default.
     */
    public $EngineList;

    /**
     * @var array List of service regions. Valid values: mainland (Mainland China), sa (South America), eu (Europe), oc (Australia), me (Middle East). All values are selected by default.
     */
    public $RegionList;

    /**
     * @var RealtimeSpeechConf Configuration information of voice chat
     */
    public $RealtimeSpeechConf;

    /**
     * @var VoiceMessageConf Configuration information of voice messaging and speech-to-text
     */
    public $VoiceMessageConf;

    /**
     * @var VoiceFilterConf Configuration information of phrase analysis
     */
    public $VoiceFilterConf;

    /**
     * @var array List of tags to be added
     */
    public $Tags;
    /**
     * @param string $AppName Application name
     * @param integer $ProjectId Tencent Cloud project ID. Default value: 0, which means that the default project is used
     * @param array $EngineList List of engines to be supported. Valid values: android, ios, unity, cocos, unreal, windows. All values are selected by default.
     * @param array $RegionList List of service regions. Valid values: mainland (Mainland China), sa (South America), eu (Europe), oc (Australia), me (Middle East). All values are selected by default.
     * @param RealtimeSpeechConf $RealtimeSpeechConf Configuration information of voice chat
     * @param VoiceMessageConf $VoiceMessageConf Configuration information of voice messaging and speech-to-text
     * @param VoiceFilterConf $VoiceFilterConf Configuration information of phrase analysis
     * @param array $Tags List of tags to be added
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
