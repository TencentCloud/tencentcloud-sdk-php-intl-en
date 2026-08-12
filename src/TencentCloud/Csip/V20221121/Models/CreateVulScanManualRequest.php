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
 * CreateVulScanManual request structure.
 *
 * @method integer getTimeout() Obtain <p>Timeout period (seconds)</p>
 * @method void setTimeout(integer $Timeout) Set <p>Timeout period (seconds)</p>
 * @method integer getAssetRange() Obtain <p>Asset scope (0-all assets, 1-Custom assets, 2-remove asset, 3-automatic asset match)</p>
 * @method void setAssetRange(integer $AssetRange) Set <p>Asset scope (0-all assets, 1-Custom assets, 2-remove asset, 3-automatic asset match)</p>
 * @method array getMethod() Obtain <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison + POC detection)</p>
 * @method void setMethod(array $Method) Set <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison + POC detection)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getVulId() Obtain <p>Vulnerability id</p>
 * @method void setVulId(array $VulId) Set <p>Vulnerability id</p>
 * @method array getKbNo() Obtain <p>kb No.</p>
 * @method void setKbNo(array $KbNo) Set <p>kb No.</p>
 * @method array getVulCategory() Obtain <p>Vulnerability scan type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method void setVulCategory(array $VulCategory) Set <p>Vulnerability scan type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
 * @method array getLevel() Obtain <p>Vulnerability level (INVALID: Invalid, INFO: Notification, LOW: Low risk, MEDIUM: Medium risk, HIGH: High risk, CRITICAL: Critical)</p>
 * @method void setLevel(array $Level) Set <p>Vulnerability level (INVALID: Invalid, INFO: Notification, LOW: Low risk, MEDIUM: Medium risk, HIGH: High risk, CRITICAL: Critical)</p>
 * @method array getAssetList() Obtain <p>Asset list (UUID list)</p>
 * @method void setAssetList(array $AssetList) Set <p>Asset list (UUID list)</p>
 * @method array getTagIds() Obtain <p>Tag id</p>
 * @method void setTagIds(array $TagIds) Set <p>Tag id</p>
 */
class CreateVulScanManualRequest extends AbstractModel
{
    /**
     * @var integer <p>Timeout period (seconds)</p>
     */
    public $Timeout;

    /**
     * @var integer <p>Asset scope (0-all assets, 1-Custom assets, 2-remove asset, 3-automatic asset match)</p>
     */
    public $AssetRange;

    /**
     * @var array <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison + POC detection)</p>
     */
    public $Method;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Vulnerability id</p>
     */
    public $VulId;

    /**
     * @var array <p>kb No.</p>
     */
    public $KbNo;

    /**
     * @var array <p>Vulnerability scan type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     */
    public $VulCategory;

    /**
     * @var array <p>Vulnerability level (INVALID: Invalid, INFO: Notification, LOW: Low risk, MEDIUM: Medium risk, HIGH: High risk, CRITICAL: Critical)</p>
     */
    public $Level;

    /**
     * @var array <p>Asset list (UUID list)</p>
     */
    public $AssetList;

    /**
     * @var array <p>Tag id</p>
     */
    public $TagIds;

    /**
     * @param integer $Timeout <p>Timeout period (seconds)</p>
     * @param integer $AssetRange <p>Asset scope (0-all assets, 1-Custom assets, 2-remove asset, 3-automatic asset match)</p>
     * @param array $Method <p>Scanning method (VersionCompare: version comparison, POC: POC detection, VersionComparePOC: version comparison + POC detection)</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $VulId <p>Vulnerability id</p>
     * @param array $KbNo <p>kb No.</p>
     * @param array $VulCategory <p>Vulnerability scan type</p><p>Enumeration value:</p><ul><li>LINUX: Linux software vulnerability</li><li>WINDOWS: Windows system patch</li><li>WEB_CMS: Web-CMS vulnerability</li><li>APPLICATION: Application vulnerability</li><li>EMERGENCY: Emergency vulnerability</li></ul>
     * @param array $Level <p>Vulnerability level (INVALID: Invalid, INFO: Notification, LOW: Low risk, MEDIUM: Medium risk, HIGH: High risk, CRITICAL: Critical)</p>
     * @param array $AssetList <p>Asset list (UUID list)</p>
     * @param array $TagIds <p>Tag id</p>
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
        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("AssetRange",$param) and $param["AssetRange"] !== null) {
            $this->AssetRange = $param["AssetRange"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AssetList",$param) and $param["AssetList"] !== null) {
            $this->AssetList = $param["AssetList"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }
    }
}
