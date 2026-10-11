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
 * InquiryPriceUpdateInstance request structure.
 *
 * @method string getTimeUnit() Obtain Time unit for the configuration change. Valid values:
<li>s: second. When PayMode is set to 0, TimeUnit can only be set to s.</li>
<li>m: month. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit for the configuration change. Valid values:
<li>s: second. When PayMode is set to 0, TimeUnit can only be set to s.</li>
<li>m: month. When PayMode is set to 1, TimeUnit can only be set to m.</li>
 * @method integer getTimeSpan() Obtain Configuration change duration, which is used together with TimeUnit.
<li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li>
<li>When TimeUnit is set to m, the number entered for this parameter indicates the purchase duration of a yearly/monthly subscription instance. For example, the value 1 indicates one month.</li>
 * @method void setTimeSpan(integer $TimeSpan) Set Configuration change duration, which is used together with TimeUnit.
<li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li>
<li>When TimeUnit is set to m, the number entered for this parameter indicates the purchase duration of a yearly/monthly subscription instance. For example, the value 1 indicates one month.</li>
 * @method integer getPayMode() Obtain Instance billing mode. Valid values:
<li>0: pay-as-you-go</li>
<li>1: monthly subscription</li>
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Valid values:
<li>0: pay-as-you-go</li>
<li>1: monthly subscription</li>
 * @method UpdateInstanceSettings getUpdateSpec() Obtain 
 * @method void setUpdateSpec(UpdateInstanceSettings $UpdateSpec) Set 
 * @method Placement getPlacement() Obtain 
 * @method void setPlacement(Placement $Placement) Set 
 * @method string getCurrency() Obtain Currency type. Valid values:
<li>CNY: RMB</li>
 * @method void setCurrency(string $Currency) Set Currency type. Valid values:
<li>CNY: RMB</li>
 * @method array getResourceIdList() Obtain ID list of resources modified in batches.
 * @method void setResourceIdList(array $ResourceIdList) Set ID list of resources modified in batches.
 */
class InquiryPriceUpdateInstanceRequest extends AbstractModel
{
    /**
     * @var string Time unit for the configuration change. Valid values:
<li>s: second. When PayMode is set to 0, TimeUnit can only be set to s.</li>
<li>m: month. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     */
    public $TimeUnit;

    /**
     * @var integer Configuration change duration, which is used together with TimeUnit.
<li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li>
<li>When TimeUnit is set to m, the number entered for this parameter indicates the purchase duration of a yearly/monthly subscription instance. For example, the value 1 indicates one month.</li>
     */
    public $TimeSpan;

    /**
     * @var integer Instance billing mode. Valid values:
<li>0: pay-as-you-go</li>
<li>1: monthly subscription</li>
     */
    public $PayMode;

    /**
     * @var UpdateInstanceSettings 
     */
    public $UpdateSpec;

    /**
     * @var Placement 
     */
    public $Placement;

    /**
     * @var string Currency type. Valid values:
<li>CNY: RMB</li>
     */
    public $Currency;

    /**
     * @var array ID list of resources modified in batches.
     */
    public $ResourceIdList;

    /**
     * @param string $TimeUnit Time unit for the configuration change. Valid values:
<li>s: second. When PayMode is set to 0, TimeUnit can only be set to s.</li>
<li>m: month. When PayMode is set to 1, TimeUnit can only be set to m.</li>
     * @param integer $TimeSpan Configuration change duration, which is used together with TimeUnit.
<li>When TimeUnit is set to s, this parameter can only be set to 3600, indicating a pay-as-you-go instance.</li>
<li>When TimeUnit is set to m, the number entered for this parameter indicates the purchase duration of a yearly/monthly subscription instance. For example, the value 1 indicates one month.</li>
     * @param integer $PayMode Instance billing mode. Valid values:
<li>0: pay-as-you-go</li>
<li>1: monthly subscription</li>
     * @param UpdateInstanceSettings $UpdateSpec 
     * @param Placement $Placement 
     * @param string $Currency Currency type. Valid values:
<li>CNY: RMB</li>
     * @param array $ResourceIdList ID list of resources modified in batches.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("UpdateSpec",$param) and $param["UpdateSpec"] !== null) {
            $this->UpdateSpec = new UpdateInstanceSettings();
            $this->UpdateSpec->deserialize($param["UpdateSpec"]);
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }
    }
}
