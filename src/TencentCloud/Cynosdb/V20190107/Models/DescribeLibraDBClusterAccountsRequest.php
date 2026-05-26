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
 * DescribeLibraDBClusterAccounts request structure.
 *
 * @method string getClusterId() Obtain Analysis Cluster id
 * @method void setClusterId(string $ClusterId) Set Analysis Cluster id
 * @method array getAccountNames() Obtain Account name.
 * @method void setAccountNames(array $AccountNames) Set Account name.
 * @method string getAccountRegular() Obtain Fuzzy matching keyword
 * @method void setAccountRegular(string $AccountRegular) Set Fuzzy matching keyword
 * @method array getHosts() Obtain host name
 * @method void setHosts(array $Hosts) Set host name
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 */
class DescribeLibraDBClusterAccountsRequest extends AbstractModel
{
    /**
     * @var string Analysis Cluster id
     */
    public $ClusterId;

    /**
     * @var array Account name.
     */
    public $AccountNames;

    /**
     * @var string Fuzzy matching keyword
     */
    public $AccountRegular;

    /**
     * @var array host name
     */
    public $Hosts;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @param string $ClusterId Analysis Cluster id
     * @param array $AccountNames Account name.
     * @param string $AccountRegular Fuzzy matching keyword
     * @param array $Hosts host name
     * @param integer $Limit Limit
     * @param integer $Offset Offset
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

        if (array_key_exists("AccountRegular",$param) and $param["AccountRegular"] !== null) {
            $this->AccountRegular = $param["AccountRegular"];
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
    }
}
