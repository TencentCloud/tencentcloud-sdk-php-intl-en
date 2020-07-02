<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Player latency information
 *
 * @method string getPlayerId() Obtain Player ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPlayerId(string $PlayerId) Set Player ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRegionIdentifier() Obtain Name of region corresponding to latency
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionIdentifier(string $RegionIdentifier) Set Name of region corresponding to latency
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLatencyInMilliseconds() Obtain Latency in milliseconds
 * @method void setLatencyInMilliseconds(integer $LatencyInMilliseconds) Set Latency in milliseconds
 */
class PlayerLatency extends AbstractModel
{
    /**
     * @var string Player ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PlayerId;

    /**
     * @var string Name of region corresponding to latency
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionIdentifier;

    /**
     * @var integer Latency in milliseconds
     */
    public $LatencyInMilliseconds;

    /**
     * @param string $PlayerId Player ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RegionIdentifier Name of region corresponding to latency
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LatencyInMilliseconds Latency in milliseconds
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
        if (array_key_exists("PlayerId",$param) and $param["PlayerId"] !== null) {
            $this->PlayerId = $param["PlayerId"];
        }

        if (array_key_exists("RegionIdentifier",$param) and $param["RegionIdentifier"] !== null) {
            $this->RegionIdentifier = $param["RegionIdentifier"];
        }

        if (array_key_exists("LatencyInMilliseconds",$param) and $param["LatencyInMilliseconds"] !== null) {
            $this->LatencyInMilliseconds = $param["LatencyInMilliseconds"];
        }
    }
}
