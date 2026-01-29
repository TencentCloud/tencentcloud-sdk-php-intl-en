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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product support.
 *
 * @method string getServiceName() Obtain Product name.
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method void setServiceName(string $ServiceName) Set Product name.
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
 * @method integer getSupportHandledCount() Obtain Total number of processed assets.
 * @method void setSupportHandledCount(integer $SupportHandledCount) Set Total number of processed assets.
 * @method integer getSupportTotalCount() Obtain Total number of supported assets.
 * @method void setSupportTotalCount(integer $SupportTotalCount) Set Total number of supported assets.
 * @method boolean getIsSupport() Obtain Whether the product is supported: 1 for supported; 0 for unsupported.
 * @method void setIsSupport(boolean $IsSupport) Set Whether the product is supported: 1 for supported; 0 for unsupported.
 */
class ServiceSupport extends AbstractModel
{
    /**
     * @var string Product name.
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     */
    public $ServiceName;

    /**
     * @var integer Total number of processed assets.
     */
    public $SupportHandledCount;

    /**
     * @var integer Total number of supported assets.
     */
    public $SupportTotalCount;

    /**
     * @var boolean Whether the product is supported: 1 for supported; 0 for unsupported.
     */
    public $IsSupport;

    /**
     * @param string $ServiceName Product name.
"cfw_waf_virtual", "cwp_detect", "cwp_defense", "cwp_fix"
     * @param integer $SupportHandledCount Total number of processed assets.
     * @param integer $SupportTotalCount Total number of supported assets.
     * @param boolean $IsSupport Whether the product is supported: 1 for supported; 0 for unsupported.
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("SupportHandledCount",$param) and $param["SupportHandledCount"] !== null) {
            $this->SupportHandledCount = $param["SupportHandledCount"];
        }

        if (array_key_exists("SupportTotalCount",$param) and $param["SupportTotalCount"] !== null) {
            $this->SupportTotalCount = $param["SupportTotalCount"];
        }

        if (array_key_exists("IsSupport",$param) and $param["IsSupport"] !== null) {
            $this->IsSupport = $param["IsSupport"];
        }
    }
}
