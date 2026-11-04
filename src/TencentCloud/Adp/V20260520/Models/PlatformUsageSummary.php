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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aggregated details of platform resource usage (exclusive to PLATFORM domain)
 *
 * @method array getResourceConsumptionList() Obtain <p>PLATFORM domain consumption measurement list (authoritative field): list each measurement type by unit + label, where label is the PlatformBizType enumeration name string; typical examples include unit=TIMES + label=PLATFORM_BIZ_TYPE_SECURITY_AUDIT/WEB_SEARCH/OPEN_CLAW/APP_INVOKE, unit=ITEM + label=PLATFORM_BIZ_TYPE_LONG_TERM_MEMORY</p>
 * @method void setResourceConsumptionList(array $ResourceConsumptionList) Set <p>PLATFORM domain consumption measurement list (authoritative field): list each measurement type by unit + label, where label is the PlatformBizType enumeration name string; typical examples include unit=TIMES + label=PLATFORM_BIZ_TYPE_SECURITY_AUDIT/WEB_SEARCH/OPEN_CLAW/APP_INVOKE, unit=ITEM + label=PLATFORM_BIZ_TYPE_LONG_TERM_MEMORY</p>
 */
class PlatformUsageSummary extends AbstractModel
{
    /**
     * @var array <p>PLATFORM domain consumption measurement list (authoritative field): list each measurement type by unit + label, where label is the PlatformBizType enumeration name string; typical examples include unit=TIMES + label=PLATFORM_BIZ_TYPE_SECURITY_AUDIT/WEB_SEARCH/OPEN_CLAW/APP_INVOKE, unit=ITEM + label=PLATFORM_BIZ_TYPE_LONG_TERM_MEMORY</p>
     */
    public $ResourceConsumptionList;

    /**
     * @param array $ResourceConsumptionList <p>PLATFORM domain consumption measurement list (authoritative field): list each measurement type by unit + label, where label is the PlatformBizType enumeration name string; typical examples include unit=TIMES + label=PLATFORM_BIZ_TYPE_SECURITY_AUDIT/WEB_SEARCH/OPEN_CLAW/APP_INVOKE, unit=ITEM + label=PLATFORM_BIZ_TYPE_LONG_TERM_MEMORY</p>
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
        if (array_key_exists("ResourceConsumptionList",$param) and $param["ResourceConsumptionList"] !== null) {
            $this->ResourceConsumptionList = [];
            foreach ($param["ResourceConsumptionList"] as $key => $value){
                $obj = new ResourceConsumption();
                $obj->deserialize($value);
                array_push($this->ResourceConsumptionList, $obj);
            }
        }
    }
}
