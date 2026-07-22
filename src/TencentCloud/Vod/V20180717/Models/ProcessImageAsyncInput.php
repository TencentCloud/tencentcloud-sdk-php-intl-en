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
 * Asynchronous task processing info for images.
 *
 * @method string getFileId() Obtain <p>FileId of image processing.</p>
 * @method void setFileId(string $FileId) Set <p>FileId of image processing.</p>
 * @method string getUrl() Obtain <p>Image URL.</p>
 * @method void setUrl(string $Url) Set <p>Image URL.</p>
 * @method ProcessImageAsyncTaskInput getImageTaskInput() Obtain <p>Image processing parameter.</p>
 * @method void setImageTaskInput(ProcessImageAsyncTaskInput $ImageTaskInput) Set <p>Image processing parameter.</p>
 * @method ProcessImageAsyncOutputConfig getOutputConfig() Obtain <p>Output media file configuration for the image processing task.</p>
 * @method void setOutputConfig(ProcessImageAsyncOutputConfig $OutputConfig) Set <p>Output media file configuration for the image processing task.</p>
 */
class ProcessImageAsyncInput extends AbstractModel
{
    /**
     * @var string <p>FileId of image processing.</p>
     */
    public $FileId;

    /**
     * @var string <p>Image URL.</p>
     */
    public $Url;

    /**
     * @var ProcessImageAsyncTaskInput <p>Image processing parameter.</p>
     */
    public $ImageTaskInput;

    /**
     * @var ProcessImageAsyncOutputConfig <p>Output media file configuration for the image processing task.</p>
     */
    public $OutputConfig;

    /**
     * @param string $FileId <p>FileId of image processing.</p>
     * @param string $Url <p>Image URL.</p>
     * @param ProcessImageAsyncTaskInput $ImageTaskInput <p>Image processing parameter.</p>
     * @param ProcessImageAsyncOutputConfig $OutputConfig <p>Output media file configuration for the image processing task.</p>
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ImageTaskInput",$param) and $param["ImageTaskInput"] !== null) {
            $this->ImageTaskInput = new ProcessImageAsyncTaskInput();
            $this->ImageTaskInput->deserialize($param["ImageTaskInput"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new ProcessImageAsyncOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
