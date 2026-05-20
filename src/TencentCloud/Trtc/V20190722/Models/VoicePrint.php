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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Voiceprint configuration parameters.
 *
 * @method integer getMode() Obtain The default is 0, which means voiceprint is not enabled. 1 means voiceprint is enabled, at which point you need to fill in the voiceprint id.
 * @method void setMode(integer $Mode) Set The default is 0, which means voiceprint is not enabled. 1 means voiceprint is enabled, at which point you need to fill in the voiceprint id.
 * @method array getIdList() Obtain VoicePrint Mode requires filling in when set to 1. currently only support a VoicePrint id.
 * @method void setIdList(array $IdList) Set VoicePrint Mode requires filling in when set to 1. currently only support a VoicePrint id.
 */
class VoicePrint extends AbstractModel
{
    /**
     * @var integer The default is 0, which means voiceprint is not enabled. 1 means voiceprint is enabled, at which point you need to fill in the voiceprint id.
     */
    public $Mode;

    /**
     * @var array VoicePrint Mode requires filling in when set to 1. currently only support a VoicePrint id.
     */
    public $IdList;

    /**
     * @param integer $Mode The default is 0, which means voiceprint is not enabled. 1 means voiceprint is enabled, at which point you need to fill in the voiceprint id.
     * @param array $IdList VoicePrint Mode requires filling in when set to 1. currently only support a VoicePrint id.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
