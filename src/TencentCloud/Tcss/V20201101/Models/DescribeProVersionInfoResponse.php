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
 * DescribeProVersionInfo response structure.
 *
 * @method string getStartTime() Obtain Start time of the Pro Edition, which is not empty only when the edition is purchased.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Start time of the Pro Edition, which is not empty only when the edition is purchased.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain End time of the Pro Edition, which is not empty only when more resources are purchased.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set End time of the Pro Edition, which is not empty only when more resources are purchased.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCoresCnt() Obtain Number of cores to be purchased
 * @method void setCoresCnt(integer $CoresCnt) Set Number of cores to be purchased
 * @method integer getMaxPostPayCoresCnt() Obtain Upper limit for elastic billing
 * @method void setMaxPostPayCoresCnt(integer $MaxPostPayCoresCnt) Set Upper limit for elastic billing
 * @method string getResourceId() Obtain Resource ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBuyStatus() Obtain Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
 * @method void setBuyStatus(string $BuyStatus) Set Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
 * @method boolean getIsPurchased() Obtain Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
 * @method void setIsPurchased(boolean $IsPurchased) Set Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeProVersionInfoResponse extends AbstractModel
{
    /**
     * @var string Start time of the Pro Edition, which is not empty only when the edition is purchased.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string End time of the Pro Edition, which is not empty only when more resources are purchased.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Number of cores to be purchased
     */
    public $CoresCnt;

    /**
     * @var integer Upper limit for elastic billing
     */
    public $MaxPostPayCoresCnt;

    /**
     * @var string Resource ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
     */
    public $BuyStatus;

    /**
     * @var boolean Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
     */
    public $IsPurchased;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $StartTime Start time of the Pro Edition, which is not empty only when the edition is purchased.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time of the Pro Edition, which is not empty only when more resources are purchased.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CoresCnt Number of cores to be purchased
     * @param integer $MaxPostPayCoresCnt Upper limit for elastic billing
     * @param string $ResourceId Resource ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BuyStatus Purchase status
`Pending`: To be purchased.
`Normal`: Purchased.
`Isolate`: Isolated.
     * @param boolean $IsPurchased Whether it has been purchased before. Valid values: `false` (no); `true` (yes).
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }

        if (array_key_exists("MaxPostPayCoresCnt",$param) and $param["MaxPostPayCoresCnt"] !== null) {
            $this->MaxPostPayCoresCnt = $param["MaxPostPayCoresCnt"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BuyStatus",$param) and $param["BuyStatus"] !== null) {
            $this->BuyStatus = $param["BuyStatus"];
        }

        if (array_key_exists("IsPurchased",$param) and $param["IsPurchased"] !== null) {
            $this->IsPurchased = $param["IsPurchased"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
