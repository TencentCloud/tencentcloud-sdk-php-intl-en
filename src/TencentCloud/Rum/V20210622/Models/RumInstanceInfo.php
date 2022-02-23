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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RUM instance information
 *
 * @method integer getInstanceStatus() Obtain Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: deleted)
 * @method void setInstanceStatus(integer $InstanceStatus) Set Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: deleted)
 * @method integer getAreaId() Obtain Region ID
 * @method void setAreaId(integer $AreaId) Set Region ID
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getClusterId() Obtain Cluster ID
 * @method void setClusterId(integer $ClusterId) Set Cluster ID
 * @method string getInstanceDesc() Obtain Instance description
 * @method void setInstanceDesc(string $InstanceDesc) Set Instance description
 * @method integer getChargeStatus() Obtain Billing status (1: in use; 2: expired; 3: terminated; 4: assigning; 5: assignment failed)
 * @method void setChargeStatus(integer $ChargeStatus) Set Billing status (1: in use; 2: expired; 3: terminated; 4: assigning; 5: assignment failed)
 * @method integer getChargeType() Obtain Billing type (1: free; 2: prepaid; 3: postpaid)
 * @method void setChargeType(integer $ChargeType) Set Billing type (1: free; 2: prepaid; 3: postpaid)
 * @method string getUpdatedAt() Obtain Update time
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time
 * @method integer getDataRetentionDays() Obtain Data retention period (in days)
 * @method void setDataRetentionDays(integer $DataRetentionDays) Set Data retention period (in days)
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 */
class RumInstanceInfo extends AbstractModel
{
    /**
     * @var integer Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: deleted)
     */
    public $InstanceStatus;

    /**
     * @var integer Region ID
     */
    public $AreaId;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Instance description
     */
    public $InstanceDesc;

    /**
     * @var integer Billing status (1: in use; 2: expired; 3: terminated; 4: assigning; 5: assignment failed)
     */
    public $ChargeStatus;

    /**
     * @var integer Billing type (1: free; 2: prepaid; 3: postpaid)
     */
    public $ChargeType;

    /**
     * @var string Update time
     */
    public $UpdatedAt;

    /**
     * @var integer Data retention period (in days)
     */
    public $DataRetentionDays;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @param integer $InstanceStatus Instance status (1: creating; 2: running; 3: exceptional; 4: restarting; 5: stopping; 6: stopped; 7: deleted)
     * @param integer $AreaId Region ID
     * @param array $Tags Tag list
     * @param string $InstanceId Instance ID
     * @param integer $ClusterId Cluster ID
     * @param string $InstanceDesc Instance description
     * @param integer $ChargeStatus Billing status (1: in use; 2: expired; 3: terminated; 4: assigning; 5: assignment failed)
     * @param integer $ChargeType Billing type (1: free; 2: prepaid; 3: postpaid)
     * @param string $UpdatedAt Update time
     * @param integer $DataRetentionDays Data retention period (in days)
     * @param string $InstanceName Instance name
     * @param string $CreatedAt Creation time
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
        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("DataRetentionDays",$param) and $param["DataRetentionDays"] !== null) {
            $this->DataRetentionDays = $param["DataRetentionDays"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
