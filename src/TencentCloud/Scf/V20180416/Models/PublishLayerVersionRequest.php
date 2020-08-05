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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishLayerVersion request structure.
 *
 * @method string getLayerName() Obtain Layer name, which can contain 1-64 English letters, digits, hyphens, and underscores, must begin with a letter, and cannot end with a hyphen or underscore
 * @method void setLayerName(string $LayerName) Set Layer name, which can contain 1-64 English letters, digits, hyphens, and underscores, must begin with a letter, and cannot end with a hyphen or underscore
 * @method array getCompatibleRuntimes() Obtain Runtimes compatible with layer. Multiple choices are allowed. The valid values of this parameter correspond to the valid values of the `Runtime` of the function.
 * @method void setCompatibleRuntimes(array $CompatibleRuntimes) Set Runtimes compatible with layer. Multiple choices are allowed. The valid values of this parameter correspond to the valid values of the `Runtime` of the function.
 * @method Code getContent() Obtain Layer file source or content
 * @method void setContent(Code $Content) Set Layer file source or content
 * @method string getDescription() Obtain Layer version description
 * @method void setDescription(string $Description) Set Layer version description
 * @method string getLicenseInfo() Obtain Software license of layer
 * @method void setLicenseInfo(string $LicenseInfo) Set Software license of layer
 */
class PublishLayerVersionRequest extends AbstractModel
{
    /**
     * @var string Layer name, which can contain 1-64 English letters, digits, hyphens, and underscores, must begin with a letter, and cannot end with a hyphen or underscore
     */
    public $LayerName;

    /**
     * @var array Runtimes compatible with layer. Multiple choices are allowed. The valid values of this parameter correspond to the valid values of the `Runtime` of the function.
     */
    public $CompatibleRuntimes;

    /**
     * @var Code Layer file source or content
     */
    public $Content;

    /**
     * @var string Layer version description
     */
    public $Description;

    /**
     * @var string Software license of layer
     */
    public $LicenseInfo;

    /**
     * @param string $LayerName Layer name, which can contain 1-64 English letters, digits, hyphens, and underscores, must begin with a letter, and cannot end with a hyphen or underscore
     * @param array $CompatibleRuntimes Runtimes compatible with layer. Multiple choices are allowed. The valid values of this parameter correspond to the valid values of the `Runtime` of the function.
     * @param Code $Content Layer file source or content
     * @param string $Description Layer version description
     * @param string $LicenseInfo Software license of layer
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
        if (array_key_exists("LayerName",$param) and $param["LayerName"] !== null) {
            $this->LayerName = $param["LayerName"];
        }

        if (array_key_exists("CompatibleRuntimes",$param) and $param["CompatibleRuntimes"] !== null) {
            $this->CompatibleRuntimes = $param["CompatibleRuntimes"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new Code();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LicenseInfo",$param) and $param["LicenseInfo"] !== null) {
            $this->LicenseInfo = $param["LicenseInfo"];
        }
    }
}
