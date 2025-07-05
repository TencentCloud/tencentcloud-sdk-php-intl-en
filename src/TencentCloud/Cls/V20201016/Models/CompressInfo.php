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
 * Compression configuration of shipped log
 *
 * @method string getFormat() Obtain Compression format. Valid values: `gzip`; `lzop`; `snappy`; `none` (no compression)
 * @method void setFormat(string $Format) Set Compression format. Valid values: `gzip`; `lzop`; `snappy`; `none` (no compression)
 */
class CompressInfo extends AbstractModel
{
    /**
     * @var string Compression format. Valid values: `gzip`; `lzop`; `snappy`; `none` (no compression)
     */
    public $Format;

    /**
     * @param string $Format Compression format. Valid values: `gzip`; `lzop`; `snappy`; `none` (no compression)
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
