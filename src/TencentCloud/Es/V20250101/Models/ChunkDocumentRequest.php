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
 * ChunkDocument request structure.
 *
 * @method ChunkDocument getDocument() Obtain Slice file info.
 * @method void setDocument(ChunkDocument $Document) Set Slice file info.
 * @method string getModelName() Obtain Model name, selectable model list: doc-chunk.
 * @method void setModelName(string $ModelName) Set Model name, selectable model list: doc-chunk.
 * @method ChunkConfig getConfig() Obtain File slice configuration.
 * @method void setConfig(ChunkConfig $Config) Set File slice configuration.
 */
class ChunkDocumentRequest extends AbstractModel
{
    /**
     * @var ChunkDocument Slice file info.
     */
    public $Document;

    /**
     * @var string Model name, selectable model list: doc-chunk.
     */
    public $ModelName;

    /**
     * @var ChunkConfig File slice configuration.
     */
    public $Config;

    /**
     * @param ChunkDocument $Document Slice file info.
     * @param string $ModelName Model name, selectable model list: doc-chunk.
     * @param ChunkConfig $Config File slice configuration.
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
        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = new ChunkDocument();
            $this->Document->deserialize($param["Document"]);
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new ChunkConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
