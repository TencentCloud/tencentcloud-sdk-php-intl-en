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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of Skill detection results
 *
 * @method string getStatus() Obtain <p>Detection status: success (detection completed with results), scanning (detection in progress), not_found (no record), or failed (detection failed)</p><p>Valid values:</p><ul><li>success: detection completed with results</li><li>scanning: detection in progress</li><li>not_found: no record</li><li>failed: detection failed</li></ul>
 * @method void setStatus(string $Status) Set <p>Detection status: success (detection completed with results), scanning (detection in progress), not_found (no record), or failed (detection failed)</p><p>Valid values:</p><ul><li>success: detection completed with results</li><li>scanning: detection in progress</li><li>not_found: no record</li><li>failed: detection failed</li></ul>
 * @method string getSkillName() Obtain <p>Skill name, used for page display, result list presentation, and manual analysis</p>
 * @method void setSkillName(string $SkillName) Set <p>Skill name, used for page display, result list presentation, and manual analysis</p>
 * @method string getSkillDescription() Obtain <p>Skill description, usually from Skill metadata or instructions, used to help callers understand the purpose of the Skill</p>
 * @method void setSkillDescription(string $SkillDescription) Set <p>Skill description, usually from Skill metadata or instructions, used to help callers understand the purpose of the Skill</p>
 * @method string getContentHash() Obtain <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest</p>
 * @method void setContentHash(string $ContentHash) Set <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest</p>
 * @method string getRiskLevel() Obtain <p>Risk level: malicious, suspicious, or benign</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level: malicious, suspicious, or benign</p>
 * @method string getMitigation() Obtain <p>Comprehensive handling suggestion field, located at the top level of data, used to provide overall remediation, mitigation, or manual handling suggestions for this detection result</p>
 * @method void setMitigation(string $Mitigation) Set <p>Comprehensive handling suggestion field, located at the top level of data, used to provide overall remediation, mitigation, or manual handling suggestions for this detection result</p>
 * @method integer getSecurityScore() Obtain <p>Security score (0-100, the higher the score, the more secure)</p><p>Value range: [0, 100]</p>
 * @method void setSecurityScore(integer $SecurityScore) Set <p>Security score (0-100, the higher the score, the more secure)</p><p>Value range: [0, 100]</p>
 * @method integer getEngineVersion() Obtain <p>Engine version used for this scan</p>
 * @method void setEngineVersion(integer $EngineVersion) Set <p>Engine version used for this scan</p>
 * @method array getCapabilityTags() Obtain <p>List of capability tags of the Skill. The fixed external return format is [{id,name}]. This field describes the capability features or applicable scenarios of the Skill, facilitating retrieval, display, or classification by callers. It is not equivalent to risk tags, nor does it indicate risk level or rule hit results. When lang=en, only name is switched to English, and id remains unchanged</p>
 * @method void setCapabilityTags(array $CapabilityTags) Set <p>List of capability tags of the Skill. The fixed external return format is [{id,name}]. This field describes the capability features or applicable scenarios of the Skill, facilitating retrieval, display, or classification by callers. It is not equivalent to risk tags, nor does it indicate risk level or rule hit results. When lang=en, only name is switched to English, and id remains unchanged</p>
 * @method array getRuleCatalog() Obtain <p>Complete set of fusion rule categories. The key is the fusion rule_id (9xxxx), and the value is the risk category name. It contains all fusion rule categories, allowing callers to display category labels without maintaining a local mapping table. When lang=en is passed, English names are returned. This object is a name mapping table and does not express the priority of primary tags</p>
 * @method void setRuleCatalog(array $RuleCatalog) Set <p>Complete set of fusion rule categories. The key is the fusion rule_id (9xxxx), and the value is the risk category name. It contains all fusion rule categories, allowing callers to display category labels without maintaining a local mapping table. When lang=en is passed, English names are returned. This object is a name mapping table and does not express the priority of primary tags</p>
 * @method array getScanItems() Obtain <p>Scan result details, grouped by sub-engine. Each element contains scan_type (engine type) and rule_list (list of hit rules). The rule_id in the rules uses fusion encoding (9xxxx) and can be cross-referenced with rule_catalog. When lang=en is passed, description returns English text</p>
 * @method void setScanItems(array $ScanItems) Set <p>Scan result details, grouped by sub-engine. Each element contains scan_type (engine type) and rule_list (list of hit rules). The rule_id in the rules uses fusion encoding (9xxxx) and can be cross-referenced with rule_catalog. When lang=en is passed, description returns English text</p>
 * @method string getReportUrl() Obtain <p>URL of the comprehensive security audit report. Callers can specify the validity period through report_url_expire_hours. If not passed, a URL with a 1-year validity period is returned by default</p>
 * @method void setReportUrl(string $ReportUrl) Set <p>URL of the comprehensive security audit report. Callers can specify the validity period through report_url_expire_hours. If not passed, a URL with a 1-year validity period is returned by default</p>
 * @method string getScannedAt() Obtain <p>Scan completion time</p>
 * @method void setScannedAt(string $ScannedAt) Set <p>Scan completion time</p>
 * @method string getCreatedAt() Obtain <p>Task creation time</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Task creation time</p>
 * @method string getFailedAt() Obtain <p>Failure time</p>
 * @method void setFailedAt(string $FailedAt) Set <p>Failure time</p>
 * @method string getMessage() Obtain <p>Description of the failure reason</p>
 * @method void setMessage(string $Message) Set <p>Description of the failure reason</p>
 */
class SkillScanQueryData extends AbstractModel
{
    /**
     * @var string <p>Detection status: success (detection completed with results), scanning (detection in progress), not_found (no record), or failed (detection failed)</p><p>Valid values:</p><ul><li>success: detection completed with results</li><li>scanning: detection in progress</li><li>not_found: no record</li><li>failed: detection failed</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Skill name, used for page display, result list presentation, and manual analysis</p>
     */
    public $SkillName;

    /**
     * @var string <p>Skill description, usually from Skill metadata or instructions, used to help callers understand the purpose of the Skill</p>
     */
    public $SkillDescription;

    /**
     * @var string <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest</p>
     */
    public $ContentHash;

    /**
     * @var string <p>Risk level: malicious, suspicious, or benign</p>
     */
    public $RiskLevel;

    /**
     * @var string <p>Comprehensive handling suggestion field, located at the top level of data, used to provide overall remediation, mitigation, or manual handling suggestions for this detection result</p>
     */
    public $Mitigation;

    /**
     * @var integer <p>Security score (0-100, the higher the score, the more secure)</p><p>Value range: [0, 100]</p>
     */
    public $SecurityScore;

    /**
     * @var integer <p>Engine version used for this scan</p>
     */
    public $EngineVersion;

    /**
     * @var array <p>List of capability tags of the Skill. The fixed external return format is [{id,name}]. This field describes the capability features or applicable scenarios of the Skill, facilitating retrieval, display, or classification by callers. It is not equivalent to risk tags, nor does it indicate risk level or rule hit results. When lang=en, only name is switched to English, and id remains unchanged</p>
     */
    public $CapabilityTags;

    /**
     * @var array <p>Complete set of fusion rule categories. The key is the fusion rule_id (9xxxx), and the value is the risk category name. It contains all fusion rule categories, allowing callers to display category labels without maintaining a local mapping table. When lang=en is passed, English names are returned. This object is a name mapping table and does not express the priority of primary tags</p>
     */
    public $RuleCatalog;

    /**
     * @var array <p>Scan result details, grouped by sub-engine. Each element contains scan_type (engine type) and rule_list (list of hit rules). The rule_id in the rules uses fusion encoding (9xxxx) and can be cross-referenced with rule_catalog. When lang=en is passed, description returns English text</p>
     */
    public $ScanItems;

    /**
     * @var string <p>URL of the comprehensive security audit report. Callers can specify the validity period through report_url_expire_hours. If not passed, a URL with a 1-year validity period is returned by default</p>
     */
    public $ReportUrl;

    /**
     * @var string <p>Scan completion time</p>
     */
    public $ScannedAt;

    /**
     * @var string <p>Task creation time</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Failure time</p>
     */
    public $FailedAt;

    /**
     * @var string <p>Description of the failure reason</p>
     */
    public $Message;

    /**
     * @param string $Status <p>Detection status: success (detection completed with results), scanning (detection in progress), not_found (no record), or failed (detection failed)</p><p>Valid values:</p><ul><li>success: detection completed with results</li><li>scanning: detection in progress</li><li>not_found: no record</li><li>failed: detection failed</li></ul>
     * @param string $SkillName <p>Skill name, used for page display, result list presentation, and manual analysis</p>
     * @param string $SkillDescription <p>Skill description, usually from Skill metadata or instructions, used to help callers understand the purpose of the Skill</p>
     * @param string $ContentHash <p>SHA256 hash of the ZIP file, in the format of sha256:hex_digest</p>
     * @param string $RiskLevel <p>Risk level: malicious, suspicious, or benign</p>
     * @param string $Mitigation <p>Comprehensive handling suggestion field, located at the top level of data, used to provide overall remediation, mitigation, or manual handling suggestions for this detection result</p>
     * @param integer $SecurityScore <p>Security score (0-100, the higher the score, the more secure)</p><p>Value range: [0, 100]</p>
     * @param integer $EngineVersion <p>Engine version used for this scan</p>
     * @param array $CapabilityTags <p>List of capability tags of the Skill. The fixed external return format is [{id,name}]. This field describes the capability features or applicable scenarios of the Skill, facilitating retrieval, display, or classification by callers. It is not equivalent to risk tags, nor does it indicate risk level or rule hit results. When lang=en, only name is switched to English, and id remains unchanged</p>
     * @param array $RuleCatalog <p>Complete set of fusion rule categories. The key is the fusion rule_id (9xxxx), and the value is the risk category name. It contains all fusion rule categories, allowing callers to display category labels without maintaining a local mapping table. When lang=en is passed, English names are returned. This object is a name mapping table and does not express the priority of primary tags</p>
     * @param array $ScanItems <p>Scan result details, grouped by sub-engine. Each element contains scan_type (engine type) and rule_list (list of hit rules). The rule_id in the rules uses fusion encoding (9xxxx) and can be cross-referenced with rule_catalog. When lang=en is passed, description returns English text</p>
     * @param string $ReportUrl <p>URL of the comprehensive security audit report. Callers can specify the validity period through report_url_expire_hours. If not passed, a URL with a 1-year validity period is returned by default</p>
     * @param string $ScannedAt <p>Scan completion time</p>
     * @param string $CreatedAt <p>Task creation time</p>
     * @param string $FailedAt <p>Failure time</p>
     * @param string $Message <p>Description of the failure reason</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            $this->SkillName = $param["SkillName"];
        }

        if (array_key_exists("SkillDescription",$param) and $param["SkillDescription"] !== null) {
            $this->SkillDescription = $param["SkillDescription"];
        }

        if (array_key_exists("ContentHash",$param) and $param["ContentHash"] !== null) {
            $this->ContentHash = $param["ContentHash"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("Mitigation",$param) and $param["Mitigation"] !== null) {
            $this->Mitigation = $param["Mitigation"];
        }

        if (array_key_exists("SecurityScore",$param) and $param["SecurityScore"] !== null) {
            $this->SecurityScore = $param["SecurityScore"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("CapabilityTags",$param) and $param["CapabilityTags"] !== null) {
            $this->CapabilityTags = [];
            foreach ($param["CapabilityTags"] as $key => $value){
                $obj = new SkillScanCapabilityTag();
                $obj->deserialize($value);
                array_push($this->CapabilityTags, $obj);
            }
        }

        if (array_key_exists("RuleCatalog",$param) and $param["RuleCatalog"] !== null) {
            $this->RuleCatalog = [];
            foreach ($param["RuleCatalog"] as $key => $value){
                $obj = new SkillRuleCatalogItem();
                $obj->deserialize($value);
                array_push($this->RuleCatalog, $obj);
            }
        }

        if (array_key_exists("ScanItems",$param) and $param["ScanItems"] !== null) {
            $this->ScanItems = [];
            foreach ($param["ScanItems"] as $key => $value){
                $obj = new SkillScanItem();
                $obj->deserialize($value);
                array_push($this->ScanItems, $obj);
            }
        }

        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
        }

        if (array_key_exists("ScannedAt",$param) and $param["ScannedAt"] !== null) {
            $this->ScannedAt = $param["ScannedAt"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FailedAt",$param) and $param["FailedAt"] !== null) {
            $this->FailedAt = $param["FailedAt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
