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
 * @method array getLabels() Obtain Node label array.
 * @method void setLabels(array $Labels) Set Node label array.
 * @method array getTaints() Obtain Node taint.
 * @method void setTaints(array $Taints) Set Node taint.
 * @method string getPreStartUserScript() Obtain Base64-encoded user script: executed before node initializing.
 * @method void setPreStartUserScript(string $PreStartUserScript) Set Base64-encoded user script: executed before node initializing.
 * @method string getUserScript() Obtain Base64-encoded user script. This script executes after Kubernetes components initialize. Users should ensure script reentrancy and implement retry logic. Both the script and its generated log files are accessible at the node path: /data/ccs_userscript/.
 * @method void setUserScript(string $UserScript) Set Base64-encoded user script. This script executes after Kubernetes components initialize. Users should ensure script reentrancy and implement retry logic. Both the script and its generated log files are accessible at the node path: /data/ccs_userscript/.
 */
class ComputeResourceAdvanceParams extends AbstractModel
{
    /**
     * @var array Node label array.
     */
    public $Labels;

    /**
     * @var array Node taint.
     */
    public $Taints;

    /**
     * @var string Base64-encoded user script: executed before node initializing.
     */
    public $PreStartUserScript;

    /**
     * @var string Base64-encoded user script. This script executes after Kubernetes components initialize. Users should ensure script reentrancy and implement retry logic. Both the script and its generated log files are accessible at the node path: /data/ccs_userscript/.
     */
    public $UserScript;

    /**
     * @param array $Labels Node label array.
     * @param array $Taints Node taint.
     * @param string $PreStartUserScript Base64-encoded user script: executed before node initializing.
     * @param string $UserScript Base64-encoded user script. This script executes after Kubernetes components initialize. Users should ensure script reentrancy and implement retry logic. Both the script and its generated log files are accessible at the node path: /data/ccs_userscript/.
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
    }
}
