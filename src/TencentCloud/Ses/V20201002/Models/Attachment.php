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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attachment structure, including attachment name and Base64-encoded attachment content
 *
 * @method string getFileName() Obtain Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
 * @method void setFileName(string $FileName) Set Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
 * @method string getContent() Obtain The Base64-encoded attachment content supports a maximum of 4M. note: tencent cloud API supports up to 8M request packets. the attachment content is expected to expand by 1.5 times after Base64 encoding. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
 * @method void setContent(string $Content) Set The Base64-encoded attachment content supports a maximum of 4M. note: tencent cloud API supports up to 8M request packets. the attachment content is expected to expand by 1.5 times after Base64 encoding. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
 * @method string getFileURL() Obtain Attachment URL. do not use the open function.
 * @method void setFileURL(string $FileURL) Set Attachment URL. do not use the open function.
 */
class Attachment extends AbstractModel
{
    /**
     * @var string Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
     */
    public $FileName;

    /**
     * @var string The Base64-encoded attachment content supports a maximum of 4M. note: tencent cloud API supports up to 8M request packets. the attachment content is expected to expand by 1.5 times after Base64 encoding. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
     */
    public $Content;

    /**
     * @var string Attachment URL. do not use the open function.
     */
    public $FileURL;

    /**
     * @param string $FileName Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
     * @param string $Content The Base64-encoded attachment content supports a maximum of 4M. note: tencent cloud API supports up to 8M request packets. the attachment content is expected to expand by 1.5 times after Base64 encoding. you should control the total size of all attachments within 4M. the API will return an error if the overall request exceeds 8M.
     * @param string $FileURL Attachment URL. do not use the open function.
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileURL",$param) and $param["FileURL"] !== null) {
            $this->FileURL = $param["FileURL"];
        }
    }
}
