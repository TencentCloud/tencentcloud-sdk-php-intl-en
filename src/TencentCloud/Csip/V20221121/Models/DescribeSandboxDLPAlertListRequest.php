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
 * DescribeSandboxDLPAlertList request structure.
 *
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method integer getLimit() Obtain <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported filter items:<br>ID: Query a single item by alarm record ID<br>BelongAssetType: The asset type it belongs to. Available values: HOST / CONTAINER<br>RuleName: Search by hit rule name<br>RuleAction: Hit action. Available values: PASS (allowlist) / BLOCK (BLOCK and alarm) / MONITOR (alarm)<br>InstanceId: Precise filtering by Asset Instance ID (for viewing the alarm list of an asset on the Asset Details Page and other scenarios)<br>InstanceName: Fuzzy search by asset instance name. Multiple values have an "OR" relationship with each other<br>Status: Processing Status. Available values: PENDING (unprocessed) / HANDLED (processed) / IGNORE (ignored) / PASS (allowlisted) / BLOCK (blocked)</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported filter items:<br>ID: Query a single item by alarm record ID<br>BelongAssetType: The asset type it belongs to. Available values: HOST / CONTAINER<br>RuleName: Search by hit rule name<br>RuleAction: Hit action. Available values: PASS (allowlist) / BLOCK (BLOCK and alarm) / MONITOR (alarm)<br>InstanceId: Precise filtering by Asset Instance ID (for viewing the alarm list of an asset on the Asset Details Page and other scenarios)<br>InstanceName: Fuzzy search by asset instance name. Multiple values have an "OR" relationship with each other<br>Status: Processing Status. Available values: PENDING (unprocessed) / HANDLED (processed) / IGNORE (ignored) / PASS (allowlisted) / BLOCK (blocked)</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 */
class DescribeSandboxDLPAlertListRequest extends AbstractModel
{
    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported filter items:<br>ID: Query a single item by alarm record ID<br>BelongAssetType: The asset type it belongs to. Available values: HOST / CONTAINER<br>RuleName: Search by hit rule name<br>RuleAction: Hit action. Available values: PASS (allowlist) / BLOCK (BLOCK and alarm) / MONITOR (alarm)<br>InstanceId: Precise filtering by Asset Instance ID (for viewing the alarm list of an asset on the Asset Details Page and other scenarios)<br>InstanceName: Fuzzy search by asset instance name. Multiple values have an "OR" relationship with each other<br>Status: Processing Status. Available values: PENDING (unprocessed) / HANDLED (processed) / IGNORE (ignored) / PASS (allowlisted) / BLOCK (blocked)</p>
     */
    public $Filters;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param integer $Limit <p>Number of items per page. Default value: 10. Upper limit: 200.</p>
     * @param array $Filters <p>Filter criteria<br>Supported filter items:<br>ID: Query a single item by alarm record ID<br>BelongAssetType: The asset type it belongs to. Available values: HOST / CONTAINER<br>RuleName: Search by hit rule name<br>RuleAction: Hit action. Available values: PASS (allowlist) / BLOCK (BLOCK and alarm) / MONITOR (alarm)<br>InstanceId: Precise filtering by Asset Instance ID (for viewing the alarm list of an asset on the Asset Details Page and other scenarios)<br>InstanceName: Fuzzy search by asset instance name. Multiple values have an "OR" relationship with each other<br>Status: Processing Status. Available values: PENDING (unprocessed) / HANDLED (processed) / IGNORE (ignored) / PASS (allowlisted) / BLOCK (blocked)</p>
     * @param array $MemberId <p>Group account member id.</p>
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
