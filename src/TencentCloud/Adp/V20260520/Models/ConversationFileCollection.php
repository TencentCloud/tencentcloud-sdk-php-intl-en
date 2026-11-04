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
 * FileCollection file collection information
 *
 * @method integer getMaxFileCount() Obtain <p>Maximum number of files</p>
 * @method void setMaxFileCount(integer $MaxFileCount) Set <p>Maximum number of files</p>
 * @method array getSupportedFileTypeList() Obtain <p>Supported file type list</p>
 * @method void setSupportedFileTypeList(array $SupportedFileTypeList) Set <p>Supported file type list</p>
 * @method array getSupportedFileTypes() Obtain <p>Supported file type list</p>
 * @method void setSupportedFileTypes(array $SupportedFileTypes) Set <p>Supported file type list</p>
 */
class ConversationFileCollection extends AbstractModel
{
    /**
     * @var integer <p>Maximum number of files</p>
     */
    public $MaxFileCount;

    /**
     * @var array <p>Supported file type list</p>
     */
    public $SupportedFileTypeList;

    /**
     * @var array <p>Supported file type list</p>
     */
    public $SupportedFileTypes;

    /**
     * @param integer $MaxFileCount <p>Maximum number of files</p>
     * @param array $SupportedFileTypeList <p>Supported file type list</p>
     * @param array $SupportedFileTypes <p>Supported file type list</p>
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
        if (array_key_exists("MaxFileCount",$param) and $param["MaxFileCount"] !== null) {
            $this->MaxFileCount = $param["MaxFileCount"];
        }

        if (array_key_exists("SupportedFileTypeList",$param) and $param["SupportedFileTypeList"] !== null) {
            $this->SupportedFileTypeList = $param["SupportedFileTypeList"];
        }

        if (array_key_exists("SupportedFileTypes",$param) and $param["SupportedFileTypes"] !== null) {
            $this->SupportedFileTypes = $param["SupportedFileTypes"];
        }
    }
}
