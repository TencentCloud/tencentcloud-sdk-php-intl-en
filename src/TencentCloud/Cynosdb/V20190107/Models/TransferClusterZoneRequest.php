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
 * TransferClusterZone request structure.
 *
 * @method string getClusterId() Obtain Source cluster Id
 * @method void setClusterId(string $ClusterId) Set Source cluster Id
 * @method string getDstZone() Obtain Target zone
 * @method void setDstZone(string $DstZone) Set Target zone
 * @method integer getMaxLag() Obtain Threshold for primary-secondary data latency verification during cross-AZ migration, in milliseconds (ms).
 * @method void setMaxLag(integer $MaxLag) Set Threshold for primary-secondary data latency verification during cross-AZ migration, in milliseconds (ms).
 * @method string getTransferType() Obtain Immediate: immediate execution. InMaintain: execute within the time window.
 * @method void setTransferType(string $TransferType) Set Immediate: immediate execution. InMaintain: execute within the time window.
 * @method string getDstSlaveZone() Obtain Secondary AZ in a multi-availability zone
 * @method void setDstSlaveZone(string $DstSlaveZone) Set Secondary AZ in a multi-availability zone
 * @method array getProxyZones() Obtain Target zone info for proxy migration
 * @method void setProxyZones(array $ProxyZones) Set Target zone info for proxy migration
 */
class TransferClusterZoneRequest extends AbstractModel
{
    /**
     * @var string Source cluster Id
     */
    public $ClusterId;

    /**
     * @var string Target zone
     */
    public $DstZone;

    /**
     * @var integer Threshold for primary-secondary data latency verification during cross-AZ migration, in milliseconds (ms).
     */
    public $MaxLag;

    /**
     * @var string Immediate: immediate execution. InMaintain: execute within the time window.
     */
    public $TransferType;

    /**
     * @var string Secondary AZ in a multi-availability zone
     */
    public $DstSlaveZone;

    /**
     * @var array Target zone info for proxy migration
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId Source cluster Id
     * @param string $DstZone Target zone
     * @param integer $MaxLag Threshold for primary-secondary data latency verification during cross-AZ migration, in milliseconds (ms).
     * @param string $TransferType Immediate: immediate execution. InMaintain: execute within the time window.
     * @param string $DstSlaveZone Secondary AZ in a multi-availability zone
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

        if (array_key_exists("MaxLag",$param) and $param["MaxLag"] !== null) {
            $this->MaxLag = $param["MaxLag"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("DstSlaveZone",$param) and $param["DstSlaveZone"] !== null) {
            $this->DstSlaveZone = $param["DstSlaveZone"];
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
