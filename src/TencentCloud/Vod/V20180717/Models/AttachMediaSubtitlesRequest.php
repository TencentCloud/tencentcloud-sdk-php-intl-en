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
 * AttachMediaSubtitles request structure.
 *
 * @method string getFileId() Obtain Unique identifier of a media file.
 * @method void setFileId(string $FileId) Set Unique identifier of a media file.
 * @method string getOperation() Obtain Operation. Values as follows:
<li>Attach: Associate subtitles.</li>
<li>Detach: Remove associated subtitles.</li>
 * @method void setOperation(string $Operation) Set Operation. Values as follows:
<li>Attach: Associate subtitles.</li>
<li>Detach: Remove associated subtitles.</li>
 * @method integer getAdaptiveDynamicStreamingDefinition() Obtain [Adaptive bitrate streaming template ID](https://www.tencentcloud.com/document/product/266/34071?from_cn_redirect=1#zsy).
 * @method void setAdaptiveDynamicStreamingDefinition(integer $AdaptiveDynamicStreamingDefinition) Set [Adaptive bitrate streaming template ID](https://www.tencentcloud.com/document/product/266/34071?from_cn_redirect=1#zsy).
 * @method array getSubtitleIds() Obtain Unique identifier of the subtitle.
 * @method void setSubtitleIds(array $SubtitleIds) Set Unique identifier of the subtitle.
 * @method string getDefaultSubtitleId() Obtain Unique identifier for default subtitle. Leave empty to not set default subtitle.
 * @method void setDefaultSubtitleId(string $DefaultSubtitleId) Set Unique identifier for default subtitle. Leave empty to not set default subtitle.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 */
class AttachMediaSubtitlesRequest extends AbstractModel
{
    /**
     * @var string Unique identifier of a media file.
     */
    public $FileId;

    /**
     * @var string Operation. Values as follows:
<li>Attach: Associate subtitles.</li>
<li>Detach: Remove associated subtitles.</li>
     */
    public $Operation;

    /**
     * @var integer [Adaptive bitrate streaming template ID](https://www.tencentcloud.com/document/product/266/34071?from_cn_redirect=1#zsy).
     */
    public $AdaptiveDynamicStreamingDefinition;

    /**
     * @var array Unique identifier of the subtitle.
     */
    public $SubtitleIds;

    /**
     * @var string Unique identifier for default subtitle. Leave empty to not set default subtitle.
     */
    public $DefaultSubtitleId;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @param string $FileId Unique identifier of a media file.
     * @param string $Operation Operation. Values as follows:
<li>Attach: Associate subtitles.</li>
<li>Detach: Remove associated subtitles.</li>
     * @param integer $AdaptiveDynamicStreamingDefinition [Adaptive bitrate streaming template ID](https://www.tencentcloud.com/document/product/266/34071?from_cn_redirect=1#zsy).
     * @param array $SubtitleIds Unique identifier of the subtitle.
     * @param string $DefaultSubtitleId Unique identifier for default subtitle. Leave empty to not set default subtitle.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
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

        if (array_key_exists("DefaultSubtitleId",$param) and $param["DefaultSubtitleId"] !== null) {
            $this->DefaultSubtitleId = $param["DefaultSubtitleId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
