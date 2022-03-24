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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration of K8s service
 *
 * @method integer getWeight() Obtain Weight
 * @method void setWeight(integer $Weight) Set Weight
 * @method string getClusterId() Obtain K8s cluster ID
 * @method void setClusterId(string $ClusterId) Set K8s cluster ID
 * @method string getNamespace() Obtain Namespace of the container
 * @method void setNamespace(string $Namespace) Set Namespace of the container
 * @method string getServiceName() Obtain Name of the service
 * @method void setServiceName(string $ServiceName) Set Name of the service
 * @method integer getPort() Obtain Service port
 * @method void setPort(integer $Port) Set Service port
 * @method array getExtraLabels() Obtain The additional Label of the Pod
 * @method void setExtraLabels(array $ExtraLabels) Set The additional Label of the Pod
 * @method string getName() Obtain (Optional) Custom name of the service
 * @method void setName(string $Name) Set (Optional) Custom name of the service
 */
class K8sService extends AbstractModel
{
    /**
     * @var integer Weight
     */
    public $Weight;

    /**
     * @var string K8s cluster ID
     */
    public $ClusterId;

    /**
     * @var string Namespace of the container
     */
    public $Namespace;

    /**
     * @var string Name of the service
     */
    public $ServiceName;

    /**
     * @var integer Service port
     */
    public $Port;

    /**
     * @var array The additional Label of the Pod
     */
    public $ExtraLabels;

    /**
     * @var string (Optional) Custom name of the service
     */
    public $Name;

    /**
     * @param integer $Weight Weight
     * @param string $ClusterId K8s cluster ID
     * @param string $Namespace Namespace of the container
     * @param string $ServiceName Name of the service
     * @param integer $Port Service port
     * @param array $ExtraLabels The additional Label of the Pod
     * @param string $Name (Optional) Custom name of the service
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ExtraLabels",$param) and $param["ExtraLabels"] !== null) {
            $this->ExtraLabels = [];
            foreach ($param["ExtraLabels"] as $key => $value){
                $obj = new K8sLabel();
                $obj->deserialize($value);
                array_push($this->ExtraLabels, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
