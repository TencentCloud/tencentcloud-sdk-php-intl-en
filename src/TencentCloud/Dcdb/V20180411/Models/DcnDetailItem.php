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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN details
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getRegion() Obtain Region where the instance resides
 * @method void setRegion(string $Region) Set Region where the instance resides
 * @method string getZone() Obtain Availability zone where the instance resides
 * @method void setZone(string $Zone) Set Availability zone where the instance resides
 * @method string getVip() Obtain Instance IP address
 * @method void setVip(string $Vip) Set Instance IP address
 * @method string getVipv6() Obtain Instance IPv6 address
 * @method void setVipv6(string $Vipv6) Set Instance IPv6 address
 * @method integer getVport() Obtain Instance port
 * @method void setVport(integer $Vport) Set Instance port
 * @method integer getStatus() Obtain Instance status
 * @method void setStatus(integer $Status) Set Instance status
 * @method string getStatusDesc() Obtain Instance status description
 * @method void setStatusDesc(string $StatusDesc) Set Instance status description
 * @method integer getDcnFlag() Obtain DCN flag. Valid values: `1` (primary), `2` (secondary)
 * @method void setDcnFlag(integer $DcnFlag) Set DCN flag. Valid values: `1` (primary), `2` (secondary)
 * @method integer getDcnStatus() Obtain DCN status. Valid values: `0` (null), `1` (creating), `2` (syncing), `3` (disconnected)
 * @method void setDcnStatus(integer $DcnStatus) Set DCN status. Valid values: `0` (null), `1` (creating), `2` (syncing), `3` (disconnected)
 */
class DcnDetailItem extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Region where the instance resides
     */
    public $Region;

    /**
     * @var string Availability zone where the instance resides
     */
    public $Zone;

    /**
     * @var string Instance IP address
     */
    public $Vip;

    /**
     * @var string Instance IPv6 address
     */
    public $Vipv6;

    /**
     * @var integer Instance port
     */
    public $Vport;

    /**
     * @var integer Instance status
     */
    public $Status;

    /**
     * @var string Instance status description
     */
    public $StatusDesc;

    /**
     * @var integer DCN flag. Valid values: `1` (primary), `2` (secondary)
     */
    public $DcnFlag;

    /**
     * @var integer DCN status. Valid values: `0` (null), `1` (creating), `2` (syncing), `3` (disconnected)
     */
    public $DcnStatus;

    /**
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param string $Region Region where the instance resides
     * @param string $Zone Availability zone where the instance resides
     * @param string $Vip Instance IP address
     * @param string $Vipv6 Instance IPv6 address
     * @param integer $Vport Instance port
     * @param integer $Status Instance status
     * @param string $StatusDesc Instance status description
     * @param integer $DcnFlag DCN flag. Valid values: `1` (primary), `2` (secondary)
     * @param integer $DcnStatus DCN status. Valid values: `0` (null), `1` (creating), `2` (syncing), `3` (disconnected)
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vipv6",$param) and $param["Vipv6"] !== null) {
            $this->Vipv6 = $param["Vipv6"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("DcnFlag",$param) and $param["DcnFlag"] !== null) {
            $this->DcnFlag = $param["DcnFlag"];
        }

        if (array_key_exists("DcnStatus",$param) and $param["DcnStatus"] !== null) {
            $this->DcnStatus = $param["DcnStatus"];
        }
    }
}
