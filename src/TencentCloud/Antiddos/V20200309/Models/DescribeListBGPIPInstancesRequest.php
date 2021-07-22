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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListBGPIPInstances request structure.
 *
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method string getFilterIp() Obtain IP filter
 * @method void setFilterIp(string $FilterIp) Set IP filter
 * @method string getFilterInstanceId() Obtain Anti-DDoS instance ID filter. For example, you can filter the Anti-DDoS Advanced instance ID by `bgpip-00000001`.
 * @method void setFilterInstanceId(string $FilterInstanceId) Set Anti-DDoS instance ID filter. For example, you can filter the Anti-DDoS Advanced instance ID by `bgpip-00000001`.
 * @method integer getFilterLine() Obtain Anti-DDoS Advanced line filter. Valid values:
`1`: BGP line
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
 * @method void setFilterLine(integer $FilterLine) Set Anti-DDoS Advanced line filter. Valid values:
`1`: BGP line
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
 * @method string getFilterRegion() Obtain Region filter. For example, `ap-guangzhou`.
 * @method void setFilterRegion(string $FilterRegion) Set Region filter. For example, `ap-guangzhou`.
 * @method string getFilterName() Obtain Name filter
 * @method void setFilterName(string $FilterName) Set Name filter
 * @method integer getFilterEipType() Obtain Whether to obtain only Anti-DDoS EIP instances. `1`: Yes; `0`: No.
 * @method void setFilterEipType(integer $FilterEipType) Set Whether to obtain only Anti-DDoS EIP instances. `1`: Yes; `0`: No.
 * @method array getFilterEipEipAddressStatus() Obtain Anti-DDoS Advanced instance binding status filter. Valid values: `BINDING`, `BIND`, `UNBINDING`, `UNBIND`. This filter is only valid when `FilterEipType = 1`.
 * @method void setFilterEipEipAddressStatus(array $FilterEipEipAddressStatus) Set Anti-DDoS Advanced instance binding status filter. Valid values: `BINDING`, `BIND`, `UNBINDING`, `UNBIND`. This filter is only valid when `FilterEipType = 1`.
 */
class DescribeListBGPIPInstancesRequest extends AbstractModel
{
    /**
     * @var integer Starting offset of the page. Value: (number of pages – 1) * items per page.
     */
    public $Offset;

    /**
     * @var integer Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
     */
    public $Limit;

    /**
     * @var string IP filter
     */
    public $FilterIp;

    /**
     * @var string Anti-DDoS instance ID filter. For example, you can filter the Anti-DDoS Advanced instance ID by `bgpip-00000001`.
     */
    public $FilterInstanceId;

    /**
     * @var integer Anti-DDoS Advanced line filter. Valid values:
`1`: BGP line
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
     */
    public $FilterLine;

    /**
     * @var string Region filter. For example, `ap-guangzhou`.
     */
    public $FilterRegion;

    /**
     * @var string Name filter
     */
    public $FilterName;

    /**
     * @var integer Whether to obtain only Anti-DDoS EIP instances. `1`: Yes; `0`: No.
     */
    public $FilterEipType;

    /**
     * @var array Anti-DDoS Advanced instance binding status filter. Valid values: `BINDING`, `BIND`, `UNBINDING`, `UNBIND`. This filter is only valid when `FilterEipType = 1`.
     */
    public $FilterEipEipAddressStatus;

    /**
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
     * @param string $FilterIp IP filter
     * @param string $FilterInstanceId Anti-DDoS instance ID filter. For example, you can filter the Anti-DDoS Advanced instance ID by `bgpip-00000001`.
     * @param integer $FilterLine Anti-DDoS Advanced line filter. Valid values:
`1`: BGP line
`2`: China Telecom
`3`: China Unicom
`4`: China Mobile
`99`: third-party line
]
     * @param string $FilterRegion Region filter. For example, `ap-guangzhou`.
     * @param string $FilterName Name filter
     * @param integer $FilterEipType Whether to obtain only Anti-DDoS EIP instances. `1`: Yes; `0`: No.
     * @param array $FilterEipEipAddressStatus Anti-DDoS Advanced instance binding status filter. Valid values: `BINDING`, `BIND`, `UNBINDING`, `UNBIND`. This filter is only valid when `FilterEipType = 1`.
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

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterEipType",$param) and $param["FilterEipType"] !== null) {
            $this->FilterEipType = $param["FilterEipType"];
        }

        if (array_key_exists("FilterEipEipAddressStatus",$param) and $param["FilterEipEipAddressStatus"] !== null) {
            $this->FilterEipEipAddressStatus = $param["FilterEipEipAddressStatus"];
        }
    }
}