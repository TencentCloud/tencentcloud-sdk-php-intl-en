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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dependency items.
 *
 * @method string getType() Obtain Dependency item type. Valid values: LandingZoneSetUp (Landing Zone dependency) and AccountFactorySetUp (Account Factory dependency).
 * @method void setType(string $Type) Set Dependency item type. Valid values: LandingZoneSetUp (Landing Zone dependency) and AccountFactorySetUp (Account Factory dependency).
 * @method string getIdentifier() Obtain Feature item unique ID, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
 * @method void setIdentifier(string $Identifier) Set Feature item unique ID, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
 */
class DependsOnItem extends AbstractModel
{
    /**
     * @var string Dependency item type. Valid values: LandingZoneSetUp (Landing Zone dependency) and AccountFactorySetUp (Account Factory dependency).
     */
    public $Type;

    /**
     * @var string Feature item unique ID, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
     */
    public $Identifier;

    /**
     * @param string $Type Dependency item type. Valid values: LandingZoneSetUp (Landing Zone dependency) and AccountFactorySetUp (Account Factory dependency).
     * @param string $Identifier Feature item unique ID, which can contain only English letters, numbers, and symbols (@,._[]-:()+=), and must be 2 to 128 characters in length.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }
    }
}
