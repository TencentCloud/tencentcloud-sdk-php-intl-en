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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExtraRiskInfo
 *
 * @method string getPersonId() Obtain <p>A stable and unique person identifier within the customer's business domain, used to correlate multiple location reports from the same person to determine whether abnormal displacement exists.</p><p>Input restrictions: Length ≤ 128 characters; Must not contain control characters (ASCII &lt; 0x20 or 0x7F); It is recommended to pass a desensitized identifier instead of a plaintext ID number or mobile number.</p>
 * @method void setPersonId(string $PersonId) Set <p>A stable and unique person identifier within the customer's business domain, used to correlate multiple location reports from the same person to determine whether abnormal displacement exists.</p><p>Input restrictions: Length ≤ 128 characters; Must not contain control characters (ASCII &lt; 0x20 or 0x7F); It is recommended to pass a desensitized identifier instead of a plaintext ID number or mobile number.</p>
 * @method string getLatitude() Obtain <p>Latitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Longitude; Valid range: [-90, 90]; Must be a valid number, NaN/Inf not accepted; Pass as a string in JSON (e.g., &quot;22.5431&quot;)</p>
 * @method void setLatitude(string $Latitude) Set <p>Latitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Longitude; Valid range: [-90, 90]; Must be a valid number, NaN/Inf not accepted; Pass as a string in JSON (e.g., &quot;22.5431&quot;)</p>
 * @method string getLongitude() Obtain <p>Longitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Latitude; Valid range: [-180, 180]; Other restrictions are the same as above</p>
 * @method void setLongitude(string $Longitude) Set <p>Longitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Latitude; Valid range: [-180, 180]; Other restrictions are the same as above</p>
 * @method string getIp() Obtain <p>Public egress IP of the device at the time of collection    </p><p>Input restrictions: Length ≤ 64; Must be a resolvable IPv4/IPv6 address; Private, loopback, link-local, and multicast addresses are considered non-locatable</p>
 * @method void setIp(string $Ip) Set <p>Public egress IP of the device at the time of collection    </p><p>Input restrictions: Length ≤ 64; Must be a resolvable IPv4/IPv6 address; Private, loopback, link-local, and multicast addresses are considered non-locatable</p>
 */
class ExtraRiskInfo extends AbstractModel
{
    /**
     * @var string <p>A stable and unique person identifier within the customer's business domain, used to correlate multiple location reports from the same person to determine whether abnormal displacement exists.</p><p>Input restrictions: Length ≤ 128 characters; Must not contain control characters (ASCII &lt; 0x20 or 0x7F); It is recommended to pass a desensitized identifier instead of a plaintext ID number or mobile number.</p>
     */
    public $PersonId;

    /**
     * @var string <p>Latitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Longitude; Valid range: [-90, 90]; Must be a valid number, NaN/Inf not accepted; Pass as a string in JSON (e.g., &quot;22.5431&quot;)</p>
     */
    public $Latitude;

    /**
     * @var string <p>Longitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Latitude; Valid range: [-180, 180]; Other restrictions are the same as above</p>
     */
    public $Longitude;

    /**
     * @var string <p>Public egress IP of the device at the time of collection    </p><p>Input restrictions: Length ≤ 64; Must be a resolvable IPv4/IPv6 address; Private, loopback, link-local, and multicast addresses are considered non-locatable</p>
     */
    public $Ip;

    /**
     * @param string $PersonId <p>A stable and unique person identifier within the customer's business domain, used to correlate multiple location reports from the same person to determine whether abnormal displacement exists.</p><p>Input restrictions: Length ≤ 128 characters; Must not contain control characters (ASCII &lt; 0x20 or 0x7F); It is recommended to pass a desensitized identifier instead of a plaintext ID number or mobile number.</p>
     * @param string $Latitude <p>Latitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Longitude; Valid range: [-90, 90]; Must be a valid number, NaN/Inf not accepted; Pass as a string in JSON (e.g., &quot;22.5431&quot;)</p>
     * @param string $Longitude <p>Longitude at the time of device collection, in WGS84 decimal degrees    </p><p>Input restrictions: Must be paired with Latitude; Valid range: [-180, 180]; Other restrictions are the same as above</p>
     * @param string $Ip <p>Public egress IP of the device at the time of collection    </p><p>Input restrictions: Length ≤ 64; Must be a resolvable IPv4/IPv6 address; Private, loopback, link-local, and multicast addresses are considered non-locatable</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}
