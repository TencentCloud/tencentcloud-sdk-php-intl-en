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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Acceleration region information of the domain name
 *
 * @method string getArea() Obtain Acceleration region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 * @method void setArea(string $Area) Set Acceleration region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
 * @method string getTencentDisableReason() Obtain Reason why acceleration is disabled by Tencent Cloud. Valid values:
<li>ForLegalReasons: legal reasons</li>
<li>ForOverdueBills: overdue payment</li>
 * @method void setTencentDisableReason(string $TencentDisableReason) Set Reason why acceleration is disabled by Tencent Cloud. Valid values:
<li>ForLegalReasons: legal reasons</li>
<li>ForOverdueBills: overdue payment</li>
 * @method string getTencentEdgeDomain() Obtain CNAME of the acceleration domain name
 * @method void setTencentEdgeDomain(string $TencentEdgeDomain) Set CNAME of the acceleration domain name
 */
class AccelerateAreaInfo extends AbstractModel
{
    /**
     * @var string Acceleration region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
     */
    public $Area;

    /**
     * @var string Reason why acceleration is disabled by Tencent Cloud. Valid values:
<li>ForLegalReasons: legal reasons</li>
<li>ForOverdueBills: overdue payment</li>
     */
    public $TencentDisableReason;

    /**
     * @var string CNAME of the acceleration domain name
     */
    public $TencentEdgeDomain;

    /**
     * @param string $Area Acceleration region. Valid values:
<li>Chinese Mainland</li>
<li>Outside Chinese Mainland</li>
     * @param string $TencentDisableReason Reason why acceleration is disabled by Tencent Cloud. Valid values:
<li>ForLegalReasons: legal reasons</li>
<li>ForOverdueBills: overdue payment</li>
     * @param string $TencentEdgeDomain CNAME of the acceleration domain name
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("TencentDisableReason",$param) and $param["TencentDisableReason"] !== null) {
            $this->TencentDisableReason = $param["TencentDisableReason"];
        }

        if (array_key_exists("TencentEdgeDomain",$param) and $param["TencentEdgeDomain"] !== null) {
            $this->TencentEdgeDomain = $param["TencentEdgeDomain"];
        }
    }
}
