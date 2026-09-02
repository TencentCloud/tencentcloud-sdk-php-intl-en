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
 * IP threat intelligence information (obtained through the TIX IPAnalysis API)
 *
 * @method array getTags() Obtain <p>Intelligence tag (such as Common Trojan, vulnerability software, Stealer Trojan)</p>
 * @method void setTags(array $Tags) Set <p>Intelligence tag (such as Common Trojan, vulnerability software, Stealer Trojan)</p>
 * @method string getBasis() Obtain <p>Analysis basis</p>
 * @method void setBasis(string $Basis) Set <p>Analysis basis</p>
 * @method string getISP() Obtain <p>Associated operator</p>
 * @method void setISP(string $ISP) Set <p>Associated operator</p>
 * @method string getLocation() Obtain <p>Location</p>
 * @method void setLocation(string $Location) Set <p>Location</p>
 * @method string getCharacteristic() Obtain <p>Family gang</p>
 * @method void setCharacteristic(string $Characteristic) Set <p>Family gang</p>
 * @method string getPurpose() Obtain <p>IP profiling</p>
 * @method void setPurpose(string $Purpose) Set <p>IP profiling</p>
 * @method array getReferer() Obtain <p>Reverse-check domain name list</p>
 * @method void setReferer(array $Referer) Set <p>Reverse-check domain name list</p>
 */
class IPIntelInfo extends AbstractModel
{
    /**
     * @var array <p>Intelligence tag (such as Common Trojan, vulnerability software, Stealer Trojan)</p>
     */
    public $Tags;

    /**
     * @var string <p>Analysis basis</p>
     */
    public $Basis;

    /**
     * @var string <p>Associated operator</p>
     */
    public $ISP;

    /**
     * @var string <p>Location</p>
     */
    public $Location;

    /**
     * @var string <p>Family gang</p>
     */
    public $Characteristic;

    /**
     * @var string <p>IP profiling</p>
     */
    public $Purpose;

    /**
     * @var array <p>Reverse-check domain name list</p>
     */
    public $Referer;

    /**
     * @param array $Tags <p>Intelligence tag (such as Common Trojan, vulnerability software, Stealer Trojan)</p>
     * @param string $Basis <p>Analysis basis</p>
     * @param string $ISP <p>Associated operator</p>
     * @param string $Location <p>Location</p>
     * @param string $Characteristic <p>Family gang</p>
     * @param string $Purpose <p>IP profiling</p>
     * @param array $Referer <p>Reverse-check domain name list</p>
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Basis",$param) and $param["Basis"] !== null) {
            $this->Basis = $param["Basis"];
        }

        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Characteristic",$param) and $param["Characteristic"] !== null) {
            $this->Characteristic = $param["Characteristic"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = [];
            foreach ($param["Referer"] as $key => $value){
                $obj = new DomainInfo();
                $obj->deserialize($value);
                array_push($this->Referer, $obj);
            }
        }
    }
}
