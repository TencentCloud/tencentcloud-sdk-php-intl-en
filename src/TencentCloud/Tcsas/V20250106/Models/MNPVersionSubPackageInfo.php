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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subpackage information.
 *
 * @method string getName() Obtain <p>Package name.</p>
 * @method void setName(string $Name) Set <p>Package name.</p>
 * @method integer getSize() Obtain <p>Package size.</p>
 * @method void setSize(integer $Size) Set <p>Package size.</p>
 */
class MNPVersionSubPackageInfo extends AbstractModel
{
    /**
     * @var string <p>Package name.</p>
     */
    public $Name;

    /**
     * @var integer <p>Package size.</p>
     */
    public $Size;

    /**
     * @param string $Name <p>Package name.</p>
     * @param integer $Size <p>Package size.</p>
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

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
