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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSkillScan request structure.
 *
 * @method string getFileBase64() Obtain Base64 encoding of the ZIP file content
Input limit: File size limit 7MB (before encoding), only effective ZIP format.
 * @method void setFileBase64(string $FileBase64) Set Base64 encoding of the ZIP file content
Input limit: File size limit 7MB (before encoding), only effective ZIP format.
 * @method string getFileName() Obtain Filename for server log
Parameter format: such as my-skill.zip
 * @method void setFileName(string $FileName) Set Filename for server log
Parameter format: such as my-skill.zip
 */
class CreateSkillScanRequest extends AbstractModel
{
    /**
     * @var string Base64 encoding of the ZIP file content
Input limit: File size limit 7MB (before encoding), only effective ZIP format.
     */
    public $FileBase64;

    /**
     * @var string Filename for server log
Parameter format: such as my-skill.zip
     */
    public $FileName;

    /**
     * @param string $FileBase64 Base64 encoding of the ZIP file content
Input limit: File size limit 7MB (before encoding), only effective ZIP format.
     * @param string $FileName Filename for server log
Parameter format: such as my-skill.zip
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
        if (array_key_exists("FileBase64",$param) and $param["FileBase64"] !== null) {
            $this->FileBase64 = $param["FileBase64"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
