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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Versioning - array of classes
 *
 * @method array getProtocols() Obtain <p>Protocol and sale details</p>
 * @method void setProtocols(array $Protocols) Set <p>Protocol and sale details</p>
 * @method string getType() Obtain <p>Storage type. In the return value, SD indicates General Standard Storage, HP indicates General Performance Storage, TB indicates Standard Turbo, and TP indicates High-Performance Turbo.</p>
 * @method void setType(string $Type) Set <p>Storage type. In the return value, SD indicates General Standard Storage, HP indicates General Performance Storage, TB indicates Standard Turbo, and TP indicates High-Performance Turbo.</p>
 * @method boolean getPrepayment() Obtain <p>Support for prepaid. In the return value, true means supported and false means unsupported.</p>
 * @method void setPrepayment(boolean $Prepayment) Set <p>Support for prepaid. In the return value, true means supported and false means unsupported.</p>
 * @method string getVersion() Obtain <p>File system version</p><p>Enumeration value:</p><ul><li>v1.5: Universal Series</li><li>v3.1: Universal Series (enhanced)</li><li>v4.0: Turbo series</li></ul>
 * @method void setVersion(string $Version) Set <p>File system version</p><p>Enumeration value:</p><ul><li>v1.5: Universal Series</li><li>v3.1: Universal Series (enhanced)</li><li>v4.0: Turbo series</li></ul>
 */
class AvailableType extends AbstractModel
{
    /**
     * @var array <p>Protocol and sale details</p>
     */
    public $Protocols;

    /**
     * @var string <p>Storage type. In the return value, SD indicates General Standard Storage, HP indicates General Performance Storage, TB indicates Standard Turbo, and TP indicates High-Performance Turbo.</p>
     */
    public $Type;

    /**
     * @var boolean <p>Support for prepaid. In the return value, true means supported and false means unsupported.</p>
     */
    public $Prepayment;

    /**
     * @var string <p>File system version</p><p>Enumeration value:</p><ul><li>v1.5: Universal Series</li><li>v3.1: Universal Series (enhanced)</li><li>v4.0: Turbo series</li></ul>
     */
    public $Version;

    /**
     * @param array $Protocols <p>Protocol and sale details</p>
     * @param string $Type <p>Storage type. In the return value, SD indicates General Standard Storage, HP indicates General Performance Storage, TB indicates Standard Turbo, and TP indicates High-Performance Turbo.</p>
     * @param boolean $Prepayment <p>Support for prepaid. In the return value, true means supported and false means unsupported.</p>
     * @param string $Version <p>File system version</p><p>Enumeration value:</p><ul><li>v1.5: Universal Series</li><li>v3.1: Universal Series (enhanced)</li><li>v4.0: Turbo series</li></ul>
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
        if (array_key_exists("Protocols",$param) and $param["Protocols"] !== null) {
            $this->Protocols = [];
            foreach ($param["Protocols"] as $key => $value){
                $obj = new AvailableProtoStatus();
                $obj->deserialize($value);
                array_push($this->Protocols, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Prepayment",$param) and $param["Prepayment"] !== null) {
            $this->Prepayment = $param["Prepayment"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
