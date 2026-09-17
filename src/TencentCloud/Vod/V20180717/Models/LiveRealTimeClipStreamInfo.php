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
 * Live streaming Instant Editing stream information
 *
 * @method string getType() Obtain Live stream type. Valid values:
<li>Original (original stream, <b>default value</b>).</li>
<li>Transcoding (transcoding stream).</li>
 * @method void setType(string $Type) Set Live stream type. Valid values:
<li>Original (original stream, <b>default value</b>).</li>
<li>Transcoding (transcoding stream).</li>
 * @method integer getTemplateId() Obtain Live streaming transcoding template ID.
<b>Required when Type is "Transcoding".</b>
 * @method void setTemplateId(integer $TemplateId) Set Live streaming transcoding template ID.
<b>Required when Type is "Transcoding".</b>
 */
class LiveRealTimeClipStreamInfo extends AbstractModel
{
    /**
     * @var string Live stream type. Valid values:
<li>Original (original stream, <b>default value</b>).</li>
<li>Transcoding (transcoding stream).</li>
     */
    public $Type;

    /**
     * @var integer Live streaming transcoding template ID.
<b>Required when Type is "Transcoding".</b>
     */
    public $TemplateId;

    /**
     * @param string $Type Live stream type. Valid values:
<li>Original (original stream, <b>default value</b>).</li>
<li>Transcoding (transcoding stream).</li>
     * @param integer $TemplateId Live streaming transcoding template ID.
<b>Required when Type is "Transcoding".</b>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
