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
 * SetCLSPushTarget request structure.
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method AreaCLSTargetInfo getChineseMainlandCLSTargetInfo() Obtain 
 * @method void setChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo) Set 
 * @method AreaCLSTargetInfo getOutsideChineseMainlandCLSTargetInfo() Obtain 
 * @method void setOutsideChineseMainlandCLSTargetInfo(AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo) Set 
 */
class SetCLSPushTargetRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var AreaCLSTargetInfo 
     */
    public $ChineseMainlandCLSTargetInfo;

    /**
     * @var AreaCLSTargetInfo 
     */
    public $OutsideChineseMainlandCLSTargetInfo;

    /**
     * @param string $Domain 
     * @param integer $SubAppId 
     * @param AreaCLSTargetInfo $ChineseMainlandCLSTargetInfo 
     * @param AreaCLSTargetInfo $OutsideChineseMainlandCLSTargetInfo 
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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
