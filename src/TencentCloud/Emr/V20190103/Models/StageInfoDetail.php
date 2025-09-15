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
 * Task step details
 *
 * @method string getStage() Obtain Steps.
 * @method void setStage(string $Stage) Set Steps.
 * @method string getName() Obtain Step name.
 * @method void setName(string $Name) Set Step name.
 * @method boolean getIsShow() Obtain Indicates whether to display
 * @method void setIsShow(boolean $IsShow) Set Indicates whether to display
 * @method boolean getIsSubFlow() Obtain Whether it is a subprocess
 * @method void setIsSubFlow(boolean $IsSubFlow) Set Whether it is a subprocess
 * @method string getSubFlowFlag() Obtain Subprocess tag.
 * @method void setSubFlowFlag(string $SubFlowFlag) Set Subprocess tag.
 * @method integer getStatus() Obtain Step execution status. 0: not started, 1: in progress, 2: completed, 3: partially completed, -1: failed
 * @method void setStatus(integer $Status) Set Step execution status. 0: not started, 1: in progress, 2: completed, 3: partially completed, -1: failed
 * @method string getDesc() Obtain Step running status description.
 * @method void setDesc(string $Desc) Set Step running status description.
 * @method float getProgress() Obtain Running progress.
 * @method void setProgress(float $Progress) Set Running progress.
 * @method string getStarttime() Obtain Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStarttime(string $Starttime) Set Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndtime() Obtain End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndtime(string $Endtime) Set End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getHadWoodDetail() Obtain Whether details are included.
 * @method void setHadWoodDetail(boolean $HadWoodDetail) Set Whether details are included.
 * @method integer getWoodJobId() Obtain Wood subprocess ID.
 * @method void setWoodJobId(integer $WoodJobId) Set Wood subprocess ID.
 * @method string getLanguageKey() Obtain Multi-language version key.
 * @method void setLanguageKey(string $LanguageKey) Set Multi-language version key.
 * @method string getFailedReason() Obtain Reason for stage failure.
 * @method void setFailedReason(string $FailedReason) Set Reason for stage failure.
 * @method string getTimeConsuming() Obtain Step duration.
 * @method void setTimeConsuming(string $TimeConsuming) Set Step duration.
 * @method integer getId() Obtain 
 * @method void setId(integer $Id) Set 
 */
class StageInfoDetail extends AbstractModel
{
    /**
     * @var string Steps.
     */
    public $Stage;

    /**
     * @var string Step name.
     */
    public $Name;

    /**
     * @var boolean Indicates whether to display
     */
    public $IsShow;

    /**
     * @var boolean Whether it is a subprocess
     */
    public $IsSubFlow;

    /**
     * @var string Subprocess tag.
     */
    public $SubFlowFlag;

    /**
     * @var integer Step execution status. 0: not started, 1: in progress, 2: completed, 3: partially completed, -1: failed
     */
    public $Status;

    /**
     * @var string Step running status description.
     */
    public $Desc;

    /**
     * @var float Running progress.
     */
    public $Progress;

    /**
     * @var string Start time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Starttime;

    /**
     * @var string End time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Endtime;

    /**
     * @var boolean Whether details are included.
     */
    public $HadWoodDetail;

    /**
     * @var integer Wood subprocess ID.
     */
    public $WoodJobId;

    /**
     * @var string Multi-language version key.
     */
    public $LanguageKey;

    /**
     * @var string Reason for stage failure.
     */
    public $FailedReason;

    /**
     * @var string Step duration.
     */
    public $TimeConsuming;

    /**
     * @var integer 
     */
    public $Id;

    /**
     * @param string $Stage Steps.
     * @param string $Name Step name.
     * @param boolean $IsShow Indicates whether to display
     * @param boolean $IsSubFlow Whether it is a subprocess
     * @param string $SubFlowFlag Subprocess tag.
     * @param integer $Status Step execution status. 0: not started, 1: in progress, 2: completed, 3: partially completed, -1: failed
     * @param string $Desc Step running status description.
     * @param float $Progress Running progress.
     * @param string $Starttime Start time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Endtime End time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $HadWoodDetail Whether details are included.
     * @param integer $WoodJobId Wood subprocess ID.
     * @param string $LanguageKey Multi-language version key.
     * @param string $FailedReason Reason for stage failure.
     * @param string $TimeConsuming Step duration.
     * @param integer $Id 
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
        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsShow",$param) and $param["IsShow"] !== null) {
            $this->IsShow = $param["IsShow"];
        }

        if (array_key_exists("IsSubFlow",$param) and $param["IsSubFlow"] !== null) {
            $this->IsSubFlow = $param["IsSubFlow"];
        }

        if (array_key_exists("SubFlowFlag",$param) and $param["SubFlowFlag"] !== null) {
            $this->SubFlowFlag = $param["SubFlowFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Starttime",$param) and $param["Starttime"] !== null) {
            $this->Starttime = $param["Starttime"];
        }

        if (array_key_exists("Endtime",$param) and $param["Endtime"] !== null) {
            $this->Endtime = $param["Endtime"];
        }

        if (array_key_exists("HadWoodDetail",$param) and $param["HadWoodDetail"] !== null) {
            $this->HadWoodDetail = $param["HadWoodDetail"];
        }

        if (array_key_exists("WoodJobId",$param) and $param["WoodJobId"] !== null) {
            $this->WoodJobId = $param["WoodJobId"];
        }

        if (array_key_exists("LanguageKey",$param) and $param["LanguageKey"] !== null) {
            $this->LanguageKey = $param["LanguageKey"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("TimeConsuming",$param) and $param["TimeConsuming"] !== null) {
            $this->TimeConsuming = $param["TimeConsuming"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
