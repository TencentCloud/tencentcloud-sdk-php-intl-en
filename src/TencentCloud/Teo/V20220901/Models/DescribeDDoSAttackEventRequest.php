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
 * DescribeDDoSAttackEvent request structure.
 *
 * @method string getStartTime() Obtain The start time.
 * @method void setStartTime(string $StartTime) Set The start time.
 * @method string getEndTime() Obtain The end time.
 * @method void setEndTime(string $EndTime) Set The end time.
 * @method string getProtocolType() Obtain The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
 * @method void setProtocolType(string $ProtocolType) Set The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
 * @method array getPolicyIds() Obtain The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method void setPolicyIds(array $PolicyIds) Set The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
 * @method array getZoneIds() Obtain List of sites to be queried. All sites will be selected if this field is not specified.
 * @method void setZoneIds(array $ZoneIds) Set List of sites to be queried. All sites will be selected if this field is not specified.
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20. Maximum value: 1000.
 * @method integer getOffset() Obtain The page offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set The page offset. Default value: 0.
 * @method boolean getShowDetail() Obtain Whether to display the details.
 * @method void setShowDetail(boolean $ShowDetail) Set Whether to display the details.
 * @method string getArea() Obtain Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 * @method void setArea(string $Area) Set Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
 */
class DescribeDDoSAttackEventRequest extends AbstractModel
{
    /**
     * @var string The start time.
     */
    public $StartTime;

    /**
     * @var string The end time.
     */
    public $EndTime;

    /**
     * @var string The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
     */
    public $ProtocolType;

    /**
     * @var array The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
     */
    public $PolicyIds;

    /**
     * @var array List of sites to be queried. All sites will be selected if this field is not specified.
     */
    public $ZoneIds;

    /**
     * @var integer Limit on paginated queries. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var integer The page offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var boolean Whether to display the details.
     */
    public $ShowDetail;

    /**
     * @var string Data storage region. Values:
<li>`overseas`: Global (outside the Chinese mainland);</li>
<li>`mainland`: Chinese mainland.</li>If this field is not specified, the data storage region will be determined based on the user’s location.
     */
    public $Area;

    /**
     * @param string $StartTime The start time.
     * @param string $EndTime The end time.
     * @param string $ProtocolType The protocol type. Values:
<li>`tcp`: TCP protocol;</li>
<li>`udp`: UDP protocol;</li>
<li>`all`: All protocol types.</li>This field will be set to the default value `all` if not specified.
     * @param array $PolicyIds The list of DDoS policy IDs to be specified. All policies will be selected if this field is not specified.
     * @param array $ZoneIds List of sites to be queried. All sites will be selected if this field is not specified.
     * @param integer $Limit Limit on paginated queries. Default value: 20. Maximum value: 1000.
     * @param integer $Offset The page offset. Default value: 0.
     * @param boolean $ShowDetail Whether to display the details.
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

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
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
    }
}
