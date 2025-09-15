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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource description
 *
 * @method NodeResourceSpec getMasterResourceSpec() Obtain The description of master nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMasterResourceSpec(NodeResourceSpec $MasterResourceSpec) Set The description of master nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NodeResourceSpec getCoreResourceSpec() Obtain The description of core nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoreResourceSpec(NodeResourceSpec $CoreResourceSpec) Set The description of core nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NodeResourceSpec getTaskResourceSpec() Obtain The description of task nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskResourceSpec(NodeResourceSpec $TaskResourceSpec) Set The description of task nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method NodeResourceSpec getCommonResourceSpec() Obtain The description of common nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCommonResourceSpec(NodeResourceSpec $CommonResourceSpec) Set The description of common nodes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMasterCount() Obtain Number of Master nodes.
 * @method void setMasterCount(integer $MasterCount) Set Number of Master nodes.
 * @method integer getCoreCount() Obtain Number of core nodes.
 * @method void setCoreCount(integer $CoreCount) Set Number of core nodes.
 * @method integer getTaskCount() Obtain Number of task nodes.
 * @method void setTaskCount(integer $TaskCount) Set Number of task nodes.
 * @method integer getCommonCount() Obtain Number of common nodes.
 * @method void setCommonCount(integer $CommonCount) Set Number of common nodes.
 */
class AllNodeResourceSpec extends AbstractModel
{
    /**
     * @var NodeResourceSpec The description of master nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MasterResourceSpec;

    /**
     * @var NodeResourceSpec The description of core nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoreResourceSpec;

    /**
     * @var NodeResourceSpec The description of task nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskResourceSpec;

    /**
     * @var NodeResourceSpec The description of common nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CommonResourceSpec;

    /**
     * @var integer Number of Master nodes.
     */
    public $MasterCount;

    /**
     * @var integer Number of core nodes.
     */
    public $CoreCount;

    /**
     * @var integer Number of task nodes.
     */
    public $TaskCount;

    /**
     * @var integer Number of common nodes.
     */
    public $CommonCount;

    /**
     * @param NodeResourceSpec $MasterResourceSpec The description of master nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NodeResourceSpec $CoreResourceSpec The description of core nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NodeResourceSpec $TaskResourceSpec The description of task nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param NodeResourceSpec $CommonResourceSpec The description of common nodes.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MasterCount Number of Master nodes.
     * @param integer $CoreCount Number of core nodes.
     * @param integer $TaskCount Number of task nodes.
     * @param integer $CommonCount Number of common nodes.
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
            $this->MasterResourceSpec = new NodeResourceSpec();
            $this->MasterResourceSpec->deserialize($param["MasterResourceSpec"]);
        }

        if (array_key_exists("CoreResourceSpec",$param) and $param["CoreResourceSpec"] !== null) {
            $this->CoreResourceSpec = new NodeResourceSpec();
            $this->CoreResourceSpec->deserialize($param["CoreResourceSpec"]);
        }

        if (array_key_exists("TaskResourceSpec",$param) and $param["TaskResourceSpec"] !== null) {
            $this->TaskResourceSpec = new NodeResourceSpec();
            $this->TaskResourceSpec->deserialize($param["TaskResourceSpec"]);
        }

        if (array_key_exists("CommonResourceSpec",$param) and $param["CommonResourceSpec"] !== null) {
            $this->CommonResourceSpec = new NodeResourceSpec();
            $this->CommonResourceSpec->deserialize($param["CommonResourceSpec"]);
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

        if (array_key_exists("CommonCount",$param) and $param["CommonCount"] !== null) {
            $this->CommonCount = $param["CommonCount"];
        }
    }
}
