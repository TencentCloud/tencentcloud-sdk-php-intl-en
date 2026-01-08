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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance request structure.
 *
 * @method string getInstanceType() Obtain Instance type, which needs to correspond to SkuCode. for details, see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api.
BASIC: basic edition.
PRO edition.
PLATINUM version.

 * @method void setInstanceType(string $InstanceType) Set Instance type, which needs to correspond to SkuCode. for details, see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api.
BASIC: basic edition.
PRO edition.
PLATINUM version.

 * @method string getName() Obtain Specifies the cluster name, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method void setName(string $Name) Set Specifies the cluster name, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
 * @method string getSkuCode() Obtain Product specification, which must correspond to InstanceType. see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api to obtain details.
 * @method void setSkuCode(string $SkuCode) Set Product specification, which must correspond to InstanceType. see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api to obtain details.
 * @method string getRemark() Obtain Specifies the remark information with a maximum length of 128 characters.
 * @method void setRemark(string $Remark) Set Specifies the remark information with a maximum length of 128 characters.
 * @method array getTagList() Obtain Tag list
 * @method void setTagList(array $TagList) Set Tag list
 * @method array getVpcList() Obtain Specifies the VPC information associated with the instance. the available VPC and SUBNET under the current user must be provided.
 * @method void setVpcList(array $VpcList) Set Specifies the VPC information associated with the instance. the available VPC and SUBNET under the current user must be provided.
 * @method boolean getEnablePublic() Obtain Whether public network access is enabled. default false (disabled).
 * @method void setEnablePublic(boolean $EnablePublic) Set Whether public network access is enabled. default false (disabled).
 * @method integer getBandwidth() Obtain Public network bandwidth (unit: Mbps). this field is mandatory and must be more than 0 when EnablePublic is True.
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth (unit: Mbps). this field is mandatory and must be more than 0 when EnablePublic is True.
 * @method array getIpRules() Obtain Public network access allowlist. if not passed, it means deny all IP network access.
 * @method void setIpRules(array $IpRules) Set Public network access allowlist. if not passed, it means deny all IP network access.
 * @method integer getRenewFlag() Obtain Whether the instance is automatically renewed (0: no auto-renewal; 1: auto-renewal). this parameter is valid only when you purchase a prepaid cluster. default value: 1 (auto-renewal).
 * @method void setRenewFlag(integer $RenewFlag) Set Whether the instance is automatically renewed (0: no auto-renewal; 1: auto-renewal). this parameter is valid only when you purchase a prepaid cluster. default value: 1 (auto-renewal).
 * @method integer getTimeSpan() Obtain Specifies the purchase duration (measurement unit: month). this parameter is valid only when you purchase a prepaid cluster. default: 1m (month). valid values: 1-12, 24, 36, 48, 60.
 * @method void setTimeSpan(integer $TimeSpan) Set Specifies the purchase duration (measurement unit: month). this parameter is valid only when you purchase a prepaid cluster. default: 1m (month). valid values: 1-12, 24, 36, 48, 60.
 * @method integer getPayMode() Obtain Payment mode (0: postpaid; 1: prepaid). default: 0 (postpaid).
 * @method void setPayMode(integer $PayMode) Set Payment mode (0: postpaid; 1: prepaid). default: 0 (postpaid).
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance type, which needs to correspond to SkuCode. for details, see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api.
BASIC: basic edition.
PRO edition.
PLATINUM version.

     */
    public $InstanceType;

    /**
     * @var string Specifies the cluster name, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
     */
    public $Name;

    /**
     * @var string Product specification, which must correspond to InstanceType. see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api to obtain details.
     */
    public $SkuCode;

    /**
     * @var string Specifies the remark information with a maximum length of 128 characters.
     */
    public $Remark;

    /**
     * @var array Tag list
     */
    public $TagList;

    /**
     * @var array Specifies the VPC information associated with the instance. the available VPC and SUBNET under the current user must be provided.
     */
    public $VpcList;

    /**
     * @var boolean Whether public network access is enabled. default false (disabled).
     */
    public $EnablePublic;

    /**
     * @var integer Public network bandwidth (unit: Mbps). this field is mandatory and must be more than 0 when EnablePublic is True.
     */
    public $Bandwidth;

    /**
     * @var array Public network access allowlist. if not passed, it means deny all IP network access.
     */
    public $IpRules;

    /**
     * @var integer Whether the instance is automatically renewed (0: no auto-renewal; 1: auto-renewal). this parameter is valid only when you purchase a prepaid cluster. default value: 1 (auto-renewal).
     */
    public $RenewFlag;

    /**
     * @var integer Specifies the purchase duration (measurement unit: month). this parameter is valid only when you purchase a prepaid cluster. default: 1m (month). valid values: 1-12, 24, 36, 48, 60.
     */
    public $TimeSpan;

    /**
     * @var integer Payment mode (0: postpaid; 1: prepaid). default: 0 (postpaid).
     */
    public $PayMode;

    /**
     * @param string $InstanceType Instance type, which needs to correspond to SkuCode. for details, see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api.
BASIC: basic edition.
PRO edition.
PLATINUM version.

     * @param string $Name Specifies the cluster name, cannot be empty, 3-64 characters, only comprised of digits, letters, "-", and "_".
     * @param string $SkuCode Product specification, which must correspond to InstanceType. see the [get MQTT product sales spec](https://www.tencentcloud.comom/document/api/1778/116232?from_cn_redirect=1) api to obtain details.
     * @param string $Remark Specifies the remark information with a maximum length of 128 characters.
     * @param array $TagList Tag list
     * @param array $VpcList Specifies the VPC information associated with the instance. the available VPC and SUBNET under the current user must be provided.
     * @param boolean $EnablePublic Whether public network access is enabled. default false (disabled).
     * @param integer $Bandwidth Public network bandwidth (unit: Mbps). this field is mandatory and must be more than 0 when EnablePublic is True.
     * @param array $IpRules Public network access allowlist. if not passed, it means deny all IP network access.
     * @param integer $RenewFlag Whether the instance is automatically renewed (0: no auto-renewal; 1: auto-renewal). this parameter is valid only when you purchase a prepaid cluster. default value: 1 (auto-renewal).
     * @param integer $TimeSpan Specifies the purchase duration (measurement unit: month). this parameter is valid only when you purchase a prepaid cluster. default: 1m (month). valid values: 1-12, 24, 36, 48, 60.
     * @param integer $PayMode Payment mode (0: postpaid; 1: prepaid). default: 0 (postpaid).
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
