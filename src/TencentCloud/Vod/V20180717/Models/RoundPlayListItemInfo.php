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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Carousel program information
 *
 * @method string getFileId() Obtain The file ID.
 * @method void setFileId(string $FileId) Set The file ID.
 * @method string getAudioVideoType() Obtain The type of the media played. Valid values:
<li>`Transcode`: A transcoding output. Because a file may be bound to multiple transcoding templates, you need to specify `Definition` if the type is `Transcode`.</li>
<li>`Original`: The original file.</li>
The file must be in HLS format.
 * @method void setAudioVideoType(string $AudioVideoType) Set The type of the media played. Valid values:
<li>`Transcode`: A transcoding output. Because a file may be bound to multiple transcoding templates, you need to specify `Definition` if the type is `Transcode`.</li>
<li>`Original`: The original file.</li>
The file must be in HLS format.
 * @method string getItemId() Obtain ID of the program to be played, assigned by the system.
 * @method void setItemId(string $ItemId) Set ID of the program to be played, assigned by the system.
 * @method integer getDefinition() Obtain The transcoding template to be played is specified. this parameter is required if `audiovideotype` is `transcode`.
 * @method void setDefinition(integer $Definition) Set The transcoding template to be played is specified. this parameter is required if `audiovideotype` is `transcode`.
 */
class RoundPlayListItemInfo extends AbstractModel
{
    /**
     * @var string The file ID.
     */
    public $FileId;

    /**
     * @var string The type of the media played. Valid values:
<li>`Transcode`: A transcoding output. Because a file may be bound to multiple transcoding templates, you need to specify `Definition` if the type is `Transcode`.</li>
<li>`Original`: The original file.</li>
The file must be in HLS format.
     */
    public $AudioVideoType;

    /**
     * @var string ID of the program to be played, assigned by the system.
     */
    public $ItemId;

    /**
     * @var integer The transcoding template to be played is specified. this parameter is required if `audiovideotype` is `transcode`.
     */
    public $Definition;

    /**
     * @param string $FileId The file ID.
     * @param string $AudioVideoType The type of the media played. Valid values:
<li>`Transcode`: A transcoding output. Because a file may be bound to multiple transcoding templates, you need to specify `Definition` if the type is `Transcode`.</li>
<li>`Original`: The original file.</li>
The file must be in HLS format.
     * @param string $ItemId ID of the program to be played, assigned by the system.
     * @param integer $Definition The transcoding template to be played is specified. this parameter is required if `audiovideotype` is `transcode`.
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
