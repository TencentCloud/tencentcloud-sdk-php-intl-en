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
 * Source file information
 *
 * @method string getSourceType() Obtain Source category of media file:
<li>Record: recording, such as LVB recording and LVB time shifting recording.</li>
<li>Upload: upload, such as pull for upload, upload from server, and UCG upload from client.</li>
<li>VideoProcessing: video processing, such as video splicing and video clipping.</li>
<li>Unknown: unknown source.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSourceType(string $SourceType) Set Source category of media file:
<li>Record: recording, such as LVB recording and LVB time shifting recording.</li>
<li>Upload: upload, such as pull for upload, upload from server, and UCG upload from client.</li>
<li>VideoProcessing: video processing, such as video splicing and video clipping.</li>
<li>Unknown: unknown source.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSourceContext() Obtain Field passed through when a file is created.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSourceContext(string $SourceContext) Set Field passed through when a file is created.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class MediaSourceData extends AbstractModel
{
    /**
     * @var string Source category of media file:
<li>Record: recording, such as LVB recording and LVB time shifting recording.</li>
<li>Upload: upload, such as pull for upload, upload from server, and UCG upload from client.</li>
<li>VideoProcessing: video processing, such as video splicing and video clipping.</li>
<li>Unknown: unknown source.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SourceType;

    /**
     * @var string Field passed through when a file is created.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SourceContext;

    /**
     * @param string $SourceType Source category of media file:
<li>Record: recording, such as LVB recording and LVB time shifting recording.</li>
<li>Upload: upload, such as pull for upload, upload from server, and UCG upload from client.</li>
<li>VideoProcessing: video processing, such as video splicing and video clipping.</li>
<li>Unknown: unknown source.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SourceContext Field passed through when a file is created.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }
    }
}
