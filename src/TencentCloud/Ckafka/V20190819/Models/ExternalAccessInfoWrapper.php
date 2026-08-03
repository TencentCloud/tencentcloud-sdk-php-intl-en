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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result object of the public network route IP allowlist for the instance
 *
 * @method integer getTotalCount() Obtain <p>Number of IP allowlist access rules</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Number of IP allowlist access rules</p>
 * @method array getIpWhitelist() Obtain <p>IP allowlist</p>
 * @method void setIpWhitelist(array $IpWhitelist) Set <p>IP allowlist</p>
 */
class ExternalAccessInfoWrapper extends AbstractModel
{
    /**
     * @var integer <p>Number of IP allowlist access rules</p>
     */
    public $TotalCount;

    /**
     * @var array <p>IP allowlist</p>
     */
    public $IpWhitelist;

    /**
     * @param integer $TotalCount <p>Number of IP allowlist access rules</p>
     * @param array $IpWhitelist <p>IP allowlist</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = [];
            foreach ($param["IpWhitelist"] as $key => $value){
                $obj = new IpWhitelistDTO();
                $obj->deserialize($value);
                array_push($this->IpWhitelist, $obj);
            }
        }
    }
}
