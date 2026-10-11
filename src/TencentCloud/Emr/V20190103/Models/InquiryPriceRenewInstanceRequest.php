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
 * InquiryPriceRenewInstance request structure.
 *
 * @method integer getTimeSpan() Obtain Duration of instance renewal. It is used together with TimeUnit. 1 indicates renewal for one month.
 * @method void setTimeSpan(integer $TimeSpan) Set Duration of instance renewal. It is used together with TimeUnit. 1 indicates renewal for one month.
 * @method integer getPayMode() Obtain Instance billing mode. Only the value 1 is supported, indicating yearly/monthly subscription.
 * @method void setPayMode(integer $PayMode) Set Instance billing mode. Only the value 1 is supported, indicating yearly/monthly subscription.
 * @method array getResourceIds() Obtain Resource ID list for nodes pending renewal. Resource ID format: emr-vm-xxxxxxxx. You can query valid resource IDs by logging in to the [console](https://console.cloud.tencent.com/emr).
 * @method void setResourceIds(array $ResourceIds) Set Resource ID list for nodes pending renewal. Resource ID format: emr-vm-xxxxxxxx. You can query valid resource IDs by logging in to the [console](https://console.cloud.tencent.com/emr).
 * @method string getTimeUnit() Obtain Time unit for instance renewal. Valid values:
<li>m: indicates month.</li>
 * @method void setTimeUnit(string $TimeUnit) Set Time unit for instance renewal. Valid values:
<li>m: indicates month.</li>
 * @method string getCurrency() Obtain Currency type. Valid values:
<li>CNY: RMB</li>
 * @method void setCurrency(string $Currency) Set Currency type. Valid values:
<li>CNY: RMB</li>
 * @method Placement getPlacement() Obtain 
 * @method void setPlacement(Placement $Placement) Set 
 * @method integer getModifyPayMode() Obtain Whether to convert from pay-as-you-go to yearly/monthly subscription. Valid values: 0 (no) and 1 (yes).
 * @method void setModifyPayMode(integer $ModifyPayMode) Set Whether to convert from pay-as-you-go to yearly/monthly subscription. Valid values: 0 (no) and 1 (yes).
 * @method boolean getNeedDetail() Obtain Whether to return the renewal price for each node.
 * @method void setNeedDetail(boolean $NeedDetail) Set Whether to return the renewal price for each node.
 * @method string getInstanceId() Obtain Cluster ID. Specify this parameter if you need renewal information for all yearly/monthly subscription nodes in the cluster.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID. Specify this parameter if you need renewal information for all yearly/monthly subscription nodes in the cluster.
 */
class InquiryPriceRenewInstanceRequest extends AbstractModel
{
    /**
     * @var integer Duration of instance renewal. It is used together with TimeUnit. 1 indicates renewal for one month.
     */
    public $TimeSpan;

    /**
     * @var integer Instance billing mode. Only the value 1 is supported, indicating yearly/monthly subscription.
     */
    public $PayMode;

    /**
     * @var array Resource ID list for nodes pending renewal. Resource ID format: emr-vm-xxxxxxxx. You can query valid resource IDs by logging in to the [console](https://console.cloud.tencent.com/emr).
     */
    public $ResourceIds;

    /**
     * @var string Time unit for instance renewal. Valid values:
<li>m: indicates month.</li>
     */
    public $TimeUnit;

    /**
     * @var string Currency type. Valid values:
<li>CNY: RMB</li>
     */
    public $Currency;

    /**
     * @var Placement 
     */
    public $Placement;

    /**
     * @var integer Whether to convert from pay-as-you-go to yearly/monthly subscription. Valid values: 0 (no) and 1 (yes).
     */
    public $ModifyPayMode;

    /**
     * @var boolean Whether to return the renewal price for each node.
     */
    public $NeedDetail;

    /**
     * @var string Cluster ID. Specify this parameter if you need renewal information for all yearly/monthly subscription nodes in the cluster.
     */
    public $InstanceId;

    /**
     * @param integer $TimeSpan Duration of instance renewal. It is used together with TimeUnit. 1 indicates renewal for one month.
     * @param integer $PayMode Instance billing mode. Only the value 1 is supported, indicating yearly/monthly subscription.
     * @param array $ResourceIds Resource ID list for nodes pending renewal. Resource ID format: emr-vm-xxxxxxxx. You can query valid resource IDs by logging in to the [console](https://console.cloud.tencent.com/emr).
     * @param string $TimeUnit Time unit for instance renewal. Valid values:
<li>m: indicates month.</li>
     * @param string $Currency Currency type. Valid values:
<li>CNY: RMB</li>
     * @param Placement $Placement 
     * @param integer $ModifyPayMode Whether to convert from pay-as-you-go to yearly/monthly subscription. Valid values: 0 (no) and 1 (yes).
     * @param boolean $NeedDetail Whether to return the renewal price for each node.
     * @param string $InstanceId Cluster ID. Specify this parameter if you need renewal information for all yearly/monthly subscription nodes in the cluster.
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

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("ModifyPayMode",$param) and $param["ModifyPayMode"] !== null) {
            $this->ModifyPayMode = $param["ModifyPayMode"];
        }

        if (array_key_exists("NeedDetail",$param) and $param["NeedDetail"] !== null) {
            $this->NeedDetail = $param["NeedDetail"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
