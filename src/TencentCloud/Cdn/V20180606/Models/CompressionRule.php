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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Compression rules configuration. Up to 100 entries can be set.
 *
 * @method boolean getCompress() Obtain true: must be set as true, enables compression
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCompress(boolean $Compress) Set true: must be set as true, enables compression
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getFileExtensions() Obtain Compress according to the file suffix type
Such as: jpg, txt
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileExtensions(array $FileExtensions) Set Compress according to the file suffix type
Such as: jpg, txt
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMinLength() Obtain The minimum file size to trigger compression (in bytes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMinLength(integer $MinLength) Set The minimum file size to trigger compression (in bytes)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxLength() Obtain The maximum file size to trigger compression (in bytes)
The maximum value is 30 MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxLength(integer $MaxLength) Set The maximum file size to trigger compression (in bytes)
The maximum value is 30 MB
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getAlgorithms() Obtain File compression algorithm
gzip: specifies Gzip compression
brotli: specifies Brotli compression
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlgorithms(array $Algorithms) Set File compression algorithm
gzip: specifies Gzip compression
brotli: specifies Brotli compression
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CompressionRule extends AbstractModel
{
    /**
     * @var boolean true: must be set as true, enables compression
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Compress;

    /**
     * @var array Compress according to the file suffix type
Such as: jpg, txt
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileExtensions;

    /**
     * @var integer The minimum file size to trigger compression (in bytes)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MinLength;

    /**
     * @var integer The maximum file size to trigger compression (in bytes)
The maximum value is 30 MB
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxLength;

    /**
     * @var array File compression algorithm
gzip: specifies Gzip compression
brotli: specifies Brotli compression
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Algorithms;

    /**
     * @param boolean $Compress true: must be set as true, enables compression
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $FileExtensions Compress according to the file suffix type
Such as: jpg, txt
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MinLength The minimum file size to trigger compression (in bytes)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxLength The maximum file size to trigger compression (in bytes)
The maximum value is 30 MB
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Algorithms File compression algorithm
gzip: specifies Gzip compression
brotli: specifies Brotli compression
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
        if (array_key_exists("Compress",$param) and $param["Compress"] !== null) {
            $this->Compress = $param["Compress"];
        }

        if (array_key_exists("FileExtensions",$param) and $param["FileExtensions"] !== null) {
            $this->FileExtensions = $param["FileExtensions"];
        }

        if (array_key_exists("MinLength",$param) and $param["MinLength"] !== null) {
            $this->MinLength = $param["MinLength"];
        }

        if (array_key_exists("MaxLength",$param) and $param["MaxLength"] !== null) {
            $this->MaxLength = $param["MaxLength"];
        }

        if (array_key_exists("Algorithms",$param) and $param["Algorithms"] !== null) {
            $this->Algorithms = $param["Algorithms"];
        }
    }
}
