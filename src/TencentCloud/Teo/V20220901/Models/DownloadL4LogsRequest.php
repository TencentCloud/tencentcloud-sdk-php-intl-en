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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadL4Logs request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method array getZoneIds() Obtain ZoneId set. This parameter is required.
 * @method void setZoneIds(array $ZoneIds) Set ZoneId set. This parameter is required.
 * @method array getProxyIds() Obtain List of L4 proxy instance IDs.
 * @method void setProxyIds(array $ProxyIds) Set List of L4 proxy instance IDs.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 300.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 300.
 * @method integer getOffset() Obtain The page offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0.
 */
class DownloadL4LogsRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time.
     */
    public $EndTime;

    /**
     * @var array ZoneId set. This parameter is required.
     */
    public $ZoneIds;

    /**
     * @var array List of L4 proxy instance IDs.
     */
    public $ProxyIds;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 300.
     */
    public $Limit;

    /**
     * @var integer The page offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime The end time.
     * @param array $ZoneIds ZoneId set. This parameter is required.
     * @param array $ProxyIds List of L4 proxy instance IDs.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 300.
     * @param integer $Offset The page offset. Default value: 0.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
