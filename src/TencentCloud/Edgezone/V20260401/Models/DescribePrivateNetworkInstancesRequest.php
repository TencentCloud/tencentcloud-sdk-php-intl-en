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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrivateNetworkInstances request structure.
 *
 * @method string getNetworkInstanceId() Obtain Private network instance Id
 * @method void setNetworkInstanceId(string $NetworkInstanceId) Set Private network instance Id
 * @method string getNetworkInstanceName() Obtain New instance name
 * @method void setNetworkInstanceName(string $NetworkInstanceName) Set New instance name
 * @method string getZoneId() Obtain Availability zone ID.
 * @method void setZoneId(string $ZoneId) Set Availability zone ID.
 * @method integer getOffset() Obtain Pagination offset, default 0
 * @method void setOffset(integer $Offset) Set Pagination offset, default 0
 * @method integer getLimit() Obtain Number of items per page. Default 20. Maximum 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. Default 20. Maximum 100.
 */
class DescribePrivateNetworkInstancesRequest extends AbstractModel
{
    /**
     * @var string Private network instance Id
     */
    public $NetworkInstanceId;

    /**
     * @var string New instance name
     */
    public $NetworkInstanceName;

    /**
     * @var string Availability zone ID.
     */
    public $ZoneId;

    /**
     * @var integer Pagination offset, default 0
     */
    public $Offset;

    /**
     * @var integer Number of items per page. Default 20. Maximum 100.
     */
    public $Limit;

    /**
     * @param string $NetworkInstanceId Private network instance Id
     * @param string $NetworkInstanceName New instance name
     * @param string $ZoneId Availability zone ID.
     * @param integer $Offset Pagination offset, default 0
     * @param integer $Limit Number of items per page. Default 20. Maximum 100.
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("NetworkInstanceName",$param) and $param["NetworkInstanceName"] !== null) {
            $this->NetworkInstanceName = $param["NetworkInstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
