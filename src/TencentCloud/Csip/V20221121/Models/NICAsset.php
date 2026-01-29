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
 * Network interface card asset.
 *
 * @method string getAppId() Obtain appid
 * @method void setAppId(string $AppId) Set appid
 * @method string getUin() Obtain uin
 * @method void setUin(string $Uin) Set uin
 * @method string getAssetId() Obtain Asset ID.
 * @method void setAssetId(string $AssetId) Set Asset ID.
 * @method string getAssetName() Obtain Asset name.
 * @method void setAssetName(string $AssetName) Set Asset name.
 * @method string getAssetType() Obtain Asset type.
 * @method void setAssetType(string $AssetType) Set Asset type.
 * @method string getPrivateIp() Obtain VPC IP
 * @method void setPrivateIp(string $PrivateIp) Set VPC IP
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getVpcId() Obtain VPC id.
 * @method void setVpcId(string $VpcId) Set VPC id.
 * @method string getVpcName() Obtain VPC Name
 * @method void setVpcName(string $VpcName) Set VPC Name
 * @method array getTag() Obtain Tag.
 * @method void setTag(array $Tag) Set Tag.
 * @method string getOutboundPeakBandwidth() Obtain Outbound peak bandwidth.
 * @method void setOutboundPeakBandwidth(string $OutboundPeakBandwidth) Set Outbound peak bandwidth.
 * @method string getInboundPeakBandwidth() Obtain Inbound peak bandwidth.
 * @method void setInboundPeakBandwidth(string $InboundPeakBandwidth) Set Inbound peak bandwidth.
 * @method string getOutboundCumulativeFlow() Obtain Cumulative Outbound Traffic
 * @method void setOutboundCumulativeFlow(string $OutboundCumulativeFlow) Set Cumulative Outbound Traffic
 * @method string getInboundCumulativeFlow() Obtain Cumulative Inbound Traffic
 * @method void setInboundCumulativeFlow(string $InboundCumulativeFlow) Set Cumulative Inbound Traffic
 * @method integer getNetworkAttack() Obtain Network attack.
 * @method void setNetworkAttack(integer $NetworkAttack) Set Network attack.
 * @method integer getExposedPort() Obtain Expose ports.
 * @method void setExposedPort(integer $ExposedPort) Set Expose ports.
 * @method integer getExposedVUL() Obtain Exposed vulnerability.
 * @method void setExposedVUL(integer $ExposedVUL) Set Exposed vulnerability.
 * @method integer getConfigureRisk() Obtain Configuration risk.
 * @method void setConfigureRisk(integer $ConfigureRisk) Set Configuration risk.
 * @method string getCreateTime() Obtain Creation time.


 * @method void setCreateTime(string $CreateTime) Set Creation time.


 * @method integer getScanTask() Obtain Number of tasks.
 * @method void setScanTask(integer $ScanTask) Set Number of tasks.
 * @method string getLastScanTime() Obtain Last scan time
 * @method void setLastScanTime(string $LastScanTime) Set Last scan time
 * @method string getNick() Obtain Nickname.
 * @method void setNick(string $Nick) Set Nickname.
 * @method integer getIsCore() Obtain Core or Not
 * @method void setIsCore(integer $IsCore) Set Core or Not
 * @method integer getIsNewAsset() Obtain New Asset or Not. 1: New
 * @method void setIsNewAsset(integer $IsNewAsset) Set New Asset or Not. 1: New
 */
class NICAsset extends AbstractModel
{
    /**
     * @var string appid
     */
    public $AppId;

    /**
     * @var string uin
     */
    public $Uin;

    /**
     * @var string Asset ID.
     */
    public $AssetId;

    /**
     * @var string Asset name.
     */
    public $AssetName;

    /**
     * @var string Asset type.
     */
    public $AssetType;

    /**
     * @var string VPC IP
     */
    public $PrivateIp;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string VPC id.
     */
    public $VpcId;

    /**
     * @var string VPC Name
     */
    public $VpcName;

    /**
     * @var array Tag.
     */
    public $Tag;

    /**
     * @var string Outbound peak bandwidth.
     */
    public $OutboundPeakBandwidth;

    /**
     * @var string Inbound peak bandwidth.
     */
    public $InboundPeakBandwidth;

    /**
     * @var string Cumulative Outbound Traffic
     */
    public $OutboundCumulativeFlow;

    /**
     * @var string Cumulative Inbound Traffic
     */
    public $InboundCumulativeFlow;

    /**
     * @var integer Network attack.
     */
    public $NetworkAttack;

    /**
     * @var integer Expose ports.
     */
    public $ExposedPort;

    /**
     * @var integer Exposed vulnerability.
     */
    public $ExposedVUL;

    /**
     * @var integer Configuration risk.
     */
    public $ConfigureRisk;

    /**
     * @var string Creation time.


     */
    public $CreateTime;

    /**
     * @var integer Number of tasks.
     */
    public $ScanTask;

    /**
     * @var string Last scan time
     */
    public $LastScanTime;

    /**
     * @var string Nickname.
     */
    public $Nick;

    /**
     * @var integer Core or Not
     */
    public $IsCore;

    /**
     * @var integer New Asset or Not. 1: New
     */
    public $IsNewAsset;

    /**
     * @param string $AppId appid
     * @param string $Uin uin
     * @param string $AssetId Asset ID.
     * @param string $AssetName Asset name.
     * @param string $AssetType Asset type.
     * @param string $PrivateIp VPC IP
     * @param string $PublicIp Public IP address
     * @param string $Region Region.
     * @param string $VpcId VPC id.
     * @param string $VpcName VPC Name
     * @param array $Tag Tag.
     * @param string $OutboundPeakBandwidth Outbound peak bandwidth.
     * @param string $InboundPeakBandwidth Inbound peak bandwidth.
     * @param string $OutboundCumulativeFlow Cumulative Outbound Traffic
     * @param string $InboundCumulativeFlow Cumulative Inbound Traffic
     * @param integer $NetworkAttack Network attack.
     * @param integer $ExposedPort Expose ports.
     * @param integer $ExposedVUL Exposed vulnerability.
     * @param integer $ConfigureRisk Configuration risk.
     * @param string $CreateTime Creation time.


     * @param integer $ScanTask Number of tasks.
     * @param string $LastScanTime Last scan time
     * @param string $Nick Nickname.
     * @param integer $IsCore Core or Not
     * @param integer $IsNewAsset New Asset or Not. 1: New
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("OutboundPeakBandwidth",$param) and $param["OutboundPeakBandwidth"] !== null) {
            $this->OutboundPeakBandwidth = $param["OutboundPeakBandwidth"];
        }

        if (array_key_exists("InboundPeakBandwidth",$param) and $param["InboundPeakBandwidth"] !== null) {
            $this->InboundPeakBandwidth = $param["InboundPeakBandwidth"];
        }

        if (array_key_exists("OutboundCumulativeFlow",$param) and $param["OutboundCumulativeFlow"] !== null) {
            $this->OutboundCumulativeFlow = $param["OutboundCumulativeFlow"];
        }

        if (array_key_exists("InboundCumulativeFlow",$param) and $param["InboundCumulativeFlow"] !== null) {
            $this->InboundCumulativeFlow = $param["InboundCumulativeFlow"];
        }

        if (array_key_exists("NetworkAttack",$param) and $param["NetworkAttack"] !== null) {
            $this->NetworkAttack = $param["NetworkAttack"];
        }

        if (array_key_exists("ExposedPort",$param) and $param["ExposedPort"] !== null) {
            $this->ExposedPort = $param["ExposedPort"];
        }

        if (array_key_exists("ExposedVUL",$param) and $param["ExposedVUL"] !== null) {
            $this->ExposedVUL = $param["ExposedVUL"];
        }

        if (array_key_exists("ConfigureRisk",$param) and $param["ConfigureRisk"] !== null) {
            $this->ConfigureRisk = $param["ConfigureRisk"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ScanTask",$param) and $param["ScanTask"] !== null) {
            $this->ScanTask = $param["ScanTask"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("IsCore",$param) and $param["IsCore"] !== null) {
            $this->IsCore = $param["IsCore"];
        }

        if (array_key_exists("IsNewAsset",$param) and $param["IsNewAsset"] !== null) {
            $this->IsNewAsset = $param["IsNewAsset"];
        }
    }
}
