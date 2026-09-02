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
 * Baseline classification basic information, covering both parent and subcategory layers.
 *
 * @method integer getID() Obtain <p>Baseline classification ID.</p>
 * @method void setID(integer $ID) Set <p>Baseline classification ID.</p>
 * @method string getName() Obtain <p>Baseline classification name (Chinese).</p>
 * @method void setName(string $Name) Set <p>Baseline classification name (Chinese).</p>
 * @method string getDescription() Obtain <p>Baseline category description (Chinese).</p>
 * @method void setDescription(string $Description) Set <p>Baseline category description (Chinese).</p>
 * @method string getCheckAssetType() Obtain <p>Detect the asset major category and distinguish between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) Set <p>Detect the asset major category and distinguish between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
 */
class BaselineCategory extends AbstractModel
{
    /**
     * @var integer <p>Baseline classification ID.</p>
     */
    public $ID;

    /**
     * @var string <p>Baseline classification name (Chinese).</p>
     */
    public $Name;

    /**
     * @var string <p>Baseline category description (Chinese).</p>
     */
    public $Description;

    /**
     * @var string <p>Detect the asset major category and distinguish between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
     */
    public $CheckAssetType;

    /**
     * @param integer $ID <p>Baseline classification ID.</p>
     * @param string $Name <p>Baseline classification name (Chinese).</p>
     * @param string $Description <p>Baseline category description (Chinese).</p>
     * @param string $CheckAssetType <p>Detect the asset major category and distinguish between host baseline and container cluster baseline. Parameter Value:</p><ul><li>HOST: Host</li><li>CLUSTER: Container cluster</li></ul>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }
    }
}
