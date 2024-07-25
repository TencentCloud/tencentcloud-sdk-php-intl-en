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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Environment configuration
 *
 * @method VPCOption getVPCOption() Obtain VPC configuration
 * @method void setVPCOption(VPCOption $VPCOption) Set VPC configuration
 * @method ClusterOption getClusterOption() Obtain Computing cluster configuration
 * @method void setClusterOption(ClusterOption $ClusterOption) Set Computing cluster configuration
 * @method DatabaseOption getDatabaseOption() Obtain Database configuration
 * @method void setDatabaseOption(DatabaseOption $DatabaseOption) Set Database configuration
 * @method StorageOption getStorageOption() Obtain Storage configuration
 * @method void setStorageOption(StorageOption $StorageOption) Set Storage configuration
 * @method CVMOption getCVMOption() Obtain CVM configuration
 * @method void setCVMOption(CVMOption $CVMOption) Set CVM configuration
 * @method SecurityGroupOption getSecurityGroupOption() Obtain Security group configuration
 * @method void setSecurityGroupOption(SecurityGroupOption $SecurityGroupOption) Set Security group configuration
 */
class EnvironmentConfig extends AbstractModel
{
    /**
     * @var VPCOption VPC configuration
     */
    public $VPCOption;

    /**
     * @var ClusterOption Computing cluster configuration
     */
    public $ClusterOption;

    /**
     * @var DatabaseOption Database configuration
     */
    public $DatabaseOption;

    /**
     * @var StorageOption Storage configuration
     */
    public $StorageOption;

    /**
     * @var CVMOption CVM configuration
     */
    public $CVMOption;

    /**
     * @var SecurityGroupOption Security group configuration
     */
    public $SecurityGroupOption;

    /**
     * @param VPCOption $VPCOption VPC configuration
     * @param ClusterOption $ClusterOption Computing cluster configuration
     * @param DatabaseOption $DatabaseOption Database configuration
     * @param StorageOption $StorageOption Storage configuration
     * @param CVMOption $CVMOption CVM configuration
     * @param SecurityGroupOption $SecurityGroupOption Security group configuration
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
        if (array_key_exists("VPCOption",$param) and $param["VPCOption"] !== null) {
            $this->VPCOption = new VPCOption();
            $this->VPCOption->deserialize($param["VPCOption"]);
        }

        if (array_key_exists("ClusterOption",$param) and $param["ClusterOption"] !== null) {
            $this->ClusterOption = new ClusterOption();
            $this->ClusterOption->deserialize($param["ClusterOption"]);
        }

        if (array_key_exists("DatabaseOption",$param) and $param["DatabaseOption"] !== null) {
            $this->DatabaseOption = new DatabaseOption();
            $this->DatabaseOption->deserialize($param["DatabaseOption"]);
        }

        if (array_key_exists("StorageOption",$param) and $param["StorageOption"] !== null) {
            $this->StorageOption = new StorageOption();
            $this->StorageOption->deserialize($param["StorageOption"]);
        }

        if (array_key_exists("CVMOption",$param) and $param["CVMOption"] !== null) {
            $this->CVMOption = new CVMOption();
            $this->CVMOption->deserialize($param["CVMOption"]);
        }

        if (array_key_exists("SecurityGroupOption",$param) and $param["SecurityGroupOption"] !== null) {
            $this->SecurityGroupOption = new SecurityGroupOption();
            $this->SecurityGroupOption->deserialize($param["SecurityGroupOption"]);
        }
    }
}
