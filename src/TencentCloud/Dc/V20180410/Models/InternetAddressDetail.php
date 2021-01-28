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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Internet tunnel’s IP address details
 *
 * @method string getInstanceId() Obtain Internet tunnel’s IP address ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Internet tunnel’s IP address ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnet() Obtain Internet tunnel’s network address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnet(string $Subnet) Set Internet tunnel’s network address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMaskLen() Obtain Mask length of a network address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setMaskLen(integer $MaskLen) Set Mask length of a network address
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAddrType() Obtain Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddrType(integer $AddrType) Set Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Address status. Valid values: 0: in use
1: disabled
2: returned
 * @method void setStatus(integer $Status) Set Address status. Valid values: 0: in use
1: disabled
2: returned
 * @method string getApplyTime() Obtain Applied at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setApplyTime(string $ApplyTime) Set Applied at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getStopTime() Obtain Disabled at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setStopTime(string $StopTime) Set Disabled at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getReleaseTime() Obtain Returned at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReleaseTime(string $ReleaseTime) Set Returned at
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getAddrProto() Obtain Address protocol. Valid values: 0: IPv4; 1: IPv6
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAddrProto(integer $AddrProto) Set Address protocol. Valid values: 0: IPv4; 1: IPv6
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getReserveTime() Obtain Retention period of a released IP address, in days
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setReserveTime(integer $ReserveTime) Set Retention period of a released IP address, in days
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class InternetAddressDetail extends AbstractModel
{
    /**
     * @var string Internet tunnel’s IP address ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Internet tunnel’s network address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Subnet;

    /**
     * @var integer Mask length of a network address
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $MaskLen;

    /**
     * @var integer Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AddrType;

    /**
     * @var integer Address status. Valid values: 0: in use
1: disabled
2: returned
     */
    public $Status;

    /**
     * @var string Applied at
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ApplyTime;

    /**
     * @var string Disabled at
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $StopTime;

    /**
     * @var string Returned at
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReleaseTime;

    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer User ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var integer Address protocol. Valid values: 0: IPv4; 1: IPv6
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AddrProto;

    /**
     * @var integer Retention period of a released IP address, in days
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ReserveTime;

    /**
     * @param string $InstanceId Internet tunnel’s IP address ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Subnet Internet tunnel’s network address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $MaskLen Mask length of a network address
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AddrType Address type. Valid values: 0: BGP
1: China Telecom
2: China Mobile
3: China Unicom
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Status Address status. Valid values: 0: in use
1: disabled
2: returned
     * @param string $ApplyTime Applied at
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $StopTime Disabled at
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ReleaseTime Returned at
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AppId User ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $AddrProto Address protocol. Valid values: 0: IPv4; 1: IPv6
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $ReserveTime Retention period of a released IP address, in days
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Subnet",$param) and $param["Subnet"] !== null) {
            $this->Subnet = $param["Subnet"];
        }

        if (array_key_exists("MaskLen",$param) and $param["MaskLen"] !== null) {
            $this->MaskLen = $param["MaskLen"];
        }

        if (array_key_exists("AddrType",$param) and $param["AddrType"] !== null) {
            $this->AddrType = $param["AddrType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("StopTime",$param) and $param["StopTime"] !== null) {
            $this->StopTime = $param["StopTime"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AddrProto",$param) and $param["AddrProto"] !== null) {
            $this->AddrProto = $param["AddrProto"];
        }

        if (array_key_exists("ReserveTime",$param) and $param["ReserveTime"] !== null) {
            $this->ReserveTime = $param["ReserveTime"];
        }
    }
}
