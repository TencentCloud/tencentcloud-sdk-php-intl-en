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
 * DescribeMachineClearHistory request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filtering criteriaWhen multiple filtering criteria are used, Keywords and Time interval take the intersection. Keywords: instance name/private network/public IP address. Time interval: time interval</p>
 * @method void setFilters(array $Filters) Set <p>Filtering criteriaWhen multiple filtering criteria are used, Keywords and Time interval take the intersection. Keywords: instance name/private network/public IP address. Time interval: time interval</p>
 * @method integer getLimit() Obtain <p>Limit entries. Default: 10. Maximum: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Limit entries. Default: 10. Maximum: 100</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0</p>
 * @method string getOrder() Obtain <p>Ascending order: ASC; descending order: DESC; ASC by default</p>
 * @method void setOrder(string $Order) Set <p>Ascending order: ASC; descending order: DESC; ASC by default</p>
 * @method string getBy() Obtain <p>AgentLastOfflineTime Client's last offline timeAutoClearTime Clearing time</p>
 * @method void setBy(string $By) Set <p>AgentLastOfflineTime Client's last offline timeAutoClearTime Clearing time</p>
 */
class DescribeMachineClearHistoryRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filtering criteriaWhen multiple filtering criteria are used, Keywords and Time interval take the intersection. Keywords: instance name/private network/public IP address. Time interval: time interval</p>
     */
    public $Filters;

    /**
     * @var integer <p>Limit entries. Default: 10. Maximum: 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Ascending order: ASC; descending order: DESC; ASC by default</p>
     */
    public $Order;

    /**
     * @var string <p>AgentLastOfflineTime Client's last offline timeAutoClearTime Clearing time</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filtering criteriaWhen multiple filtering criteria are used, Keywords and Time interval take the intersection. Keywords: instance name/private network/public IP address. Time interval: time interval</p>
     * @param integer $Limit <p>Limit entries. Default: 10. Maximum: 100</p>
     * @param integer $Offset <p>Offset. Default value: 0</p>
     * @param string $Order <p>Ascending order: ASC; descending order: DESC; ASC by default</p>
     * @param string $By <p>AgentLastOfflineTime Client's last offline timeAutoClearTime Clearing time</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilters();
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
