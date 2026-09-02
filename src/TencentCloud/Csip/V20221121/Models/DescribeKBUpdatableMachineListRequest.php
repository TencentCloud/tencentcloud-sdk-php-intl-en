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
 * DescribeKBUpdatableMachineList request structure.
 *
 * @method array getKBIds() Obtain <p>KB patch ID list, supports up to 100</p>
 * @method void setKBIds(array $KBIds) Set <p>KB patch ID list, supports up to 100</p>
 * @method integer getOffset() Obtain <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
 * @method integer getLimit() Obtain <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
 * @method void setLimit(integer $Limit) Set <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
 * @method array getFilters() Obtain <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy match, search by host name<br>MachineIp - fuzzy match, search by host IP<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported</p>
 * @method void setFilters(array $Filters) Set <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy match, search by host name<br>MachineIp - fuzzy match, search by host IP<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported</p>
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 */
class DescribeKBUpdatableMachineListRequest extends AbstractModel
{
    /**
     * @var array <p>KB patch ID list, supports up to 100</p>
     */
    public $KBIds;

    /**
     * @var integer <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
     */
    public $Limit;

    /**
     * @var array <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy match, search by host name<br>MachineIp - fuzzy match, search by host IP<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported</p>
     */
    public $Filters;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @param array $KBIds <p>KB patch ID list, supports up to 100</p>
     * @param integer $Offset <p>Paging offset<br>Value range: [0, +∞)<br>Default value: 0</p>
     * @param integer $Limit <p>Number of results per page<br>Value range: [1, 100]<br>Default value: 10</p>
     * @param array $Filters <p>Filter criteria<br>Supported Filter.Name:<br>InstanceId - exact match, filter by host instance ID<br>MachineName - fuzzy match, search by host name<br>MachineIp - fuzzy match, search by host IP<br>SupportAutoFix - exact match, filter by whether automatic fixing is supported: 0-unsupported 1-supported</p>
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
        if (array_key_exists("KBIds",$param) and $param["KBIds"] !== null) {
            $this->KBIds = $param["KBIds"];
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
