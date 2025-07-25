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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostsSetting request structure.
 *
 * @method string getZoneId() Obtain Site ID
 * @method void setZoneId(string $ZoneId) Set Site ID
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 100. Maximum value: 1000.
 * @method array getHosts() Obtain Specifies a domain name for the query
 * @method void setHosts(array $Hosts) Set Specifies a domain name for the query
 */
class DescribeHostsSettingRequest extends AbstractModel
{
    /**
     * @var string Site ID
     */
    public $ZoneId;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 100. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Specifies a domain name for the query
     */
    public $Hosts;

    /**
     * @param string $ZoneId Site ID
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 100. Maximum value: 1000.
     * @param array $Hosts Specifies a domain name for the query
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }
    }
}
