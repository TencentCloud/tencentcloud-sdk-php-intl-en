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
 * CreateApp output parameters
 *
 * @method integer getBizId() Obtain Application ID, which is automatically generated by the backend.
 * @method void setBizId(integer $BizId) Set Application ID, which is automatically generated by the backend.
 * @method string getAppName() Obtain Application name, which is passed through from the `AppName` input parameter
 * @method void setAppName(string $AppName) Set Application name, which is passed through from the `AppName` input parameter
 * @method integer getProjectId() Obtain Project ID, which is passed through from the entered `ProjectId`
 * @method void setProjectId(integer $ProjectId) Set Project ID, which is passed through from the entered `ProjectId`
 * @method string getSecretKey() Obtain Application key, which is used when the GME SDK is initialized
 * @method void setSecretKey(string $SecretKey) Set Application key, which is used when the GME SDK is initialized
 * @method integer getCreateTime() Obtain Service creation timestamp
 * @method void setCreateTime(integer $CreateTime) Set Service creation timestamp
 * @method RealtimeSpeechConf getRealtimeSpeechConf() Obtain Configuration information of voice chat
 * @method void setRealtimeSpeechConf(RealtimeSpeechConf $RealtimeSpeechConf) Set Configuration information of voice chat
 * @method VoiceMessageConf getVoiceMessageConf() Obtain Configuration information of voice messaging and speech-to-text
 * @method void setVoiceMessageConf(VoiceMessageConf $VoiceMessageConf) Set Configuration information of voice messaging and speech-to-text
 * @method VoiceFilterConf getVoiceFilterConf() Obtain Configuration information of phrase analysis
 * @method void setVoiceFilterConf(VoiceFilterConf $VoiceFilterConf) Set Configuration information of phrase analysis
 */
class CreateAppResponse extends AbstractModel
{
    /**
     * @var integer Application ID, which is automatically generated by the backend.
     */
    public $BizId;

    /**
     * @var string Application name, which is passed through from the `AppName` input parameter
     */
    public $AppName;

    /**
     * @var integer Project ID, which is passed through from the entered `ProjectId`
     */
    public $ProjectId;

    /**
     * @var string Application key, which is used when the GME SDK is initialized
     */
    public $SecretKey;

    /**
     * @var integer Service creation timestamp
     */
    public $CreateTime;

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
     * @param integer $BizId Application ID, which is automatically generated by the backend.
     * @param string $AppName Application name, which is passed through from the `AppName` input parameter
     * @param integer $ProjectId Project ID, which is passed through from the entered `ProjectId`
     * @param string $SecretKey Application key, which is used when the GME SDK is initialized
     * @param integer $CreateTime Service creation timestamp
     * @param RealtimeSpeechConf $RealtimeSpeechConf Configuration information of voice chat
     * @param VoiceMessageConf $VoiceMessageConf Configuration information of voice messaging and speech-to-text
     * @param VoiceFilterConf $VoiceFilterConf Configuration information of phrase analysis
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
        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
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
    }
}
