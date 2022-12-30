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
 * The bootstrap action.
 *
 * @method string getCosFileURI() Obtain The COS URL of the script, in the format of `https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh`. For the COS bucket list, see [Bucket List](https://console.cloud.tencent.com/cos/bucket).
 * @method void setCosFileURI(string $CosFileURI) Set The COS URL of the script, in the format of `https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh`. For the COS bucket list, see [Bucket List](https://console.cloud.tencent.com/cos/bucket).
 * @method string getExecutionMoment() Obtain The execution time of the bootstrap action script. Valid values:
<li>`resourceAfter`: After node initialization</li>
<li>`clusterAfter`: After cluster start</li>
<li>`clusterBefore`: Before cluster start</li>
 * @method void setExecutionMoment(string $ExecutionMoment) Set The execution time of the bootstrap action script. Valid values:
<li>`resourceAfter`: After node initialization</li>
<li>`clusterAfter`: After cluster start</li>
<li>`clusterBefore`: Before cluster start</li>
 * @method array getArgs() Obtain The execution script parameter. The parameter format must comply with standard shell specifications.
 * @method void setArgs(array $Args) Set The execution script parameter. The parameter format must comply with standard shell specifications.
 * @method string getCosFileName() Obtain The script file name.
 * @method void setCosFileName(string $CosFileName) Set The script file name.
 */
class ScriptBootstrapActionConfig extends AbstractModel
{
    /**
     * @var string The COS URL of the script, in the format of `https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh`. For the COS bucket list, see [Bucket List](https://console.cloud.tencent.com/cos/bucket).
     */
    public $CosFileURI;

    /**
     * @var string The execution time of the bootstrap action script. Valid values:
<li>`resourceAfter`: After node initialization</li>
<li>`clusterAfter`: After cluster start</li>
<li>`clusterBefore`: Before cluster start</li>
     */
    public $ExecutionMoment;

    /**
     * @var array The execution script parameter. The parameter format must comply with standard shell specifications.
     */
    public $Args;

    /**
     * @var string The script file name.
     */
    public $CosFileName;

    /**
     * @param string $CosFileURI The COS URL of the script, in the format of `https://beijing-111111.cos.ap-beijing.myqcloud.com/data/test.sh`. For the COS bucket list, see [Bucket List](https://console.cloud.tencent.com/cos/bucket).
     * @param string $ExecutionMoment The execution time of the bootstrap action script. Valid values:
<li>`resourceAfter`: After node initialization</li>
<li>`clusterAfter`: After cluster start</li>
<li>`clusterBefore`: Before cluster start</li>
     * @param array $Args The execution script parameter. The parameter format must comply with standard shell specifications.
     * @param string $CosFileName The script file name.
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
    }
}
