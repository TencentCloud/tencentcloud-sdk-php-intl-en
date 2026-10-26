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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoDownloadTask request structure.
 *
 * @method string getChannelId() Obtain Channel ID
 * @method void setChannelId(string $ChannelId) Set Channel ID
 * @method integer getBeginTime() Obtain Start time.
 * @method void setBeginTime(integer $BeginTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method integer getScale() Obtain Default: 1x. Supports 1x, 2x, 4x, and 8x playback speeds.
 * @method void setScale(integer $Scale) Set Default: 1x. Supports 1x, 2x, 4x, and 8x playback speeds.
 * @method integer getExpire() Obtain Expiration time of the transcoded mp4 file (7, 15, 30, 60, 90, 180, and 365 are supported)
 * @method void setExpire(integer $Expire) Set Expiration time of the transcoded mp4 file (7, 15, 30, 60, 90, 180, and 365 are supported)
 * @method integer getFileType() Obtain Download file format. Currently only supports (1: mp4)
 * @method void setFileType(integer $FileType) Set Download file format. Currently only supports (1: mp4)
 * @method integer getCompletionPolicy() Obtain Completion policy (0: The task fails and no MP4 is generated if the stream pull fails but the video recording is incomplete. 1: The task succeeds and an MP4 is generated if the stream pull fails but the video recording is incomplete.)
 * @method void setCompletionPolicy(integer $CompletionPolicy) Set Completion policy (0: The task fails and no MP4 is generated if the stream pull fails but the video recording is incomplete. 1: The task succeeds and an MP4 is generated if the stream pull fails but the video recording is incomplete.)
 */
class CreateVideoDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string Channel ID
     */
    public $ChannelId;

    /**
     * @var integer Start time.
     */
    public $BeginTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var integer Default: 1x. Supports 1x, 2x, 4x, and 8x playback speeds.
     */
    public $Scale;

    /**
     * @var integer Expiration time of the transcoded mp4 file (7, 15, 30, 60, 90, 180, and 365 are supported)
     */
    public $Expire;

    /**
     * @var integer Download file format. Currently only supports (1: mp4)
     */
    public $FileType;

    /**
     * @var integer Completion policy (0: The task fails and no MP4 is generated if the stream pull fails but the video recording is incomplete. 1: The task succeeds and an MP4 is generated if the stream pull fails but the video recording is incomplete.)
     */
    public $CompletionPolicy;

    /**
     * @param string $ChannelId Channel ID
     * @param integer $BeginTime Start time.
     * @param integer $EndTime End time.
     * @param integer $Scale Default: 1x. Supports 1x, 2x, 4x, and 8x playback speeds.
     * @param integer $Expire Expiration time of the transcoded mp4 file (7, 15, 30, 60, 90, 180, and 365 are supported)
     * @param integer $FileType Download file format. Currently only supports (1: mp4)
     * @param integer $CompletionPolicy Completion policy (0: The task fails and no MP4 is generated if the stream pull fails but the video recording is incomplete. 1: The task succeeds and an MP4 is generated if the stream pull fails but the video recording is incomplete.)
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("CompletionPolicy",$param) and $param["CompletionPolicy"] !== null) {
            $this->CompletionPolicy = $param["CompletionPolicy"];
        }
    }
}
