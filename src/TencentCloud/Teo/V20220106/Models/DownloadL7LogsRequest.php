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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DownloadL7Logs request structure.
 *
 * @method string getStartTime() Obtain Start time. It must conform to the RFC3339 standard.
 * @method void setStartTime(string $StartTime) Set Start time. It must conform to the RFC3339 standard.
 * @method string getEndTime() Obtain End time. It must conform to the RFC3339 standard.
 * @method void setEndTime(string $EndTime) Set End time. It must conform to the RFC3339 standard.
 * @method integer getPageSize() Obtain Number of entries per page
 * @method void setPageSize(integer $PageSize) Set Number of entries per page
 * @method integer getPageNo() Obtain Current page
 * @method void setPageNo(integer $PageNo) Set Current page
 * @method array getZones() Obtain Array of site names
 * @method void setZones(array $Zones) Set Array of site names
 * @method array getDomains() Obtain Array of subdomain names
 * @method void setDomains(array $Domains) Set Array of subdomain names
 */
class DownloadL7LogsRequest extends AbstractModel
{
    /**
     * @var string Start time. It must conform to the RFC3339 standard.
     */
    public $StartTime;

    /**
     * @var string End time. It must conform to the RFC3339 standard.
     */
    public $EndTime;

    /**
     * @var integer Number of entries per page
     */
    public $PageSize;

    /**
     * @var integer Current page
     */
    public $PageNo;

    /**
     * @var array Array of site names
     */
    public $Zones;

    /**
     * @var array Array of subdomain names
     */
    public $Domains;

    /**
     * @param string $StartTime Start time. It must conform to the RFC3339 standard.
     * @param string $EndTime End time. It must conform to the RFC3339 standard.
     * @param integer $PageSize Number of entries per page
     * @param integer $PageNo Current page
     * @param array $Zones Array of site names
     * @param array $Domains Array of subdomain names
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
