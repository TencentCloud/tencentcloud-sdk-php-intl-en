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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDoSBlockList request structure.
 *
 * @method string getStartTime() Obtain The start time of the attack event.
 * @method void setStartTime(string $StartTime) Set The start time of the attack event.
 * @method array getEventIds() Obtain The list of attack events.
 * @method void setEventIds(array $EventIds) Set The list of attack events.
 * @method array getZoneIds() Obtain Specifies sites by ID. All sites will be selected if this field is not specified.
 * @method void setZoneIds(array $ZoneIds) Set Specifies sites by ID. All sites will be selected if this field is not specified.
 * @method array getPolicyIds() Obtain The list of policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method void setPolicyIds(array $PolicyIds) Set The list of policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method integer getOffset() Obtain The page offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0.
 * @method string getArea() Obtain Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 * @method void setArea(string $Area) Set Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 */
class DescribeDDoSBlockListRequest extends AbstractModel
{
    /**
     * @var string The start time of the attack event.
     */
    public $StartTime;

    /**
     * @var array The list of attack events.
     */
    public $EventIds;

    /**
     * @var array Specifies sites by ID. All sites will be selected if this field is not specified.
     */
    public $ZoneIds;

    /**
     * @var array The list of policy IDs to be specified. All policies will be selected if this field is not specified.
     */
    public $PolicyIds;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer The page offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var string Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
     */
    public $Area;

    /**
     * @param string $StartTime The start time of the attack event.
     * @param array $EventIds The list of attack events.
     * @param array $ZoneIds Specifies sites by ID. All sites will be selected if this field is not specified.
     * @param array $PolicyIds The list of policy IDs to be specified. All policies will be selected if this field is not specified.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 1000.
     * @param integer $Offset The page offset. Default value: 0.
     * @param string $Area Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
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

        if (array_key_exists("EventIds",$param) and $param["EventIds"] !== null) {
            $this->EventIds = $param["EventIds"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
