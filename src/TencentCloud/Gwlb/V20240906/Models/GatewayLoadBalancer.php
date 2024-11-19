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
namespace TencentCloud\Gwlb\V20240906\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the GWLB instance
 *
 * @method string getLoadBalancerId() Obtain GWLB instance ID.
 * @method void setLoadBalancerId(string $LoadBalancerId) Set GWLB instance ID.
 * @method string getLoadBalancerName() Obtain Name of the GWLB instance.
 * @method void setLoadBalancerName(string $LoadBalancerName) Set Name of the GWLB instance.
 * @method string getVpcId() Obtain VPC to which the GWLB belongs.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC to which the GWLB belongs.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet to which the GWLB belongs.
 * @method void setSubnetId(string $SubnetId) Set Subnet to which the GWLB belongs.
 * @method array getVips() Obtain Virtual IP of GWLB for providing service.
 * @method void setVips(array $Vips) Set Virtual IP of GWLB for providing service.
 * @method integer getStatus() Obtain GWLB instance status.0: creating, 1: normal operation, 3: deleting.
 * @method void setStatus(integer $Status) Set GWLB instance status.0: creating, 1: normal operation, 3: deleting.
 * @method string getTargetGroupId() Obtain Unique ID of associated target group.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTargetGroupId(string $TargetGroupId) Set Unique ID of associated target group.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getDeleteProtect() Obtain Whether to enable the deletion protection feature.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeleteProtect(boolean $DeleteProtect) Set Whether to enable the deletion protection feature.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag information on the CLB instance.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information on the CLB instance.Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getChargeType() Obtain Billing type of the GWLB instance. POSTPAID_BY_HOUR: pay-as-you-goNote: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setChargeType(string $ChargeType) Set Billing type of the GWLB instance. POSTPAID_BY_HOUR: pay-as-you-goNote: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getIsolation() Obtain 0: Not isolated; 1: Isolated.

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsolation(integer $Isolation) Set 0: Not isolated; 1: Isolated.

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getIsolatedTime() Obtain CLB instance isolation time

Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setIsolatedTime(string $IsolatedTime) Set CLB instance isolation time

Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class GatewayLoadBalancer extends AbstractModel
{
    /**
     * @var string GWLB instance ID.
     */
    public $LoadBalancerId;

    /**
     * @var string Name of the GWLB instance.
     */
    public $LoadBalancerName;

    /**
     * @var string VPC to which the GWLB belongs.Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet to which the GWLB belongs.
     */
    public $SubnetId;

    /**
     * @var array Virtual IP of GWLB for providing service.
     */
    public $Vips;

    /**
     * @var integer GWLB instance status.0: creating, 1: normal operation, 3: deleting.
     */
    public $Status;

    /**
     * @var string Unique ID of associated target group.Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $TargetGroupId;

    /**
     * @var boolean Whether to enable the deletion protection feature.Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeleteProtect;

    /**
     * @var array Tag information on the CLB instance.Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Billing type of the GWLB instance. POSTPAID_BY_HOUR: pay-as-you-goNote: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ChargeType;

    /**
     * @var integer 0: Not isolated; 1: Isolated.

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Isolation;

    /**
     * @var string CLB instance isolation time

Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $IsolatedTime;

    /**
     * @param string $LoadBalancerId GWLB instance ID.
     * @param string $LoadBalancerName Name of the GWLB instance.
     * @param string $VpcId VPC to which the GWLB belongs.Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet to which the GWLB belongs.
     * @param array $Vips Virtual IP of GWLB for providing service.
     * @param integer $Status GWLB instance status.0: creating, 1: normal operation, 3: deleting.
     * @param string $TargetGroupId Unique ID of associated target group.Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $DeleteProtect Whether to enable the deletion protection feature.Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Tags Tag information on the CLB instance.Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
     * @param string $ChargeType Billing type of the GWLB instance. POSTPAID_BY_HOUR: pay-as-you-goNote: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Isolation 0: Not isolated; 1: Isolated.

Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $IsolatedTime CLB instance isolation time

Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vips",$param) and $param["Vips"] !== null) {
            $this->Vips = $param["Vips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetGroupId",$param) and $param["TargetGroupId"] !== null) {
            $this->TargetGroupId = $param["TargetGroupId"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("Isolation",$param) and $param["Isolation"] !== null) {
            $this->Isolation = $param["Isolation"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }
    }
}
