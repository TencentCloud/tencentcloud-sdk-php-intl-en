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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource pool options based on TKE
 *
 * @method string getClusterID() Obtain Cluster ID
 * @method void setClusterID(string $ClusterID) Set Cluster ID
 * @method string getSubnetID() Obtain Subnet ID.
 * @method void setSubnetID(string $SubnetID) Set Subnet ID.
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getDataPath() Obtain Data storage address
 * @method void setDataPath(string $DataPath) Set Data storage address
 * @method array getNodeSelector() Obtain node selector
 * @method void setNodeSelector(array $NodeSelector) Set node selector
 * @method array getTolerations() Obtain Taint and toleration
 * @method void setTolerations(array $Tolerations) Set Taint and toleration
 * @method integer getPort() Obtain Starting node port number occupied by the scf component
 * @method void setPort(integer $Port) Set Starting node port number occupied by the scf component
 * @method string getPodTemplatePatch() Obtain pod patch content in yaml format, for example
metadata:
  labels:
    key: value
 * @method void setPodTemplatePatch(string $PodTemplatePatch) Set pod patch content in yaml format, for example
metadata:
  labels:
    key: value
 */
class NamespaceResourceEnvTKE extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterID;

    /**
     * @var string Subnet ID.
     */
    public $SubnetID;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Data storage address
     */
    public $DataPath;

    /**
     * @var array node selector
     */
    public $NodeSelector;

    /**
     * @var array Taint and toleration
     */
    public $Tolerations;

    /**
     * @var integer Starting node port number occupied by the scf component
     */
    public $Port;

    /**
     * @var string pod patch content in yaml format, for example
metadata:
  labels:
    key: value
     */
    public $PodTemplatePatch;

    /**
     * @param string $ClusterID Cluster ID
     * @param string $SubnetID Subnet ID.
     * @param string $Namespace Namespace
     * @param string $DataPath Data storage address
     * @param array $NodeSelector node selector
     * @param array $Tolerations Taint and toleration
     * @param integer $Port Starting node port number occupied by the scf component
     * @param string $PodTemplatePatch pod patch content in yaml format, for example
metadata:
  labels:
    key: value
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

        if (array_key_exists("SubnetID",$param) and $param["SubnetID"] !== null) {
            $this->SubnetID = $param["SubnetID"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("NodeSelector",$param) and $param["NodeSelector"] !== null) {
            $this->NodeSelector = [];
            foreach ($param["NodeSelector"] as $key => $value){
                $obj = new K8SLabel();
                $obj->deserialize($value);
                array_push($this->NodeSelector, $obj);
            }
        }

        if (array_key_exists("Tolerations",$param) and $param["Tolerations"] !== null) {
            $this->Tolerations = [];
            foreach ($param["Tolerations"] as $key => $value){
                $obj = new K8SToleration();
                $obj->deserialize($value);
                array_push($this->Tolerations, $obj);
            }
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("PodTemplatePatch",$param) and $param["PodTemplatePatch"] !== null) {
            $this->PodTemplatePatch = $param["PodTemplatePatch"];
        }
    }
}
