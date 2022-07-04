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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The audio parameters for relaying.
 *
 * @method AudioEncode getAudioEncode() Obtain The audio encoding parameters.
 * @method void setAudioEncode(AudioEncode $AudioEncode) Set The audio encoding parameters.
 * @method array getSubscribeAudioList() Obtain The users whose audios are mixed. For the `StartPublishCdnStream` API, if you do not pass this parameter or leave it empty, the audios of all anchors will be mixed. For the `UpdatePublishCdnStream` API, if you do not pass this parameter, TRTC will not change the users whose audios are mixed; if you pass in an empty string, the audios of all anchors will be mixed.
 * @method void setSubscribeAudioList(array $SubscribeAudioList) Set The users whose audios are mixed. For the `StartPublishCdnStream` API, if you do not pass this parameter or leave it empty, the audios of all anchors will be mixed. For the `UpdatePublishCdnStream` API, if you do not pass this parameter, TRTC will not change the users whose audios are mixed; if you pass in an empty string, the audios of all anchors will be mixed.
 */
class McuAudioParams extends AbstractModel
{
    /**
     * @var AudioEncode The audio encoding parameters.
     */
    public $AudioEncode;

    /**
     * @var array The users whose audios are mixed. For the `StartPublishCdnStream` API, if you do not pass this parameter or leave it empty, the audios of all anchors will be mixed. For the `UpdatePublishCdnStream` API, if you do not pass this parameter, TRTC will not change the users whose audios are mixed; if you pass in an empty string, the audios of all anchors will be mixed.
     */
    public $SubscribeAudioList;

    /**
     * @param AudioEncode $AudioEncode The audio encoding parameters.
     * @param array $SubscribeAudioList The users whose audios are mixed. For the `StartPublishCdnStream` API, if you do not pass this parameter or leave it empty, the audios of all anchors will be mixed. For the `UpdatePublishCdnStream` API, if you do not pass this parameter, TRTC will not change the users whose audios are mixed; if you pass in an empty string, the audios of all anchors will be mixed.
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
        if (array_key_exists("AudioEncode",$param) and $param["AudioEncode"] !== null) {
            $this->AudioEncode = new AudioEncode();
            $this->AudioEncode->deserialize($param["AudioEncode"]);
        }

        if (array_key_exists("SubscribeAudioList",$param) and $param["SubscribeAudioList"] !== null) {
            $this->SubscribeAudioList = [];
            foreach ($param["SubscribeAudioList"] as $key => $value){
                $obj = new McuUserInfoParams();
                $obj->deserialize($value);
                array_push($this->SubscribeAudioList, $obj);
            }
        }
    }
}
