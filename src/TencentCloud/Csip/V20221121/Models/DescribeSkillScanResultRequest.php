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
 * DescribeSkillScanResult request structure.
 *
 * @method string getContentHash() Obtain SHA256 Hash of the ZIP file
Parameter format: sha256:<64-bit hex>
 * @method void setContentHash(string $ContentHash) Set SHA256 Hash of the ZIP file
Parameter format: sha256:<64-bit hex>
 * @method integer getEngineVersion() Obtain Specify the engine version number
Value for reference: API response of CreateSkillScan
 * @method void setEngineVersion(integer $EngineVersion) Set Specify the engine version number
Value for reference: API response of CreateSkillScan
 * @method integer getReportURLExpireHours() Obtain Report signature address validity
Unit: hr
Default value: 8760 (1 year).
Supplementary explanation: The returned ReportURL takes effect.
 * @method void setReportURLExpireHours(integer $ReportURLExpireHours) Set Report signature address validity
Unit: hr
Default value: 8760 (1 year).
Supplementary explanation: The returned ReportURL takes effect.
 */
class DescribeSkillScanResultRequest extends AbstractModel
{
    /**
     * @var string SHA256 Hash of the ZIP file
Parameter format: sha256:<64-bit hex>
     */
    public $ContentHash;

    /**
     * @var integer Specify the engine version number
Value for reference: API response of CreateSkillScan
     */
    public $EngineVersion;

    /**
     * @var integer Report signature address validity
Unit: hr
Default value: 8760 (1 year).
Supplementary explanation: The returned ReportURL takes effect.
     */
    public $ReportURLExpireHours;

    /**
     * @param string $ContentHash SHA256 Hash of the ZIP file
Parameter format: sha256:<64-bit hex>
     * @param integer $EngineVersion Specify the engine version number
Value for reference: API response of CreateSkillScan
     * @param integer $ReportURLExpireHours Report signature address validity
Unit: hr
Default value: 8760 (1 year).
Supplementary explanation: The returned ReportURL takes effect.
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
        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("ReportURLExpireHours",$param) and $param["ReportURLExpireHours"] !== null) {
            $this->ReportURLExpireHours = $param["ReportURLExpireHours"];
        }
    }
}
