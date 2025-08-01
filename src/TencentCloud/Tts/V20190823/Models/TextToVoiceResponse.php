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
namespace TencentCloud\Tts\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextToVoice response structure.
 *
 * @method string getAudio() Obtain Base64-encoded WAV/MP3 audio data
 * @method void setAudio(string $Audio) Set Base64-encoded WAV/MP3 audio data
 * @method string getSessionId() Obtain The `SessionId` of a request
 * @method void setSessionId(string $SessionId) Set The `SessionId` of a request
 * @method array getSubtitles() Obtain Timestamp information. If the timestamp feature is not enabled, an empty array will be returned.
 * @method void setSubtitles(array $Subtitles) Set Timestamp information. If the timestamp feature is not enabled, an empty array will be returned.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class TextToVoiceResponse extends AbstractModel
{
    /**
     * @var string Base64-encoded WAV/MP3 audio data
     */
    public $Audio;

    /**
     * @var string The `SessionId` of a request
     */
    public $SessionId;

    /**
     * @var array Timestamp information. If the timestamp feature is not enabled, an empty array will be returned.
     */
    public $Subtitles;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Audio Base64-encoded WAV/MP3 audio data
     * @param string $SessionId The `SessionId` of a request
     * @param array $Subtitles Timestamp information. If the timestamp feature is not enabled, an empty array will be returned.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Audio",$param) and $param["Audio"] !== null) {
            $this->Audio = $param["Audio"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Subtitles",$param) and $param["Subtitles"] !== null) {
            $this->Subtitles = [];
            foreach ($param["Subtitles"] as $key => $value){
                $obj = new Subtitle();
                $obj->deserialize($value);
                array_push($this->Subtitles, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
