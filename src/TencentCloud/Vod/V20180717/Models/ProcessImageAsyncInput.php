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
 * @method string getFileId() Obtain FileId for image processing.
 * @method void setFileId(string $FileId) Set FileId for image processing.
 * @method ProcessImageAsyncTaskInput getImageTaskInput() Obtain Image processing parameter.
 * @method void setImageTaskInput(ProcessImageAsyncTaskInput $ImageTaskInput) Set Image processing parameter.
 * @method ProcessImageAsyncOutputConfig getOutputConfig() Obtain Output media file configuration for image processing tasks.
 * @method void setOutputConfig(ProcessImageAsyncOutputConfig $OutputConfig) Set Output media file configuration for image processing tasks.
 */
class ProcessImageAsyncInput extends AbstractModel
{
    /**
     * @var string FileId for image processing.
     */
    public $FileId;

    /**
     * @var ProcessImageAsyncTaskInput Image processing parameter.
     */
    public $ImageTaskInput;

    /**
     * @var ProcessImageAsyncOutputConfig Output media file configuration for image processing tasks.
     */
    public $OutputConfig;

    /**
     * @param string $FileId FileId for image processing.
     * @param ProcessImageAsyncTaskInput $ImageTaskInput Image processing parameter.
     * @param ProcessImageAsyncOutputConfig $OutputConfig Output media file configuration for image processing tasks.
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
