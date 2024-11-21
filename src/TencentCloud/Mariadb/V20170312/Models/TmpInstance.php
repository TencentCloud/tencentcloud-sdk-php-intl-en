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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temp instance
 *
 * @method integer getAppId() Obtain Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set Application ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceRemark() Obtain Instance remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceRemark(string $InstanceRemark) Set Instance remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTempType() Obtain Whether it is a temp instance. Valid values: `0` (non-temp instance), `1` (invalid temp instance), `2` (valid temp rollback instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTempType(integer $TempType) Set Whether it is a temp instance. Valid values: `0` (non-temp instance), `1` (invalid temp instance), `2` (valid temp rollback instance).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Instance status. Valid values: `0` (to be initialized), `1` (in process), `2` (running), `-1` (isolated), `-2` (eliminated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Instance status. Valid values: `0` (to be initialized), `1` (in process), `2` (running), `-1` (isolated), `-2` (eliminated).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain Virtual instance IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set Virtual instance IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVport() Obtain Virtual instance port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVport(integer $Vport) Set Virtual instance port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPeriodEndTime() Obtain Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeriodEndTime(string $PeriodEndTime) Set Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcInstanceId() Obtain Source instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcInstanceId(string $SrcInstanceId) Set Source instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatusDesc() Obtain Instance status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusDesc(string $StatusDesc) Set Instance status description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Instance region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Instance region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain AZ of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set AZ of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVipv6() Obtain Virtual IPv6 of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVipv6(string $Vipv6) Set Virtual IPv6 of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIpv6Flag() Obtain Instance IPv6 flag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Instance IPv6 flag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TmpInstance extends AbstractModel
{
    /**
     * @var integer Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Instance remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceRemark;

    /**
     * @var integer Whether it is a temp instance. Valid values: `0` (non-temp instance), `1` (invalid temp instance), `2` (valid temp rollback instance).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TempType;

    /**
     * @var integer Instance status. Valid values: `0` (to be initialized), `1` (in process), `2` (running), `-1` (isolated), `-2` (eliminated).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Virtual instance IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var integer Virtual instance port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vport;

    /**
     * @var string Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeriodEndTime;

    /**
     * @var string Source instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcInstanceId;

    /**
     * @var string Instance status description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusDesc;

    /**
     * @var string Instance region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string AZ of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Virtual IPv6 of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vipv6;

    /**
     * @var integer Instance IPv6 flag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ipv6Flag;

    /**
     * @param integer $AppId Application ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceRemark Instance remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TempType Whether it is a temp instance. Valid values: `0` (non-temp instance), `1` (invalid temp instance), `2` (valid temp rollback instance).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Instance status. Valid values: `0` (to be initialized), `1` (in process), `2` (running), `-1` (isolated), `-2` (eliminated).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vip Virtual instance IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Vport Virtual instance port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PeriodEndTime Validity end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcInstanceId Source instance ID in the format of `tdsql-ow728lmc`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StatusDesc Instance status description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Instance region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone AZ of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Vipv6 Virtual IPv6 of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Ipv6Flag Instance IPv6 flag
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceRemark",$param) and $param["InstanceRemark"] !== null) {
            $this->InstanceRemark = $param["InstanceRemark"];
        }

        if (array_key_exists("TempType",$param) and $param["TempType"] !== null) {
            $this->TempType = $param["TempType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("SrcInstanceId",$param) and $param["SrcInstanceId"] !== null) {
            $this->SrcInstanceId = $param["SrcInstanceId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }
    }
}
