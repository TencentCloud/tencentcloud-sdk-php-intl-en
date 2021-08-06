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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The instance object associated with a CCN
 *
 * @method string getCcnId() Obtain The ID of a CCN instance.
 * @method void setCcnId(string $CcnId) Set The ID of a CCN instance.
 * @method string getInstanceType() Obtain The type of associated instances:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
 * @method void setInstanceType(string $InstanceType) Set The type of associated instances:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
 * @method string getInstanceId() Obtain The ID of the associated instance.
 * @method void setInstanceId(string $InstanceId) Set The ID of the associated instance.
 * @method string getInstanceName() Obtain The name of the associated instance.
 * @method void setInstanceName(string $InstanceName) Set The name of the associated instance.
 * @method string getInstanceRegion() Obtain The region to which the associated instance belongs, such as `ap-guangzhou`.
 * @method void setInstanceRegion(string $InstanceRegion) Set The region to which the associated instance belongs, such as `ap-guangzhou`.
 * @method string getInstanceUin() Obtain The UIN (root account) to which the associated instance belongs.
 * @method void setInstanceUin(string $InstanceUin) Set The UIN (root account) to which the associated instance belongs.
 * @method array getCidrBlock() Obtain The CIDR of the associated instance.
 * @method void setCidrBlock(array $CidrBlock) Set The CIDR of the associated instance.
 * @method string getState() Obtain The status of the associated instance:
<li>`PENDING`: In application</li>
<li>`ACTIVE`: Connected</li>
<li>`EXPIRED`: Expired</li>
<li>`REJECTED`: Rejected</li>
<li>`DELETED`: Deleted</li>
<li>`FAILED`: Failed (it will be asynchronously unbound after 2 hours)</li>
<li>`ATTACHING`: binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DETACHFAILED`: The unbinding failed (it will be asynchronously unbound after 2 hours)</li>
 * @method void setState(string $State) Set The status of the associated instance:
<li>`PENDING`: In application</li>
<li>`ACTIVE`: Connected</li>
<li>`EXPIRED`: Expired</li>
<li>`REJECTED`: Rejected</li>
<li>`DELETED`: Deleted</li>
<li>`FAILED`: Failed (it will be asynchronously unbound after 2 hours)</li>
<li>`ATTACHING`: binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DETACHFAILED`: The unbinding failed (it will be asynchronously unbound after 2 hours)</li>
 * @method string getAttachedTime() Obtain Association Time.
 * @method void setAttachedTime(string $AttachedTime) Set Association Time.
 * @method string getCcnUin() Obtain The UIN (root account) to which the CCN belongs.
 * @method void setCcnUin(string $CcnUin) Set The UIN (root account) to which the CCN belongs.
 * @method string getInstanceArea() Obtain General location of the associated instance, such as CHINA_MAINLAND.
 * @method void setInstanceArea(string $InstanceArea) Set General location of the associated instance, such as CHINA_MAINLAND.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getRouteTableId() Obtain Route table ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRouteTableId(string $RouteTableId) Set Route table ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getRouteTableName() Obtain Route table name
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setRouteTableName(string $RouteTableName) Set Route table name
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class CcnAttachedInstance extends AbstractModel
{
    /**
     * @var string The ID of a CCN instance.
     */
    public $CcnId;

    /**
     * @var string The type of associated instances:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
     */
    public $InstanceType;

    /**
     * @var string The ID of the associated instance.
     */
    public $InstanceId;

    /**
     * @var string The name of the associated instance.
     */
    public $InstanceName;

    /**
     * @var string The region to which the associated instance belongs, such as `ap-guangzhou`.
     */
    public $InstanceRegion;

    /**
     * @var string The UIN (root account) to which the associated instance belongs.
     */
    public $InstanceUin;

    /**
     * @var array The CIDR of the associated instance.
     */
    public $CidrBlock;

    /**
     * @var string The status of the associated instance:
<li>`PENDING`: In application</li>
<li>`ACTIVE`: Connected</li>
<li>`EXPIRED`: Expired</li>
<li>`REJECTED`: Rejected</li>
<li>`DELETED`: Deleted</li>
<li>`FAILED`: Failed (it will be asynchronously unbound after 2 hours)</li>
<li>`ATTACHING`: binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DETACHFAILED`: The unbinding failed (it will be asynchronously unbound after 2 hours)</li>
     */
    public $State;

    /**
     * @var string Association Time.
     */
    public $AttachedTime;

    /**
     * @var string The UIN (root account) to which the CCN belongs.
     */
    public $CcnUin;

    /**
     * @var string General location of the associated instance, such as CHINA_MAINLAND.
     */
    public $InstanceArea;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Route table ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RouteTableId;

    /**
     * @var string Route table name
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $RouteTableName;

    /**
     * @param string $CcnId The ID of a CCN instance.
     * @param string $InstanceType The type of associated instances:
<li>`VPC`: VPC</li>
<li>`DIRECTCONNECT`: Direct Connect</li>
<li>`BMVPC`: BM VPC</li>
     * @param string $InstanceId The ID of the associated instance.
     * @param string $InstanceName The name of the associated instance.
     * @param string $InstanceRegion The region to which the associated instance belongs, such as `ap-guangzhou`.
     * @param string $InstanceUin The UIN (root account) to which the associated instance belongs.
     * @param array $CidrBlock The CIDR of the associated instance.
     * @param string $State The status of the associated instance:
<li>`PENDING`: In application</li>
<li>`ACTIVE`: Connected</li>
<li>`EXPIRED`: Expired</li>
<li>`REJECTED`: Rejected</li>
<li>`DELETED`: Deleted</li>
<li>`FAILED`: Failed (it will be asynchronously unbound after 2 hours)</li>
<li>`ATTACHING`: binding</li>
<li>`DETACHING`: Unbinding</li>
<li>`DETACHFAILED`: The unbinding failed (it will be asynchronously unbound after 2 hours)</li>
     * @param string $AttachedTime Association Time.
     * @param string $CcnUin The UIN (root account) to which the CCN belongs.
     * @param string $InstanceArea General location of the associated instance, such as CHINA_MAINLAND.
     * @param string $Description Description
     * @param string $RouteTableId Route table ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $RouteTableName Route table name
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("InstanceUin",$param) and $param["InstanceUin"] !== null) {
            $this->InstanceUin = $param["InstanceUin"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("AttachedTime",$param) and $param["AttachedTime"] !== null) {
            $this->AttachedTime = $param["AttachedTime"];
        }

        if (array_key_exists("CcnUin",$param) and $param["CcnUin"] !== null) {
            $this->CcnUin = $param["CcnUin"];
        }

        if (array_key_exists("InstanceArea",$param) and $param["InstanceArea"] !== null) {
            $this->InstanceArea = $param["InstanceArea"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }
    }
}
