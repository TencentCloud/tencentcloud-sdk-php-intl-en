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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output parameters
 *
 * @method string getInstanceName() Obtain Database instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Database instance
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain Database IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set Database IP
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Database port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Database port
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMemSize() Obtain Database memory specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMemSize(integer $MemSize) Set Database memory specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getVolume() Obtain Database disk specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVolume(integer $Volume) Set Database disk specification
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getService() Obtain Service flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setService(string $Service) Set Service flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getApplyTime() Obtain Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setApplyTime(string $ApplyTime) Set Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getPayType() Obtain Payment type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPayType(integer $PayType) Set Payment type
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getExpireFlag() Obtain Expiration flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setExpireFlag(boolean $ExpireFlag) Set Expiration flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Database status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Database status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAutoRenew() Obtain Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsAutoRenew(integer $IsAutoRenew) Set Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSerialNo() Obtain Database string
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSerialNo(string $SerialNo) Set Database string
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain ZoneId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set ZoneId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain RegionId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set RegionId
Note: this field may return null, indicating that no valid values can be obtained.
 */
class CdbInfo extends AbstractModel
{
    /**
     * @var string Database instance
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Database IP
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var integer Database port
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var integer Database memory specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MemSize;

    /**
     * @var integer Database disk specification
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Volume;

    /**
     * @var string Service flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Service;

    /**
     * @var string Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Application time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ApplyTime;

    /**
     * @var integer Payment type
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PayType;

    /**
     * @var boolean Expiration flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireFlag;

    /**
     * @var integer Database status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsAutoRenew;

    /**
     * @var string Database string
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SerialNo;

    /**
     * @var integer ZoneId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var integer RegionId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @param string $InstanceName Database instance
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Ip Database IP
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Database port
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MemSize Database memory specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Volume Database disk specification
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Service Service flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyTime Application time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $PayType Payment type
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $ExpireFlag Expiration flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Database status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAutoRenew Renewal flag
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SerialNo Database string
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId ZoneId
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId RegionId
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("ExpireFlag",$param) and $param["ExpireFlag"] !== null) {
            $this->ExpireFlag = $param["ExpireFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
