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
 * Risk center risk overview statistics.
 *
 * @method integer getPortTotal() Obtain Total Number of Port Risks
 * @method void setPortTotal(integer $PortTotal) Set Total Number of Port Risks
 * @method integer getPortHighLevel() Obtain High Port Risk Count
 * @method void setPortHighLevel(integer $PortHighLevel) Set High Port Risk Count
 * @method integer getWeakPasswordTotal() Obtain 	Total number of weak password risks.
 * @method void setWeakPasswordTotal(integer $WeakPasswordTotal) Set 	Total number of weak password risks.
 * @method integer getWeakPasswordHighLevel() Obtain High Weak Password Risk Count
 * @method void setWeakPasswordHighLevel(integer $WeakPasswordHighLevel) Set High Weak Password Risk Count
 * @method integer getWebsiteTotal() Obtain Website Risk Count
 * @method void setWebsiteTotal(integer $WebsiteTotal) Set Website Risk Count
 * @method integer getWebsiteHighLevel() Obtain Number of High Risks on Websites
 * @method void setWebsiteHighLevel(integer $WebsiteHighLevel) Set Number of High Risks on Websites
 * @method string getLastScanTime() Obtain Time of the Latest Scan
 * @method void setLastScanTime(string $LastScanTime) Set Time of the Latest Scan
 * @method integer getVULTotal() Obtain Number of vulnerability risks.
 * @method void setVULTotal(integer $VULTotal) Set Number of vulnerability risks.
 * @method integer getVULHighLevel() Obtain Number of High-Risk Vulnerability Risks
 * @method void setVULHighLevel(integer $VULHighLevel) Set Number of High-Risk Vulnerability Risks
 * @method integer getCFGTotal() Obtain Number of Configuration Item Risks
 * @method void setCFGTotal(integer $CFGTotal) Set Number of Configuration Item Risks
 * @method integer getCFGHighLevel() Obtain Number of High-Risk Configuration Item Risks
 * @method void setCFGHighLevel(integer $CFGHighLevel) Set Number of High-Risk Configuration Item Risks
 * @method integer getServerTotal() Obtain Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerTotal(integer $ServerTotal) Set Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getServerHighLevel() Obtain High Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServerHighLevel(integer $ServerHighLevel) Set High Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHostBaseLineRiskTotal() Obtain Number of host baseline risks.
 * @method void setHostBaseLineRiskTotal(integer $HostBaseLineRiskTotal) Set Number of host baseline risks.
 * @method integer getHostBaseLineRiskHighLevel() Obtain Number of high-risk risks.
 * @method void setHostBaseLineRiskHighLevel(integer $HostBaseLineRiskHighLevel) Set Number of high-risk risks.
 * @method integer getPodBaseLineRiskTotal() Obtain Baseline risk count of the container.
 * @method void setPodBaseLineRiskTotal(integer $PodBaseLineRiskTotal) Set Baseline risk count of the container.
 * @method integer getPodBaseLineRiskHighLevel() Obtain Number of high-risk baseline risks in the container.
 * @method void setPodBaseLineRiskHighLevel(integer $PodBaseLineRiskHighLevel) Set Number of high-risk baseline risks in the container.
 */
class CsipRiskCenterStatistics extends AbstractModel
{
    /**
     * @var integer Total Number of Port Risks
     */
    public $PortTotal;

    /**
     * @var integer High Port Risk Count
     */
    public $PortHighLevel;

    /**
     * @var integer 	Total number of weak password risks.
     */
    public $WeakPasswordTotal;

    /**
     * @var integer High Weak Password Risk Count
     */
    public $WeakPasswordHighLevel;

    /**
     * @var integer Website Risk Count
     */
    public $WebsiteTotal;

    /**
     * @var integer Number of High Risks on Websites
     */
    public $WebsiteHighLevel;

    /**
     * @var string Time of the Latest Scan
     */
    public $LastScanTime;

    /**
     * @var integer Number of vulnerability risks.
     */
    public $VULTotal;

    /**
     * @var integer Number of High-Risk Vulnerability Risks
     */
    public $VULHighLevel;

    /**
     * @var integer Number of Configuration Item Risks
     */
    public $CFGTotal;

    /**
     * @var integer Number of High-Risk Configuration Item Risks
     */
    public $CFGHighLevel;

    /**
     * @var integer Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerTotal;

    /**
     * @var integer High Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServerHighLevel;

    /**
     * @var integer Number of host baseline risks.
     */
    public $HostBaseLineRiskTotal;

    /**
     * @var integer Number of high-risk risks.
     */
    public $HostBaseLineRiskHighLevel;

    /**
     * @var integer Baseline risk count of the container.
     */
    public $PodBaseLineRiskTotal;

    /**
     * @var integer Number of high-risk baseline risks in the container.
     */
    public $PodBaseLineRiskHighLevel;

    /**
     * @param integer $PortTotal Total Number of Port Risks
     * @param integer $PortHighLevel High Port Risk Count
     * @param integer $WeakPasswordTotal 	Total number of weak password risks.
     * @param integer $WeakPasswordHighLevel High Weak Password Risk Count
     * @param integer $WebsiteTotal Website Risk Count
     * @param integer $WebsiteHighLevel Number of High Risks on Websites
     * @param string $LastScanTime Time of the Latest Scan
     * @param integer $VULTotal Number of vulnerability risks.
     * @param integer $VULHighLevel Number of High-Risk Vulnerability Risks
     * @param integer $CFGTotal Number of Configuration Item Risks
     * @param integer $CFGHighLevel Number of High-Risk Configuration Item Risks
     * @param integer $ServerTotal Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ServerHighLevel High Mapping Service Risk Count
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HostBaseLineRiskTotal Number of host baseline risks.
     * @param integer $HostBaseLineRiskHighLevel Number of high-risk risks.
     * @param integer $PodBaseLineRiskTotal Baseline risk count of the container.
     * @param integer $PodBaseLineRiskHighLevel Number of high-risk baseline risks in the container.
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
        if (array_key_exists("PortTotal",$param) and $param["PortTotal"] !== null) {
            $this->PortTotal = $param["PortTotal"];
        }

        if (array_key_exists("PortHighLevel",$param) and $param["PortHighLevel"] !== null) {
            $this->PortHighLevel = $param["PortHighLevel"];
        }

        if (array_key_exists("WeakPasswordTotal",$param) and $param["WeakPasswordTotal"] !== null) {
            $this->WeakPasswordTotal = $param["WeakPasswordTotal"];
        }

        if (array_key_exists("WeakPasswordHighLevel",$param) and $param["WeakPasswordHighLevel"] !== null) {
            $this->WeakPasswordHighLevel = $param["WeakPasswordHighLevel"];
        }

        if (array_key_exists("WebsiteTotal",$param) and $param["WebsiteTotal"] !== null) {
            $this->WebsiteTotal = $param["WebsiteTotal"];
        }

        if (array_key_exists("WebsiteHighLevel",$param) and $param["WebsiteHighLevel"] !== null) {
            $this->WebsiteHighLevel = $param["WebsiteHighLevel"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("VULTotal",$param) and $param["VULTotal"] !== null) {
            $this->VULTotal = $param["VULTotal"];
        }

        if (array_key_exists("VULHighLevel",$param) and $param["VULHighLevel"] !== null) {
            $this->VULHighLevel = $param["VULHighLevel"];
        }

        if (array_key_exists("CFGTotal",$param) and $param["CFGTotal"] !== null) {
            $this->CFGTotal = $param["CFGTotal"];
        }

        if (array_key_exists("CFGHighLevel",$param) and $param["CFGHighLevel"] !== null) {
            $this->CFGHighLevel = $param["CFGHighLevel"];
        }

        if (array_key_exists("ServerTotal",$param) and $param["ServerTotal"] !== null) {
            $this->ServerTotal = $param["ServerTotal"];
        }

        if (array_key_exists("ServerHighLevel",$param) and $param["ServerHighLevel"] !== null) {
            $this->ServerHighLevel = $param["ServerHighLevel"];
        }

        if (array_key_exists("HostBaseLineRiskTotal",$param) and $param["HostBaseLineRiskTotal"] !== null) {
            $this->HostBaseLineRiskTotal = $param["HostBaseLineRiskTotal"];
        }

        if (array_key_exists("HostBaseLineRiskHighLevel",$param) and $param["HostBaseLineRiskHighLevel"] !== null) {
            $this->HostBaseLineRiskHighLevel = $param["HostBaseLineRiskHighLevel"];
        }

        if (array_key_exists("PodBaseLineRiskTotal",$param) and $param["PodBaseLineRiskTotal"] !== null) {
            $this->PodBaseLineRiskTotal = $param["PodBaseLineRiskTotal"];
        }

        if (array_key_exists("PodBaseLineRiskHighLevel",$param) and $param["PodBaseLineRiskHighLevel"] !== null) {
            $this->PodBaseLineRiskHighLevel = $param["PodBaseLineRiskHighLevel"];
        }
    }
}
