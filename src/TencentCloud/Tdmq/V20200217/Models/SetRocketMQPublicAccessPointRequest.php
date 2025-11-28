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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetRocketMQPublicAccessPoint request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID. Currently, the system only supports dedicated clusters.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID. Currently, the system only supports dedicated clusters.
 * @method boolean getEnabled() Obtain Enable or Disable Access
 * @method void setEnabled(boolean $Enabled) Set Enable or Disable Access
 * @method integer getBandwidth() Obtain Bandwidth size, in Mbps. It must be specified when you enable or adjust the public network access.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth size, in Mbps. It must be specified when you enable or adjust the public network access.
 * @method integer getPayMode() Obtain Payment mode, which must be specified when you enabled the public network access. 0 means hourly billing, and 1 means annual and monthly subscription. Currently, only hourly billing is supported.
 * @method void setPayMode(integer $PayMode) Set Payment mode, which must be specified when you enabled the public network access. 0 means hourly billing, and 1 means annual and monthly subscription. Currently, only hourly billing is supported.
 * @method array getRules() Obtain Public network access security rule list, which must be provided when Enabled is true.
 * @method void setRules(array $Rules) Set Public network access security rule list, which must be provided when Enabled is true.
 * @method boolean getBillingFlow() Obtain Whether public network is billed by traffic.
 * @method void setBillingFlow(boolean $BillingFlow) Set Whether public network is billed by traffic.
 */
class SetRocketMQPublicAccessPointRequest extends AbstractModel
{
    /**
     * @var string Cluster ID. Currently, the system only supports dedicated clusters.
     */
    public $InstanceId;

    /**
     * @var boolean Enable or Disable Access
     */
    public $Enabled;

    /**
     * @var integer Bandwidth size, in Mbps. It must be specified when you enable or adjust the public network access.
     */
    public $Bandwidth;

    /**
     * @var integer Payment mode, which must be specified when you enabled the public network access. 0 means hourly billing, and 1 means annual and monthly subscription. Currently, only hourly billing is supported.
     */
    public $PayMode;

    /**
     * @var array Public network access security rule list, which must be provided when Enabled is true.
     */
    public $Rules;

    /**
     * @var boolean Whether public network is billed by traffic.
     */
    public $BillingFlow;

    /**
     * @param string $InstanceId Cluster ID. Currently, the system only supports dedicated clusters.
     * @param boolean $Enabled Enable or Disable Access
     * @param integer $Bandwidth Bandwidth size, in Mbps. It must be specified when you enable or adjust the public network access.
     * @param integer $PayMode Payment mode, which must be specified when you enabled the public network access. 0 means hourly billing, and 1 means annual and monthly subscription. Currently, only hourly billing is supported.
     * @param array $Rules Public network access security rule list, which must be provided when Enabled is true.
     * @param boolean $BillingFlow Whether public network is billed by traffic.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PublicAccessRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }
    }
}
