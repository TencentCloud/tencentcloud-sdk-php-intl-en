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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a component in the image
 *
 * @method string getName() Obtain Component name
 * @method void setName(string $Name) Set Component name
 * @method string getVersion() Obtain Component version
 * @method void setVersion(string $Version) Set Component version
 * @method string getPath() Obtain Component path
 * @method void setPath(string $Path) Set Component path
 * @method string getType() Obtain Component type
 * @method void setType(string $Type) Set Component type
 * @method integer getVulCount() Obtain Number of component vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulCount(integer $VulCount) Set Number of component vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageID() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageID(string $ImageID) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageComponent extends AbstractModel
{
    /**
     * @var string Component name
     */
    public $Name;

    /**
     * @var string Component version
     */
    public $Version;

    /**
     * @var string Component path
     */
    public $Path;

    /**
     * @var string Component type
     */
    public $Type;

    /**
     * @var integer Number of component vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulCount;

    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageID;

    /**
     * @param string $Name Component name
     * @param string $Version Component version
     * @param string $Path Component path
     * @param string $Type Component type
     * @param integer $VulCount Number of component vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageID Image ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }
    }
}
