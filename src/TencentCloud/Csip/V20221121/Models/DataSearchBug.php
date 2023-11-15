<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method array getDataBug() Obtain  
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDataBug(array $DataBug) Set  
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method array getDataAsset() Obtain None
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setDataAsset(array $DataAsset) Set None
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method boolean getVSSScan() Obtain `true`: Support vulnerability scan; `false`: Do not support vulnerability scan
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setVSSScan(boolean $VSSScan) Set `true`: Support vulnerability scan; `false`: Do not support vulnerability scan
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getCWPScan() Obtain `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCWPScan(string $CWPScan) Set `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getCFWPatch() Obtain `1`: Support virtual patches; `0` or null: Do not support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCFWPatch(string $CFWPatch) Set `1`: Support virtual patches; `0` or null: Do not support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getWafPatch() Obtain `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWafPatch(integer $WafPatch) Set `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getCWPFix() Obtain `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCWPFix(integer $CWPFix) Set `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class DataSearchBug extends AbstractModel
{
    /**
     * @var string Query status code
     */
    public $StateCode;

    /**
     * @var array  
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DataBug;

    /**
     * @var array None
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $DataAsset;

    /**
     * @var boolean `true`: Support vulnerability scan; `false`: Do not support vulnerability scan
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $VSSScan;

    /**
     * @var string `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CWPScan;

    /**
     * @var string `1`: Support virtual patches; `0` or null: Do not support
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CFWPatch;

    /**
     * @var integer `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $WafPatch;

    /**
     * @var integer `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CWPFix;

    /**
     * @param string $StateCode Query status code
     * @param array $DataBug  
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param array $DataAsset None
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param boolean $VSSScan `true`: Support vulnerability scan; `false`: Do not support vulnerability scan
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $CWPScan `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $CFWPatch `1`: Support virtual patches; `0` or null: Do not support
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $WafPatch `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $CWPFix `0`: Do not support; `1`: Support
Note: This field may return·null, indicating that no valid values can be obtained.
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
    }
}
