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
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectResultDesc(string $DetectResultDesc) Set Check result description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLevel() Obtain Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(integer $Level) Set Risk level
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDetectStatus() Obtain Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetectStatus(integer $DetectStatus) Set Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostId() Obtain Host ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostId(string $HostId) Set Host ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostName(string $HostName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWanIp() Obtain Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWanIp(string $WanIp) Set Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain First Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstTime(string $FirstTime) Set First Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastTime() Obtain Last Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTime(string $LastTime) Set Last Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCanBeFixed() Obtain Can Be Fixed or Not
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanBeFixed(integer $CanBeFixed) Set Can Be Fixed or Not
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host Security UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host Security UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
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
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectResultDesc;

    /**
     * @var integer Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var integer Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetectStatus;

    /**
     * @var string Host ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostId;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostName;

    /**
     * @var string Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WanIp;

    /**
     * @var string First Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstTime;

    /**
     * @var string Last Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTime;

    /**
     * @var integer Can Be Fixed or Not
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanBeFixed;

    /**
     * @var string Host Security UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
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
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Level Risk level
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DetectStatus Detection Status. 0: Failed; 1: Ignored; 3: Passed; 5: Under detection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostId Host ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WanIp Public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime First Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastTime Last Occurrence Time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CanBeFixed Can Be Fixed or Not
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host Security UUID
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
