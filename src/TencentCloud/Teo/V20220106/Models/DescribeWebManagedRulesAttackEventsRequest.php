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
 * DescribeWebManagedRulesAttackEvents request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getPageSize() Obtain Number of items
 * @method void setPageSize(integer $PageSize) Set Number of items
 * @method integer getPageNo() Obtain Current page
 * @method void setPageNo(integer $PageNo) Set Current page
 * @method array getPolicyIds() Obtain List of DDoS policy group IDs
 * @method void setPolicyIds(array $PolicyIds) Set List of DDoS policy group IDs
 * @method array getZoneIds() Obtain Site set
 * @method void setZoneIds(array $ZoneIds) Set Site set
 * @method array getDomains() Obtain List of subdomain names
 * @method void setDomains(array $Domains) Set List of subdomain names
 * @method string getIsShowDetail() Obtain Whether to show details. Valid values: Y (yes), N (no).
 * @method void setIsShowDetail(string $IsShowDetail) Set Whether to show details. Valid values: Y (yes), N (no).
 */
class DescribeWebManagedRulesAttackEventsRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Number of items
     */
    public $PageSize;

    /**
     * @var integer Current page
     */
    public $PageNo;

    /**
     * @var array List of DDoS policy group IDs
     */
    public $PolicyIds;

    /**
     * @var array Site set
     */
    public $ZoneIds;

    /**
     * @var array List of subdomain names
     */
    public $Domains;

    /**
     * @var string Whether to show details. Valid values: Y (yes), N (no).
     */
    public $IsShowDetail;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $PageSize Number of items
     * @param integer $PageNo Current page
     * @param array $PolicyIds List of DDoS policy group IDs
     * @param array $ZoneIds Site set
     * @param array $Domains List of subdomain names
     * @param string $IsShowDetail Whether to show details. Valid values: Y (yes), N (no).
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

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("IsShowDetail",$param) and $param["IsShowDetail"] !== null) {
            $this->IsShowDetail = $param["IsShowDetail"];
        }
    }
}
