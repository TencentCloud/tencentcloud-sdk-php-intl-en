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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource package
 *
 * @method integer getAppId() Obtain AppID
 * @method void setAppId(integer $AppId) Set AppID
 * @method string getPackageId() Obtain Unique ID of the resource package
 * @method void setPackageId(string $PackageId) Set Unique ID of the resource package
 * @method string getPackageName() Obtain Resource package name.
 * @method void setPackageName(string $PackageName) Set Resource package name.
 * @method string getPackageType() Obtain Resource package type
CCU: compute resource package. DISK: storage resource package.
 * @method void setPackageType(string $PackageType) Set Resource package type
CCU: compute resource package. DISK: storage resource package.
 * @method string getPackageVersion() Obtain Resource package edition
base - basic, common - general, enterprise - business
 * @method void setPackageVersion(string $PackageVersion) Set Resource package edition
base - basic, common - general, enterprise - business
 * @method string getPackageRegion() Obtain Region of resource package use
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
 * @method void setPackageRegion(string $PackageRegion) Set Region of resource package use
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
 * @method string getStatus() Obtain Resource package status
creating
using - in use;
expired
normal_finish: used up;
apply_refund: Refund requested
refund: refunded.
 * @method void setStatus(string $Status) Set Resource package status
creating
using - in use;
expired
normal_finish: used up;
apply_refund: Refund requested
refund: refunded.
 * @method float getPackageTotalSpec() Obtain Total resource package quantity
 * @method void setPackageTotalSpec(float $PackageTotalSpec) Set Total resource package quantity
 * @method float getPackageUsedSpec() Obtain Used amount of the resource package
 * @method void setPackageUsedSpec(float $PackageUsedSpec) Set Used amount of the resource package
 * @method boolean getHasQuota() Obtain Whether there is still inventory surplus
 * @method void setHasQuota(boolean $HasQuota) Set Whether there is still inventory surplus
 * @method array getBindInstanceInfos() Obtain Bound instance information
 * @method void setBindInstanceInfos(array $BindInstanceInfos) Set Bound instance information
 * @method string getStartTime() Obtain Effective time: 2022-07-01 00:00:00
 * @method void setStartTime(string $StartTime) Set Effective time: 2022-07-01 00:00:00
 * @method string getExpireTime() Obtain Expiration time: 2022-08-01 00:00:00
 * @method void setExpireTime(string $ExpireTime) Set Expiration time: 2022-08-01 00:00:00
 * @method array getHistoryBindResourceInfos() Obtain Resource package historic bound (unbound) instance information
 * @method void setHistoryBindResourceInfos(array $HistoryBindResourceInfos) Set Resource package historic bound (unbound) instance information
 */
class Package extends AbstractModel
{
    /**
     * @var integer AppID
     */
    public $AppId;

    /**
     * @var string Unique ID of the resource package
     */
    public $PackageId;

    /**
     * @var string Resource package name.
     */
    public $PackageName;

    /**
     * @var string Resource package type
CCU: compute resource package. DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var string Resource package edition
base - basic, common - general, enterprise - business
     */
    public $PackageVersion;

    /**
     * @var string Region of resource package use
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
     */
    public $PackageRegion;

    /**
     * @var string Resource package status
creating
using - in use;
expired
normal_finish: used up;
apply_refund: Refund requested
refund: refunded.
     */
    public $Status;

    /**
     * @var float Total resource package quantity
     */
    public $PackageTotalSpec;

    /**
     * @var float Used amount of the resource package
     */
    public $PackageUsedSpec;

    /**
     * @var boolean Whether there is still inventory surplus
     */
    public $HasQuota;

    /**
     * @var array Bound instance information
     */
    public $BindInstanceInfos;

    /**
     * @var string Effective time: 2022-07-01 00:00:00
     */
    public $StartTime;

    /**
     * @var string Expiration time: 2022-08-01 00:00:00
     */
    public $ExpireTime;

    /**
     * @var array Resource package historic bound (unbound) instance information
     */
    public $HistoryBindResourceInfos;

    /**
     * @param integer $AppId AppID
     * @param string $PackageId Unique ID of the resource package
     * @param string $PackageName Resource package name.
     * @param string $PackageType Resource package type
CCU: compute resource package. DISK: storage resource package.
     * @param string $PackageVersion Resource package edition
base - basic, common - general, enterprise - business
     * @param string $PackageRegion Region of resource package use
china: common in the Chinese mainland; overseas: common in Hong Kong (China), Macao (China), Taiwan (China), and overseas regions
     * @param string $Status Resource package status
creating
using - in use;
expired
normal_finish: used up;
apply_refund: Refund requested
refund: refunded.
     * @param float $PackageTotalSpec Total resource package quantity
     * @param float $PackageUsedSpec Used amount of the resource package
     * @param boolean $HasQuota Whether there is still inventory surplus
     * @param array $BindInstanceInfos Bound instance information
     * @param string $StartTime Effective time: 2022-07-01 00:00:00
     * @param string $ExpireTime Expiration time: 2022-08-01 00:00:00
     * @param array $HistoryBindResourceInfos Resource package historic bound (unbound) instance information
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

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("PackageName",$param) and $param["PackageName"] !== null) {
            $this->PackageName = $param["PackageName"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("PackageRegion",$param) and $param["PackageRegion"] !== null) {
            $this->PackageRegion = $param["PackageRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PackageTotalSpec",$param) and $param["PackageTotalSpec"] !== null) {
            $this->PackageTotalSpec = $param["PackageTotalSpec"];
        }

        if (array_key_exists("PackageUsedSpec",$param) and $param["PackageUsedSpec"] !== null) {
            $this->PackageUsedSpec = $param["PackageUsedSpec"];
        }

        if (array_key_exists("HasQuota",$param) and $param["HasQuota"] !== null) {
            $this->HasQuota = $param["HasQuota"];
        }

        if (array_key_exists("BindInstanceInfos",$param) and $param["BindInstanceInfos"] !== null) {
            $this->BindInstanceInfos = [];
            foreach ($param["BindInstanceInfos"] as $key => $value){
                $obj = new BindInstanceInfo();
                $obj->deserialize($value);
                array_push($this->BindInstanceInfos, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("HistoryBindResourceInfos",$param) and $param["HistoryBindResourceInfos"] !== null) {
            $this->HistoryBindResourceInfos = [];
            foreach ($param["HistoryBindResourceInfos"] as $key => $value){
                $obj = new BindInstanceInfo();
                $obj->deserialize($value);
                array_push($this->HistoryBindResourceInfos, $obj);
            }
        }
    }
}
