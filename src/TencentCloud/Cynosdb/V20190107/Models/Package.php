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
 * @method integer getAppId() Obtain AppID Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set AppID Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageId() Obtain The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageId(string $PackageId) Set The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageName() Obtain Resource pack name Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageName(string $PackageName) Set Resource pack name Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPackageRegion() Obtain Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland). Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageRegion(string $PackageRegion) Set Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland). Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Resource pack status. Valid values: `creating`, `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded). 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Resource pack status. Valid values: `creating`, `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded). 
Note:  This field may return null, indicating that no valid values can be obtained.
 * @method float getPackageTotalSpec() Obtain Total number of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageTotalSpec(float $PackageTotalSpec) Set Total number of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getPackageUsedSpec() Obtain Consumed usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPackageUsedSpec(float $PackageUsedSpec) Set Consumed usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHasQuota() Obtain Remaining usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHasQuota(boolean $HasQuota) Set Remaining usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBindInstanceInfos() Obtain Information of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBindInstanceInfos(array $BindInstanceInfos) Set Information of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Validity time:  2022-07-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Validity time:  2022-07-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Validity time:  2022-08-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Validity time:  2022-08-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
 */
class Package extends AbstractModel
{
    /**
     * @var integer AppID Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageId;

    /**
     * @var string Resource pack name Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageName;

    /**
     * @var string Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @var string Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland). Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageRegion;

    /**
     * @var string Resource pack status. Valid values: `creating`, `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded). 
Note:  This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var float Total number of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageTotalSpec;

    /**
     * @var float Consumed usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PackageUsedSpec;

    /**
     * @var boolean Remaining usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HasQuota;

    /**
     * @var array Information of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BindInstanceInfos;

    /**
     * @var string Validity time:  2022-07-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Validity time:  2022-08-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @param integer $AppId AppID Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageId The unique ID of a resource pack Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageName Resource pack name Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType Resource pack type. Valid values: `CCU` (compute resource pack), `DISK` (storage resource pack). Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PackageRegion Region of the resource pack. Valid values: `China` (Chinese mainland), `overseas` (outside Chinese mainland). Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Resource pack status. Valid values: `creating`, `using`, `expired`, `normal_finish` (used up), `apply_refund` (requesting a refund), `refund` (refunded). 
Note:  This field may return null, indicating that no valid values can be obtained.
     * @param float $PackageTotalSpec Total number of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $PackageUsedSpec Consumed usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HasQuota Remaining usage of resource packs Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BindInstanceInfos Information of the instance bound Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Validity time:  2022-07-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Validity time:  2022-08-01 00:00:00 Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
