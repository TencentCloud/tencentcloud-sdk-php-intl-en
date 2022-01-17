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
 * TCR image information
 *
 * @method string getImageType() Obtain Image repository type, which can be `personal` or `enterprise`
 * @method void setImageType(string $ImageType) Set Image repository type, which can be `personal` or `enterprise`
 * @method string getImageUri() Obtain {domain}/{namespace}/{imageName}:{tag}@{digest}
 * @method void setImageUri(string $ImageUri) Set {domain}/{namespace}/{imageName}:{tag}@{digest}
 * @method string getRegistryId() Obtain The temp token that a TCR Enterprise instance uses to obtain an image. It’s required when `ImageType` is `enterprise`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegistryId(string $RegistryId) Set The temp token that a TCR Enterprise instance uses to obtain an image. It’s required when `ImageType` is `enterprise`.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getEntryPoint() Obtain Disused
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEntryPoint(string $EntryPoint) Set Disused
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCommand() Obtain entrypoint execution command
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCommand(string $Command) Set entrypoint execution command
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getArgs() Obtain Command parameters
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setArgs(string $Args) Set Command parameters
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ImageConfig extends AbstractModel
{
    /**
     * @var string Image repository type, which can be `personal` or `enterprise`
     */
    public $ImageType;

    /**
     * @var string {domain}/{namespace}/{imageName}:{tag}@{digest}
     */
    public $ImageUri;

    /**
     * @var string The temp token that a TCR Enterprise instance uses to obtain an image. It’s required when `ImageType` is `enterprise`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RegistryId;

    /**
     * @var string Disused
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EntryPoint;

    /**
     * @var string entrypoint execution command
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Command;

    /**
     * @var string Command parameters
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Args;

    /**
     * @param string $ImageType Image repository type, which can be `personal` or `enterprise`
     * @param string $ImageUri {domain}/{namespace}/{imageName}:{tag}@{digest}
     * @param string $RegistryId The temp token that a TCR Enterprise instance uses to obtain an image. It’s required when `ImageType` is `enterprise`.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $EntryPoint Disused
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Command entrypoint execution command
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Args Command parameters
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageUri",$param) and $param["ImageUri"] !== null) {
            $this->ImageUri = $param["ImageUri"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            $this->EntryPoint = $param["EntryPoint"];
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }
    }
}
