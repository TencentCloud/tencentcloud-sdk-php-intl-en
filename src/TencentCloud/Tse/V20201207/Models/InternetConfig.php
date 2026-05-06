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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public network load balancing configuration
 *
 * @method string getInternetAddressVersion() Obtain Public network address version. Optional: "IPV4" | "IPV6". By default IPV4 if left blank.
 * @method void setInternetAddressVersion(string $InternetAddressVersion) Set Public network address version. Optional: "IPV4" | "IPV6". By default IPV4 if left blank.
 * @method string getInternetPayMode() Obtain Public network payment mode. Currently, only "BANDWIDTH" is selectable. Defaults to "BANDWIDTH" if left blank.
 * @method void setInternetPayMode(string $InternetPayMode) Set Public network payment mode. Currently, only "BANDWIDTH" is selectable. Defaults to "BANDWIDTH" if left blank.
 * @method integer getInternetMaxBandwidthOut() Obtain Public network bandwidth.
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network bandwidth.
 * @method string getDescription() Obtain Description of load balancing
 * @method void setDescription(string $Description) Set Description of load balancing
 * @method string getSlaType() Obtain Load balancing specification type. Support clb.c2.medium, clb.c3.small, clb.c3.medium, clb.c4.small, clb.c4.medium, clb.c4.large, clb.c4.xlarge. Defaults to shared type.
 * @method void setSlaType(string $SlaType) Set Load balancing specification type. Support clb.c2.medium, clb.c3.small, clb.c3.medium, clb.c4.small, clb.c4.medium, clb.c4.large, clb.c4.xlarge. Defaults to shared type.
 * @method boolean getMultiZoneFlag() Obtain Whether load balancing is multi-availability zone
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) Set Whether load balancing is multi-availability zone
 * @method string getMasterZoneId() Obtain Primary AZ.
 * @method void setMasterZoneId(string $MasterZoneId) Set Primary AZ.
 * @method string getSlaveZoneId() Obtain standby availability zone
 * @method void setSlaveZoneId(string $SlaveZoneId) Set standby availability zone
 */
class InternetConfig extends AbstractModel
{
    /**
     * @var string Public network address version. Optional: "IPV4" | "IPV6". By default IPV4 if left blank.
     */
    public $InternetAddressVersion;

    /**
     * @var string Public network payment mode. Currently, only "BANDWIDTH" is selectable. Defaults to "BANDWIDTH" if left blank.
     */
    public $InternetPayMode;

    /**
     * @var integer Public network bandwidth.
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Description of load balancing
     */
    public $Description;

    /**
     * @var string Load balancing specification type. Support clb.c2.medium, clb.c3.small, clb.c3.medium, clb.c4.small, clb.c4.medium, clb.c4.large, clb.c4.xlarge. Defaults to shared type.
     */
    public $SlaType;

    /**
     * @var boolean Whether load balancing is multi-availability zone
     */
    public $MultiZoneFlag;

    /**
     * @var string Primary AZ.
     */
    public $MasterZoneId;

    /**
     * @var string standby availability zone
     */
    public $SlaveZoneId;

    /**
     * @param string $InternetAddressVersion Public network address version. Optional: "IPV4" | "IPV6". By default IPV4 if left blank.
     * @param string $InternetPayMode Public network payment mode. Currently, only "BANDWIDTH" is selectable. Defaults to "BANDWIDTH" if left blank.
     * @param integer $InternetMaxBandwidthOut Public network bandwidth.
     * @param string $Description Description of load balancing
     * @param string $SlaType Load balancing specification type. Support clb.c2.medium, clb.c3.small, clb.c3.medium, clb.c4.small, clb.c4.medium, clb.c4.large, clb.c4.xlarge. Defaults to shared type.
     * @param boolean $MultiZoneFlag Whether load balancing is multi-availability zone
     * @param string $MasterZoneId Primary AZ.
     * @param string $SlaveZoneId standby availability zone
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
        if (array_key_exists("InternetAddressVersion",$param) and $param["InternetAddressVersion"] !== null) {
            $this->InternetAddressVersion = $param["InternetAddressVersion"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SlaType",$param) and $param["SlaType"] !== null) {
            $this->SlaType = $param["SlaType"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("MasterZoneId",$param) and $param["MasterZoneId"] !== null) {
            $this->MasterZoneId = $param["MasterZoneId"];
        }

        if (array_key_exists("SlaveZoneId",$param) and $param["SlaveZoneId"] !== null) {
            $this->SlaveZoneId = $param["SlaveZoneId"];
        }
    }
}
