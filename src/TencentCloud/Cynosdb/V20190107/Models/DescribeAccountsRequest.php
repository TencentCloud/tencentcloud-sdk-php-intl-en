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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccounts request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getAccountNames() Obtain Account list to filter
 * @method void setAccountNames(array $AccountNames) Set Account list to filter
 * @method string getDbType() Obtain Database type. Valid values: 
<li> MYSQL </li>
This parameter is no longer in use.
 * @method void setDbType(string $DbType) Set Database type. Valid values: 
<li> MYSQL </li>
This parameter is no longer in use.
 * @method array getHosts() Obtain Account list to filter
 * @method void setHosts(array $Hosts) Set Account list to filter
 * @method integer getLimit() Obtain Limit amount
 * @method void setLimit(integer $Limit) Set Limit amount
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getAccountRegular() Obtain Fuzzy match a keyword (match both AccountName and AccountHost at the same time, return the union of results, and support regular expressions)
 * @method void setAccountRegular(string $AccountRegular) Set Fuzzy match a keyword (match both AccountName and AccountHost at the same time, return the union of results, and support regular expressions)
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Account list to filter
     */
    public $AccountNames;

    /**
     * @var string Database type. Valid values: 
<li> MYSQL </li>
This parameter is no longer in use.
     */
    public $DbType;

    /**
     * @var array Account list to filter
     */
    public $Hosts;

    /**
     * @var integer Limit amount
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Fuzzy match a keyword (match both AccountName and AccountHost at the same time, return the union of results, and support regular expressions)
     */
    public $AccountRegular;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $AccountNames Account list to filter
     * @param string $DbType Database type. Valid values: 
<li> MYSQL </li>
This parameter is no longer in use.
     * @param array $Hosts Account list to filter
     * @param integer $Limit Limit amount
     * @param integer $Offset Offset.
     * @param string $AccountRegular Fuzzy match a keyword (match both AccountName and AccountHost at the same time, return the union of results, and support regular expressions)
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
