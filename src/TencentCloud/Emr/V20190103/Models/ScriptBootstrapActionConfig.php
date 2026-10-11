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
 * Bootstrap addition.
 *
 * @method string getCosFileURI() Obtain COS address of the script. Format: https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh. To query the COS bucket list, refer to [Bucket List](https://console.cloud.tencent.com/cos/bucket).
 * @method void setCosFileURI(string $CosFileURI) Set COS address of the script. Format: https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh. To query the COS bucket list, refer to [Bucket List](https://console.cloud.tencent.com/cos/bucket).
 * @method string getExecutionMoment() Obtain Time range for the bootstrap script execution.
<li>resourceAfter: after node initialization</li>
<li>clusterAfter: after cluster startup</li>
<li>clusterBefore: before cluster startup</li>
 * @method void setExecutionMoment(string $ExecutionMoment) Set Time range for the bootstrap script execution.
<li>resourceAfter: after node initialization</li>
<li>clusterAfter: after cluster startup</li>
<li>clusterBefore: before cluster startup</li>
 * @method array getArgs() Obtain Execution script parameters. For the parameter format, follow standard Shell specifications.
 * @method void setArgs(array $Args) Set Execution script parameters. For the parameter format, follow standard Shell specifications.
 * @method string getCosFileName() Obtain Script file name.
 * @method void setCosFileName(string $CosFileName) Set Script file name.
 * @method string getRemark() Obtain Remarks.
 * @method void setRemark(string $Remark) Set Remarks.
 */
class ScriptBootstrapActionConfig extends AbstractModel
{
    /**
     * @var string COS address of the script. Format: https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh. To query the COS bucket list, refer to [Bucket List](https://console.cloud.tencent.com/cos/bucket).
     */
    public $CosFileURI;

    /**
     * @var string Time range for the bootstrap script execution.
<li>resourceAfter: after node initialization</li>
<li>clusterAfter: after cluster startup</li>
<li>clusterBefore: before cluster startup</li>
     */
    public $ExecutionMoment;

    /**
     * @var array Execution script parameters. For the parameter format, follow standard Shell specifications.
     */
    public $Args;

    /**
     * @var string Script file name.
     */
    public $CosFileName;

    /**
     * @var string Remarks.
     */
    public $Remark;

    /**
     * @param string $CosFileURI COS address of the script. Format: https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh. To query the COS bucket list, refer to [Bucket List](https://console.cloud.tencent.com/cos/bucket).
     * @param string $ExecutionMoment Time range for the bootstrap script execution.
<li>resourceAfter: after node initialization</li>
<li>clusterAfter: after cluster startup</li>
<li>clusterBefore: before cluster startup</li>
     * @param array $Args Execution script parameters. For the parameter format, follow standard Shell specifications.
     * @param string $CosFileName Script file name.
     * @param string $Remark Remarks.
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
        if (array_key_exists("CosFileURI",$param) and $param["CosFileURI"] !== null) {
            $this->CosFileURI = $param["CosFileURI"];
        }

        if (array_key_exists("ExecutionMoment",$param) and $param["ExecutionMoment"] !== null) {
            $this->ExecutionMoment = $param["ExecutionMoment"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
