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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline Host Detection
 *
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method string getHostIp() Obtain Private IP address
 * @method void setHostIp(string $HostIp) Set Private IP address
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method string getWanIp() Obtain Public IP address
 * @method void setWanIp(string $WanIp) Set Public IP address
 * @method integer getDetectStatus() Obtain 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method void setDetectStatus(integer $DetectStatus) Set 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method integer getPassedItemCount() Obtain Number of Passed Tasks in Detection
 * @method void setPassedItemCount(integer $PassedItemCount) Set Number of Passed Tasks in Detection
 * @method integer getItemCount() Obtain Associated Detection Item Count
 * @method void setItemCount(integer $ItemCount) Set Associated Detection Item Count
 * @method integer getNotPassedItemCount() Obtain Detection Failure Count
 * @method void setNotPassedItemCount(integer $NotPassedItemCount) Set Detection Failure Count
 * @method string getFirstTime() Obtain First detection time
 * @method void setFirstTime(string $FirstTime) Set First detection time
 * @method string getLastTime() Obtain Last detection Time
 * @method void setLastTime(string $LastTime) Set Last detection Time
 * @method string getUuid() Obtain CWPP UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set CWPP UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaselineHostDetect extends AbstractModel
{
    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var string Private IP address
     */
    public $HostIp;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var string Public IP address
     */
    public $WanIp;

    /**
     * @var integer 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     */
    public $DetectStatus;

    /**
     * @var integer Number of Passed Tasks in Detection
     */
    public $PassedItemCount;

    /**
     * @var integer Associated Detection Item Count
     */
    public $ItemCount;

    /**
     * @var integer Detection Failure Count
     */
    public $NotPassedItemCount;

    /**
     * @var string First detection time
     */
    public $FirstTime;

    /**
     * @var string Last detection Time
     */
    public $LastTime;

    /**
     * @var string CWPP UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $HostId Host ID
     * @param string $HostIp Private IP address
     * @param string $HostName Host name
     * @param string $WanIp Public IP address
     * @param integer $DetectStatus 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     * @param integer $PassedItemCount Number of Passed Tasks in Detection
     * @param integer $ItemCount Associated Detection Item Count
     * @param integer $NotPassedItemCount Detection Failure Count
     * @param string $FirstTime First detection time
     * @param string $LastTime Last detection Time
     * @param string $Uuid CWPP UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("PassedItemCount",$param) and $param["PassedItemCount"] !== null) {
            $this->PassedItemCount = $param["PassedItemCount"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("NotPassedItemCount",$param) and $param["NotPassedItemCount"] !== null) {
            $this->NotPassedItemCount = $param["NotPassedItemCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
