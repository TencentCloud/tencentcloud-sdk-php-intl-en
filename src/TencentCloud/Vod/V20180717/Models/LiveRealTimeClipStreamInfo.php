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
 * The information of the live stream to clip.
 *
 * @method string getType() Obtain The type of live stream to clip. Valid values:
<li>Original (<b>default</b>)</li>
<li>Transcoding</li>
 * @method void setType(string $Type) Set The type of live stream to clip. Valid values:
<li>Original (<b>default</b>)</li>
<li>Transcoding</li>
 * @method integer getTemplateId() Obtain The transcoding template ID.
<b>This is required if `Type` is `Transcoding`.</b>
 * @method void setTemplateId(integer $TemplateId) Set The transcoding template ID.
<b>This is required if `Type` is `Transcoding`.</b>
 */
class LiveRealTimeClipStreamInfo extends AbstractModel
{
    /**
     * @var string The type of live stream to clip. Valid values:
<li>Original (<b>default</b>)</li>
<li>Transcoding</li>
     */
    public $Type;

    /**
     * @var integer The transcoding template ID.
<b>This is required if `Type` is `Transcoding`.</b>
     */
    public $TemplateId;

    /**
     * @param string $Type The type of live stream to clip. Valid values:
<li>Original (<b>default</b>)</li>
<li>Transcoding</li>
     * @param integer $TemplateId The transcoding template ID.
<b>This is required if `Type` is `Transcoding`.</b>
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
