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
 * InquiryPriceRenewInstance request structure.
 *
 * @method integer getTimeSpan() Obtain How long the instance will be renewed for, which needs to be used together with `TimeUnit`.
 * @method void setTimeSpan(integer $TimeSpan) Set How long the instance will be renewed for, which needs to be used together with `TimeUnit`.
 * @method array getResourceIds() Obtain List of resource IDs of the node to be renewed. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
 * @method void setResourceIds(array $ResourceIds) Set List of resource IDs of the node to be renewed. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
 * @method Placement getPlacement() Obtain Location of the instance. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method void setPlacement(Placement $Placement) Set Location of the instance. This parameter is used to specify the AZ, project, and other attributes of the instance.
 * @method integer getPayMode() Obtain Instance billing mode.
 * @method void setPayMode(integer $PayMode) Set Instance billing mode.
 * @method string getTimeUnit() Obtain Unit of time for instance renewal.
 * @method void setTimeUnit(string $TimeUnit) Set Unit of time for instance renewal.
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
 * @method integer getModifyPayMode() Obtain Whether to change from pay-as-you-go billing to monthly subscription billing. `0`: no; `1`: yes
 * @method void setModifyPayMode(integer $ModifyPayMode) Set Whether to change from pay-as-you-go billing to monthly subscription billing. `0`: no; `1`: yes
 */
class InquiryPriceRenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer How long the instance will be renewed for, which needs to be used together with `TimeUnit`.
     */
    public $TimeSpan;

    /**
     * @var array List of resource IDs of the node to be renewed. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
     */
    public $ResourceIds;

    /**
     * @var Placement Location of the instance. This parameter is used to specify the AZ, project, and other attributes of the instance.
     */
    public $Placement;

    /**
     * @var integer Instance billing mode.
     */
    public $PayMode;

    /**
     * @var string Unit of time for instance renewal.
     */
    public $TimeUnit;

    /**
     * @var string Currency.
     */
    public $Currency;

    /**
     * @var integer Whether to change from pay-as-you-go billing to monthly subscription billing. `0`: no; `1`: yes
     */
    public $ModifyPayMode;

    /**
     * @param integer $TimeSpan How long the instance will be renewed for, which needs to be used together with `TimeUnit`.
     * @param array $ResourceIds List of resource IDs of the node to be renewed. The resource ID is in the format of `emr-vm-xxxxxxxx`. A valid resource ID can be queried in the [console](https://console.cloud.tencent.com/emr/static/hardware).
     * @param Placement $Placement Location of the instance. This parameter is used to specify the AZ, project, and other attributes of the instance.
     * @param integer $PayMode Instance billing mode.
     * @param string $TimeUnit Unit of time for instance renewal.
     * @param string $Currency Currency.
     * @param integer $ModifyPayMode Whether to change from pay-as-you-go billing to monthly subscription billing. `0`: no; `1`: yes
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("ModifyPayMode",$param) and $param["ModifyPayMode"] !== null) {
            $this->ModifyPayMode = $param["ModifyPayMode"];
        }
    }
}
