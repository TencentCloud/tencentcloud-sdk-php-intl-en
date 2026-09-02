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
 * Dspm ip statistics
 *
 * @method integer getIpCount() Obtain Number of accessed IPs
 * @method void setIpCount(integer $IpCount) Set Number of accessed IPs
 * @method integer getUnmarkedPublicIpCount() Obtain Number of untagged public IPs
 * @method void setUnmarkedPublicIpCount(integer $UnmarkedPublicIpCount) Set Number of untagged public IPs
 * @method integer getPrivateIpCount() Obtain Number of private network IPs
 * @method void setPrivateIpCount(integer $PrivateIpCount) Set Number of private network IPs
 */
class DspmIpCount extends AbstractModel
{
    /**
     * @var integer Number of accessed IPs
     */
    public $IpCount;

    /**
     * @var integer Number of untagged public IPs
     */
    public $UnmarkedPublicIpCount;

    /**
     * @var integer Number of private network IPs
     */
    public $PrivateIpCount;

    /**
     * @param integer $IpCount Number of accessed IPs
     * @param integer $UnmarkedPublicIpCount Number of untagged public IPs
     * @param integer $PrivateIpCount Number of private network IPs
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
        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("UnmarkedPublicIpCount",$param) and $param["UnmarkedPublicIpCount"] !== null) {
            $this->UnmarkedPublicIpCount = $param["UnmarkedPublicIpCount"];
        }

        if (array_key_exists("PrivateIpCount",$param) and $param["PrivateIpCount"] !== null) {
            $this->PrivateIpCount = $param["PrivateIpCount"];
        }
    }
}
