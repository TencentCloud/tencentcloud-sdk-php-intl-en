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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSAttackEvent request structure.
 *
 * @method string getStartTime() Obtain Start time. Time range: 30 days.
 * @method void setStartTime(string $StartTime) Set Start time. Time range: 30 days.
 * @method string getEndTime() Obtain End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
 * @method void setEndTime(string $EndTime) Set End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
 * @method array getPolicyIds() Obtain Collection of ddos policy groups. If left blank, all policies are selected by default.
 * @method void setPolicyIds(array $PolicyIds) Set Collection of ddos policy groups. If left blank, all policies are selected by default.
 * @method array getZoneIds() Obtain Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
 * @method void setZoneIds(array $ZoneIds) Set Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
 * @method integer getLimit() Obtain Number limit of paginated query. Default value: 20. Maximum number of query entries: 1000.
 * @method void setLimit(integer $Limit) Set Number limit of paginated query. Default value: 20. Maximum number of query entries: 1000.
 * @method integer getOffset() Obtain Page offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Page offset. Default value: 0
 * @method boolean getShowDetail() Obtain Parameter to show attack details. If set to `false`, only the number of attacks is returned. If set to `true`, attack details are returned.
 * @method void setShowDetail(boolean $ShowDetail) Set Parameter to show attack details. If set to `false`, only the number of attacks is returned. If set to `true`, attack details are returned.
 * @method string getArea() Obtain Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data;</li>If this parameter is not input, the default value `global` is used.
 * @method void setArea(string $Area) Set Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data;</li>If this parameter is not input, the default value `global` is used.
 * @method string getOrderBy() Obtain Sorting field. Valid values:
<li>MaxBandWidth: bandwidth peak;</li>
<li>AttackStartTime: attack start time.</li>If not specified, the default value is AttackStartTime.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values:
<li>MaxBandWidth: bandwidth peak;</li>
<li>AttackStartTime: attack start time.</li>If not specified, the default value is AttackStartTime.
 * @method string getOrderType() Obtain Sorting method. Valid values:
<li>asc: in ascending order;</li>
<li>desc: in descending order.</li> If not specified, the default value is desc.
 * @method void setOrderType(string $OrderType) Set Sorting method. Valid values:
<li>asc: in ascending order;</li>
<li>desc: in descending order.</li> If not specified, the default value is desc.
 */
class DescribeDDoSAttackEventRequest extends AbstractModel
{
    /**
     * @var string Start time. Time range: 30 days.
     */
    public $StartTime;

    /**
     * @var string End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
     */
    public $EndTime;

    /**
     * @var array Collection of ddos policy groups. If left blank, all policies are selected by default.
     */
    public $PolicyIds;

    /**
     * @var array Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
     */
    public $ZoneIds;

    /**
     * @var integer Number limit of paginated query. Default value: 20. Maximum number of query entries: 1000.
     */
    public $Limit;

    /**
     * @var integer Page offset. Default value: 0
     */
    public $Offset;

    /**
     * @var boolean Parameter to show attack details. If set to `false`, only the number of attacks is returned. If set to `true`, attack details are returned.
     */
    public $ShowDetail;

    /**
     * @var string Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data;</li>If this parameter is not input, the default value `global` is used.
     */
    public $Area;

    /**
     * @var string Sorting field. Valid values:
<li>MaxBandWidth: bandwidth peak;</li>
<li>AttackStartTime: attack start time.</li>If not specified, the default value is AttackStartTime.
     */
    public $OrderBy;

    /**
     * @var string Sorting method. Valid values:
<li>asc: in ascending order;</li>
<li>desc: in descending order.</li> If not specified, the default value is desc.
     */
    public $OrderType;

    /**
     * @param string $StartTime Start time. Time range: 30 days.
     * @param string $EndTime End time. The query time range (`EndTime` - `StartTime`) must be up to 31 days.
     * @param array $PolicyIds Collection of ddos policy groups. If left blank, all policies are selected by default.
     * @param array $ZoneIds Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: [Tencent Cloud EdgeOne Cloud API Change Notification](https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1). You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use `*` instead. To query account-level data, you need permission for all site resources of this interface.
     * @param integer $Limit Number limit of paginated query. Default value: 20. Maximum number of query entries: 1000.
     * @param integer $Offset Page offset. Default value: 0
     * @param boolean $ShowDetail Parameter to show attack details. If set to `false`, only the number of attacks is returned. If set to `true`, attack details are returned.
     * @param string $Area Data ownership region. Valid values:
<li>overseas: global (excluding the Chinese mainland) data;</li>
<li>mainland: Chinese mainland data;</li>
<li>global: global data;</li>If this parameter is not input, the default value `global` is used.
     * @param string $OrderBy Sorting field. Valid values:
<li>MaxBandWidth: bandwidth peak;</li>
<li>AttackStartTime: attack start time.</li>If not specified, the default value is AttackStartTime.
     * @param string $OrderType Sorting method. Valid values:
<li>asc: in ascending order;</li>
<li>desc: in descending order.</li> If not specified, the default value is desc.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShowDetail",$param) and $param["ShowDetail"] !== null) {
            $this->ShowDetail = $param["ShowDetail"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }
    }
}
