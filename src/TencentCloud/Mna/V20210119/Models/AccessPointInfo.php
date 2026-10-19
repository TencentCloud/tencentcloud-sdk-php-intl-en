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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Access point information
 *
 * @method string getVendor() Obtain <p>Access point operator.</p>
 * @method void setVendor(string $Vendor) Set <p>Access point operator.</p>
 * @method string getPublicAddr() Obtain <p>Endpoint address.</p>
 * @method void setPublicAddr(string $PublicAddr) Set <p>Endpoint address.</p>
 * @method string getRegion() Obtain <p>Access point region.</p>
 * @method void setRegion(string $Region) Set <p>Access point region.</p>
 * @method string getBigArea() Obtain <p>Access point region.</p>
 * @method void setBigArea(string $BigArea) Set <p>Access point region.</p>
 * @method boolean getAvailable() Obtain <p>Whether the access point is available.</p><p>Enumeration value:</p><ul><li>true: The access point is available.</li><li>false: The access point is unavailable.</li></ul>
 * @method void setAvailable(boolean $Available) Set <p>Whether the access point is available.</p><p>Enumeration value:</p><ul><li>true: The access point is available.</li><li>false: The access point is unavailable.</li></ul>
 * @method string getGwGroupId() Obtain <p>Cluster ID.</p>
 * @method void setGwGroupId(string $GwGroupId) Set <p>Cluster ID.</p>
 */
class AccessPointInfo extends AbstractModel
{
    /**
     * @var string <p>Access point operator.</p>
     */
    public $Vendor;

    /**
     * @var string <p>Endpoint address.</p>
     */
    public $PublicAddr;

    /**
     * @var string <p>Access point region.</p>
     */
    public $Region;

    /**
     * @var string <p>Access point region.</p>
     */
    public $BigArea;

    /**
     * @var boolean <p>Whether the access point is available.</p><p>Enumeration value:</p><ul><li>true: The access point is available.</li><li>false: The access point is unavailable.</li></ul>
     */
    public $Available;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $GwGroupId;

    /**
     * @param string $Vendor <p>Access point operator.</p>
     * @param string $PublicAddr <p>Endpoint address.</p>
     * @param string $Region <p>Access point region.</p>
     * @param string $BigArea <p>Access point region.</p>
     * @param boolean $Available <p>Whether the access point is available.</p><p>Enumeration value:</p><ul><li>true: The access point is available.</li><li>false: The access point is unavailable.</li></ul>
     * @param string $GwGroupId <p>Cluster ID.</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("PublicAddr",$param) and $param["PublicAddr"] !== null) {
            $this->PublicAddr = $param["PublicAddr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BigArea",$param) and $param["BigArea"] !== null) {
            $this->BigArea = $param["BigArea"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("GwGroupId",$param) and $param["GwGroupId"] !== null) {
            $this->GwGroupId = $param["GwGroupId"];
        }
    }
}
