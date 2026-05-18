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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceAz request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID, such as cmgo-p8vn****. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID, such as cmgo-p8vn****. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
 * @method string getPrimaryNodeZone() Obtain <p>Availability zone ID where the primary node is located. For the method for obtaining, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method void setPrimaryNodeZone(string $PrimaryNodeZone) Set <p>Availability zone ID where the primary node is located. For the method for obtaining, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method array getSecondaryNodeZone() Obtain <p>ID list of the availability zone where the secondary node resides.<br><strong>Note</strong>: It cannot contain the availability zones where the primary node and Hidden nodes reside.</p>
 * @method void setSecondaryNodeZone(array $SecondaryNodeZone) Set <p>ID list of the availability zone where the secondary node resides.<br><strong>Note</strong>: It cannot contain the availability zones where the primary node and Hidden nodes reside.</p>
 * @method string getHiddenNodeZone() Obtain <p>If the current instance has no configuration for Hidden nodes, this parameter is not required.</p>
 * @method void setHiddenNodeZone(string $HiddenNodeZone) Set <p>If the current instance has no configuration for Hidden nodes, this parameter is not required.</p>
 * @method array getReadonlyNodeZone() Obtain <p>List of AZ IDs where read-only nodes reside.<br><strong>Note</strong>: If the current instance contains read-only nodes, this parameter is required.</p>
 * @method void setReadonlyNodeZone(array $ReadonlyNodeZone) Set <p>List of AZ IDs where read-only nodes reside.<br><strong>Note</strong>: If the current instance contains read-only nodes, this parameter is required.</p>
 * @method integer getInMaintenance() Obtain <p>Specify the time policy for executing the availability zone switch.</p><ul><li>0: Execute the switch immediately.</li><li>1: Execute the switch within the set maintenance window. For details, please refer to <a href="https://www.tencentcloud.com/document/product/240/19910?from_cn_redirect=1">setting instance maintenance time</a>.</li></ul>
 * @method void setInMaintenance(integer $InMaintenance) Set <p>Specify the time policy for executing the availability zone switch.</p><ul><li>0: Execute the switch immediately.</li><li>1: Execute the switch within the set maintenance window. For details, please refer to <a href="https://www.tencentcloud.com/document/product/240/19910?from_cn_redirect=1">setting instance maintenance time</a>.</li></ul>
 */
class ModifyInstanceAzRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID, such as cmgo-p8vn****. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Availability zone ID where the primary node is located. For the method for obtaining, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     */
    public $PrimaryNodeZone;

    /**
     * @var array <p>ID list of the availability zone where the secondary node resides.<br><strong>Note</strong>: It cannot contain the availability zones where the primary node and Hidden nodes reside.</p>
     */
    public $SecondaryNodeZone;

    /**
     * @var string <p>If the current instance has no configuration for Hidden nodes, this parameter is not required.</p>
     */
    public $HiddenNodeZone;

    /**
     * @var array <p>List of AZ IDs where read-only nodes reside.<br><strong>Note</strong>: If the current instance contains read-only nodes, this parameter is required.</p>
     */
    public $ReadonlyNodeZone;

    /**
     * @var integer <p>Specify the time policy for executing the availability zone switch.</p><ul><li>0: Execute the switch immediately.</li><li>1: Execute the switch within the set maintenance window. For details, please refer to <a href="https://www.tencentcloud.com/document/product/240/19910?from_cn_redirect=1">setting instance maintenance time</a>.</li></ul>
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId <p>Instance ID, such as cmgo-p8vn****. Log in to the <a href="https://console.cloud.tencent.com/mongodb">MongoDB console</a> and copy the instance ID from the instance list.</p>
     * @param string $PrimaryNodeZone <p>Availability zone ID where the primary node is located. For the method for obtaining, please see <a href="https://www.tencentcloud.com/document/product/240/3637?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     * @param array $SecondaryNodeZone <p>ID list of the availability zone where the secondary node resides.<br><strong>Note</strong>: It cannot contain the availability zones where the primary node and Hidden nodes reside.</p>
     * @param string $HiddenNodeZone <p>If the current instance has no configuration for Hidden nodes, this parameter is not required.</p>
     * @param array $ReadonlyNodeZone <p>List of AZ IDs where read-only nodes reside.<br><strong>Note</strong>: If the current instance contains read-only nodes, this parameter is required.</p>
     * @param integer $InMaintenance <p>Specify the time policy for executing the availability zone switch.</p><ul><li>0: Execute the switch immediately.</li><li>1: Execute the switch within the set maintenance window. For details, please refer to <a href="https://www.tencentcloud.com/document/product/240/19910?from_cn_redirect=1">setting instance maintenance time</a>.</li></ul>
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

        if (array_key_exists("PrimaryNodeZone",$param) and $param["PrimaryNodeZone"] !== null) {
            $this->PrimaryNodeZone = $param["PrimaryNodeZone"];
        }

        if (array_key_exists("SecondaryNodeZone",$param) and $param["SecondaryNodeZone"] !== null) {
            $this->SecondaryNodeZone = $param["SecondaryNodeZone"];
        }

        if (array_key_exists("HiddenNodeZone",$param) and $param["HiddenNodeZone"] !== null) {
            $this->HiddenNodeZone = $param["HiddenNodeZone"];
        }

        if (array_key_exists("ReadonlyNodeZone",$param) and $param["ReadonlyNodeZone"] !== null) {
            $this->ReadonlyNodeZone = $param["ReadonlyNodeZone"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}
