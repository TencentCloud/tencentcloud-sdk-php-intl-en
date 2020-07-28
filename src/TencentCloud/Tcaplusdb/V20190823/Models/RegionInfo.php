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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TcaplusDB service region details
 *
 * @method string getRegionName() Obtain Region `Ap-code`
 * @method void setRegionName(string $RegionName) Set Region `Ap-code`
 * @method string getRegionAbbr() Obtain Region abbreviation
 * @method void setRegionAbbr(string $RegionAbbr) Set Region abbreviation
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method integer getIpv6Enable() Obtain Whether to support IPv6 address access. Valid values: 0 (support), 1 (not support)
 * @method void setIpv6Enable(integer $Ipv6Enable) Set Whether to support IPv6 address access. Valid values: 0 (support), 1 (not support)
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string Region `Ap-code`
     */
    public $RegionName;

    /**
     * @var string Region abbreviation
     */
    public $RegionAbbr;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var integer Whether to support IPv6 address access. Valid values: 0 (support), 1 (not support)
     */
    public $Ipv6Enable;

    /**
     * @param string $RegionName Region `Ap-code`
     * @param string $RegionAbbr Region abbreviation
     * @param integer $RegionId Region ID
     * @param integer $Ipv6Enable Whether to support IPv6 address access. Valid values: 0 (support), 1 (not support)
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionAbbr",$param) and $param["RegionAbbr"] !== null) {
            $this->RegionAbbr = $param["RegionAbbr"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }
    }
}
