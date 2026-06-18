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
 * Vulnerability Information Product Support Status
 *
 * @method boolean getVSSScan() Obtain True supports scanning. False does not support scanning.
 * @method void setVSSScan(boolean $VSSScan) Set True supports scanning. False does not support scanning.
 * @method string getCWPScan() Obtain 0-Not Supported; 1-Supported
 * @method void setCWPScan(string $CWPScan) Set 0-Not Supported; 1-Supported
 * @method string getCFWPatch() Obtain 1 indicates virtual patches supported, 0 or null indicates not supported.
 * @method void setCFWPatch(string $CFWPatch) Set 1 indicates virtual patches supported, 0 or null indicates not supported.
 * @method integer getWafPatch() Obtain 0-Not Supported; 1-Supported	
 * @method void setWafPatch(integer $WafPatch) Set 0-Not Supported; 1-Supported	
 * @method integer getCWPFix() Obtain 0-Not Supported; 1-Supported	
 * @method void setCWPFix(integer $CWPFix) Set 0-Not Supported; 1-Supported	
 * @method string getCveId() Obtain cveid
 * @method void setCveId(string $CveId) Set cveid
 */
class ProductSupport extends AbstractModel
{
    /**
     * @var boolean True supports scanning. False does not support scanning.
     */
    public $VSSScan;

    /**
     * @var string 0-Not Supported; 1-Supported
     */
    public $CWPScan;

    /**
     * @var string 1 indicates virtual patches supported, 0 or null indicates not supported.
     */
    public $CFWPatch;

    /**
     * @var integer 0-Not Supported; 1-Supported	
     */
    public $WafPatch;

    /**
     * @var integer 0-Not Supported; 1-Supported	
     */
    public $CWPFix;

    /**
     * @var string cveid
     */
    public $CveId;

    /**
     * @param boolean $VSSScan True supports scanning. False does not support scanning.
     * @param string $CWPScan 0-Not Supported; 1-Supported
     * @param string $CFWPatch 1 indicates virtual patches supported, 0 or null indicates not supported.
     * @param integer $WafPatch 0-Not Supported; 1-Supported	
     * @param integer $CWPFix 0-Not Supported; 1-Supported	
     * @param string $CveId cveid
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
        if (array_key_exists("VSSScan",$param) and $param["VSSScan"] !== null) {
            $this->VSSScan = $param["VSSScan"];
        }

        if (array_key_exists("CWPScan",$param) and $param["CWPScan"] !== null) {
            $this->CWPScan = $param["CWPScan"];
        }

        if (array_key_exists("CFWPatch",$param) and $param["CFWPatch"] !== null) {
            $this->CFWPatch = $param["CFWPatch"];
        }

        if (array_key_exists("WafPatch",$param) and $param["WafPatch"] !== null) {
            $this->WafPatch = $param["WafPatch"];
        }

        if (array_key_exists("CWPFix",$param) and $param["CWPFix"] !== null) {
            $this->CWPFix = $param["CWPFix"];
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }
    }
}
