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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeCVMInstances request structure.
 *
 * @method string getClusterID() Obtain Cluster ID. Edge clusters need to enable public network access before adding CVM nodes.
 * @method void setClusterID(string $ClusterID) Set Cluster ID. Edge clusters need to enable public network access before adding CVM nodes.
 * @method string getRunInstancePara() Obtain Pass-through parameter for CVM creation in the format of a JSON string. To ensure the idempotency of requests for adding cluster nodes, you need to add the `ClientToken` field in this parameter. For more information, see the documentation for [RunInstances](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API.
 * @method void setRunInstancePara(string $RunInstancePara) Set Pass-through parameter for CVM creation in the format of a JSON string. To ensure the idempotency of requests for adding cluster nodes, you need to add the `ClientToken` field in this parameter. For more information, see the documentation for [RunInstances](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API.
 * @method string getCvmRegion() Obtain Region of the CVM instances to create
 * @method void setCvmRegion(string $CvmRegion) Set Region of the CVM instances to create
 * @method integer getCvmCount() Obtain Quantity of CVM instances to create
 * @method void setCvmCount(integer $CvmCount) Set Quantity of CVM instances to create
 * @method string getExternal() Obtain Instance extension information
 * @method void setExternal(string $External) Set Instance extension information
 * @method string getUserScript() Obtain Custom script
 * @method void setUserScript(string $UserScript) Set Custom script
 * @method boolean getEnableEni() Obtain Whether to enable ENI
 * @method void setEnableEni(boolean $EnableEni) Set Whether to enable ENI
 */
class CreateEdgeCVMInstancesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID. Edge clusters need to enable public network access before adding CVM nodes.
     */
    public $ClusterID;

    /**
     * @var string Pass-through parameter for CVM creation in the format of a JSON string. To ensure the idempotency of requests for adding cluster nodes, you need to add the `ClientToken` field in this parameter. For more information, see the documentation for [RunInstances](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API.
     */
    public $RunInstancePara;

    /**
     * @var string Region of the CVM instances to create
     */
    public $CvmRegion;

    /**
     * @var integer Quantity of CVM instances to create
     */
    public $CvmCount;

    /**
     * @var string Instance extension information
     */
    public $External;

    /**
     * @var string Custom script
     */
    public $UserScript;

    /**
     * @var boolean Whether to enable ENI
     */
    public $EnableEni;

    /**
     * @param string $ClusterID Cluster ID. Edge clusters need to enable public network access before adding CVM nodes.
     * @param string $RunInstancePara Pass-through parameter for CVM creation in the format of a JSON string. To ensure the idempotency of requests for adding cluster nodes, you need to add the `ClientToken` field in this parameter. For more information, see the documentation for [RunInstances](https://intl.cloud.tencent.com/document/product/213/15730?from_cn_redirect=1) API.
     * @param string $CvmRegion Region of the CVM instances to create
     * @param integer $CvmCount Quantity of CVM instances to create
     * @param string $External Instance extension information
     * @param string $UserScript Custom script
     * @param boolean $EnableEni Whether to enable ENI
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("RunInstancePara",$param) and $param["RunInstancePara"] !== null) {
            $this->RunInstancePara = $param["RunInstancePara"];
        }

        if (array_key_exists("CvmRegion",$param) and $param["CvmRegion"] !== null) {
            $this->CvmRegion = $param["CvmRegion"];
        }

        if (array_key_exists("CvmCount",$param) and $param["CvmCount"] !== null) {
            $this->CvmCount = $param["CvmCount"];
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = $param["External"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("EnableEni",$param) and $param["EnableEni"] !== null) {
            $this->EnableEni = $param["EnableEni"];
        }
    }
}
