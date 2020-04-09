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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource description
 *
 * @method Resource getMasterResourceSpec() Obtain Describes master node resource
 * @method void setMasterResourceSpec(Resource $MasterResourceSpec) Set Describes master node resource
 * @method Resource getCoreResourceSpec() Obtain Describes core node resource
 * @method void setCoreResourceSpec(Resource $CoreResourceSpec) Set Describes core node resource
 * @method Resource getTaskResourceSpec() Obtain Describes task node resource
 * @method void setTaskResourceSpec(Resource $TaskResourceSpec) Set Describes task node resource
 * @method integer getMasterCount() Obtain Number of master nodes
 * @method void setMasterCount(integer $MasterCount) Set Number of master nodes
 * @method integer getCoreCount() Obtain Number of core nodes
 * @method void setCoreCount(integer $CoreCount) Set Number of core nodes
 * @method integer getTaskCount() Obtain Number of task nodes
 * @method void setTaskCount(integer $TaskCount) Set Number of task nodes
 * @method Resource getCommonResourceSpec() Obtain Describes common node resource
 * @method void setCommonResourceSpec(Resource $CommonResourceSpec) Set Describes common node resource
 * @method integer getCommonCount() Obtain Number of common nodes
 * @method void setCommonCount(integer $CommonCount) Set Number of common nodes
 */
class NewResourceSpec extends AbstractModel
{
    /**
     * @var Resource Describes master node resource
     */
    public $MasterResourceSpec;

    /**
     * @var Resource Describes core node resource
     */
    public $CoreResourceSpec;

    /**
     * @var Resource Describes task node resource
     */
    public $TaskResourceSpec;

    /**
     * @var integer Number of master nodes
     */
    public $MasterCount;

    /**
     * @var integer Number of core nodes
     */
    public $CoreCount;

    /**
     * @var integer Number of task nodes
     */
    public $TaskCount;

    /**
     * @var Resource Describes common node resource
     */
    public $CommonResourceSpec;

    /**
     * @var integer Number of common nodes
     */
    public $CommonCount;

    /**
     * @param Resource $MasterResourceSpec Describes master node resource
     * @param Resource $CoreResourceSpec Describes core node resource
     * @param Resource $TaskResourceSpec Describes task node resource
     * @param integer $MasterCount Number of master nodes
     * @param integer $CoreCount Number of core nodes
     * @param integer $TaskCount Number of task nodes
     * @param Resource $CommonResourceSpec Describes common node resource
     * @param integer $CommonCount Number of common nodes
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
        if (array_key_exists("MasterResourceSpec",$param) and $param["MasterResourceSpec"] !== null) {
            $this->MasterResourceSpec = new Resource();
            $this->MasterResourceSpec->deserialize($param["MasterResourceSpec"]);
        }

        if (array_key_exists("CoreResourceSpec",$param) and $param["CoreResourceSpec"] !== null) {
            $this->CoreResourceSpec = new Resource();
            $this->CoreResourceSpec->deserialize($param["CoreResourceSpec"]);
        }

        if (array_key_exists("TaskResourceSpec",$param) and $param["TaskResourceSpec"] !== null) {
            $this->TaskResourceSpec = new Resource();
            $this->TaskResourceSpec->deserialize($param["TaskResourceSpec"]);
        }

        if (array_key_exists("MasterCount",$param) and $param["MasterCount"] !== null) {
            $this->MasterCount = $param["MasterCount"];
        }

        if (array_key_exists("CoreCount",$param) and $param["CoreCount"] !== null) {
            $this->CoreCount = $param["CoreCount"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("CommonResourceSpec",$param) and $param["CommonResourceSpec"] !== null) {
            $this->CommonResourceSpec = new Resource();
            $this->CommonResourceSpec->deserialize($param["CommonResourceSpec"]);
        }

        if (array_key_exists("CommonCount",$param) and $param["CommonCount"] !== null) {
            $this->CommonCount = $param["CommonCount"];
        }
    }
}
