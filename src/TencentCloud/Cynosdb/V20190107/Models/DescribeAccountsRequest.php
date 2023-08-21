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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getAccountNames() Obtain List of accounts to be filtered
 * @method void setAccountNames(array $AccountNames) Set List of accounts to be filtered
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
This parameter has been disused.
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
This parameter has been disused.
 * @method array getHosts() Obtain List of accounts to be filtered
 * @method void setHosts(array $Hosts) Set List of accounts to be filtered
 * @method integer getLimit() Obtain Maximum entries returned per page
 * @method void setLimit(integer $Limit) Set Maximum entries returned per page
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getAccountRegular() Obtain Keywords for fuzzy search (match `AccountName` and `AccountHost` at the same time), which supports regex. The union results will be returned.
 * @method void setAccountRegular(string $AccountRegular) Set Keywords for fuzzy search (match `AccountName` and `AccountHost` at the same time), which supports regex. The union results will be returned.
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array List of accounts to be filtered
     */
    public $AccountNames;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
This parameter has been disused.
     */
    public $DbType;

    /**
     * @var array List of accounts to be filtered
     */
    public $Hosts;

    /**
     * @var integer Maximum entries returned per page
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Keywords for fuzzy search (match `AccountName` and `AccountHost` at the same time), which supports regex. The union results will be returned.
     */
    public $AccountRegular;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $AccountNames List of accounts to be filtered
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
This parameter has been disused.
     * @param array $Hosts List of accounts to be filtered
     * @param integer $Limit Maximum entries returned per page
     * @param integer $Offset Offset
     * @param string $AccountRegular Keywords for fuzzy search (match `AccountName` and `AccountHost` at the same time), which supports regex. The union results will be returned.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AccountNames",$param) and $param["AccountNames"] !== null) {
            $this->AccountNames = $param["AccountNames"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AccountRegular",$param) and $param["AccountRegular"] !== null) {
            $this->AccountRegular = $param["AccountRegular"];
        }
    }
}
