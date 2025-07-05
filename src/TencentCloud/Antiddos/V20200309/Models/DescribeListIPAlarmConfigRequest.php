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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListIPAlarmConfig request structure.
 *
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of items per page. The default value is 20 when Limit = 0. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. The default value is 20 when Limit = 0. The maximum value is 100.
 * @method string getFilterInstanceId() Obtain Anti-DDoS instance ID filter. Anti-DDoS instance prefix wildcard search is supported. For example, you can filter Anti-DDoS Pro instances by `bgp-*`.
 * @method void setFilterInstanceId(string $FilterInstanceId) Set Anti-DDoS instance ID filter. Anti-DDoS instance prefix wildcard search is supported. For example, you can filter Anti-DDoS Pro instances by `bgp-*`.
 * @method integer getFilterAlarmType() Obtain Alarm threshold type filter. Valid values:
`1`: alarm threshold for inbound traffic
`2`: alarm threshold for cleansing attack traffic
]
 * @method void setFilterAlarmType(integer $FilterAlarmType) Set Alarm threshold type filter. Valid values:
`1`: alarm threshold for inbound traffic
`2`: alarm threshold for cleansing attack traffic
]
 * @method string getFilterIp() Obtain IP filter
 * @method void setFilterIp(string $FilterIp) Set IP filter
 * @method string getFilterCname() Obtain CNAME of the Anti-DDoS Advanced instance
 * @method void setFilterCname(string $FilterCname) Set CNAME of the Anti-DDoS Advanced instance
 */
class DescribeListIPAlarmConfigRequest extends AbstractModel
{
    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. The default value is 20 when Limit = 0. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var string Anti-DDoS instance ID filter. Anti-DDoS instance prefix wildcard search is supported. For example, you can filter Anti-DDoS Pro instances by `bgp-*`.
     */
    public $FilterInstanceId;

    /**
     * @var integer Alarm threshold type filter. Valid values:
`1`: alarm threshold for inbound traffic
`2`: alarm threshold for cleansing attack traffic
]
     */
    public $FilterAlarmType;

    /**
     * @var string IP filter
     */
    public $FilterIp;

    /**
     * @var string CNAME of the Anti-DDoS Advanced instance
     */
    public $FilterCname;

    /**
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of items per page. The default value is 20 when Limit = 0. The maximum value is 100.
     * @param string $FilterInstanceId Anti-DDoS instance ID filter. Anti-DDoS instance prefix wildcard search is supported. For example, you can filter Anti-DDoS Pro instances by `bgp-*`.
     * @param integer $FilterAlarmType Alarm threshold type filter. Valid values:
`1`: alarm threshold for inbound traffic
`2`: alarm threshold for cleansing attack traffic
]
     * @param string $FilterIp IP filter
     * @param string $FilterCname CNAME of the Anti-DDoS Advanced instance
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterAlarmType",$param) and $param["FilterAlarmType"] !== null) {
            $this->FilterAlarmType = $param["FilterAlarmType"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterCname",$param) and $param["FilterCname"] !== null) {
            $this->FilterCname = $param["FilterCname"];
        }
    }
}
