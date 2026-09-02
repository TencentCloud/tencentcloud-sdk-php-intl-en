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
 * DescribeClusterInstallCommand request structure.
 *
 * @method boolean getIsCloud() Obtain <p>Whether it is Tencent Cloud. true: use the parallel container daemonset yaml installation branch; false: use the host agent installation command branch</p>
 * @method void setIsCloud(boolean $IsCloud) Set <p>Whether it is Tencent Cloud. true: use the parallel container daemonset yaml installation branch; false: use the host agent installation command branch</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getNetType() Obtain <p>Network type<br>Enumeration values:<br>basic: basic network<br>private: VPC<br>public: public network<br>direct: direct connect</p>
 * @method void setNetType(string $NetType) Set <p>Network type<br>Enumeration values:<br>basic: basic network<br>private: VPC<br>public: public network<br>direct: direct connect</p>
 * @method string getRegionCode() Obtain <p>Region code (required when NetType=direct; used by the Tencent Cloud branch for special region mirror repository replacement)</p>
 * @method void setRegionCode(string $RegionCode) Set <p>Region code (required when NetType=direct; used by the Tencent Cloud branch for special region mirror repository replacement)</p>
 * @method string getVpcId() Obtain <p>VPC ID (required when NetType=direct)<br>Parameter format: in the form of vpc-xxxxxxxx</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID (required when NetType=direct)<br>Parameter format: in the form of vpc-xxxxxxxx</p>
 * @method string getExpireDate() Obtain <p>Expiration time<br>Parameter format: yyyy-MM-dd (for example, 2026-12-31)<br>Purpose: For the Tencent Cloud branch, it is the expiration time of the cos download link for the daemonset yaml; for the non-Tencent Cloud branch, it is the expiration time of the agent installation token</p>
 * @method void setExpireDate(string $ExpireDate) Set <p>Expiration time<br>Parameter format: yyyy-MM-dd (for example, 2026-12-31)<br>Purpose: For the Tencent Cloud branch, it is the expiration time of the cos download link for the daemonset yaml; for the non-Tencent Cloud branch, it is the expiration time of the agent installation token</p>
 * @method array getTagIds() Obtain <p>List of csip tag IDs (for non-Tencent Cloud branches, associate installation tags)</p>
 * @method void setTagIds(array $TagIds) Set <p>List of csip tag IDs (for non-Tencent Cloud branches, associate installation tags)</p>
 * @method array getClusterCustomParameters() Obtain <p>Cluster custom parameters (Tencent Cloud branch used for replacing daemonset template placeholders)</p>
 * @method void setClusterCustomParameters(array $ClusterCustomParameters) Set <p>Cluster custom parameters (Tencent Cloud branch used for replacing daemonset template placeholders)</p>
 * @method string getVip() Obtain <p>Integration VIP (used by non-Tenant Cloud branches; automatically applied for by the DC service when NetType=direct and Vip is not passed)</p>
 * @method void setVip(string $Vip) Set <p>Integration VIP (used by non-Tenant Cloud branches; automatically applied for by the DC service when NetType=direct and Vip is not passed)</p>
 */
class DescribeClusterInstallCommandRequest extends AbstractModel
{
    /**
     * @var boolean <p>Whether it is Tencent Cloud. true: use the parallel container daemonset yaml installation branch; false: use the host agent installation command branch</p>
     */
    public $IsCloud;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Network type<br>Enumeration values:<br>basic: basic network<br>private: VPC<br>public: public network<br>direct: direct connect</p>
     */
    public $NetType;

    /**
     * @var string <p>Region code (required when NetType=direct; used by the Tencent Cloud branch for special region mirror repository replacement)</p>
     */
    public $RegionCode;

    /**
     * @var string <p>VPC ID (required when NetType=direct)<br>Parameter format: in the form of vpc-xxxxxxxx</p>
     */
    public $VpcId;

    /**
     * @var string <p>Expiration time<br>Parameter format: yyyy-MM-dd (for example, 2026-12-31)<br>Purpose: For the Tencent Cloud branch, it is the expiration time of the cos download link for the daemonset yaml; for the non-Tencent Cloud branch, it is the expiration time of the agent installation token</p>
     */
    public $ExpireDate;

    /**
     * @var array <p>List of csip tag IDs (for non-Tencent Cloud branches, associate installation tags)</p>
     */
    public $TagIds;

    /**
     * @var array <p>Cluster custom parameters (Tencent Cloud branch used for replacing daemonset template placeholders)</p>
     */
    public $ClusterCustomParameters;

    /**
     * @var string <p>Integration VIP (used by non-Tenant Cloud branches; automatically applied for by the DC service when NetType=direct and Vip is not passed)</p>
     */
    public $Vip;

    /**
     * @param boolean $IsCloud <p>Whether it is Tencent Cloud. true: use the parallel container daemonset yaml installation branch; false: use the host agent installation command branch</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param string $NetType <p>Network type<br>Enumeration values:<br>basic: basic network<br>private: VPC<br>public: public network<br>direct: direct connect</p>
     * @param string $RegionCode <p>Region code (required when NetType=direct; used by the Tencent Cloud branch for special region mirror repository replacement)</p>
     * @param string $VpcId <p>VPC ID (required when NetType=direct)<br>Parameter format: in the form of vpc-xxxxxxxx</p>
     * @param string $ExpireDate <p>Expiration time<br>Parameter format: yyyy-MM-dd (for example, 2026-12-31)<br>Purpose: For the Tencent Cloud branch, it is the expiration time of the cos download link for the daemonset yaml; for the non-Tencent Cloud branch, it is the expiration time of the agent installation token</p>
     * @param array $TagIds <p>List of csip tag IDs (for non-Tencent Cloud branches, associate installation tags)</p>
     * @param array $ClusterCustomParameters <p>Cluster custom parameters (Tencent Cloud branch used for replacing daemonset template placeholders)</p>
     * @param string $Vip <p>Integration VIP (used by non-Tenant Cloud branches; automatically applied for by the DC service when NetType=direct and Vip is not passed)</p>
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
        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ClusterCustomParameters",$param) and $param["ClusterCustomParameters"] !== null) {
            $this->ClusterCustomParameters = [];
            foreach ($param["ClusterCustomParameters"] as $key => $value){
                $obj = new ClusterCustomParameters();
                $obj->deserialize($value);
                array_push($this->ClusterCustomParameters, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
