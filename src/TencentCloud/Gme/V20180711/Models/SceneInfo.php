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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scenario information. Valid values:
`RealTime`: Voice Chat analysis;
`VoiceMessage`: Voice Messaging;
`GMECloudApi`: GME cloud APIs
 *
 * @method string getSceneId() Obtain 
 * @method void setSceneId(string $SceneId) Set 
 * @method boolean getStatus() Obtain 
 * @method void setStatus(boolean $Status) Set 
 * @method string getCallbackUrl() Obtain 
 * @method void setCallbackUrl(string $CallbackUrl) Set 
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $SceneId;

    /**
     * @var boolean 
     */
    public $Status;

    /**
     * @var string 
     */
    public $CallbackUrl;

    /**
     * @param string $SceneId 
     * @param boolean $Status 
     * @param string $CallbackUrl 
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
