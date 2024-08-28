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
 * Product trial status query API Data output parameter
 *
 * @method integer getFWUserStatus() Obtain Protection status. 1: unprotected; 2: protecting; 3: in trial; 4 expired
 * @method void setFWUserStatus(integer $FWUserStatus) Set Protection status. 1: unprotected; 2: protecting; 3: in trial; 4 expired
 * @method boolean getCanApplyTrial() Obtain Whether application for trial is available. True indicates yes.
 * @method void setCanApplyTrial(boolean $CanApplyTrial) Set Whether application for trial is available. True indicates yes.
 * @method string getCanNotApplyReason() Obtain Reason for unavailable trial (Leave it blank if the trial is available.)
 * @method void setCanNotApplyReason(string $CanNotApplyReason) Set Reason for unavailable trial (Leave it blank if the trial is available.)
 * @method string getLastTrialTime() Obtain Last trial end time (Leave it blank if no trial record exists.)
 * @method void setLastTrialTime(string $LastTrialTime) Set Last trial end time (Leave it blank if no trial record exists.)
 */
class ProductStatusInfo extends AbstractModel
{
    /**
     * @var integer Protection status. 1: unprotected; 2: protecting; 3: in trial; 4 expired
     */
    public $FWUserStatus;

    /**
     * @var boolean Whether application for trial is available. True indicates yes.
     */
    public $CanApplyTrial;

    /**
     * @var string Reason for unavailable trial (Leave it blank if the trial is available.)
     */
    public $CanNotApplyReason;

    /**
     * @var string Last trial end time (Leave it blank if no trial record exists.)
     */
    public $LastTrialTime;

    /**
     * @param integer $FWUserStatus Protection status. 1: unprotected; 2: protecting; 3: in trial; 4 expired
     * @param boolean $CanApplyTrial Whether application for trial is available. True indicates yes.
     * @param string $CanNotApplyReason Reason for unavailable trial (Leave it blank if the trial is available.)
     * @param string $LastTrialTime Last trial end time (Leave it blank if no trial record exists.)
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
        if (array_key_exists("FWUserStatus",$param) and $param["FWUserStatus"] !== null) {
            $this->FWUserStatus = $param["FWUserStatus"];
        }

        if (array_key_exists("CanApplyTrial",$param) and $param["CanApplyTrial"] !== null) {
            $this->CanApplyTrial = $param["CanApplyTrial"];
        }

        if (array_key_exists("CanNotApplyReason",$param) and $param["CanNotApplyReason"] !== null) {
            $this->CanNotApplyReason = $param["CanNotApplyReason"];
        }

        if (array_key_exists("LastTrialTime",$param) and $param["LastTrialTime"] !== null) {
            $this->LastTrialTime = $param["LastTrialTime"];
        }
    }
}
