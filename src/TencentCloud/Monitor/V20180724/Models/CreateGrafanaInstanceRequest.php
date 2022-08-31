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
 * CreateGrafanaInstance request structure.
 *
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method array getSubnetIds() Obtain Array of subnet IDs
 * @method void setSubnetIds(array $SubnetIds) Set Array of subnet IDs
 * @method string getGrafanaInitPassword() Obtain Initial Grafana password
 * @method void setGrafanaInitPassword(string $GrafanaInitPassword) Set Initial Grafana password
 * @method boolean getEnableInternet() Obtain Whether to enable public network access
 * @method void setEnableInternet(boolean $EnableInternet) Set Whether to enable public network access
 * @method array getTagSpecification() Obtain Tag
 * @method void setTagSpecification(array $TagSpecification) Set Tag
 */
class CreateGrafanaInstanceRequest extends AbstractModel
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
     * @var array Array of subnet IDs
     */
    public $SubnetIds;

    /**
     * @var string Initial Grafana password
     */
    public $GrafanaInitPassword;

    /**
     * @var boolean Whether to enable public network access
     */
    public $EnableInternet;

    /**
     * @var array Tag
     */
    public $TagSpecification;

    /**
     * @param string $InstanceName Instance name
     * @param string $VpcId VPC ID
     * @param array $SubnetIds Array of subnet IDs
     * @param string $GrafanaInitPassword Initial Grafana password
     * @param boolean $EnableInternet Whether to enable public network access
     * @param array $TagSpecification Tag
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

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("GrafanaInitPassword",$param) and $param["GrafanaInitPassword"] !== null) {
            $this->GrafanaInitPassword = $param["GrafanaInitPassword"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
