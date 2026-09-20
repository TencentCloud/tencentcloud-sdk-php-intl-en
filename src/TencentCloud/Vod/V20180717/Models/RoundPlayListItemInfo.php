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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Program information for carousel playback
 *
 * @method string getFileId() Obtain Media file identifier.
 * @method void setFileId(string $FileId) Set Media file identifier.
 * @method string getAudioVideoType() Obtain Played audio and video type. Available values:
<li>Transcode: transcoding output. There will be multiple templates for transcoding output, and the Definition field must be specified.</li>
<li>Original: original audio/video.</li>
The format of Type must be HLS format.
 * @method void setAudioVideoType(string $AudioVideoType) Set Played audio and video type. Available values:
<li>Transcode: transcoding output. There will be multiple templates for transcoding output, and the Definition field must be specified.</li>
<li>Original: original audio/video.</li>
The format of Type must be HLS format.
 * @method string getItemId() Obtain Program ID assigned by the system.
 * @method void setItemId(string $ItemId) Set Program ID assigned by the system.
 * @method integer getDefinition() Obtain Specify the transcoding template for playback. This parameter is required when AudioVideoType is Transcode.
 * @method void setDefinition(integer $Definition) Set Specify the transcoding template for playback. This parameter is required when AudioVideoType is Transcode.
 */
class RoundPlayListItemInfo extends AbstractModel
{
    /**
     * @var string Media file identifier.
     */
    public $FileId;

    /**
     * @var string Played audio and video type. Available values:
<li>Transcode: transcoding output. There will be multiple templates for transcoding output, and the Definition field must be specified.</li>
<li>Original: original audio/video.</li>
The format of Type must be HLS format.
     */
    public $AudioVideoType;

    /**
     * @var string Program ID assigned by the system.
     */
    public $ItemId;

    /**
     * @var integer Specify the transcoding template for playback. This parameter is required when AudioVideoType is Transcode.
     */
    public $Definition;

    /**
     * @param string $FileId Media file identifier.
     * @param string $AudioVideoType Played audio and video type. Available values:
<li>Transcode: transcoding output. There will be multiple templates for transcoding output, and the Definition field must be specified.</li>
<li>Original: original audio/video.</li>
The format of Type must be HLS format.
     * @param string $ItemId Program ID assigned by the system.
     * @param integer $Definition Specify the transcoding template for playback. This parameter is required when AudioVideoType is Transcode.
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("AudioVideoType",$param) and $param["AudioVideoType"] !== null) {
            $this->AudioVideoType = $param["AudioVideoType"];
        }

        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
