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
 * Information of the automatic image licensing task
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getType() Obtain Licensing method. Valid values: `AUTO` (automatic licensing); `MANUAL` (manual licensing).
 * @method void setType(string $Type) Set Licensing method. Valid values: `AUTO` (automatic licensing); `MANUAL` (manual licensing).
 * @method string getAuthorizedDate() Obtain Task date
 * @method void setAuthorizedDate(string $AuthorizedDate) Set Task date
 * @method string getSource() Obtain Image source. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
 * @method void setSource(string $Source) Set Image source. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
 * @method string getLastAuthorizedTime() Obtain Last licensing time
 * @method void setLastAuthorizedTime(string $LastAuthorizedTime) Set Last licensing time
 * @method integer getSuccessCount() Obtain Number of images automatically licensed successfully
 * @method void setSuccessCount(integer $SuccessCount) Set Number of images automatically licensed successfully
 * @method integer getFailCount() Obtain Number of images failed to be automatically licensed
 * @method void setFailCount(integer $FailCount) Set Number of images failed to be automatically licensed
 * @method string getLatestFailCode() Obtain Error code for the last task. Valid values: `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
 * @method void setLatestFailCode(string $LatestFailCode) Set Error code for the last task. Valid values: `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
 */
class ImageAutoAuthorizedTask extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Licensing method. Valid values: `AUTO` (automatic licensing); `MANUAL` (manual licensing).
     */
    public $Type;

    /**
     * @var string Task date
     */
    public $AuthorizedDate;

    /**
     * @var string Image source. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
     */
    public $Source;

    /**
     * @var string Last licensing time
     */
    public $LastAuthorizedTime;

    /**
     * @var integer Number of images automatically licensed successfully
     */
    public $SuccessCount;

    /**
     * @var integer Number of images failed to be automatically licensed
     */
    public $FailCount;

    /**
     * @var string Error code for the last task. Valid values: `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
     */
    public $LatestFailCode;

    /**
     * @param integer $TaskId Task ID
     * @param string $Type Licensing method. Valid values: `AUTO` (automatic licensing); `MANUAL` (manual licensing).
     * @param string $AuthorizedDate Task date
     * @param string $Source Image source. Valid values: `LOCAL` (local image); `REGISTRY` (repository image).
     * @param string $LastAuthorizedTime Last licensing time
     * @param integer $SuccessCount Number of images automatically licensed successfully
     * @param integer $FailCount Number of images failed to be automatically licensed
     * @param string $LatestFailCode Error code for the last task. Valid values: `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AuthorizedDate",$param) and $param["AuthorizedDate"] !== null) {
            $this->AuthorizedDate = $param["AuthorizedDate"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("LastAuthorizedTime",$param) and $param["LastAuthorizedTime"] !== null) {
            $this->LastAuthorizedTime = $param["LastAuthorizedTime"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("LatestFailCode",$param) and $param["LatestFailCode"] !== null) {
            $this->LatestFailCode = $param["LatestFailCode"];
        }
    }
}
