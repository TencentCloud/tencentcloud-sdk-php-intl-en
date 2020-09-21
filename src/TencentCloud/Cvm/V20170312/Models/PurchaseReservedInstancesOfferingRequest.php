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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PurchaseReservedInstancesOffering request structure.
 *
 * @method integer getInstanceCount() Obtain The number of the Reserved Instance you are purchasing.
 * @method void setInstanceCount(integer $InstanceCount) Set The number of the Reserved Instance you are purchasing.
 * @method string getReservedInstancesOfferingId() Obtain The ID of the Reserved Instance.
 * @method void setReservedInstancesOfferingId(string $ReservedInstancesOfferingId) Set The ID of the Reserved Instance.
 * @method boolean getDryRun() Obtain Dry run
 * @method void setDryRun(boolean $DryRun) Set Dry run
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.<br>For more information, see Ensuring Idempotency.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.<br>For more information, see Ensuring Idempotency.
 * @method string getReservedInstanceName() Obtain Reserved instance name.<br><li>The RI name defaults to “unnamed” if this parameter is left empty.</li><li>You can enter any name within 60 characters (including the pattern string).</li>
 * @method void setReservedInstanceName(string $ReservedInstanceName) Set Reserved instance name.<br><li>The RI name defaults to “unnamed” if this parameter is left empty.</li><li>You can enter any name within 60 characters (including the pattern string).</li>
 */
class PurchaseReservedInstancesOfferingRequest extends AbstractModel
{
    /**
     * @var integer The number of the Reserved Instance you are purchasing.
     */
    public $InstanceCount;

    /**
     * @var string The ID of the Reserved Instance.
     */
    public $ReservedInstancesOfferingId;

    /**
     * @var boolean Dry run
     */
    public $DryRun;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.<br>For more information, see Ensuring Idempotency.
     */
    public $ClientToken;

    /**
     * @var string Reserved instance name.<br><li>The RI name defaults to “unnamed” if this parameter is left empty.</li><li>You can enter any name within 60 characters (including the pattern string).</li>
     */
    public $ReservedInstanceName;

    /**
     * @param integer $InstanceCount The number of the Reserved Instance you are purchasing.
     * @param string $ReservedInstancesOfferingId The ID of the Reserved Instance.
     * @param boolean $DryRun Dry run
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idempotency of the request cannot be guaranteed.<br>For more information, see Ensuring Idempotency.
     * @param string $ReservedInstanceName Reserved instance name.<br><li>The RI name defaults to “unnamed” if this parameter is left empty.</li><li>You can enter any name within 60 characters (including the pattern string).</li>
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
        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("ReservedInstancesOfferingId",$param) and $param["ReservedInstancesOfferingId"] !== null) {
            $this->ReservedInstancesOfferingId = $param["ReservedInstancesOfferingId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ReservedInstanceName",$param) and $param["ReservedInstanceName"] !== null) {
            $this->ReservedInstanceName = $param["ReservedInstanceName"];
        }
    }
}
