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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RocketMQ cluster's basic information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getRegion() Obtain Region information
 * @method void setRegion(string $Region) Set Region information
 * @method integer getCreateTime() Obtain Creation time in milliseconds
 * @method void setCreateTime(integer $CreateTime) Set Creation time in milliseconds
 * @method string getRemark() Obtain Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPublicEndPoint() Obtain Public network access address
 * @method void setPublicEndPoint(string $PublicEndPoint) Set Public network access address
 * @method string getVpcEndPoint() Obtain VPC access address
 * @method void setVpcEndPoint(string $VpcEndPoint) Set VPC access address
 * @method boolean getSupportNamespaceEndpoint() Obtain Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSupportNamespaceEndpoint(boolean $SupportNamespaceEndpoint) Set Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getVpcs() Obtain VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcs(array $Vpcs) Set VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVip() Obtain Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RocketMQClusterInfo extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Region information
     */
    public $Region;

    /**
     * @var integer Creation time in milliseconds
     */
    public $CreateTime;

    /**
     * @var string Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var string Public network access address
     */
    public $PublicEndPoint;

    /**
     * @var string VPC access address
     */
    public $VpcEndPoint;

    /**
     * @var boolean Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SupportNamespaceEndpoint;

    /**
     * @var array VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Vpcs;

    /**
     * @var boolean Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsVip;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $Region Region information
     * @param integer $CreateTime Creation time in milliseconds
     * @param string $Remark Cluster remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PublicEndPoint Public network access address
     * @param string $VpcEndPoint VPC access address
     * @param boolean $SupportNamespaceEndpoint Whether the namespace access point is supported.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $Vpcs VPC Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVip Whether it is an exclusive instance
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("SupportNamespaceEndpoint",$param) and $param["SupportNamespaceEndpoint"] !== null) {
            $this->SupportNamespaceEndpoint = $param["SupportNamespaceEndpoint"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcConfig();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }
    }
}
