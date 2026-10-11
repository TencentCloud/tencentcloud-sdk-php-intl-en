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
 * Pod affinity item.
 *
 * @method LabelSelector getLabelSelector() Obtain <p>Label selector.</p>
 * @method void setLabelSelector(LabelSelector $LabelSelector) Set <p>Label selector.</p>
 * @method array getNamespaces() Obtain <p>Namespace list.</p>
 * @method void setNamespaces(array $Namespaces) Set <p>Namespace list.</p>
 * @method string getTopologyKey() Obtain <p>Topology domain key.</p>
 * @method void setTopologyKey(string $TopologyKey) Set <p>Topology domain key.</p>
 * @method LabelSelector getNamespaceSelector() Obtain <p>Namespace selector.</p>
 * @method void setNamespaceSelector(LabelSelector $NamespaceSelector) Set <p>Namespace selector.</p>
 */
class PodAffinityTerm extends AbstractModel
{
    /**
     * @var LabelSelector <p>Label selector.</p>
     */
    public $LabelSelector;

    /**
     * @var array <p>Namespace list.</p>
     */
    public $Namespaces;

    /**
     * @var string <p>Topology domain key.</p>
     */
    public $TopologyKey;

    /**
     * @var LabelSelector <p>Namespace selector.</p>
     */
    public $NamespaceSelector;

    /**
     * @param LabelSelector $LabelSelector <p>Label selector.</p>
     * @param array $Namespaces <p>Namespace list.</p>
     * @param string $TopologyKey <p>Topology domain key.</p>
     * @param LabelSelector $NamespaceSelector <p>Namespace selector.</p>
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
        if (array_key_exists("LabelSelector",$param) and $param["LabelSelector"] !== null) {
            $this->LabelSelector = new LabelSelector();
            $this->LabelSelector->deserialize($param["LabelSelector"]);
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("TopologyKey",$param) and $param["TopologyKey"] !== null) {
            $this->TopologyKey = $param["TopologyKey"];
        }

        if (array_key_exists("NamespaceSelector",$param) and $param["NamespaceSelector"] !== null) {
            $this->NamespaceSelector = new LabelSelector();
            $this->NamespaceSelector->deserialize($param["NamespaceSelector"]);
        }
    }
}
