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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PlaySoundCall request structure.
 *
 * @method integer getSdkAppId() Obtain App ID (required). you can view it at https://console.cloud.tencent.com/ccc.
 * @method void setSdkAppId(integer $SdkAppId) Set App ID (required). you can view it at https://console.cloud.tencent.com/ccc.
 * @method string getSessionId() Obtain Session ID.
 * @method void setSessionId(string $SessionId) Set Session ID.
 * @method integer getFileId() Obtain Audio file ID. please refer to the management console - telephone customer service - audio file management.
 * @method void setFileId(integer $FileId) Set Audio file ID. please refer to the management console - telephone customer service - audio file management.
 * @method integer getPlayTimes() Obtain Number of playbacks. default 1.
 * @method void setPlayTimes(integer $PlayTimes) Set Number of playbacks. default 1.
 */
class PlaySoundCallRequest extends AbstractModel
{
    /**
     * @var integer App ID (required). you can view it at https://console.cloud.tencent.com/ccc.
     */
    public $SdkAppId;

    /**
     * @var string Session ID.
     */
    public $SessionId;

    /**
     * @var integer Audio file ID. please refer to the management console - telephone customer service - audio file management.
     */
    public $FileId;

    /**
     * @var integer Number of playbacks. default 1.
     */
    public $PlayTimes;

    /**
     * @param integer $SdkAppId App ID (required). you can view it at https://console.cloud.tencent.com/ccc.
     * @param string $SessionId Session ID.
     * @param integer $FileId Audio file ID. please refer to the management console - telephone customer service - audio file management.
     * @param integer $PlayTimes Number of playbacks. default 1.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }
    }
}
