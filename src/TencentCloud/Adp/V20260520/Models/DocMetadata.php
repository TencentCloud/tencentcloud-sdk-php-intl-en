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
 * Document metadata
 *
 * @method string getDocCharCount() Obtain <p>Number of characters in the document</p>
 * @method void setDocCharCount(string $DocCharCount) Set <p>Number of characters in the document</p>
 * @method string getFileName() Obtain <p>File name.</p>
 * @method void setFileName(string $FileName) Set <p>File name.</p>
 * @method string getFileSize() Obtain <p>File size (byte)</p>
 * @method void setFileSize(string $FileSize) Set <p>File size (byte)</p>
 * @method string getFileType() Obtain <p>File type/extension</p>
 * @method void setFileType(string $FileType) Set <p>File type/extension</p>
 * @method array getRefFieldNameList() Obtain <p>List of metadata reference field names (used to display which categories and properties of a document are set as metadata)</p>
 * @method void setRefFieldNameList(array $RefFieldNameList) Set <p>List of metadata reference field names (used to display which categories and properties of a document are set as metadata)</p>
 * @method string getSourceDesc() Obtain <p>Source description.</p>
 * @method void setSourceDesc(string $SourceDesc) Set <p>Source description.</p>
 * @method integer getSourceType() Obtain <p>Document source type: 1=local upload, 2=webpage link, 3=COS integration, 4=import from external sources<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>Local upload</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>Webpage link</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS integration</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>Import from external sources</td></tr></tbody></table></p>
 * @method void setSourceType(integer $SourceType) Set <p>Document source type: 1=local upload, 2=webpage link, 3=COS integration, 4=import from external sources<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>Local upload</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>Webpage link</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS integration</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>Import from external sources</td></tr></tbody></table></p>
 */
class DocMetadata extends AbstractModel
{
    /**
     * @var string <p>Number of characters in the document</p>
     */
    public $DocCharCount;

    /**
     * @var string <p>File name.</p>
     */
    public $FileName;

    /**
     * @var string <p>File size (byte)</p>
     */
    public $FileSize;

    /**
     * @var string <p>File type/extension</p>
     */
    public $FileType;

    /**
     * @var array <p>List of metadata reference field names (used to display which categories and properties of a document are set as metadata)</p>
     */
    public $RefFieldNameList;

    /**
     * @var string <p>Source description.</p>
     */
    public $SourceDesc;

    /**
     * @var integer <p>Document source type: 1=local upload, 2=webpage link, 3=COS integration, 4=import from external sources<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>Local upload</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>Webpage link</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS integration</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>Import from external sources</td></tr></tbody></table></p>
     */
    public $SourceType;

    /**
     * @param string $DocCharCount <p>Number of characters in the document</p>
     * @param string $FileName <p>File name.</p>
     * @param string $FileSize <p>File size (byte)</p>
     * @param string $FileType <p>File type/extension</p>
     * @param array $RefFieldNameList <p>List of metadata reference field names (used to display which categories and properties of a document are set as metadata)</p>
     * @param string $SourceDesc <p>Source description.</p>
     * @param integer $SourceType <p>Document source type: 1=local upload, 2=webpage link, 3=COS integration, 4=import from external sources<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_SOURCE_TYPE_LOCAL</td><td>1</td><td>Local upload</td></tr><tr><td>DOC_SOURCE_TYPE_URL</td><td>2</td><td>Webpage link</td></tr><tr><td>DOC_SOURCE_TYPE_COS</td><td>3</td><td>COS integration</td></tr><tr><td>DOC_SOURCE_TYPE_IMPORT</td><td>4</td><td>Import from external sources</td></tr></tbody></table></p>
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
        if (array_key_exists("DocCharCount",$param) and $param["DocCharCount"] !== null) {
            $this->DocCharCount = $param["DocCharCount"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("RefFieldNameList",$param) and $param["RefFieldNameList"] !== null) {
            $this->RefFieldNameList = $param["RefFieldNameList"];
        }

        if (array_key_exists("SourceDesc",$param) and $param["SourceDesc"] !== null) {
            $this->SourceDesc = $param["SourceDesc"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
