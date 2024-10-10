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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot Resource Information
 *
 * @method string getResourceIds() Obtain Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceIds(string $ResourceIds) Set Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegion() Obtain Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(integer $Region) Set Region

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBeginTime() Obtain Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(string $BeginTime) Set Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getInquireNum() Obtain Application Quantity

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInquireNum(integer $InquireNum) Set Application Quantity

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUsedNum() Obtain Usage Quantity

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsedNum(integer $UsedNum) Set Usage Quantity

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Sub-product code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Sub-product code.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewFlag() Obtain Renewal flag.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Renewal flag.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBotCPWaf() Obtain Purchase Page Bot 40% Off

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotCPWaf(integer $BotCPWaf) Set Purchase Page Bot 40% Off

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBotNPWaf() Obtain Console Buy Bot with 50% Off

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBotNPWaf(integer $BotNPWaf) Set Console Buy Bot with 50% Off

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsBotTrial() Obtain 7-day Bot Trial Identification, 1 for Trial, 0 for No Trial

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsBotTrial(integer $IsBotTrial) Set 7-day Bot Trial Identification, 1 for Trial, 0 for No Trial

Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotPkg extends AbstractModel
{
    /**
     * @var string Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceIds;

    /**
     * @var integer Status

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Region

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Start time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var string End time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Application Quantity

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InquireNum;

    /**
     * @var integer Usage Quantity

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsedNum;

    /**
     * @var string Sub-product code.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Renewal flag.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var integer Purchase Page Bot 40% Off

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotCPWaf;

    /**
     * @var integer Console Buy Bot with 50% Off

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BotNPWaf;

    /**
     * @var integer 7-day Bot Trial Identification, 1 for Trial, 0 for No Trial

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsBotTrial;

    /**
     * @param string $ResourceIds Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Region Region

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BeginTime Start time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $InquireNum Application Quantity

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UsedNum Usage Quantity

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Sub-product code.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Renewal flag.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BotCPWaf Purchase Page Bot 40% Off

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BotNPWaf Console Buy Bot with 50% Off

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsBotTrial 7-day Bot Trial Identification, 1 for Trial, 0 for No Trial

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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("BotCPWaf",$param) and $param["BotCPWaf"] !== null) {
            $this->BotCPWaf = $param["BotCPWaf"];
        }

        if (array_key_exists("BotNPWaf",$param) and $param["BotNPWaf"] !== null) {
            $this->BotNPWaf = $param["BotNPWaf"];
        }

        if (array_key_exists("IsBotTrial",$param) and $param["IsBotTrial"] !== null) {
            $this->IsBotTrial = $param["IsBotTrial"];
        }
    }
}
