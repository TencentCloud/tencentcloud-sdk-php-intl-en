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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output parameters
 *
 * @method string getInstanceName() Obtain Database instance.
 * @method void setInstanceName(string $InstanceName) Set Database instance.
 * @method string getIp() Obtain Database IP address.
 * @method void setIp(string $Ip) Set Database IP address.
 * @method integer getPort() Obtain Database port.
 * @method void setPort(integer $Port) Set Database port.
 * @method integer getMemSize() Obtain Database memory specifications.
 * @method void setMemSize(integer $MemSize) Set Database memory specifications.
 * @method integer getVolume() Obtain Database disk specifications.
 * @method void setVolume(integer $Volume) Set Database disk specifications.
 * @method string getService() Obtain Service identifier.
 * @method void setService(string $Service) Set Service identifier.
 * @method string getExpireTime() Obtain Expiration time.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time.
 * @method string getApplyTime() Obtain Application time.
 * @method void setApplyTime(string $ApplyTime) Set Application time.
 * @method integer getPayType() Obtain Billing type.
 * @method void setPayType(integer $PayType) Set Billing type.
 * @method boolean getExpireFlag() Obtain Expiration flag.
 * @method void setExpireFlag(boolean $ExpireFlag) Set Expiration flag.
 * @method integer getStatus() Obtain Database status.
 * @method void setStatus(integer $Status) Set Database status.
 * @method integer getIsAutoRenew() Obtain Renewal flag.
 * @method void setIsAutoRenew(integer $IsAutoRenew) Set Renewal flag.
 * @method string getSerialNo() Obtain Database string.
 * @method void setSerialNo(string $SerialNo) Set Database string.
 * @method integer getZoneId() Obtain ZoneId
 * @method void setZoneId(integer $ZoneId) Set ZoneId
 * @method integer getRegionId() Obtain RegionId
 * @method void setRegionId(integer $RegionId) Set RegionId
 */
class CdbInfo extends AbstractModel
{
    /**
     * @var string Database instance.
     */
    public $InstanceName;

    /**
     * @var string Database IP address.
     */
    public $Ip;

    /**
     * @var integer Database port.
     */
    public $Port;

    /**
     * @var integer Database memory specifications.
     */
    public $MemSize;

    /**
     * @var integer Database disk specifications.
     */
    public $Volume;

    /**
     * @var string Service identifier.
     */
    public $Service;

    /**
     * @var string Expiration time.
     */
    public $ExpireTime;

    /**
     * @var string Application time.
     */
    public $ApplyTime;

    /**
     * @var integer Billing type.
     */
    public $PayType;

    /**
     * @var boolean Expiration flag.
     */
    public $ExpireFlag;

    /**
     * @var integer Database status.
     */
    public $Status;

    /**
     * @var integer Renewal flag.
     */
    public $IsAutoRenew;

    /**
     * @var string Database string.
     */
    public $SerialNo;

    /**
     * @var integer ZoneId
     */
    public $ZoneId;

    /**
     * @var integer RegionId
     */
    public $RegionId;

    /**
     * @param string $InstanceName Database instance.
     * @param string $Ip Database IP address.
     * @param integer $Port Database port.
     * @param integer $MemSize Database memory specifications.
     * @param integer $Volume Database disk specifications.
     * @param string $Service Service identifier.
     * @param string $ExpireTime Expiration time.
     * @param string $ApplyTime Application time.
     * @param integer $PayType Billing type.
     * @param boolean $ExpireFlag Expiration flag.
     * @param integer $Status Database status.
     * @param integer $IsAutoRenew Renewal flag.
     * @param string $SerialNo Database string.
     * @param integer $ZoneId ZoneId
     * @param integer $RegionId RegionId
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
