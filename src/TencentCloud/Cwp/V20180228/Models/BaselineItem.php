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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Baseline Item
 *
 * @method integer getItemId() Obtain Item ID
 * @method void setItemId(integer $ItemId) Set Item ID
 * @method string getItemName() Obtain Item Name
 * @method void setItemName(string $ItemName) Set Item Name
 * @method integer getCategoryId() Obtain Detection Item Classification
 * @method void setCategoryId(integer $CategoryId) Set Detection Item Classification
 * @method string getItemDesc() Obtain Item Description
 * @method void setItemDesc(string $ItemDesc) Set Item Description
 * @method string getFixMethod() Obtain Fixing Method
 * @method void setFixMethod(string $FixMethod) Set Fixing Method
 * @method string getRuleName() Obtain Rule
 * @method void setRuleName(string $RuleName) Set Rule
 * @method string getDetectResultDesc() Obtain Check result description
 * @method void setDetectResultDesc(string $DetectResultDesc) Set Check result description
 * @method integer getLevel() Obtain Risk level
 * @method void setLevel(integer $Level) Set Risk level
 * @method integer getDetectStatus() Obtain Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method void setDetectStatus(integer $DetectStatus) Set Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
 * @method string getHostId() Obtain Host ID
 * @method void setHostId(string $HostId) Set Host ID
 * @method string getHostName() Obtain host name
 * @method void setHostName(string $HostName) Set host name
 * @method string getHostIp() Obtain Host IP address
 * @method void setHostIp(string $HostIp) Set Host IP address
 * @method string getWanIp() Obtain Public IP address
 * @method void setWanIp(string $WanIp) Set Public IP address
 * @method string getFirstTime() Obtain First Occurrence Time
 * @method void setFirstTime(string $FirstTime) Set First Occurrence Time
 * @method string getLastTime() Obtain Last Occurrence Time
 * @method void setLastTime(string $LastTime) Set Last Occurrence Time
 * @method integer getCanBeFixed() Obtain Can Be Fixed or Not
 * @method void setCanBeFixed(integer $CanBeFixed) Set Can Be Fixed or Not
 * @method string getUuid() Obtain Host Security UUID
 * @method void setUuid(string $Uuid) Set Host Security UUID
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
 */
class BaselineItem extends AbstractModel
{
    /**
     * @var integer Item ID
     */
    public $ItemId;

    /**
     * @var string Item Name
     */
    public $ItemName;

    /**
     * @var integer Detection Item Classification
     */
    public $CategoryId;

    /**
     * @var string Item Description
     */
    public $ItemDesc;

    /**
     * @var string Fixing Method
     */
    public $FixMethod;

    /**
     * @var string Rule
     */
    public $RuleName;

    /**
     * @var string Check result description
     */
    public $DetectResultDesc;

    /**
     * @var integer Risk level
     */
    public $Level;

    /**
     * @var integer Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     */
    public $DetectStatus;

    /**
     * @var string Host ID
     */
    public $HostId;

    /**
     * @var string host name
     */
    public $HostName;

    /**
     * @var string Host IP address
     */
    public $HostIp;

    /**
     * @var string Public IP address
     */
    public $WanIp;

    /**
     * @var string First Occurrence Time
     */
    public $FirstTime;

    /**
     * @var string Last Occurrence Time
     */
    public $LastTime;

    /**
     * @var integer Can Be Fixed or Not
     */
    public $CanBeFixed;

    /**
     * @var string Host Security UUID
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo Host Additional Information
     */
    public $MachineExtraInfo;

    /**
     * @param integer $ItemId Item ID
     * @param string $ItemName Item Name
     * @param integer $CategoryId Detection Item Classification
     * @param string $ItemDesc Item Description
     * @param string $FixMethod Fixing Method
     * @param string $RuleName Rule
     * @param string $DetectResultDesc Check result description
     * @param integer $Level Risk level
     * @param integer $DetectStatus Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
     * @param string $HostId Host ID
     * @param string $HostName host name
     * @param string $HostIp Host IP address
     * @param string $WanIp Public IP address
     * @param string $FirstTime First Occurrence Time
     * @param string $LastTime Last Occurrence Time
     * @param integer $CanBeFixed Can Be Fixed or Not
     * @param string $Uuid Host Security UUID
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("ItemDesc",$param) and $param["ItemDesc"] !== null) {
            $this->ItemDesc = $param["ItemDesc"];
        }

        if (array_key_exists("FixMethod",$param) and $param["FixMethod"] !== null) {
            $this->FixMethod = $param["FixMethod"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("DetectResultDesc",$param) and $param["DetectResultDesc"] !== null) {
            $this->DetectResultDesc = $param["DetectResultDesc"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("CanBeFixed",$param) and $param["CanBeFixed"] !== null) {
            $this->CanBeFixed = $param["CanBeFixed"];
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
