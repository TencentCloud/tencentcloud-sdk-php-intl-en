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
 * Input file for the video dubbing task.
 *
 * @method string getInputUrl() Obtain <p>Input video Url</p>
 * @method void setInputUrl(string $InputUrl) Set <p>Input video Url</p>
 * @method string getInputFileId() Obtain <p>FileId of the input video</p>
 * @method void setInputFileId(string $InputFileId) Set <p>FileId of the input video</p>
 * @method string getSrcLanguage() Obtain <p>Video source language. The default value is zh.</p>
 * @method void setSrcLanguage(string $SrcLanguage) Set <p>Video source language. The default value is zh.</p>
 * @method string getDstLanguage() Obtain <p>Target language of the video. Default: en</p>
 * @method void setDstLanguage(string $DstLanguage) Set <p>Target language of the video. Default: en</p>
 * @method string getModel() Obtain <p>Dubbing model</p>
 * @method void setModel(string $Model) Set <p>Dubbing model</p>
 */
class VideoDubbingAsyncInput extends AbstractModel
{
    /**
     * @var string <p>Input video Url</p>
     */
    public $InputUrl;

    /**
     * @var string <p>FileId of the input video</p>
     */
    public $InputFileId;

    /**
     * @var string <p>Video source language. The default value is zh.</p>
     */
    public $SrcLanguage;

    /**
     * @var string <p>Target language of the video. Default: en</p>
     */
    public $DstLanguage;

    /**
     * @var string <p>Dubbing model</p>
     */
    public $Model;

    /**
     * @param string $InputUrl <p>Input video Url</p>
     * @param string $InputFileId <p>FileId of the input video</p>
     * @param string $SrcLanguage <p>Video source language. The default value is zh.</p>
     * @param string $DstLanguage <p>Target language of the video. Default: en</p>
     * @param string $Model <p>Dubbing model</p>
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
        if (array_key_exists("InputUrl",$param) and $param["InputUrl"] !== null) {
            $this->InputUrl = $param["InputUrl"];
        }

        if (array_key_exists("InputFileId",$param) and $param["InputFileId"] !== null) {
            $this->InputFileId = $param["InputFileId"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
