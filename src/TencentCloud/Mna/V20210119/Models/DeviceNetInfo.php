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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Device network status information
 *
 * @method integer getType() Obtain Network type:
Data
1:Wi-Fi
2: Wired
 * @method void setType(integer $Type) Set Network type:
Data
1:Wi-Fi
2: Wired
 * @method boolean getDataEnable() Obtain Enable or disable.
 * @method void setDataEnable(boolean $DataEnable) Set Enable or disable.
 * @method string getUploadLimit() Obtain Uplink speed limit
 * @method void setUploadLimit(string $UploadLimit) Set Uplink speed limit
 * @method string getDownloadLimit() Obtain Downstream speed limit
 * @method void setDownloadLimit(string $DownloadLimit) Set Downstream speed limit
 * @method integer getDataRx() Obtain receive real-time speed
 * @method void setDataRx(integer $DataRx) Set receive real-time speed
 * @method integer getDataTx() Obtain Send real-time speed
 * @method void setDataTx(integer $DataTx) Set Send real-time speed
 * @method integer getVendor() Obtain Operator type:
1: CMCC;
2: CTCC 
3: CUCC
 * @method void setVendor(integer $Vendor) Set Operator type:
1: CMCC;
2: CTCC 
3: CUCC
 * @method integer getState() Obtain Connection status:
0: connectionless
1: Connecting
2: Connected
 * @method void setState(integer $State) Set Connection status:
0: connectionless
1: Connecting
2: Connected
 * @method string getPublicIp() Obtain Public IP address
 * @method void setPublicIp(string $PublicIp) Set Public IP address
 * @method integer getSignalStrength() Obtain Signal strength/Measurement unit: dbm
 * @method void setSignalStrength(integer $SignalStrength) Set Signal strength/Measurement unit: dbm
 * @method integer getRat() Obtain Data network type:
-1: Invalid value.   
2:2G 
3:3G 
4:4G 
5:5G
 * @method void setRat(integer $Rat) Set Data network type:
-1: Invalid value.   
2:2G 
3:3G 
4:4G 
5:5G
 * @method string getNetInfoName() Obtain NIC Name
 * @method void setNetInfoName(string $NetInfoName) Set NIC Name
 * @method float getDownRate() Obtain Downstream real-time rate (floating-point type replaces the integer type of the previous version DataRx).
 * @method void setDownRate(float $DownRate) Set Downstream real-time rate (floating-point type replaces the integer type of the previous version DataRx).
 * @method float getUpRate() Obtain Uplink real-time rate (floating-point type replaces the integer of the previous version TxRate)
 * @method void setUpRate(float $UpRate) Set Uplink real-time rate (floating-point type replaces the integer of the previous version TxRate)
 */
class DeviceNetInfo extends AbstractModel
{
    /**
     * @var integer Network type:
Data
1:Wi-Fi
2: Wired
     */
    public $Type;

    /**
     * @var boolean Enable or disable.
     */
    public $DataEnable;

    /**
     * @var string Uplink speed limit
     */
    public $UploadLimit;

    /**
     * @var string Downstream speed limit
     */
    public $DownloadLimit;

    /**
     * @var integer receive real-time speed
     */
    public $DataRx;

    /**
     * @var integer Send real-time speed
     */
    public $DataTx;

    /**
     * @var integer Operator type:
1: CMCC;
2: CTCC 
3: CUCC
     */
    public $Vendor;

    /**
     * @var integer Connection status:
0: connectionless
1: Connecting
2: Connected
     */
    public $State;

    /**
     * @var string Public IP address
     */
    public $PublicIp;

    /**
     * @var integer Signal strength/Measurement unit: dbm
     */
    public $SignalStrength;

    /**
     * @var integer Data network type:
-1: Invalid value.   
2:2G 
3:3G 
4:4G 
5:5G
     */
    public $Rat;

    /**
     * @var string NIC Name
     */
    public $NetInfoName;

    /**
     * @var float Downstream real-time rate (floating-point type replaces the integer type of the previous version DataRx).
     */
    public $DownRate;

    /**
     * @var float Uplink real-time rate (floating-point type replaces the integer of the previous version TxRate)
     */
    public $UpRate;

    /**
     * @param integer $Type Network type:
Data
1:Wi-Fi
2: Wired
     * @param boolean $DataEnable Enable or disable.
     * @param string $UploadLimit Uplink speed limit
     * @param string $DownloadLimit Downstream speed limit
     * @param integer $DataRx receive real-time speed
     * @param integer $DataTx Send real-time speed
     * @param integer $Vendor Operator type:
1: CMCC;
2: CTCC 
3: CUCC
     * @param integer $State Connection status:
0: connectionless
1: Connecting
2: Connected
     * @param string $PublicIp Public IP address
     * @param integer $SignalStrength Signal strength/Measurement unit: dbm
     * @param integer $Rat Data network type:
-1: Invalid value.   
2:2G 
3:3G 
4:4G 
5:5G
     * @param string $NetInfoName NIC Name
     * @param float $DownRate Downstream real-time rate (floating-point type replaces the integer type of the previous version DataRx).
     * @param float $UpRate Uplink real-time rate (floating-point type replaces the integer of the previous version TxRate)
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataEnable",$param) and $param["DataEnable"] !== null) {
            $this->DataEnable = $param["DataEnable"];
        }

        if (array_key_exists("UploadLimit",$param) and $param["UploadLimit"] !== null) {
            $this->UploadLimit = $param["UploadLimit"];
        }

        if (array_key_exists("DownloadLimit",$param) and $param["DownloadLimit"] !== null) {
            $this->DownloadLimit = $param["DownloadLimit"];
        }

        if (array_key_exists("DataRx",$param) and $param["DataRx"] !== null) {
            $this->DataRx = $param["DataRx"];
        }

        if (array_key_exists("DataTx",$param) and $param["DataTx"] !== null) {
            $this->DataTx = $param["DataTx"];
        }

        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("SignalStrength",$param) and $param["SignalStrength"] !== null) {
            $this->SignalStrength = $param["SignalStrength"];
        }

        if (array_key_exists("Rat",$param) and $param["Rat"] !== null) {
            $this->Rat = $param["Rat"];
        }

        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }

        if (array_key_exists("DownRate",$param) and $param["DownRate"] !== null) {
            $this->DownRate = $param["DownRate"];
        }

        if (array_key_exists("UpRate",$param) and $param["UpRate"] !== null) {
            $this->UpRate = $param["UpRate"];
        }
    }
}
