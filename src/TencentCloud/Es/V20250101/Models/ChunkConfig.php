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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document sharding configuration
 *
 * @method integer getMaxChunkSize() Obtain After splitting by the separator, the fragment length is validated. If it exceeds the maximum fragment length, it is split using the next-level separator. If there is no next-level separator, the original length is retained. Default value: 1000.
 * @method void setMaxChunkSize(integer $MaxChunkSize) Set After splitting by the separator, the fragment length is validated. If it exceeds the maximum fragment length, it is split using the next-level separator. If there is no next-level separator, the original length is retained. Default value: 1000.
 * @method array getDelimiters() Obtain Separator list, separators positioned towards the front take precedence; when the file type is TXT, default value: ["\n\n", "\n", ".", ".", "?", ",", ""].
 * @method void setDelimiters(array $Delimiters) Set Separator list, separators positioned towards the front take precedence; when the file type is TXT, default value: ["\n\n", "\n", ".", ".", "?", ",", ""].
 * @method integer getChunkOverlap() Obtain The number of overlapping characters between adjacent fragments must be less than the fragment length. Fragments that form completely redundant slices are automatically filtered. Default value: 0.2*MaxChunkSize
 * @method void setChunkOverlap(integer $ChunkOverlap) Set The number of overlapping characters between adjacent fragments must be less than the fragment length. Fragments that form completely redundant slices are automatically filtered. Default value: 0.2*MaxChunkSize
 */
class ChunkConfig extends AbstractModel
{
    /**
     * @var integer After splitting by the separator, the fragment length is validated. If it exceeds the maximum fragment length, it is split using the next-level separator. If there is no next-level separator, the original length is retained. Default value: 1000.
     */
    public $MaxChunkSize;

    /**
     * @var array Separator list, separators positioned towards the front take precedence; when the file type is TXT, default value: ["\n\n", "\n", ".", ".", "?", ",", ""].
     */
    public $Delimiters;

    /**
     * @var integer The number of overlapping characters between adjacent fragments must be less than the fragment length. Fragments that form completely redundant slices are automatically filtered. Default value: 0.2*MaxChunkSize
     */
    public $ChunkOverlap;

    /**
     * @param integer $MaxChunkSize After splitting by the separator, the fragment length is validated. If it exceeds the maximum fragment length, it is split using the next-level separator. If there is no next-level separator, the original length is retained. Default value: 1000.
     * @param array $Delimiters Separator list, separators positioned towards the front take precedence; when the file type is TXT, default value: ["\n\n", "\n", ".", ".", "?", ",", ""].
     * @param integer $ChunkOverlap The number of overlapping characters between adjacent fragments must be less than the fragment length. Fragments that form completely redundant slices are automatically filtered. Default value: 0.2*MaxChunkSize
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
        if (array_key_exists("MaxChunkSize",$param) and $param["MaxChunkSize"] !== null) {
            $this->MaxChunkSize = $param["MaxChunkSize"];
        }

        if (array_key_exists("Delimiters",$param) and $param["Delimiters"] !== null) {
            $this->Delimiters = $param["Delimiters"];
        }

        if (array_key_exists("ChunkOverlap",$param) and $param["ChunkOverlap"] !== null) {
            $this->ChunkOverlap = $param["ChunkOverlap"];
        }
    }
}
