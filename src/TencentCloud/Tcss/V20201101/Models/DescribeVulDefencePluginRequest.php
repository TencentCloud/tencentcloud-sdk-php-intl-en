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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulDefencePlugin request structure.
 *
 * @method string getHostID() Obtain Host ID or unique super node ID
 * @method void setHostID(string $HostID) Set Host ID or unique super node ID
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter condition
<li>
Status- String - Required: No - Plugin status. Valid values: `INJECTING` (injecting); `SUCCESS` (injected successfully); `FAIL` (injection failed); `TIMEOUT` (plugin timed out); `QUIT` (plugin exited).
</li>
 * @method void setFilters(array $Filters) Set Filter condition
<li>
Status- String - Required: No - Plugin status. Valid values: `INJECTING` (injecting); `SUCCESS` (injected successfully); `FAIL` (injection failed); `TIMEOUT` (plugin timed out); `QUIT` (plugin exited).
</li>
 */
class DescribeVulDefencePluginRequest extends AbstractModel
{
    /**
     * @var string Host ID or unique super node ID
     */
    public $HostID;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter condition
<li>
Status- String - Required: No - Plugin status. Valid values: `INJECTING` (injecting); `SUCCESS` (injected successfully); `FAIL` (injection failed); `TIMEOUT` (plugin timed out); `QUIT` (plugin exited).
</li>
     */
    public $Filters;

    /**
     * @param string $HostID Host ID or unique super node ID
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter condition
<li>
Status- String - Required: No - Plugin status. Valid values: `INJECTING` (injecting); `SUCCESS` (injected successfully); `FAIL` (injection failed); `TIMEOUT` (plugin timed out); `QUIT` (plugin exited).
</li>
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
        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
