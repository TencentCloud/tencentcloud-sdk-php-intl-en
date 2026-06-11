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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadLog request structure.
 *
 * @method string getTopicId() Obtain Log topic id
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set Log topic id
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
 * @method string getHashKey() Obtain This parameter has been deprecated and should not be used.
 * @method void setHashKey(string $HashKey) Set This parameter has been deprecated and should not be used.
 * @method string getCompressType() Obtain Compression method. Currently supports
- lz4
- zstd
 * @method void setCompressType(string $CompressType) Set Compression method. Currently supports
- lz4
- zstd
 */
class UploadLogRequest extends AbstractModel
{
    /**
     * @var string Log topic id
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string This parameter has been deprecated and should not be used.
     * @deprecated
     */
    public $HashKey;

    /**
     * @var string Compression method. Currently supports
- lz4
- zstd
     */
    public $CompressType;

    /**
     * @param string $TopicId Log topic id
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
     * @param string $HashKey This parameter has been deprecated and should not be used.
     * @param string $CompressType Compression method. Currently supports
- lz4
- zstd
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("HashKey",$param) and $param["HashKey"] !== null) {
            $this->HashKey = $param["HashKey"];
        }

        if (array_key_exists("CompressType",$param) and $param["CompressType"] !== null) {
            $this->CompressType = $param["CompressType"];
        }
    }
}
