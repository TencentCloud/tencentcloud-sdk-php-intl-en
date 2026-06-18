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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineClearHistory request structure.
 *
 * @method array getFilters() Obtain <p>Filter conditions<br>When multiple conditions are used, Keywords and TimeBetween are intersected</p><li>Keywords: instance name, private IP, or public IP</li><li>TimeBetween: time range</li>
 * @method void setFilters(array $Filters) Set <p>Filter conditions<br>When multiple conditions are used, Keywords and TimeBetween are intersected</p><li>Keywords: instance name, private IP, or public IP</li><li>TimeBetween: time range</li>
 * @method integer getLimit() Obtain <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
 * @method void setLimit(integer $Limit) Set <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method string getOrder() Obtain <p>Sort order: ASC for ascending, DESC for descending. Default: ASC</p>
 * @method void setOrder(string $Order) Set <p>Sort order: ASC for ascending, DESC for descending. Default: ASC</p>
 * @method string getBy() Obtain <p>AgentLastOfflineTime: Time when the client was last offline<br>AutoClearTime: Cleanup time</p>
 * @method void setBy(string $By) Set <p>AgentLastOfflineTime: Time when the client was last offline<br>AutoClearTime: Cleanup time</p>
 */
class DescribeMachineClearHistoryRequest extends AbstractModel
{
    /**
     * @var array <p>Filter conditions<br>When multiple conditions are used, Keywords and TimeBetween are intersected</p><li>Keywords: instance name, private IP, or public IP</li><li>TimeBetween: time range</li>
     */
    public $Filters;

    /**
     * @var integer <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sort order: ASC for ascending, DESC for descending. Default: ASC</p>
     */
    public $Order;

    /**
     * @var string <p>AgentLastOfflineTime: Time when the client was last offline<br>AutoClearTime: Cleanup time</p>
     */
    public $By;

    /**
     * @param array $Filters <p>Filter conditions<br>When multiple conditions are used, Keywords and TimeBetween are intersected</p><li>Keywords: instance name, private IP, or public IP</li><li>TimeBetween: time range</li>
     * @param integer $Limit <p>The maximum number of entries. Default value: 10. Maximum value: 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param string $Order <p>Sort order: ASC for ascending, DESC for descending. Default: ASC</p>
     * @param string $By <p>AgentLastOfflineTime: Time when the client was last offline<br>AutoClearTime: Cleanup time</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
