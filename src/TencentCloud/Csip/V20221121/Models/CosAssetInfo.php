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
 * Cos asset information
 *
 * @method integer getAppId() Obtain <p>appid</p>
 * @method void setAppId(integer $AppId) Set <p>appid</p>
 * @method string getBucketName() Obtain <p>cos bucket name</p>
 * @method void setBucketName(string $BucketName) Set <p>cos bucket name</p>
 * @method string getBucketRegion() Obtain <p>cos region name</p>
 * @method void setBucketRegion(string $BucketRegion) Set <p>cos region name</p>
 * @method string getBucketRegionCode() Obtain <p>Region code value</p>
 * @method void setBucketRegionCode(string $BucketRegionCode) Set <p>Region code value</p>
 * @method string getBucketMarker() Obtain <p>cos bucket remark</p>
 * @method void setBucketMarker(string $BucketMarker) Set <p>cos bucket remark</p>
 * @method string getBucketOwnerUin() Obtain <p>Owner of the cos bucket root account</p>
 * @method void setBucketOwnerUin(string $BucketOwnerUin) Set <p>Owner of the cos bucket root account</p>
 * @method string getBucketOwnerNickName() Obtain <p>Nickname of the cos root account owner</p>
 * @method void setBucketOwnerNickName(string $BucketOwnerNickName) Set <p>Nickname of the cos root account owner</p>
 * @method string getBucketTagInfo() Obtain <p>cos bucket tag detail</p>
 * @method void setBucketTagInfo(string $BucketTagInfo) Set <p>cos bucket tag detail</p>
 * @method integer getBucketSecuritySuggestion() Obtain <p>Security advice<br>1 No abnormality detected<br>2 Hardening recommended<br>3 Process now</p>
 * @method void setBucketSecuritySuggestion(integer $BucketSecuritySuggestion) Set <p>Security advice<br>1 No abnormality detected<br>2 Hardening recommended<br>3 Process now</p>
 * @method array getBucketAlarmList() Obtain <p>alarm list</p>
 * @method void setBucketAlarmList(array $BucketAlarmList) Set <p>alarm list</p>
 * @method array getBucketRiskList() Obtain <p>Risk list</p>
 * @method void setBucketRiskList(array $BucketRiskList) Set <p>Risk list</p>
 * @method integer getBucketInvokeSourceIpCount() Obtain <p>Number of source IPs for calls</p>
 * @method void setBucketInvokeSourceIpCount(integer $BucketInvokeSourceIpCount) Set <p>Number of source IPs for calls</p>
 * @method CosBucketAccessWay getBucketAccessWay() Obtain <p>Access policy</p>
 * @method void setBucketAccessWay(CosBucketAccessWay $BucketAccessWay) Set <p>Access policy</p>
 * @method integer getCreateTime() Obtain <p>Creation time Unix timestamp in milliseconds</p>
 * @method void setCreateTime(integer $CreateTime) Set <p>Creation time Unix timestamp in milliseconds</p>
 * @method integer getLastAccessTime() Obtain <p>Last access time in Unix timestamp in milliseconds</p>
 * @method void setLastAccessTime(integer $LastAccessTime) Set <p>Last access time in Unix timestamp in milliseconds</p>
 * @method integer getBucketId() Obtain <p>Bucket id</p>
 * @method void setBucketId(integer $BucketId) Set <p>Bucket id</p>
 * @method integer getMonitorStatus() Obtain <p>0 Off<br>1 On</p>
 * @method void setMonitorStatus(integer $MonitorStatus) Set <p>0 Off<br>1 On</p>
 * @method CosAssetDataScanDetail getDataScanInfo() Obtain <p>Data identification scan information.</p>
 * @method void setDataScanInfo(CosAssetDataScanDetail $DataScanInfo) Set <p>Data identification scan information.</p>
 * @method string getBucketAzType() Obtain <p>Bucket Az type</p><p>Enumeration values:</p><ul><li>MAZ: Multi-Az</li><li>SAZ: Single-Az</li></ul>
 * @method void setBucketAzType(string $BucketAzType) Set <p>Bucket Az type</p><p>Enumeration values:</p><ul><li>MAZ: Multi-Az</li><li>SAZ: Single-Az</li></ul>
 * @method integer getBucketStorageSize() Obtain <p>Bucket storage size</p><p>Default value: 0</p>
 * @method void setBucketStorageSize(integer $BucketStorageSize) Set <p>Bucket storage size</p><p>Default value: 0</p>
 * @method integer getBucketObjectCount() Obtain <p>Bucket object count</p><p>Default value: 0</p>
 * @method void setBucketObjectCount(integer $BucketObjectCount) Set <p>Bucket object count</p><p>Default value: 0</p>
 * @method float getIdentifySampleRate() Obtain <p>Bucket sensitive identification sampling rate</p><p>Value range: [0, 1]</p><p>Default value: 0</p>
 * @method void setIdentifySampleRate(float $IdentifySampleRate) Set <p>Bucket sensitive identification sampling rate</p><p>Value range: [0, 1]</p><p>Default value: 0</p>
 */
class CosAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>cos bucket name</p>
     */
    public $BucketName;

    /**
     * @var string <p>cos region name</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>Region code value</p>
     */
    public $BucketRegionCode;

    /**
     * @var string <p>cos bucket remark</p>
     */
    public $BucketMarker;

    /**
     * @var string <p>Owner of the cos bucket root account</p>
     */
    public $BucketOwnerUin;

    /**
     * @var string <p>Nickname of the cos root account owner</p>
     */
    public $BucketOwnerNickName;

    /**
     * @var string <p>cos bucket tag detail</p>
     */
    public $BucketTagInfo;

    /**
     * @var integer <p>Security advice<br>1 No abnormality detected<br>2 Hardening recommended<br>3 Process now</p>
     */
    public $BucketSecuritySuggestion;

    /**
     * @var array <p>alarm list</p>
     */
    public $BucketAlarmList;

    /**
     * @var array <p>Risk list</p>
     */
    public $BucketRiskList;

    /**
     * @var integer <p>Number of source IPs for calls</p>
     */
    public $BucketInvokeSourceIpCount;

    /**
     * @var CosBucketAccessWay <p>Access policy</p>
     */
    public $BucketAccessWay;

    /**
     * @var integer <p>Creation time Unix timestamp in milliseconds</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Last access time in Unix timestamp in milliseconds</p>
     */
    public $LastAccessTime;

    /**
     * @var integer <p>Bucket id</p>
     */
    public $BucketId;

    /**
     * @var integer <p>0 Off<br>1 On</p>
     */
    public $MonitorStatus;

    /**
     * @var CosAssetDataScanDetail <p>Data identification scan information.</p>
     */
    public $DataScanInfo;

    /**
     * @var string <p>Bucket Az type</p><p>Enumeration values:</p><ul><li>MAZ: Multi-Az</li><li>SAZ: Single-Az</li></ul>
     */
    public $BucketAzType;

    /**
     * @var integer <p>Bucket storage size</p><p>Default value: 0</p>
     */
    public $BucketStorageSize;

    /**
     * @var integer <p>Bucket object count</p><p>Default value: 0</p>
     */
    public $BucketObjectCount;

    /**
     * @var float <p>Bucket sensitive identification sampling rate</p><p>Value range: [0, 1]</p><p>Default value: 0</p>
     */
    public $IdentifySampleRate;

    /**
     * @param integer $AppId <p>appid</p>
     * @param string $BucketName <p>cos bucket name</p>
     * @param string $BucketRegion <p>cos region name</p>
     * @param string $BucketRegionCode <p>Region code value</p>
     * @param string $BucketMarker <p>cos bucket remark</p>
     * @param string $BucketOwnerUin <p>Owner of the cos bucket root account</p>
     * @param string $BucketOwnerNickName <p>Nickname of the cos root account owner</p>
     * @param string $BucketTagInfo <p>cos bucket tag detail</p>
     * @param integer $BucketSecuritySuggestion <p>Security advice<br>1 No abnormality detected<br>2 Hardening recommended<br>3 Process now</p>
     * @param array $BucketAlarmList <p>alarm list</p>
     * @param array $BucketRiskList <p>Risk list</p>
     * @param integer $BucketInvokeSourceIpCount <p>Number of source IPs for calls</p>
     * @param CosBucketAccessWay $BucketAccessWay <p>Access policy</p>
     * @param integer $CreateTime <p>Creation time Unix timestamp in milliseconds</p>
     * @param integer $LastAccessTime <p>Last access time in Unix timestamp in milliseconds</p>
     * @param integer $BucketId <p>Bucket id</p>
     * @param integer $MonitorStatus <p>0 Off<br>1 On</p>
     * @param CosAssetDataScanDetail $DataScanInfo <p>Data identification scan information.</p>
     * @param string $BucketAzType <p>Bucket Az type</p><p>Enumeration values:</p><ul><li>MAZ: Multi-Az</li><li>SAZ: Single-Az</li></ul>
     * @param integer $BucketStorageSize <p>Bucket storage size</p><p>Default value: 0</p>
     * @param integer $BucketObjectCount <p>Bucket object count</p><p>Default value: 0</p>
     * @param float $IdentifySampleRate <p>Bucket sensitive identification sampling rate</p><p>Value range: [0, 1]</p><p>Default value: 0</p>
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

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }

        if (array_key_exists("BucketOwnerUin",$param) and $param["BucketOwnerUin"] !== null) {
            $this->BucketOwnerUin = $param["BucketOwnerUin"];
        }

        if (array_key_exists("BucketOwnerNickName",$param) and $param["BucketOwnerNickName"] !== null) {
            $this->BucketOwnerNickName = $param["BucketOwnerNickName"];
        }

        if (array_key_exists("BucketTagInfo",$param) and $param["BucketTagInfo"] !== null) {
            $this->BucketTagInfo = $param["BucketTagInfo"];
        }

        if (array_key_exists("BucketSecuritySuggestion",$param) and $param["BucketSecuritySuggestion"] !== null) {
            $this->BucketSecuritySuggestion = $param["BucketSecuritySuggestion"];
        }

        if (array_key_exists("BucketAlarmList",$param) and $param["BucketAlarmList"] !== null) {
            $this->BucketAlarmList = [];
            foreach ($param["BucketAlarmList"] as $key => $value){
                $obj = new CosRiskAlarmInfo();
                $obj->deserialize($value);
                array_push($this->BucketAlarmList, $obj);
            }
        }

        if (array_key_exists("BucketRiskList",$param) and $param["BucketRiskList"] !== null) {
            $this->BucketRiskList = [];
            foreach ($param["BucketRiskList"] as $key => $value){
                $obj = new CosRiskAlarmInfo();
                $obj->deserialize($value);
                array_push($this->BucketRiskList, $obj);
            }
        }

        if (array_key_exists("BucketInvokeSourceIpCount",$param) and $param["BucketInvokeSourceIpCount"] !== null) {
            $this->BucketInvokeSourceIpCount = $param["BucketInvokeSourceIpCount"];
        }

        if (array_key_exists("BucketAccessWay",$param) and $param["BucketAccessWay"] !== null) {
            $this->BucketAccessWay = new CosBucketAccessWay();
            $this->BucketAccessWay->deserialize($param["BucketAccessWay"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastAccessTime",$param) and $param["LastAccessTime"] !== null) {
            $this->LastAccessTime = $param["LastAccessTime"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("DataScanInfo",$param) and $param["DataScanInfo"] !== null) {
            $this->DataScanInfo = new CosAssetDataScanDetail();
            $this->DataScanInfo->deserialize($param["DataScanInfo"]);
        }

        if (array_key_exists("BucketAzType",$param) and $param["BucketAzType"] !== null) {
            $this->BucketAzType = $param["BucketAzType"];
        }

        if (array_key_exists("BucketStorageSize",$param) and $param["BucketStorageSize"] !== null) {
            $this->BucketStorageSize = $param["BucketStorageSize"];
        }

        if (array_key_exists("BucketObjectCount",$param) and $param["BucketObjectCount"] !== null) {
            $this->BucketObjectCount = $param["BucketObjectCount"];
        }

        if (array_key_exists("IdentifySampleRate",$param) and $param["IdentifySampleRate"] !== null) {
            $this->IdentifySampleRate = $param["IdentifySampleRate"];
        }
    }
}
