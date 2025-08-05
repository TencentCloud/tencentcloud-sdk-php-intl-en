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
 * Multi-Channel security gateway available region.
 *
 * @method string getRegionId() Obtain Region ID.
 * @method void setRegionId(string $RegionId) Set Region ID.
 * @method string getCNName() Obtain Chinese region name.
 * @method void setCNName(string $CNName) Set Chinese region name.
 * @method string getENName() Obtain English name of the region.
 * @method void setENName(string $ENName) Set English name of the region.
 */
class GatewayRegion extends AbstractModel
{
    /**
     * @var string Region ID.
     */
    public $RegionId;

    /**
     * @var string Chinese region name.
     */
    public $CNName;

    /**
     * @var string English name of the region.
     */
    public $ENName;

    /**
     * @param string $RegionId Region ID.
     * @param string $CNName Chinese region name.
     * @param string $ENName English name of the region.
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("CNName",$param) and $param["CNName"] !== null) {
            $this->CNName = $param["CNName"];
        }

        if (array_key_exists("ENName",$param) and $param["ENName"] !== null) {
            $this->ENName = $param["ENName"];
        }
    }
}
