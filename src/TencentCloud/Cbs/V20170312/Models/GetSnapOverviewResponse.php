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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSnapOverview response structure.
 *
 * @method float getTotalSize() Obtain The total snapshot size of the user
 * @method void setTotalSize(float $TotalSize) Set The total snapshot size of the user
 * @method float getRealTradeSize() Obtain The total billed snapshot size of the user
 * @method void setRealTradeSize(float $RealTradeSize) Set The total billed snapshot size of the user
 * @method float getFreeQuota() Obtain Free tier of snapshot
 * @method void setFreeQuota(float $FreeQuota) Set Free tier of snapshot
 * @method integer getTotalNums() Obtain Total number of snapshots
 * @method void setTotalNums(integer $TotalNums) Set Total number of snapshots
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSnapOverviewResponse extends AbstractModel
{
    /**
     * @var float The total snapshot size of the user
     */
    public $TotalSize;

    /**
     * @var float The total billed snapshot size of the user
     */
    public $RealTradeSize;

    /**
     * @var float Free tier of snapshot
     */
    public $FreeQuota;

    /**
     * @var integer Total number of snapshots
     */
    public $TotalNums;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param float $TotalSize The total snapshot size of the user
     * @param float $RealTradeSize The total billed snapshot size of the user
     * @param float $FreeQuota Free tier of snapshot
     * @param integer $TotalNums Total number of snapshots
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RealTradeSize",$param) and $param["RealTradeSize"] !== null) {
            $this->RealTradeSize = $param["RealTradeSize"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("TotalNums",$param) and $param["TotalNums"] !== null) {
            $this->TotalNums = $param["TotalNums"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
