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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image component information
 *
 * @method string getName() Obtain <p>Component name.</p>
 * @method void setName(string $Name) Set <p>Component name.</p>
 * @method string getVersion() Obtain <p>Component version</p>
 * @method void setVersion(string $Version) Set <p>Component version</p>
 * @method string getPath() Obtain <p>Component path</p>
 * @method void setPath(string $Path) Set <p>Component path</p>
 * @method string getType() Obtain <p>Component type</p><p>Enumeration value:</p><ul><li>SYSTEM_COMPONENT: System component</li><li>APP_COMPONENT: Application component</li></ul>
 * @method void setType(string $Type) Set <p>Component type</p><p>Enumeration value:</p><ul><li>SYSTEM_COMPONENT: System component</li><li>APP_COMPONENT: Application component</li></ul>
 * @method string getImageID() Obtain <p>Image ID.</p>
 * @method void setImageID(string $ImageID) Set <p>Image ID.</p>
 * @method integer getVulCount() Obtain <p>Number of vulnerabilities</p>
 * @method void setVulCount(integer $VulCount) Set <p>Number of vulnerabilities</p>
 * @method string getId() Obtain <p>Image component Id</p>
 * @method void setId(string $Id) Set <p>Image component Id</p>
 * @method integer getComponentId() Obtain <p>Component Id</p>
 * @method void setComponentId(integer $ComponentId) Set <p>Component Id</p>
 */
class ImageComponent extends AbstractModel
{
    /**
     * @var string <p>Component name.</p>
     */
    public $Name;

    /**
     * @var string <p>Component version</p>
     */
    public $Version;

    /**
     * @var string <p>Component path</p>
     */
    public $Path;

    /**
     * @var string <p>Component type</p><p>Enumeration value:</p><ul><li>SYSTEM_COMPONENT: System component</li><li>APP_COMPONENT: Application component</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageID;

    /**
     * @var integer <p>Number of vulnerabilities</p>
     */
    public $VulCount;

    /**
     * @var string <p>Image component Id</p>
     */
    public $Id;

    /**
     * @var integer <p>Component Id</p>
     */
    public $ComponentId;

    /**
     * @param string $Name <p>Component name.</p>
     * @param string $Version <p>Component version</p>
     * @param string $Path <p>Component path</p>
     * @param string $Type <p>Component type</p><p>Enumeration value:</p><ul><li>SYSTEM_COMPONENT: System component</li><li>APP_COMPONENT: Application component</li></ul>
     * @param string $ImageID <p>Image ID.</p>
     * @param integer $VulCount <p>Number of vulnerabilities</p>
     * @param string $Id <p>Image component Id</p>
     * @param integer $ComponentId <p>Component Id</p>
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

        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }
    }
}
