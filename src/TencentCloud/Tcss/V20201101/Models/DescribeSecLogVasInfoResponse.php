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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogVasInfo response structure.
 *
 * @method string getBuyStatus() Obtain Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
 * @method void setBuyStatus(string $BuyStatus) Set Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
 * @method integer getLogSaveMonth() Obtain Storage period in months
 * @method void setLogSaveMonth(integer $LogSaveMonth) Set Storage period in months
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getLogCapacity() Obtain Storage capacity (GB)
 * @method void setLogCapacity(integer $LogCapacity) Set Storage capacity (GB)
 * @method string getResourceID() Obtain Resource ID
 * @method void setResourceID(string $ResourceID) Set Resource ID
 * @method boolean getIsPurchased() Obtain Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
 * @method void setIsPurchased(boolean $IsPurchased) Set Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
 * @method integer getTrialCapacity() Obtain Trial storage capacity (GB)
 * @method void setTrialCapacity(integer $TrialCapacity) Set Trial storage capacity (GB)
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecLogVasInfoResponse extends AbstractModel
{
    /**
     * @var string Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
     */
    public $BuyStatus;

    /**
     * @var integer Storage period in months
     */
    public $LogSaveMonth;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Storage capacity (GB)
     */
    public $LogCapacity;

    /**
     * @var string Resource ID
     */
    public $ResourceID;

    /**
     * @var boolean Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
     */
    public $IsPurchased;

    /**
     * @var integer Trial storage capacity (GB)
     */
    public $TrialCapacity;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $BuyStatus Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
     * @param integer $LogSaveMonth Storage period in months
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $LogCapacity Storage capacity (GB)
     * @param string $ResourceID Resource ID
     * @param boolean $IsPurchased Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
     * @param integer $TrialCapacity Trial storage capacity (GB)
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("LogSaveMonth",$param) and $param["LogSaveMonth"] !== null) {
            $this->LogSaveMonth = $param["LogSaveMonth"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("LogCapacity",$param) and $param["LogCapacity"] !== null) {
            $this->LogCapacity = $param["LogCapacity"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("IsPurchased",$param) and $param["IsPurchased"] !== null) {
            $this->IsPurchased = $param["IsPurchased"];
        }

        if (array_key_exists("TrialCapacity",$param) and $param["TrialCapacity"] !== null) {
            $this->TrialCapacity = $param["TrialCapacity"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
