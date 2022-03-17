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
 * DescribeListBGPInstances request structure.
 *
 * @method integer getOffset() Obtain Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method void setOffset(integer $Offset) Set Starting offset of the page. Value: (number of pages – 1) * items per page.
 * @method integer getLimit() Obtain Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
 * @method string getFilterIp() Obtain IP filter
 * @method void setFilterIp(string $FilterIp) Set IP filter
 * @method string getFilterInstanceId() Obtain Anti-DDoS instance ID filter. For example, `bgp-00000001`.
 * @method void setFilterInstanceId(string $FilterInstanceId) Set Anti-DDoS instance ID filter. For example, `bgp-00000001`.
 * @method string getFilterRegion() Obtain Region filter. For example, `ap-guangzhou`.
 * @method void setFilterRegion(string $FilterRegion) Set Region filter. For example, `ap-guangzhou`.
 * @method string getFilterName() Obtain Name filter
 * @method void setFilterName(string $FilterName) Set Name filter
 * @method integer getFilterLine() Obtain Line filter. Valid values: 1: BGP; 2: Non-BGP.
 * @method void setFilterLine(integer $FilterLine) Set Line filter. Valid values: 1: BGP; 2: Non-BGP.
 * @method string getFilterStatus() Obtain Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
 * @method void setFilterStatus(string $FilterStatus) Set Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
 * @method string getFilterBoundStatus() Obtain Filters by binding status. `bounding`: the instance is bound; `failed`: the binding failed.
 * @method void setFilterBoundStatus(string $FilterBoundStatus) Set Filters by binding status. `bounding`: the instance is bound; `failed`: the binding failed.
 */
class DescribeListBGPInstancesRequest extends AbstractModel
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
     * @var string Anti-DDoS instance ID filter. For example, `bgp-00000001`.
     */
    public $FilterInstanceId;

    /**
     * @var string Region filter. For example, `ap-guangzhou`.
     */
    public $FilterRegion;

    /**
     * @var string Name filter
     */
    public $FilterName;

    /**
     * @var integer Line filter. Valid values: 1: BGP; 2: Non-BGP.
     */
    public $FilterLine;

    /**
     * @var string Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
     */
    public $FilterStatus;

    /**
     * @var string Filters by binding status. `bounding`: the instance is bound; `failed`: the binding failed.
     */
    public $FilterBoundStatus;

    /**
     * @param integer $Offset Starting offset of the page. Value: (number of pages – 1) * items per page.
     * @param integer $Limit Number of items per page. The default value is 20 when `Limit = 0`. The maximum value is 100.
     * @param string $FilterIp IP filter
     * @param string $FilterInstanceId Anti-DDoS instance ID filter. For example, `bgp-00000001`.
     * @param string $FilterRegion Region filter. For example, `ap-guangzhou`.
     * @param string $FilterName Name filter
     * @param integer $FilterLine Line filter. Valid values: 1: BGP; 2: Non-BGP.
     * @param string $FilterStatus Filters by instance status. `idle`: Running; `attacking`: Being attacked; `blocking`: Being blocked.
     * @param string $FilterBoundStatus Filters by binding status. `bounding`: the instance is bound; `failed`: the binding failed.
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

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
        }

        if (array_key_exists("FilterBoundStatus",$param) and $param["FilterBoundStatus"] !== null) {
            $this->FilterBoundStatus = $param["FilterBoundStatus"];
        }
    }
}
