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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource pack
 *
 * @method integer getAppId() Obtain AppID
 * @method void setAppId(integer $AppId) Set AppID
 * @method string getPackageId() Obtain The unique ID of the resource package.
 * @method void setPackageId(string $PackageId) Set The unique ID of the resource package.
 * @method string getPackageName() Obtain Resource package name.
 * @method void setPackageName(string $PackageName) Set Resource package name.
 * @method string getPackageType() Obtain Specifies the resource package type.
CCU: compute resource package. DISK: storage resource package.
 * @method void setPackageType(string $PackageType) Set Specifies the resource package type.
CCU: compute resource package. DISK: storage resource package.
 * @method string getPackageRegion() Obtain Resource package region of use.
China - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
 * @method void setPackageRegion(string $PackageRegion) Set Resource package region of use.
China - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
 * @method string getStatus() Obtain Specifies the status of the resource package.
creating - indicates that it is in the process of being created.
{using} specifies that it is in use.
expired-expired;.
normal_finish - specifies that it is used up.
`Apply_refund`: apply for a refund.
Specifies that the fee has been refunded.
 * @method void setStatus(string $Status) Set Specifies the status of the resource package.
creating - indicates that it is in the process of being created.
{using} specifies that it is in use.
expired-expired;.
normal_finish - specifies that it is used up.
`Apply_refund`: apply for a refund.
Specifies that the fee has been refunded.
 * @method float getPackageTotalSpec() Obtain Total resource package quantity.
 * @method void setPackageTotalSpec(float $PackageTotalSpec) Set Total resource package quantity.
 * @method float getPackageUsedSpec() Obtain Used amount of resource package.
 * @method void setPackageUsedSpec(float $PackageUsedSpec) Set Used amount of resource package.
 * @method boolean getHasQuota() Obtain Whether there is inventory surplus.
 * @method void setHasQuota(boolean $HasQuota) Set Whether there is inventory surplus.
 * @method array getBindInstanceInfos() Obtain Specifies the bound instance information.
 * @method void setBindInstanceInfos(array $BindInstanceInfos) Set Specifies the bound instance information.
 * @method string getStartTime() Obtain Specifies the effective time: 2022-07-01 00:00:00.
 * @method void setStartTime(string $StartTime) Set Specifies the effective time: 2022-07-01 00:00:00.
 * @method string getExpireTime() Obtain Specifies the expiration time: 2022-08-01 00:00:00.
 * @method void setExpireTime(string $ExpireTime) Set Specifies the expiration time: 2022-08-01 00:00:00.
 * @method array getHistoryBindResourceInfos() Obtain Information of the instance historically bound (now unbound) to the resource pack.
 * @method void setHistoryBindResourceInfos(array $HistoryBindResourceInfos) Set Information of the instance historically bound (now unbound) to the resource pack.
 */
class Package extends AbstractModel
{
    /**
     * @var integer AppID
     */
    public $AppId;

    /**
     * @var string The unique ID of the resource package.
     */
    public $PackageId;

    /**
     * @var string Resource package name.
     */
    public $PackageName;

    /**
     * @var string Specifies the resource package type.
CCU: compute resource package. DISK: storage resource package.
     */
    public $PackageType;

    /**
     * @var string Resource package region of use.
China - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
     */
    public $PackageRegion;

    /**
     * @var string Specifies the status of the resource package.
creating - indicates that it is in the process of being created.
{using} specifies that it is in use.
expired-expired;.
normal_finish - specifies that it is used up.
`Apply_refund`: apply for a refund.
Specifies that the fee has been refunded.
     */
    public $Status;

    /**
     * @var float Total resource package quantity.
     */
    public $PackageTotalSpec;

    /**
     * @var float Used amount of resource package.
     */
    public $PackageUsedSpec;

    /**
     * @var boolean Whether there is inventory surplus.
     */
    public $HasQuota;

    /**
     * @var array Specifies the bound instance information.
     */
    public $BindInstanceInfos;

    /**
     * @var string Specifies the effective time: 2022-07-01 00:00:00.
     */
    public $StartTime;

    /**
     * @var string Specifies the expiration time: 2022-08-01 00:00:00.
     */
    public $ExpireTime;

    /**
     * @var array Information of the instance historically bound (now unbound) to the resource pack.
     */
    public $HistoryBindResourceInfos;

    /**
     * @param integer $AppId AppID
     * @param string $PackageId The unique ID of the resource package.
     * @param string $PackageName Resource package name.
     * @param string $PackageType Specifies the resource package type.
CCU: compute resource package. DISK: storage resource package.
     * @param string $PackageRegion Resource package region of use.
China - common in the chinese mainland. overseas - universally applicable in hong kong (china), macao (china), taiwan (china), and overseas.
     * @param string $Status Specifies the status of the resource package.
creating - indicates that it is in the process of being created.
{using} specifies that it is in use.
expired-expired;.
normal_finish - specifies that it is used up.
`Apply_refund`: apply for a refund.
Specifies that the fee has been refunded.
     * @param float $PackageTotalSpec Total resource package quantity.
     * @param float $PackageUsedSpec Used amount of resource package.
     * @param boolean $HasQuota Whether there is inventory surplus.
     * @param array $BindInstanceInfos Specifies the bound instance information.
     * @param string $StartTime Specifies the effective time: 2022-07-01 00:00:00.
     * @param string $ExpireTime Specifies the expiration time: 2022-08-01 00:00:00.
     * @param array $HistoryBindResourceInfos Information of the instance historically bound (now unbound) to the resource pack.
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
