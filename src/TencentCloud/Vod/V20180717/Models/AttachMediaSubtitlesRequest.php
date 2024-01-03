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
 * AttachMediaSubtitles request structure.
 *
 * @method string getFileId() Obtain Unique ID of the media file
 * @method void setFileId(string $FileId) Set Unique ID of the media file
 * @method string getOperation() Obtain Operation. Valid values:
<li>`Attach`: associates subtitles.</li>
<li>`Detach`: disassociates subtitles.</li>
 * @method void setOperation(string $Operation) Set Operation. Valid values:
<li>`Attach`: associates subtitles.</li>
<li>`Detach`: disassociates subtitles.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain [Adaptive bitrate streaming template ID](https://intl.cloud.tencent.com/document/product/266/34071?from_cn_redirect=1#zsy)
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set [Adaptive bitrate streaming template ID](https://intl.cloud.tencent.com/document/product/266/34071?from_cn_redirect=1#zsy)
 * @method array getSubtitleIds() Obtain Unique IDs of the subtitles
 * @method void setSubtitleIds(array $SubtitleIds) Set Unique IDs of the subtitles
 * @method integer getSubAppId() Obtain <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
 */
class AttachMediaSubtitlesRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the media file
     */
    public $FileId;

    /**
     * @var string Operation. Valid values:
<li>`Attach`: associates subtitles.</li>
<li>`Detach`: disassociates subtitles.</li>
     */
    public $Operation;

    /**
     * @var integer [Adaptive bitrate streaming template ID](https://intl.cloud.tencent.com/document/product/266/34071?from_cn_redirect=1#zsy)
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var array Unique IDs of the subtitles
     */
    public $SubtitleIds;

    /**
     * @var integer <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
     */
    public $SubAppId;

    /**
     * @param string $FileId Unique ID of the media file
     * @param string $Operation Operation. Valid values:
<li>`Attach`: associates subtitles.</li>
<li>`Detach`: disassociates subtitles.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition [Adaptive bitrate streaming template ID](https://intl.cloud.tencent.com/document/product/266/34071?from_cn_redirect=1#zsy)
     * @param array $SubtitleIds Unique IDs of the subtitles
     * @param integer $SubAppId <b>The VOD [application](https://intl.cloud.tencent.com/document/product/266/14574) ID. For customers who activate VOD service from December 25, 2023, if they want to access resources in a VOD application (whether it's the default application or a newly created one), they must fill in this field with the application ID.</b>
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("AdaptiveDynamicStreamingDefinition",$param) and $param["AdaptiveDynamicStreamingDefinition"] !== null) {
            $this->AdaptiveDynamicStreamingDefinition = $param["AdaptiveDynamicStreamingDefinition"];
        }

        if (array_key_exists("SubtitleIds",$param) and $param["SubtitleIds"] !== null) {
            $this->SubtitleIds = $param["SubtitleIds"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
