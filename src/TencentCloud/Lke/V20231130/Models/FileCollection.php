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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File collection information
 *
 * @method integer getMaxFileCount() Obtain Maximum number of files to be uploaded
 * @method void setMaxFileCount(integer $MaxFileCount) Set Maximum number of files to be uploaded
 * @method array getSupportedFileTypes() Obtain Supported upload file types
 * @method void setSupportedFileTypes(array $SupportedFileTypes) Set Supported upload file types
 */
class FileCollection extends AbstractModel
{
    /**
     * @var integer Maximum number of files to be uploaded
     */
    public $MaxFileCount;

    /**
     * @var array Supported upload file types
     */
    public $SupportedFileTypes;

    /**
     * @param integer $MaxFileCount Maximum number of files to be uploaded
     * @param array $SupportedFileTypes Supported upload file types
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

        if (array_key_exists("SupportedFileTypes",$param) and $param["SupportedFileTypes"] !== null) {
            $this->SupportedFileTypes = $param["SupportedFileTypes"];
        }
    }
}
