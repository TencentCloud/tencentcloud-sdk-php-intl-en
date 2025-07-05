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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Special FLV recording setting.
 *
 * @method boolean getUploadInRecording() Obtain Whether to enable upload while recording. This parameter is only valid for FLV recording.
 * @method void setUploadInRecording(boolean $UploadInRecording) Set Whether to enable upload while recording. This parameter is only valid for FLV recording.
 */
class FlvSpecialParam extends AbstractModel
{
    /**
     * @var boolean Whether to enable upload while recording. This parameter is only valid for FLV recording.
     */
    public $UploadInRecording;

    /**
     * @param boolean $UploadInRecording Whether to enable upload while recording. This parameter is only valid for FLV recording.
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
        if (array_key_exists("UploadInRecording",$param) and $param["UploadInRecording"] !== null) {
            $this->UploadInRecording = $param["UploadInRecording"];
        }
    }
}
