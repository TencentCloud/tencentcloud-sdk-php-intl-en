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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Attachment structure, including attachment name and Base64-encoded attachment content
 *
 * @method string getFileName() Obtain Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
 * @method void setFileName(string $FileName) Set Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
 * @method string getContent() Obtain Attachment content after Base64 encoding. A single attachment cannot exceed 4 MB. Note: Tencent Cloud APIs require that a request packet should not exceed 8 MB. If you are sending multiple attachments, the total size of these attachments cannot exceed 8 MB.
 * @method void setContent(string $Content) Set Attachment content after Base64 encoding. A single attachment cannot exceed 4 MB. Note: Tencent Cloud APIs require that a request packet should not exceed 8 MB. If you are sending multiple attachments, the total size of these attachments cannot exceed 8 MB.
 */
class Attachment extends AbstractModel
{
    /**
     * @var string Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
     */
    public $FileName;

    /**
     * @var string Attachment content after Base64 encoding. A single attachment cannot exceed 4 MB. Note: Tencent Cloud APIs require that a request packet should not exceed 8 MB. If you are sending multiple attachments, the total size of these attachments cannot exceed 8 MB.
     */
    public $Content;

    /**
     * @param string $FileName Attachment name, which cannot exceed 255 characters. Some attachment types are not supported. For details, see [Attachment Types](https://intl.cloud.tencent.com/document/product/1288/51951?from_cn_redirect=1).
     * @param string $Content Attachment content after Base64 encoding. A single attachment cannot exceed 4 MB. Note: Tencent Cloud APIs require that a request packet should not exceed 8 MB. If you are sending multiple attachments, the total size of these attachments cannot exceed 8 MB.
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
    }
}
