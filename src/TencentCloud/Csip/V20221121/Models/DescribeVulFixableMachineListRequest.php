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
 * DescribeVulFixableMachineList request structure.
 *
 * @method array getVulIds() Obtain <p>Vulnerability ID list, a maximum of 100</p>
 * @method void setVulIds(array $VulIds) Set <p>Vulnerability ID list, a maximum of 100</p>
 * @method integer getOffset() Obtain <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - fuzzy matching, search by asset ID, asset name<br>ComponentName - fuzzy matching, search by associated component name<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy matching, search by host name<br>MachineIp - fuzzy matching, search by host IP<br>OsType - exact match, filter by OS type: linux/windows<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported<br>Tag - exact match, filter by asset tag<br>AppId - exact match, filter by associated account</p>
 * @method void setFilters(array $Filters) Set <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - fuzzy matching, search by asset ID, asset name<br>ComponentName - fuzzy matching, search by associated component name<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy matching, search by host name<br>MachineIp - fuzzy matching, search by host IP<br>OsType - exact match, filter by OS type: linux/windows<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported<br>Tag - exact match, filter by asset tag<br>AppId - exact match, filter by associated account</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeVulFixableMachineListRequest extends AbstractModel
{
    /**
     * @var array <p>Vulnerability ID list, a maximum of 100</p>
     */
    public $VulIds;

    /**
     * @var integer <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - fuzzy matching, search by asset ID, asset name<br>ComponentName - fuzzy matching, search by associated component name<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy matching, search by host name<br>MachineIp - fuzzy matching, search by host IP<br>OsType - exact match, filter by OS type: linux/windows<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported<br>Tag - exact match, filter by asset tag<br>AppId - exact match, filter by associated account</p>
     */
    public $Filters;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param array $VulIds <p>Vulnerability ID list, a maximum of 100</p>
     * @param integer $Offset <p>Paging offset<br>Value ranges from 0 to +∞<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value ranges from 1 to 100<br>Default value: 10</p>
     * @param array $Filters <p>Filtering Conditions<br>Supported Filter.Name:<br>Keyword - fuzzy matching, search by asset ID, asset name<br>ComponentName - fuzzy matching, search by associated component name<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy matching, search by host name<br>MachineIp - fuzzy matching, search by host IP<br>OsType - exact match, filter by OS type: linux/windows<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported<br>Tag - exact match, filter by asset tag<br>AppId - exact match, filter by associated account</p>
     * @param array $MemberId Group Account Member ID
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
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = $param["VulIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
