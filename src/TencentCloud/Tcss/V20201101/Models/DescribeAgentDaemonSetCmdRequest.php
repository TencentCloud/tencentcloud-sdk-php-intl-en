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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentDaemonSetCmd request structure.
 *
 * @method boolean getIsCloud() Obtain Whether it is from Tencent Cloud
 * @method void setIsCloud(boolean $IsCloud) Set Whether it is from Tencent Cloud
 * @method string getNetType() Obtain Network type. Valid values: `basic` (classic network); `private` (VPC); `public` (public network); `direct` (Direct Connect).
 * @method void setNetType(string $NetType) Set Network type. Valid values: `basic` (classic network); `private` (VPC); `public` (public network); `direct` (Direct Connect).
 * @method string getRegionCode() Obtain Region, which is required when `NetType` is `direct`.
 * @method void setRegionCode(string $RegionCode) Set Region, which is required when `NetType` is `direct`.
 * @method string getVpcId() Obtain VpcId, which is required when `NetType` is `direct`.
 * @method void setVpcId(string $VpcId) Set VpcId, which is required when `NetType` is `direct`.
 * @method string getExpireDate() Obtain Command validity, which is required for non-Tencent Cloud instances.
 * @method void setExpireDate(string $ExpireDate) Set Command validity, which is required for non-Tencent Cloud instances.
 * @method array getClusterCustomParameters() Obtain Custom parameters of the cluster
 * @method void setClusterCustomParameters(array $ClusterCustomParameters) Set Custom parameters of the cluster
 */
class DescribeAgentDaemonSetCmdRequest extends AbstractModel
{
    /**
     * @var boolean Whether it is from Tencent Cloud
     */
    public $IsCloud;

    /**
     * @var string Network type. Valid values: `basic` (classic network); `private` (VPC); `public` (public network); `direct` (Direct Connect).
     */
    public $NetType;

    /**
     * @var string Region, which is required when `NetType` is `direct`.
     */
    public $RegionCode;

    /**
     * @var string VpcId, which is required when `NetType` is `direct`.
     */
    public $VpcId;

    /**
     * @var string Command validity, which is required for non-Tencent Cloud instances.
     */
    public $ExpireDate;

    /**
     * @var array Custom parameters of the cluster
     */
    public $ClusterCustomParameters;

    /**
     * @param boolean $IsCloud Whether it is from Tencent Cloud
     * @param string $NetType Network type. Valid values: `basic` (classic network); `private` (VPC); `public` (public network); `direct` (Direct Connect).
     * @param string $RegionCode Region, which is required when `NetType` is `direct`.
     * @param string $VpcId VpcId, which is required when `NetType` is `direct`.
     * @param string $ExpireDate Command validity, which is required for non-Tencent Cloud instances.
     * @param array $ClusterCustomParameters Custom parameters of the cluster
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

        if (array_key_exists("ClusterCustomParameters",$param) and $param["ClusterCustomParameters"] !== null) {
            $this->ClusterCustomParameters = [];
            foreach ($param["ClusterCustomParameters"] as $key => $value){
                $obj = new ClusterCustomParameters();
                $obj->deserialize($value);
                array_push($this->ClusterCustomParameters, $obj);
            }
        }
    }
}
