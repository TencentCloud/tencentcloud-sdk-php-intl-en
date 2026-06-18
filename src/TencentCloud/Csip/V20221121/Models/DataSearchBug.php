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
 * Vulnerability and asset information
 *
 * @method string getStateCode() Obtain Query status code
 * @method void setStateCode(string $StateCode) Set Query status code
 * @method array getDataBug() Obtain Vulnerability details
 * @method void setDataBug(array $DataBug) Set Vulnerability details
 * @method array getDataAsset() Obtain Vulnerability impact assets details
 * @method void setDataAsset(array $DataAsset) Set Vulnerability impact assets details
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
 * @method array getDataSupport() Obtain Product Support Status
 * @method void setDataSupport(array $DataSupport) Set Product Support Status
 * @method string getCveId() Obtain cveId
 * @method void setCveId(string $CveId) Set cveId
 */
class DataSearchBug extends AbstractModel
{
    /**
     * @var string Query status code
     */
    public $StateCode;

    /**
     * @var array Vulnerability details
     */
    public $DataBug;

    /**
     * @var array Vulnerability impact assets details
     */
    public $DataAsset;

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
     * @var array Product Support Status
     */
    public $DataSupport;

    /**
     * @var string cveId
     */
    public $CveId;

    /**
     * @param string $StateCode Query status code
     * @param array $DataBug Vulnerability details
     * @param array $DataAsset Vulnerability impact assets details
     * @param boolean $VSSScan True supports scanning. False does not support scanning.
     * @param string $CWPScan 0-Not Supported; 1-Supported
     * @param string $CFWPatch 1 indicates virtual patches supported, 0 or null indicates not supported.
     * @param integer $WafPatch 0-Not Supported; 1-Supported
     * @param integer $CWPFix 0-Not Supported; 1-Supported
     * @param array $DataSupport Product Support Status
     * @param string $CveId cveId
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
        if (array_key_exists("StateCode",$param) and $param["StateCode"] !== null) {
            $this->StateCode = $param["StateCode"];
        }

        if (array_key_exists("DataBug",$param) and $param["DataBug"] !== null) {
            $this->DataBug = [];
            foreach ($param["DataBug"] as $key => $value){
                $obj = new BugInfoDetail();
                $obj->deserialize($value);
                array_push($this->DataBug, $obj);
            }
        }

        if (array_key_exists("DataAsset",$param) and $param["DataAsset"] !== null) {
            $this->DataAsset = [];
            foreach ($param["DataAsset"] as $key => $value){
                $obj = new AssetInfoDetail();
                $obj->deserialize($value);
                array_push($this->DataAsset, $obj);
            }
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

        if (array_key_exists("DataSupport",$param) and $param["DataSupport"] !== null) {
            $this->DataSupport = [];
            foreach ($param["DataSupport"] as $key => $value){
                $obj = new ProductSupport();
                $obj->deserialize($value);
                array_push($this->DataSupport, $obj);
            }
        }

        if (array_key_exists("CveId",$param) and $param["CveId"] !== null) {
            $this->CveId = $param["CveId"];
        }
    }
}
