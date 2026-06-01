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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
 * @method integer getOffset() Obtain Record offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Record offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of results to be returned for a single request. Value range: 1-100. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned for a single request. Value range: 1-100. Default value: `20`.
 * @method string getAccountRegexp() Obtain Regex for matching account names, which complies with the rules at MySQL's official website
 * @method void setAccountRegexp(string $AccountRegexp) Set Regex for matching account names, which complies with the rules at MySQL's official website
 * @method string getSortBy() Obtain Default none, support: ASC, DESC, asc, desc
 * @method void setSortBy(string $SortBy) Set Default none, support: ASC, DESC, asc, desc
 * @method string getOrderBy() Obtain Time field for sorting. Options: CreateTime (account creation time), ModifyTime (update time), ModifyPasswordTime (password modification time).
 * @method void setOrderBy(string $OrderBy) Set Time field for sorting. Options: CreateTime (account creation time), ModifyTime (update time), ModifyPasswordTime (password modification time).
 * @method string getHostRegexp() Obtain Regular expression to match the account host address (Host). The rule is the same as that on the MySQL official website.
 * @method void setHostRegexp(string $HostRegexp) Set Regular expression to match the account host address (Host). The rule is the same as that on the MySQL official website.
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     */
    public $InstanceId;

    /**
     * @var integer Record offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned for a single request. Value range: 1-100. Default value: `20`.
     */
    public $Limit;

    /**
     * @var string Regex for matching account names, which complies with the rules at MySQL's official website
     */
    public $AccountRegexp;

    /**
     * @var string Default none, support: ASC, DESC, asc, desc
     */
    public $SortBy;

    /**
     * @var string Time field for sorting. Options: CreateTime (account creation time), ModifyTime (update time), ModifyPasswordTime (password modification time).
     */
    public $OrderBy;

    /**
     * @var string Regular expression to match the account host address (Host). The rule is the same as that on the MySQL official website.
     */
    public $HostRegexp;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed in the TencentDB console.
     * @param integer $Offset Record offset. Default value: `0`.
     * @param integer $Limit Number of results to be returned for a single request. Value range: 1-100. Default value: `20`.
     * @param string $AccountRegexp Regex for matching account names, which complies with the rules at MySQL's official website
     * @param string $SortBy Default none, support: ASC, DESC, asc, desc
     * @param string $OrderBy Time field for sorting. Options: CreateTime (account creation time), ModifyTime (update time), ModifyPasswordTime (password modification time).
     * @param string $HostRegexp Regular expression to match the account host address (Host). The rule is the same as that on the MySQL official website.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AccountRegexp",$param) and $param["AccountRegexp"] !== null) {
            $this->AccountRegexp = $param["AccountRegexp"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("HostRegexp",$param) and $param["HostRegexp"] !== null) {
            $this->HostRegexp = $param["HostRegexp"];
        }
    }
}
