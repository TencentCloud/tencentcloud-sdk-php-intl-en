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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed visit analysis data
 *
 * @method integer getActiveCount() Obtain Number of active devices
 * @method void setActiveCount(integer $ActiveCount) Set Number of active devices
 * @method string getAvgDevice() Obtain Average visit duration per user
 * @method void setAvgDevice(string $AvgDevice) Set Average visit duration per user
 * @method string getAvgOnce() Obtain Average visit duration per session
 * @method void setAvgOnce(string $AvgOnce) Set Average visit duration per session
 * @method string getAvgOpenCount() Obtain Average opens per user
 * @method void setAvgOpenCount(string $AvgOpenCount) Set Average opens per user
 * @method string getDataTime() Obtain Date
 * @method void setDataTime(string $DataTime) Set Date
 * @method string getFlushTime() Obtain Data time
 * @method void setFlushTime(string $FlushTime) Set Data time
 * @method integer getNewCount() Obtain Number of new devices
 * @method void setNewCount(integer $NewCount) Set Number of new devices
 * @method integer getOpenCount() Obtain Number of opens
 * @method void setOpenCount(integer $OpenCount) Set Number of opens
 * @method integer getTotalShareNum() Obtain Number of shares
 * @method void setTotalShareNum(integer $TotalShareNum) Set Number of shares
 * @method integer getTotalUserNum() Obtain Cumulative users
 * @method void setTotalUserNum(integer $TotalUserNum) Set Cumulative users
 */
class AccessAnalysisDetail extends AbstractModel
{
    /**
     * @var integer Number of active devices
     */
    public $ActiveCount;

    /**
     * @var string Average visit duration per user
     */
    public $AvgDevice;

    /**
     * @var string Average visit duration per session
     */
    public $AvgOnce;

    /**
     * @var string Average opens per user
     */
    public $AvgOpenCount;

    /**
     * @var string Date
     */
    public $DataTime;

    /**
     * @var string Data time
     */
    public $FlushTime;

    /**
     * @var integer Number of new devices
     */
    public $NewCount;

    /**
     * @var integer Number of opens
     */
    public $OpenCount;

    /**
     * @var integer Number of shares
     */
    public $TotalShareNum;

    /**
     * @var integer Cumulative users
     */
    public $TotalUserNum;

    /**
     * @param integer $ActiveCount Number of active devices
     * @param string $AvgDevice Average visit duration per user
     * @param string $AvgOnce Average visit duration per session
     * @param string $AvgOpenCount Average opens per user
     * @param string $DataTime Date
     * @param string $FlushTime Data time
     * @param integer $NewCount Number of new devices
     * @param integer $OpenCount Number of opens
     * @param integer $TotalShareNum Number of shares
     * @param integer $TotalUserNum Cumulative users
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
        if (array_key_exists("ActiveCount",$param) and $param["ActiveCount"] !== null) {
            $this->ActiveCount = $param["ActiveCount"];
        }

        if (array_key_exists("AvgDevice",$param) and $param["AvgDevice"] !== null) {
            $this->AvgDevice = $param["AvgDevice"];
        }

        if (array_key_exists("AvgOnce",$param) and $param["AvgOnce"] !== null) {
            $this->AvgOnce = $param["AvgOnce"];
        }

        if (array_key_exists("AvgOpenCount",$param) and $param["AvgOpenCount"] !== null) {
            $this->AvgOpenCount = $param["AvgOpenCount"];
        }

        if (array_key_exists("DataTime",$param) and $param["DataTime"] !== null) {
            $this->DataTime = $param["DataTime"];
        }

        if (array_key_exists("FlushTime",$param) and $param["FlushTime"] !== null) {
            $this->FlushTime = $param["FlushTime"];
        }

        if (array_key_exists("NewCount",$param) and $param["NewCount"] !== null) {
            $this->NewCount = $param["NewCount"];
        }

        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("TotalShareNum",$param) and $param["TotalShareNum"] !== null) {
            $this->TotalShareNum = $param["TotalShareNum"];
        }

        if (array_key_exists("TotalUserNum",$param) and $param["TotalUserNum"] !== null) {
            $this->TotalUserNum = $param["TotalUserNum"];
        }
    }
}
