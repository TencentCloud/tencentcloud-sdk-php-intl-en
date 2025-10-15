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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve the resource file list item.
 *
 * @method string getResourceId() Obtain Resource file ID.
 * @method void setResourceId(string $ResourceId) Set Resource file ID.
 * @method string getResourceName() Obtain Resource file name.
 * @method void setResourceName(string $ResourceName) Set Resource file name.
 * @method string getFileExtensionType() Obtain Specifies the resource file type.
 * @method void setFileExtensionType(string $FileExtensionType) Set Specifies the resource file type.
 * @method string getLocalPath() Obtain Resource path
 * @method void setLocalPath(string $LocalPath) Set Resource path
 */
class ResourceFileItem extends AbstractModel
{
    /**
     * @var string Resource file ID.
     */
    public $ResourceId;

    /**
     * @var string Resource file name.
     */
    public $ResourceName;

    /**
     * @var string Specifies the resource file type.
     */
    public $FileExtensionType;

    /**
     * @var string Resource path
     */
    public $LocalPath;

    /**
     * @param string $ResourceId Resource file ID.
     * @param string $ResourceName Resource file name.
     * @param string $FileExtensionType Specifies the resource file type.
     * @param string $LocalPath Resource path
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }
    }
}
