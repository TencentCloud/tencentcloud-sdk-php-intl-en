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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supported file types
 *
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getFileExt() Obtain <p>File type (for example, txt, pdf, jpg; extension is recommended)</p>
 * @method void setFileExt(string $FileExt) Set <p>File type (for example, txt, pdf, jpg; extension is recommended)</p>
 * @method string getMaxSizeBytes() Obtain <p>File size limit (unit: byte)</p>
 * @method void setMaxSizeBytes(string $MaxSizeBytes) Set <p>File size limit (unit: byte)</p>
 */
class SupportedFileType extends AbstractModel
{
    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>File type (for example, txt, pdf, jpg; extension is recommended)</p>
     */
    public $FileExt;

    /**
     * @var string <p>File size limit (unit: byte)</p>
     */
    public $MaxSizeBytes;

    /**
     * @param string $Description <p>Description.</p>
     * @param string $FileExt <p>File type (for example, txt, pdf, jpg; extension is recommended)</p>
     * @param string $MaxSizeBytes <p>File size limit (unit: byte)</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("FileExt",$param) and $param["FileExt"] !== null) {
            $this->FileExt = $param["FileExt"];
        }

        if (array_key_exists("MaxSizeBytes",$param) and $param["MaxSizeBytes"] !== null) {
            $this->MaxSizeBytes = $param["MaxSizeBytes"];
        }
    }
}
