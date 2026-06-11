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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachines request structure.
 *
 * @method string getGroupId() Obtain Machine group ID to query.

-Obtain the machine group ID by searching the machine group list (https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
 * @method void setGroupId(string $GroupId) Set Machine group ID to query.

-Obtain the machine group ID by searching the machine group list (https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
 * @method array getFilters() Obtain ip
-Filter by ip.
-Type: String
-Required: No

instance
-Filter by instance id.
-Type: String
-Required: No

version
- Filter by LogListener version.
-Type: String
-Required: No

status
- Filter by machine status.
-Type: String
-Optional: No.
-Available values: 0: offline, 1: normal

offlineTime
- Filter by machine offline time.
-Type: String
-Optional: No.
-Available values: 0: no offline time, 12: within 12 hours, 24: within a day, 48: within two days, 99: before two days

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method void setFilters(array $Filters) Set ip
-Filter by ip.
-Type: String
-Required: No

instance
-Filter by instance id.
-Type: String
-Required: No

version
- Filter by LogListener version.
-Type: String
-Required: No

status
- Filter by machine status.
-Type: String
-Optional: No.
-Available values: 0: offline, 1: normal

offlineTime
- Filter by machine offline time.
-Type: String
-Optional: No.
-Available values: 0: no offline time, 12: within 12 hours, 24: within a day, 48: within two days, 99: before two days

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Limit on the number of entries per page. A maximum of 100 entries are supported.
 * @method void setLimit(integer $Limit) Set Limit on the number of entries per page. A maximum of 100 entries are supported.
 */
class DescribeMachinesRequest extends AbstractModel
{
    /**
     * @var string Machine group ID to query.

-Obtain the machine group ID by searching the machine group list (https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
     */
    public $GroupId;

    /**
     * @var array ip
-Filter by ip.
-Type: String
-Required: No

instance
-Filter by instance id.
-Type: String
-Required: No

version
- Filter by LogListener version.
-Type: String
-Required: No

status
- Filter by machine status.
-Type: String
-Optional: No.
-Available values: 0: offline, 1: normal

offlineTime
- Filter by machine offline time.
-Type: String
-Optional: No.
-Available values: 0: no offline time, 12: within 12 hours, 24: within a day, 48: within two days, 99: before two days

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     */
    public $Filters;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Limit on the number of entries per page. A maximum of 100 entries are supported.
     */
    public $Limit;

    /**
     * @param string $GroupId Machine group ID to query.

-Obtain the machine group ID by searching the machine group list (https://www.tencentcloud.com/document/api/614/56438?from_cn_redirect=1).
     * @param array $Filters ip
-Filter by ip.
-Type: String
-Required: No

instance
-Filter by instance id.
-Type: String
-Required: No

version
- Filter by LogListener version.
-Type: String
-Required: No

status
- Filter by machine status.
-Type: String
-Optional: No.
-Available values: 0: offline, 1: normal

offlineTime
- Filter by machine offline time.
-Type: String
-Optional: No.
-Available values: 0: no offline time, 12: within 12 hours, 24: within a day, 48: within two days, 99: before two days

Each request can have up to 10 Filters. The upper limit of Filter.Values is 100.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Limit on the number of entries per page. A maximum of 100 entries are supported.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
