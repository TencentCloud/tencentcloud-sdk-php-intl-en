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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin-pull authentication request attribute.
 *
 * @method string getType() Obtain Set the origin-pull authentication parameter type. Valid values: <li>QueryString: Set the origin-pull authentication parameter type to query string.</li><li>Header: Set the origin-pull authentication parameter type to request header.</li>
 * @method void setType(string $Type) Set Set the origin-pull authentication parameter type. Valid values: <li>QueryString: Set the origin-pull authentication parameter type to query string.</li><li>Header: Set the origin-pull authentication parameter type to request header.</li>
 * @method string getName() Obtain Name of the parameter corresponding to the origin-pull authentication type.
 * @method void setName(string $Name) Set Name of the parameter corresponding to the origin-pull authentication type.
 * @method string getValue() Obtain Set the parameter value corresponding to the origin-pull authentication type.
 * @method void setValue(string $Value) Set Set the parameter value corresponding to the origin-pull authentication type.
 */
class OriginAuthenticationRequestProperties extends AbstractModel
{
    /**
     * @var string Set the origin-pull authentication parameter type. Valid values: <li>QueryString: Set the origin-pull authentication parameter type to query string.</li><li>Header: Set the origin-pull authentication parameter type to request header.</li>
     */
    public $Type;

    /**
     * @var string Name of the parameter corresponding to the origin-pull authentication type.
     */
    public $Name;

    /**
     * @var string Set the parameter value corresponding to the origin-pull authentication type.
     */
    public $Value;

    /**
     * @param string $Type Set the origin-pull authentication parameter type. Valid values: <li>QueryString: Set the origin-pull authentication parameter type to query string.</li><li>Header: Set the origin-pull authentication parameter type to request header.</li>
     * @param string $Name Name of the parameter corresponding to the origin-pull authentication type.
     * @param string $Value Set the parameter value corresponding to the origin-pull authentication type.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
