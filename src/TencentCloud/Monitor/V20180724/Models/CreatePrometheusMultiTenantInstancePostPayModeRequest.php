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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheusMultiTenantInstancePostPayMode request structure.
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getSubnetId() Obtain Subnet ID
 * @method void setSubnetId(string $SubnetId) Set Subnet ID
 * @method integer getDataRetentionTime() Obtain Data retention period in days. Valid values: 15, 30, 45.
 * @method void setDataRetentionTime(integer $DataRetentionTime) Set Data retention period in days. Valid values: 15, 30, 45.
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method array getTagSpecification() Obtain Instance tag
 * @method void setTagSpecification(array $TagSpecification) Set Instance tag
 * @method string getGrafanaInstanceId() Obtain The Grafana instance to be associated
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) Set The Grafana instance to be associated
 */
class CreatePrometheusMultiTenantInstancePostPayModeRequest extends AbstractModel
{
    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Subnet ID
     */
    public $SubnetId;

    /**
     * @var integer Data retention period in days. Valid values: 15, 30, 45.
     */
    public $DataRetentionTime;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var array Instance tag
     */
    public $TagSpecification;

    /**
     * @var string The Grafana instance to be associated
     */
    public $GrafanaInstanceId;

    /**
     * @param string $InstanceName Instance name
     * @param string $VpcId VPC ID
     * @param string $SubnetId Subnet ID
     * @param integer $DataRetentionTime Data retention period in days. Valid values: 15, 30, 45.
     * @param string $Zone AZ
     * @param array $TagSpecification Instance tag
     * @param string $GrafanaInstanceId The Grafana instance to be associated
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }
    }
}
