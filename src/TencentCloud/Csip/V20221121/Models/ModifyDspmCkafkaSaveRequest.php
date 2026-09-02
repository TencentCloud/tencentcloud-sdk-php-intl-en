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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmCkafkaSave request structure.
 *
 * @method integer getVipType() Obtain <p>Access type. Currently supported values: 1 and 7</p><p>Enumeration values:</p><ul><li>1: External TGW</li><li>2: Basic network</li><li>3: VPC network</li><li>4: idc environment - supporting network</li><li>5: SSL public network access method</li><li>6: Blackstone Environment VPC</li><li>7: cvm environment - supporting network</li></ul>
 * @method void setVipType(integer $VipType) Set <p>Access type. Currently supported values: 1 and 7</p><p>Enumeration values:</p><ul><li>1: External TGW</li><li>2: Basic network</li><li>3: VPC network</li><li>4: idc environment - supporting network</li><li>5: SSL public network access method</li><li>6: Blackstone Environment VPC</li><li>7: cvm environment - supporting network</li></ul>
 * @method string getRegionId() Obtain <p>Region of the instance</p>
 * @method void setRegionId(string $RegionId) Set <p>Region of the instance</p>
 * @method string getInstanceId() Obtain <p>Instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance id</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method RouteInfo getRouteInfo() Obtain <p>Instance access information</p>
 * @method void setRouteInfo(RouteInfo $RouteInfo) Set <p>Instance access information</p>
 * @method string getUsername() Obtain <p>When integration is for a domain name, it is valid</p>
 * @method void setUsername(string $Username) Set <p>When integration is for a domain name, it is valid</p>
 * @method string getPassword() Obtain <p>It is valid when the integration is for the domain.</p>
 * @method void setPassword(string $Password) Set <p>It is valid when the integration is for the domain.</p>
 * @method array getLogDeliveryInfo() Obtain <p>Topic configuration for log shipping</p>
 * @method void setLogDeliveryInfo(array $LogDeliveryInfo) Set <p>Topic configuration for log shipping</p>
 * @method boolean getIsOverwrite() Obtain <p>Whether to overwrite existing configurations. false by default (not overwrite, be compatible)</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) Set <p>Whether to overwrite existing configurations. false by default (not overwrite, be compatible)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 */
class ModifyDspmCkafkaSaveRequest extends AbstractModel
{
    /**
     * @var integer <p>Access type. Currently supported values: 1 and 7</p><p>Enumeration values:</p><ul><li>1: External TGW</li><li>2: Basic network</li><li>3: VPC network</li><li>4: idc environment - supporting network</li><li>5: SSL public network access method</li><li>6: Blackstone Environment VPC</li><li>7: cvm environment - supporting network</li></ul>
     */
    public $VipType;

    /**
     * @var string <p>Region of the instance</p>
     */
    public $RegionId;

    /**
     * @var string <p>Instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var RouteInfo <p>Instance access information</p>
     */
    public $RouteInfo;

    /**
     * @var string <p>When integration is for a domain name, it is valid</p>
     */
    public $Username;

    /**
     * @var string <p>It is valid when the integration is for the domain.</p>
     */
    public $Password;

    /**
     * @var array <p>Topic configuration for log shipping</p>
     */
    public $LogDeliveryInfo;

    /**
     * @var boolean <p>Whether to overwrite existing configurations. false by default (not overwrite, be compatible)</p>
     */
    public $IsOverwrite;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @param integer $VipType <p>Access type. Currently supported values: 1 and 7</p><p>Enumeration values:</p><ul><li>1: External TGW</li><li>2: Basic network</li><li>3: VPC network</li><li>4: idc environment - supporting network</li><li>5: SSL public network access method</li><li>6: Blackstone Environment VPC</li><li>7: cvm environment - supporting network</li></ul>
     * @param string $RegionId <p>Region of the instance</p>
     * @param string $InstanceId <p>Instance id</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param RouteInfo $RouteInfo <p>Instance access information</p>
     * @param string $Username <p>When integration is for a domain name, it is valid</p>
     * @param string $Password <p>It is valid when the integration is for the domain.</p>
     * @param array $LogDeliveryInfo <p>Topic configuration for log shipping</p>
     * @param boolean $IsOverwrite <p>Whether to overwrite existing configurations. false by default (not overwrite, be compatible)</p>
     * @param array $MemberId <p>Group account member id</p>
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RouteInfo",$param) and $param["RouteInfo"] !== null) {
            $this->RouteInfo = new RouteInfo();
            $this->RouteInfo->deserialize($param["RouteInfo"]);
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("LogDeliveryInfo",$param) and $param["LogDeliveryInfo"] !== null) {
            $this->LogDeliveryInfo = [];
            foreach ($param["LogDeliveryInfo"] as $key => $value){
                $obj = new LogDeliveryInfo();
                $obj->deserialize($value);
                array_push($this->LogDeliveryInfo, $obj);
            }
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
