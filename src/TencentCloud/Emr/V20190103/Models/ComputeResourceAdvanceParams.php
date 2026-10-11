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
 * Advanced settings of computing resources.
 *
 * @method array getLabels() Obtain <p>Node Label array.</p>
 * @method void setLabels(array $Labels) Set <p>Node Label array.</p>
 * @method array getTaints() Obtain <p>Node taint.</p>
 * @method void setTaints(array $Taints) Set <p>Node taint.</p>
 * @method string getPreStartUserScript() Obtain <p>Base64-encoded user script, which is executed before node initialization.</p>
 * @method void setPreStartUserScript(string $PreStartUserScript) Set <p>Base64-encoded user script, which is executed before node initialization.</p>
 * @method string getUserScript() Obtain <p>Base64-encoded user script, which is executed after the Kubernetes component starts. You need to guarantee the script reentrancy and retry logic. The script and generated log files can be viewed in the /data/ccs_userscript/ directory on the node.</p>
 * @method void setUserScript(string $UserScript) Set <p>Base64-encoded user script, which is executed after the Kubernetes component starts. You need to guarantee the script reentrancy and retry logic. The script and generated log files can be viewed in the /data/ccs_userscript/ directory on the node.</p>
 * @method string getTkeClusterNodePool() Obtain <p>Node group ID.</p>
 * @method void setTkeClusterNodePool(string $TkeClusterNodePool) Set <p>Node group ID.</p>
 * @method string getNodePoolJoinMode() Obtain <p>Mode of joining a node pool.</p><p>Enumeration values:</p><ul><li>Inherit: inherits the configuration from the node pool.</li><li>OnlyJoin: joins the node pool only without inheriting the configuration.</li></ul><p>Default value: Inherit.</p>
 * @method void setNodePoolJoinMode(string $NodePoolJoinMode) Set <p>Mode of joining a node pool.</p><p>Enumeration values:</p><ul><li>Inherit: inherits the configuration from the node pool.</li><li>OnlyJoin: joins the node pool only without inheriting the configuration.</li></ul><p>Default value: Inherit.</p>
 */
class ComputeResourceAdvanceParams extends AbstractModel
{
    /**
     * @var array <p>Node Label array.</p>
     */
    public $Labels;

    /**
     * @var array <p>Node taint.</p>
     */
    public $Taints;

    /**
     * @var string <p>Base64-encoded user script, which is executed before node initialization.</p>
     */
    public $PreStartUserScript;

    /**
     * @var string <p>Base64-encoded user script, which is executed after the Kubernetes component starts. You need to guarantee the script reentrancy and retry logic. The script and generated log files can be viewed in the /data/ccs_userscript/ directory on the node.</p>
     */
    public $UserScript;

    /**
     * @var string <p>Node group ID.</p>
     */
    public $TkeClusterNodePool;

    /**
     * @var string <p>Mode of joining a node pool.</p><p>Enumeration values:</p><ul><li>Inherit: inherits the configuration from the node pool.</li><li>OnlyJoin: joins the node pool only without inheriting the configuration.</li></ul><p>Default value: Inherit.</p>
     */
    public $NodePoolJoinMode;

    /**
     * @param array $Labels <p>Node Label array.</p>
     * @param array $Taints <p>Node taint.</p>
     * @param string $PreStartUserScript <p>Base64-encoded user script, which is executed before node initialization.</p>
     * @param string $UserScript <p>Base64-encoded user script, which is executed after the Kubernetes component starts. You need to guarantee the script reentrancy and retry logic. The script and generated log files can be viewed in the /data/ccs_userscript/ directory on the node.</p>
     * @param string $TkeClusterNodePool <p>Node group ID.</p>
     * @param string $NodePoolJoinMode <p>Mode of joining a node pool.</p><p>Enumeration values:</p><ul><li>Inherit: inherits the configuration from the node pool.</li><li>OnlyJoin: joins the node pool only without inheriting the configuration.</li></ul><p>Default value: Inherit.</p>
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
        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TkeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("PreStartUserScript",$param) and $param["PreStartUserScript"] !== null) {
            $this->PreStartUserScript = $param["PreStartUserScript"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("TkeClusterNodePool",$param) and $param["TkeClusterNodePool"] !== null) {
            $this->TkeClusterNodePool = $param["TkeClusterNodePool"];
        }

        if (array_key_exists("NodePoolJoinMode",$param) and $param["NodePoolJoinMode"] !== null) {
            $this->NodePoolJoinMode = $param["NodePoolJoinMode"];
        }
    }
}
