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
namespace TencentCloud\Quota\V20241204\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarms request structure.
 *
 * @method integer getLimit() Obtain Number of items per page. maximum 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. maximum 100.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method integer getProductId() Obtain Product ID.
 * @method void setProductId(integer $ProductId) Set Product ID.
 * @method integer getQuotaId() Obtain Quota ID.
 * @method void setQuotaId(integer $QuotaId) Set Quota ID.
 * @method string getContent() Obtain Alarm, quota name.
 * @method void setContent(string $Content) Set Alarm, quota name.
 * @method array getMemberUins() Obtain Member uins.
 * @method void setMemberUins(array $MemberUins) Set Member uins.
 * @method integer getMetrics() Obtain AlAlarm metric.
 * @method void setMetrics(integer $Metrics) Set AlAlarm metric.
 * @method integer getId() Obtain Rule ID
 * @method void setId(integer $Id) Set Rule ID
 */
class DescribeAlarmsRequest extends AbstractModel
{
    /**
     * @var integer Number of items per page. maximum 100.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var integer Product ID.
     */
    public $ProductId;

    /**
     * @var integer Quota ID.
     */
    public $QuotaId;

    /**
     * @var string Alarm, quota name.
     */
    public $Content;

    /**
     * @var array Member uins.
     */
    public $MemberUins;

    /**
     * @var integer AlAlarm metric.
     */
    public $Metrics;

    /**
     * @var integer Rule ID
     */
    public $Id;

    /**
     * @param integer $Limit Number of items per page. maximum 100.
     * @param integer $Offset Offset.
     * @param integer $ProductId Product ID.
     * @param integer $QuotaId Quota ID.
     * @param string $Content Alarm, quota name.
     * @param array $MemberUins Member uins.
     * @param integer $Metrics AlAlarm metric.
     * @param integer $Id Rule ID
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
