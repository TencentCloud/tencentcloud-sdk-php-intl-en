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
 * Push a domain name to a CLS destination.
 *
 * @method string getDomain() Obtain Domain name.
 * @method void setDomain(string $Domain) Set Domain name.
 * @method AreaCLSTargetInfo getChineseMainlandCLSTargetInfo() Obtain Log push target in the Chinese mainland.
 * @method void setChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo) Set Log push target in the Chinese mainland.
 * @method AreaCLSTargetInfo getOutsideChineseMainlandCLSTargetInfo() Obtain Log push targets outside the Chinese mainland.
 * @method void setOutsideChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo) Set Log push targets outside the Chinese mainland.
 */
class DomainCLSTargetInfo extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $Domain;

    /**
     * @var AreaCLSTargetInfo Log push target in the Chinese mainland.
     */
    public $ChineseMainlandCLSTargetInfo;

    /**
     * @var AreaCLSTargetInfo Log push targets outside the Chinese mainland.
     */
    public $OutsideChineseMainlandCLSTargetInfo;

    /**
     * @param string $Domain Domain name.
     * @param AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo Log push target in the Chinese mainland.
     * @param AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo Log push targets outside the Chinese mainland.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ChineseMainlandCLSTargetInfo",$param) and $param["ChineseMainlandCLSTargetInfo"] !== null) {
            $this->ChineseMainlandCLSTargetInfo = new AreaCLSTargetInfo();
            $this->ChineseMainlandCLSTargetInfo->deserialize($param["ChineseMainlandCLSTargetInfo"]);
        }

        if (array_key_exists("OutsideChineseMainlandCLSTargetInfo",$param) and $param["OutsideChineseMainlandCLSTargetInfo"] !== null) {
            $this->OutsideChineseMainlandCLSTargetInfo = new AreaCLSTargetInfo();
            $this->OutsideChineseMainlandCLSTargetInfo->deserialize($param["OutsideChineseMainlandCLSTargetInfo"]);
        }
    }
}
