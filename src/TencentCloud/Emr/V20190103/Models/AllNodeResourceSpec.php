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
 * Resource description.
 *
 * @method NodeResourceSpec getMasterResourceSpec() Obtain Description of Master node resources.
 * @method void setMasterResourceSpec(NodeResourceSpec $MasterResourceSpec) Set Description of Master node resources.
 * @method NodeResourceSpec getCoreResourceSpec() Obtain Description of Core node resources.
 * @method void setCoreResourceSpec(NodeResourceSpec $CoreResourceSpec) Set Description of Core node resources.
 * @method NodeResourceSpec getTaskResourceSpec() Obtain Description of Task node resources.
 * @method void setTaskResourceSpec(NodeResourceSpec $TaskResourceSpec) Set Description of Task node resources.
 * @method NodeResourceSpec getCommonResourceSpec() Obtain Description of Common node resources.
 * @method void setCommonResourceSpec(NodeResourceSpec $CommonResourceSpec) Set Description of Common node resources.
 * @method integer getMasterCount() Obtain Number of Master nodes.
 * @method void setMasterCount(integer $MasterCount) Set Number of Master nodes.
 * @method integer getCoreCount() Obtain Number of Core nodes.
 * @method void setCoreCount(integer $CoreCount) Set Number of Core nodes.
 * @method integer getTaskCount() Obtain Number of Task nodes.
 * @method void setTaskCount(integer $TaskCount) Set Number of Task nodes.
 * @method integer getCommonCount() Obtain Number of Common nodes.
 * @method void setCommonCount(integer $CommonCount) Set Number of Common nodes.
 */
class AllNodeResourceSpec extends AbstractModel
{
    /**
     * @var NodeResourceSpec Description of Master node resources.
     */
    public $MasterResourceSpec;

    /**
     * @var NodeResourceSpec Description of Core node resources.
     */
    public $CoreResourceSpec;

    /**
     * @var NodeResourceSpec Description of Task node resources.
     */
    public $TaskResourceSpec;

    /**
     * @var NodeResourceSpec Description of Common node resources.
     */
    public $CommonResourceSpec;

    /**
     * @var integer Number of Master nodes.
     */
    public $MasterCount;

    /**
     * @var integer Number of Core nodes.
     */
    public $CoreCount;

    /**
     * @var integer Number of Task nodes.
     */
    public $TaskCount;

    /**
     * @var integer Number of Common nodes.
     */
    public $CommonCount;

    /**
     * @param NodeResourceSpec $MasterResourceSpec Description of Master node resources.
     * @param NodeResourceSpec $CoreResourceSpec Description of Core node resources.
     * @param NodeResourceSpec $TaskResourceSpec Description of Task node resources.
     * @param NodeResourceSpec $CommonResourceSpec Description of Common node resources.
     * @param integer $MasterCount Number of Master nodes.
     * @param integer $CoreCount Number of Core nodes.
     * @param integer $TaskCount Number of Task nodes.
     * @param integer $CommonCount Number of Common nodes.
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
