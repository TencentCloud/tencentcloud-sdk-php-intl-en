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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logset information
 *
 * @method integer getAppId() Obtain Developer ID
 * @method void setAppId(integer $AppId) Set Developer ID
 * @method string getChannel() Obtain Channel
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setChannel(string $Channel) Set Channel
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getLogsetId() Obtain Logset ID
 * @method void setLogsetId(string $LogsetId) Set Logset ID
 * @method string getLogsetName() Obtain Logset name
 * @method void setLogsetName(string $LogsetName) Set Logset name
 * @method integer getIsDefault() Obtain Whether it is the default logset
 * @method void setIsDefault(integer $IsDefault) Set Whether it is the default logset
 * @method integer getLogsetSavePeriod() Obtain Log retention period in days
 * @method void setLogsetSavePeriod(integer $LogsetSavePeriod) Set Log retention period in days
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getDeleted() Obtain Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDeleted(string $Deleted) Set Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRegionEn() Obtain Whether English is used in this region
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRegionEn(string $RegionEn) Set Whether English is used in this region
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class LogSetInfo extends AbstractModel
{
    /**
     * @var integer Developer ID
     */
    public $AppId;

    /**
     * @var string Channel
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Channel;

    /**
     * @var string Logset ID
     */
    public $LogsetId;

    /**
     * @var string Logset name
     */
    public $LogsetName;

    /**
     * @var integer Whether it is the default logset
     */
    public $IsDefault;

    /**
     * @var integer Log retention period in days
     */
    public $LogsetSavePeriod;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Deleted;

    /**
     * @var string Whether English is used in this region
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RegionEn;

    /**
     * @param integer $AppId Developer ID
     * @param string $Channel Channel
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $LogsetId Logset ID
     * @param string $LogsetName Logset name
     * @param integer $IsDefault Whether it is the default logset
     * @param integer $LogsetSavePeriod Log retention period in days
     * @param string $CreateTime Creation time
     * @param string $Region Region
     * @param string $Deleted Whether the logset has been removed from CLS
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RegionEn Whether English is used in this region
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("LogsetSavePeriod",$param) and $param["LogsetSavePeriod"] !== null) {
            $this->LogsetSavePeriod = $param["LogsetSavePeriod"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("RegionEn",$param) and $param["RegionEn"] !== null) {
            $this->RegionEn = $param["RegionEn"];
        }
    }
}
