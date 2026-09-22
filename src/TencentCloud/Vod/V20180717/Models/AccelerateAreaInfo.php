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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Region acceleration information of the domain
 *
 * @method string getArea() Obtain Acceleration region. Available values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
 * @method void setArea(string $Area) Set Acceleration region. Available values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
 * @method string getTencentDisableReason() Obtain Tencent disable reason. Available values:
<li>ForLegalReasons: Acceleration disabled due to legal reasons;</li>
<li>ForOverdueBills: Acceleration is disabled due to service suspension for overdue payment.</li>
 * @method void setTencentDisableReason(string $TencentDisableReason) Set Tencent disable reason. Available values:
<li>ForLegalReasons: Acceleration disabled due to legal reasons;</li>
<li>ForOverdueBills: Acceleration is disabled due to service suspension for overdue payment.</li>
 * @method string getTencentEdgeDomain() Obtain CNAME domain name corresponding to the acceleration domain.
 * @method void setTencentEdgeDomain(string $TencentEdgeDomain) Set CNAME domain name corresponding to the acceleration domain.
 */
class AccelerateAreaInfo extends AbstractModel
{
    /**
     * @var string Acceleration region. Available values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
     */
    public $Area;

    /**
     * @var string Tencent disable reason. Available values:
<li>ForLegalReasons: Acceleration disabled due to legal reasons;</li>
<li>ForOverdueBills: Acceleration is disabled due to service suspension for overdue payment.</li>
     */
    public $TencentDisableReason;

    /**
     * @var string CNAME domain name corresponding to the acceleration domain.
     */
    public $TencentEdgeDomain;

    /**
     * @param string $Area Acceleration region. Available values:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
     * @param string $TencentDisableReason Tencent disable reason. Available values:
<li>ForLegalReasons: Acceleration disabled due to legal reasons;</li>
<li>ForOverdueBills: Acceleration is disabled due to service suspension for overdue payment.</li>
     * @param string $TencentEdgeDomain CNAME domain name corresponding to the acceleration domain.
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
