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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getKey() Obtain 
 * @method void setKey(string $Key) Set 
 * @method string getLastModified() Obtain 
 * @method void setLastModified(string $LastModified) Set 
 * @method string getETag() Obtain 
 * @method void setETag(string $ETag) Set 
 * @method integer getSize() Obtain 
 * @method void setSize(integer $Size) Set 
 * @method string getStorageClass() Obtain 
 * @method void setStorageClass(string $StorageClass) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method string getCategory() Obtain 
 * @method void setCategory(string $Category) Set 
 * @method string getFileType() Obtain 
 * @method void setFileType(string $FileType) Set 
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method string getSubtitleID() Obtain 
 * @method void setSubtitleID(string $SubtitleID) Set 
 */
class FileContent extends AbstractModel
{
    /**
     * @var string 
     */
    public $Key;

    /**
     * @var string 
     */
    public $LastModified;

    /**
     * @var string 
     */
    public $ETag;

    /**
     * @var integer 
     */
    public $Size;

    /**
     * @var string 
     */
    public $StorageClass;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var string 
     */
    public $Category;

    /**
     * @var string 
     */
    public $FileType;

    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var string 
     */
    public $SubtitleID;

    /**
     * @param string $Key 
     * @param string $LastModified 
     * @param string $ETag 
     * @param integer $Size 
     * @param string $StorageClass 
     * @param string $FileId 
     * @param string $Category 
     * @param string $FileType 
     * @param integer $Definition 
     * @param string $SubtitleID 
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }

        if (array_key_exists("ETag",$param) and $param["ETag"] !== null) {
            $this->ETag = $param["ETag"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StorageClass",$param) and $param["StorageClass"] !== null) {
            $this->StorageClass = $param["StorageClass"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubtitleID",$param) and $param["SubtitleID"] !== null) {
            $this->SubtitleID = $param["SubtitleID"];
        }
    }
}
