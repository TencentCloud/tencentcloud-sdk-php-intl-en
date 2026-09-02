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
 * Detailed list of components affected by vulnerabilities in the repository image
 *
 * @method integer getComponentId() Obtain <p>Component id</p>
 * @method void setComponentId(integer $ComponentId) Set <p>Component id</p>
 * @method string getLayerId() Obtain <p>Image layer id</p>
 * @method void setLayerId(string $LayerId) Set <p>Image layer id</p>
 * @method string getName() Obtain <p>Component name</p>
 * @method void setName(string $Name) Set <p>Component name</p>
 * @method string getVersion() Obtain <p>Component version number</p>
 * @method void setVersion(string $Version) Set <p>Component version number</p>
 * @method string getFixedVersion() Obtain <p>Version number of the vulnerability fix</p>
 * @method void setFixedVersion(string $FixedVersion) Set <p>Version number of the vulnerability fix</p>
 */
class VulAffectedComponent extends AbstractModel
{
    /**
     * @var integer <p>Component id</p>
     */
    public $ComponentId;

    /**
     * @var string <p>Image layer id</p>
     */
    public $LayerId;

    /**
     * @var string <p>Component name</p>
     */
    public $Name;

    /**
     * @var string <p>Component version number</p>
     */
    public $Version;

    /**
     * @var string <p>Version number of the vulnerability fix</p>
     */
    public $FixedVersion;

    /**
     * @param integer $ComponentId <p>Component id</p>
     * @param string $LayerId <p>Image layer id</p>
     * @param string $Name <p>Component name</p>
     * @param string $Version <p>Component version number</p>
     * @param string $FixedVersion <p>Version number of the vulnerability fix</p>
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
        if (array_key_exists("ComponentId",$param) and $param["ComponentId"] !== null) {
            $this->ComponentId = $param["ComponentId"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FixedVersion",$param) and $param["FixedVersion"] !== null) {
            $this->FixedVersion = $param["FixedVersion"];
        }
    }
}
