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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceScaleOutInstance request structure.
 *
 * @method string getTimeUnit() Obtain Time unit of scale-out. Valid value:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit of scale-out. Valid value:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
 * @method integer getTimeSpan() Obtain Time span of scale-out, which needs to be used together with `TimeUnit`.
<li>When `PayMode` is 0, `TimeSpan` can only be 3,600.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set Time span of scale-out, which needs to be used together with `TimeUnit`.
<li>When `PayMode` is 0, `TimeSpan` can only be 3,600.</li>
 * @method integer getZoneId() Obtain ID of the AZ where an instance resides.
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ where an instance resides.
 * @method integer getPayMode() Obtain Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getCoreCount() Obtain Number of core nodes to be added.
 * @method void setCoreCount(integer $CoreCount) Set Number of core nodes to be added.
 * @method integer getTaskCount() Obtain Number of task nodes to be added.
 * @method void setTaskCount(integer $TaskCount) Set Number of task nodes to be added.
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
 * @method integer getRouterCount() Obtain Number of router nodes to be added.
 * @method void setRouterCount(integer $RouterCount) Set Number of router nodes to be added.
 * @method integer getMasterCount() Obtain Number of master nodes to be added.
 * @method void setMasterCount(integer $MasterCount) Set Number of master nodes to be added.
 */
class InquiryPriceScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string Time unit of scale-out. Valid value:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
     */
    public $TimeUnit;

    /**
     * @var integer Time span of scale-out, which needs to be used together with `TimeUnit`.
<li>When `PayMode` is 0, `TimeSpan` can only be 3,600.</li>
     */
    public $TimeSpan;

    /**
     * @var integer ID of the AZ where an instance resides.
     */
    public $ZoneId;

    /**
     * @var integer Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
     */
    public $PayMode;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Number of core nodes to be added.
     */
    public $CoreCount;

    /**
     * @var integer Number of task nodes to be added.
     */
    public $TaskCount;

    /**
     * @var string Currency.
     */
    public $Currency;

    /**
     * @var integer Number of router nodes to be added.
     */
    public $RouterCount;

    /**
     * @var integer Number of master nodes to be added.
     */
    public $MasterCount;

    /**
     * @param string $TimeUnit Time unit of scale-out. Valid value:
<li>s: Second. When `PayMode` is 0, `TimeUnit` can only be `s`.</li>
     * @param integer $TimeSpan Time span of scale-out, which needs to be used together with `TimeUnit`.
<li>When `PayMode` is 0, `TimeSpan` can only be 3,600.</li>
     * @param integer $ZoneId ID of the AZ where an instance resides.
     * @param integer $PayMode Instance billing mode. Valid value:
<li>0: Pay-as-you-go.</li>
     * @param string $InstanceId Instance ID.
     * @param integer $CoreCount Number of core nodes to be added.
     * @param integer $TaskCount Number of task nodes to be added.
     * @param string $Currency Currency.
     * @param integer $RouterCount Number of router nodes to be added.
     * @param integer $MasterCount Number of master nodes to be added.
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
        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("RouterCount",$param) and $param["RouterCount"] !== null) {
            $this->RouterCount = $param["RouterCount"];
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }
    }
}
