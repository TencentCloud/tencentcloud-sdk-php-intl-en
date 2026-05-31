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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckTransferClusterZone request structure.
 *
 * @method string getClusterId() Obtain Source Cluster Id
 * @method void setClusterId(string $ClusterId) Set Source Cluster Id
 * @method string getDstZone() Obtain Target availability zone
 * @method void setDstZone(string $DstZone) Set Target availability zone
 * @method array getProxyZones() Obtain Target zone info for proxy migration
 * @method void setProxyZones(array $ProxyZones) Set Target zone info for proxy migration
 */
class CheckTransferClusterZoneRequest extends AbstractModel
{
    /**
     * @var string Source Cluster Id
     */
    public $ClusterId;

    /**
     * @var string Target availability zone
     */
    public $DstZone;

    /**
     * @var array Target zone info for proxy migration
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId Source Cluster Id
     * @param string $DstZone Target availability zone
     * @param array $ProxyZones Target zone info for proxy migration
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DstZone",$param) and $param["DstZone"] !== null) {
            $this->DstZone = $param["DstZone"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
